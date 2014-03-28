<?php

class AdminController extends BaseController 
{
	private $adm;
	function __construct()
	{
		$url=urladmin::where('id','=',1)->pluck('path');
		$this->adm=$url;
	}

	function GetIndexPage()
	{
		if(Auth::check())
		{
			$url=$this->adm.'/update-url';
			$url1=$this->adm.'/update-perpage';
			$logout=$this->adm.'/logout';
			$jumsoal=soalperpage::find(1);
			return View::make('admin/home')
					->with('logout',$logout)
					->with('url',$url)
					->with('url1',$url1)
					->with('jumsoal',$jumsoal)
					->with('urladmin',$this->adm);
		}
		else
		{
			$url=$this->adm.'/loginuser';
			return View::make('admin/login')->with('url',$url);
		}
	}
	function LoginUserAdmin()
	{
		$input=array(
			'Username'=>e(Input::get('username')),
			'Password'=>e(Input::get('password'))
			);
		$rules=array(
			'Username'=>'required',
			'Password'=>'required'
			);
		$v=Validator::make($input,$rules);
		if($v->fails())
		{
			return Redirect::to($this->adm)->withErrors($v);
		}
		else
		{
			$userdata=array('username'=>$input['Username'],'password'=>$input['Password']);
			if(Auth::attempt($userdata))
			{
				return Redirect::to($this->adm);
			}
			else
			{
				return Redirect::to($this->adm)->with('false','username dan password tidak cocok');
			}
		}
	}
	function UpdateMyURL()
	{
		$input['URL']=Input::get('myurl');
		$rules['URL']='required';
		$v=Validator::make($input,$rules);
		if($v->fails())
		{
			return Redirect::to($this->adm)->withErrors($v);	
		}
		else
		{
			$sv = urladmin::find(1);
			$sv->path=$input['URL'];
			if($sv->save())
			{
				$url=urladmin::where('id','=',1)->pluck('path');
				return Redirect::to($url)->with('true','data berhasil disimpan');
			}
			else
			{
				return Redirect::to($this->adm)->with('false','data gagal disimpan');
			}
		}
	}
	function SoalPage()
	{
		$data=soal::where('id','>',0)->paginate(20);
		$logout=$this->adm.'/logout';
		return View::make('admin/listsoal')
				->with('logout',$logout)
				->with('pre',$this->adm)
				->with('data',$data);
	}
	function AddFormSoal()
	{
		$url=$this->adm.'/save-soal';
		$logout=$this->adm.'/logout';
		return View::make('admin/formsoal')
				->with('logout',$logout)
				->with('url',$url);
	}
	private function input()
	{
		return array(
			'Soal'=>Input::get('soal'),
			'Opsi A'=>Input::get('opsi_a'),
			'Opsi B'=>Input::get('opsi_b'),
			'Opsi C'=>Input::get('opsi_c'),
			'Opsi D'=>Input::get('opsi_d'),
			'Opsi E'=>Input::get('opsi_e'),
			'Jawaban'=>Input::get('jwb')
		);
	}
	private function rules()
	{
		return array(
			'Soal'=>'required',
			'Opsi A'=>'required',
			'Opsi B'=>'required',
			'Opsi C'=>'required',
			'Opsi D'=>'required',
			'Opsi E'=>'required',
			'Jawaban'=>'required'
		);
	}
	function SaveSoal()
	{
		$input=$this->input();
		$rules=$this->rules();
		$v=Validator::make($input,$rules);
		if($v->fails())
		{
			return Redirect::to($this->adm.'/add-soal')->withErrors($v);
		}
		else
		{
			$sv = new soal;
			$sv->soal=$input['Soal'];
			$sv->a=$input['Opsi A'];
			$sv->b=$input['Opsi B'];
			$sv->c=$input['Opsi C'];
			$sv->d=$input['Opsi D'];
			$sv->e=$input['Opsi E'];
			$sv->jwb=$input['Jawaban'];
			if($sv->save())
			{
				return Redirect::to($this->adm.'/add-soal')->with('true','Soal berhasil disimpan');
			}
			else
			{
				return Redirect::to($this->adm.'/add-soal')->with('false','Soal gagal disimpan');
			}
		}
	}
	function EditSoal($id='')
	{
		if(!empty($id))
		{
			$data=soal::find($id);
			$url=$this->adm.'/update-soal';
			$logout=$this->adm.'/logout';
			return View::make('admin/formsoal')
					->with('url',$url)
					->with('logout',$logout)
					->with('data',$data);
		}
		else
		{
			return Redirect::to($this->adm.'/soal-index');
		}
	}
	function UpdateSoal()
	{
		$input=$this->input();
		$rules=$this->rules();
		$input['Token']=Input::get('token');
		$rules['Token']='required';
		$v=Validator::make($input,$rules);
		if($v->fails())
		{
			return Redirect::to($this->adm.'/add-soal')->withErrors($v);
		}
		else
		{
			$sv = soal::find($input['Token']);
			$sv->soal=$input['Soal'];
			$sv->a=$input['Opsi A'];
			$sv->b=$input['Opsi B'];
			$sv->c=$input['Opsi C'];
			$sv->d=$input['Opsi D'];
			$sv->e=$input['Opsi E'];
			$sv->jwb=$input['Jawaban'];
			if($sv->save())
			{
				return Redirect::to($this->adm.'/soal-index')->with('true','Soal berhasil diupdate');
			}
			else
			{
				return Redirect::to($this->adm.'/soal-index')->with('false','Soal gagal diupdate');
			}
		}
	}
	function DeleteSoal($id='')
	{
		if(!empty($id))
		{
			$del=soal::find($id);
			if($del->delete())
			{
				return Redirect::to($this->adm.'/soal-index')->with('true','Data berhasil dihapus');
			}
			else
			{
				return Redirect::to($this->adm.'/soal-index')->with('false','Data gagal dihapus');
			}
		}
		else
		{
			return Redirect::to($this->adm.'/soal-index');
		}
	}
	function UpdatePerPage()
	{
		$input['Jumlah Soal']=Input::get('jumsoal');
		$rules['Jumlah Soal']='required';
		$v=Validator::make($input,$rules);
		if($v->fails())
		{
			return Redirect::to($this->adm)->withErrors($v);
		}
		else
		{
			$up=soalperpage::find(1);
			$up->jumlah=$input['Jumlah Soal'];
			if($up->save())
			{
				return Redirect::to($this->adm)->with('true','Jumlah soal berhasil diupdate');
			}
			else
			{
				return Redirect::to($this->adm)->with('false','Jumlah soal gagal diupdate');
			}
		}
	}
	function LogoutAkun()
	{
		Auth::logout();
		return Redirect::to('/');
	}
}