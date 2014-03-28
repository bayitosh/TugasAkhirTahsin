<?php

class EvaluasiController extends BaseController 
{
	private $jmlsoal;
	private $perpage;
	private $start;
	private $finish;
	private $collect=array();
	private $data=array();

	function __construct()
	{
		$jum=soalperpage::find(1);
		$this->perpage=$jum->jumlah;
		$totalsoal=soal::where('id','>',0)->count();
		$this->jmlsoal=$totalsoal;
		$this->start=time();
		$this->finish=60*30;
	}

	function IndexEvaluasi()
	{
		return View::make('evaluasi/index');
	}

	function StartAction()
	{
		///$finish=$this->finish;
		while(count($this->collect)<$this->perpage)
		{
			$num=rand(1,$this->jmlsoal);
			if(!in_array($num, $this->collect))
			{
				$this->collect[]=$num;
			}
		}
		foreach($this->collect as $id)
		{
			$dt=soal::where('id','=',$id)->get();
			$this->data[]=$dt;
		}
		//sprint_r($this->data);
		//$dt=json_encode($this->collect);
		//Session::put('xyz',$dt);
		$url='evaluasi/answer.html';
		return View::make('evaluasi/soal')
				->with('url',$url)
				->with('data',$this->data);
	}

	function MyAnswerPlease()
	{
		$input['Jawaban']=Input::all();
		$rules['Jawaban']='required';
		$v=Validator::make($input,$rules);
		if($v->fails())
		{
			return Redirect::to('evaluasi/start.html')->withErrors($v);
		}
		else
		{
		//echo "<pre>";
			//print_r($input['Jawaban']);
			$soalku=array();
			foreach($input['Jawaban'] as $jwb)
			{
				print_r($jwb);
				if(is_array($jwb))
				{
					if(empty($jwb[1]))
					{
						return Redirect::to('evaluasi/start.html')->with('false','Silahkan pilih jawaban');
					}
					else
					{
						$soalku[]=$jwb;
					}
				}
			}
			$result=array();
			$correct=0;
			$wrong=0;
			$no=1;
			foreach($soalku as $id)
			{
				$check=soal::where('id','=',$id[0])->where('jwb','=',$id[1])->pluck('jwb');
				if(!empty($check))
				{
					++$correct;
					//echo "benar=> ".$id[1]." JAWAB =>".$check."<br>";
					$result[]='Pertanyaan Nomor '.$no.', <b>BENAR</b>';
				}
				else
				{
					++$wrong;
					$jwb=soal::find($id[0]);
					$result[]='Pertanyaan Nomor '.$no.', <b>SALAH</b>, Jawaban yang benar : '.$jwb->jwb;
				}
				$no++;
			}
			return View::make('evaluasi/result')
						->with('wrong',$wrong)
						->with('correct',$correct)
						->with('data',$result)
						->with('jmlsoal',$this->perpage);
			/*if($ans)
			{
				++$correct;
				$result[]='Pertanyaan Nomor '.$i.', jawaban:'.$data['answer'.$i][1].' Benar';
				//echo "BENAR => ".$data['answer'.$i][0]." JAWAB =>".$jwb."<br>";
			}
			else
			{
				$jwb=soal::where('id','=',$data['answer'.$i][0])->pluck('jwb');
				++$wrong;
				$result[]='Pertanyaan Nomor '.$i.', SALAH, jawaban yang benar:'.$jwb.'';
				//echo "SALAH => ".$data['answer'.$i][0]." JAWAB =>".$jwb."<br>";
			}
			*/
		}
	}
}