<?php
class Step1Controller extends BaseController
{
	function __construct()
	{
		$this->beforeFilter('csrf',array('on'=>'post'));
	}

	function GetIndex()
	{
		$data=hijaiyah::where('id','>',0)->get();
		return View::make('step1.index')->with('data',$data);
	}

	function GetCallAudio()
	{
		if(Request::ajax())
		{
			$id=e(Input::get('tok'));
			$myaudio=hijaiyah::where('id','=',$id)->pluck('audio');
			echo "<audio src='".asset('files/hijaiyah/'.$myaudio)."' autoplay='true'></audio>";
		}
	}
	function ConfirmData()
	{
		if(Request::ajax())
		{
			$id=Input::get('tok');
			$huruf=hijaiyah::find($id);
			return View::make('step1/confirm')->with('token',$id)->with('huruf',$huruf);
		}
	}
	function GetCallVideo()
	{
		if(Request::ajax())
		{
			$id=e(Input::get('tok'));
			$myvideo=hijaiyah::where('id','=',$id)->pluck('video');
			echo "
			<video width='100%'' height='100' controls autoplay>
	  			<source src='".asset("mp4/".$myvideo)."'>
			</video>";
		}
	}

	function MakharijulHuruf()
	{
		$data1=hijaiyah::where('mulut','=','y')->orderBy('teks')->get();
		$data2=hijaiyah::where('teng','=','y')->orderBy('teks')->get();
		$data3=hijaiyah::where('lidah','=','y')->orderBy('teks')->get();
		$data4=hijaiyah::where('bibir','=','y')->orderBy('teks')->get();
		$data5=hijaiyah::where('hidung','=','y')->orderBy('teks')->get();
		return View::make('step1/makharijulhuruf')
				->with('data5',$data5)
				->with('data4',$data4)
				->with('data3',$data3)
				->with('data2',$data2)
				->with('data1',$data1);
	}

	function SifatHuruf()
	{
		$data1=hurufbynafas::getdata('y');
		$data2=hurufbynafas::getdata('n');
		$data3=hurufbysuara::getdata('y');
		$data4=hurufbypangkallidah::getdata('y');
		$data5=hurufbylidahlangit::getdata('y');
		$data6=hurufbysulitmudahkeluar::getdata('y');
		return View::make('step1/sifathuruf')
				->with('data1',$data1)
				->with('data2',$data2)
				->with('data3',$data3)
				->with('data4',$data4)
				->with('data5',$data5)
				->with('data6',$data6);
	} 

	function SifatHurufLawan()
	{
		$data1=shafir::getdata();
		$data2=qalqalah::getdata();
		$data3=liin::getdata();
		$data4=inhiraf::getdata();
		$data5=takrir::getdata();
		$data6=tafasyi::getdata();
		$data7=istithalah::getdata();
		return View::make('step1/sifathuruflawan')
				->with('data7',$data7)
				->with('data6',$data6)
				->with('data5',$data5)
				->with('data4',$data4)
				->with('data3',$data3)
				->with('data2',$data2)
				->with('data1',$data1);
	}

	function LafalHuruf()
	{
		return View::make('step1/lafalhuruf');
	}
}