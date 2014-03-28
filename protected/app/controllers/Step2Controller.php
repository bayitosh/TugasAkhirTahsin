<?php

class Step2Controller extends BaseController
{
	function GetIndex()
	{
		return View::make('step2.index');
	}

	function GetIstiadzahPage()
	{
		return View::make('step2.istiadzah');
	}

	//hukum nun mati dan tanwin
	function GetIzhar()
	{
		$data=izhar::all();
		return View::make('step2/nun_mati_tanwin/izhar')->with('data',$data);
	}

	function GetIdghamBighunnah()
	{
		return View::make('step2/nun_mati_tanwin/idghambighunnah');
	}

	function GetIdghamBilaghunnah()
	{
		return View::make('step2/nun_mati_tanwin/idghambilaghunnah');
	}

	function GetIqlab()
	{
		return View::make('step2/nun_mati_tanwin/iqlab');
	}

	function GetIkhfahaqiqi()
	{
		return View::make('step2/nun_mati_tanwin/ikhfahaqiqi');
	}

	//hukum mim mati
	function GetIkhfaSyafawi()
	{
		return View::make('step2/Hukum_mim_mati/ikhfasyafawi');
	}
	function GetIdghamMimi()
	{
		return View::make('step2/Hukum_mim_mati/idghammimi');
	}
	function GetIzharSyafawi()
	{
		return View::make('step2/Hukum_mim_mati/izhharsyafawi');
	}

	//hukum mim nun bertasydid
	function GetMimNunBertasydid()
	{
		return View::make('step2/Mim_nun_bertasydid/index');
	}

	//hukum idgham
	function GetIdghamMutamatsilain()
	{
		return View::make('step2/hukum_idgham/idghammutamatsilain');
	}
	function GetIdghamMutajanisain()
	{
		return View::make('step2/hukum_idgham/idghammutajanisain');
	}
	function GetIdghamMutaqaribain()
	{
		return View::make('step2/hukum_idgham/idghammutaqaribain');
	}

	//hukum Lam Ta’rif
	function GetQamariyyah()
	{
		return View::make('step2/lam_tarif/qamariyyah');
	}
	function GetSyamsiyyah()
	{
		return View::make('step2/lam_tarif/syamsiyyah');
	}

	//Hukum Lam Jalallah
	function GetTafkhim()
	{
		return View::make('step2/lam_jalallah/tafkhim');
	}

	function GetTarqiq()
	{
		return View::make('step2/lam_jalallah/tarqiq');
	}

	//hukum ra'
	function GetRaTarqiq()
	{
		return View::make('step2/ra/ratarqiq');
	}
	function GetRaTarqiqTebal()
	{
		return View::make('step2/ra/ra_tarqiqtebal');
	}
	function GetRaTarqiqTebalFirst()
	{
		return View::make('step2/ra/ra_tarqiqtebalfirst');
	}
	function GetRaTarqiqTipisFirst()
	{
		return View::make('step2/ra/ra_tarqiqtipisfirst');
	}

	//hukum qalqalah
	function QalqalahSughra()
	{
		return View::make('step2/qalqalah/sughra');
	}
	function QalqalahKubra()
	{
		return View::make('step2/qalqalah/kubra');
	}

	//hukum madd
	function MaddAshli()
	{
		return View::make('step2/madd/maddashli');
	}
	function MaddFari()
	{
		return View::make('step2/madd/maddfari');
	}
}