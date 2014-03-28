<?php
Route::get('/','HomeController@getIndex');
Route::get('soal','HomeController@SoalPage');
Route::get('soal/form','HomeController@FormPage');
Route::get('soal/edit/{id?}','HomeController@EditData');
Route::post('soal/save','HomeController@SaveSoal');
Route::post('soal/update','HomeController@UpdateSoal');
Route::get('soal/hapus/{id?}','HomeController@HapusData');

$urladmin=urladmin::where('id','=',1)->pluck('path');
Route::get($urladmin,'AdminController@GetIndexPage');
Route::post($urladmin.'/loginuser',array('before'=>'csrf','uses'=>'AdminController@LoginUserAdmin'));
Route::group(array('prefix'=>$urladmin,'before'=>'auth'),function()
{
	Route::get('soal-index','AdminController@SoalPage');
	Route::post('update-url','AdminController@UpdateMyURL');
	Route::get('add-soal','AdminController@AddFormSoal');
	Route::post('save-soal','AdminController@SaveSoal');
	Route::get('edit-soal/{id}','AdminController@EditSoal');
	Route::post('update-soal','AdminController@UpdateSoal');
	Route::get('delete-soal/{id?}','AdminController@DeleteSoal');
	ROute::post('update-perpage','AdminController@UpdatePerPage');
	Route::get('logout','AdminController@LogoutAkun');
});

//tahap pertama
Route::group(array('prefix'=>'tahap-pertama'),function()
{
	Route::get('/','Step1Controller@GetIndex');
	Route::get('index.html','Step1Controller@GetIndex');
	Route::get('makharijul-huruf.html','Step1Controller@MakharijulHuruf');
	Route::get('sifat-huruf.html','Step1Controller@SifatHuruf');
	Route::get('sifat-huruf-lawan.html','Step1Controller@SifatHurufLawan');
	Route::get('lafal-huruf.html','Step1Controller@LafalHuruf');
});
//end tahap pertama

//tahap kedua
Route::group(array('prefix'=>'tahap-kedua'),function()
{
	Route::get('/','Step2Controller@GetIndex');
	Route::get('index.html','Step2Controller@GetIndex');
	Route::get('istiadzah.html','Step2Controller@GetIstiadzahPage');
	Route::get('tahap-kedua/sound/istiadzah','Step2Controller@GetIstiadzahPage');

	//hukum nin mati dan tanwin
	Route::get('izhar.html','Step2Controller@GetIzhar');
	Route::get('idgham-bighunnah.html','Step2Controller@GetIdghamBighunnah');
	Route::get('idgham-bilaghunnah.html','Step2Controller@GetIdghamBilaghunnah');
	Route::get('iqlab.html','Step2Controller@GetIqlab');
	Route::get('ikhfa-haqiqi.html','Step2Controller@GetIkhfahaqiqi');

	//hukum mim mati
	Route::get('ikhfa-syafawi.html','Step2Controller@GetIkhfaSyafawi');
	Route::get('idgham-mimi.html','Step2Controller@GetIdghamMimi');
	Route::get('izhar-syafawi.html','Step2Controller@GetIzharSyafawi');

	//Hukum Mim & Nun Bertasydid
	Route::get('mim-nun-bertasydid.html','Step2Controller@GetMimNunBertasydid');

	//hukum idgham
	Route::get('idgham-mutamatsilain.html','Step2Controller@GetIdghamMutamatsilain');
	Route::get('idgham-mutajanisain.html','Step2Controller@GetIdghamMutajanisain');
	Route::get('idgham-mutaqaribain.html','Step2Controller@GetIdghammutaqaribain');

	//hukum Lam Ta’rif
	Route::get('alif-lam-qamariyyah.html','Step2Controller@GetQamariyyah');
	Route::get('alif-lam-syamsiyyah.html','Step2Controller@GetSyamsiyyah');

	//Hukum Lam Jalallah
	Route::get('tafkhim.html','Step2Controller@GetTafkhim');
	Route::get('tarqiq.html','Step2Controller@GetTarqiq');

	//Hukum Ra’
	Route::get('ra-tarqiq.html','Step2Controller@GetRaTarqiq');
	Route::get('ra-tebal.html','Step2Controller@GetRaTarqiqTebal');
	Route::get('ra-tebalfirst.html','Step2Controller@GetRaTarqiqTebalFirst');
	Route::get('ra-tipisfirst.html','Step2Controller@GetRaTarqiqTipisFirst');

	//hukum qalqalah
	Route::get('qalqalah-sughra.html','Step2Controller@QalqalahSughra');
	Route::get('qalqalah-kubra.html','Step2Controller@QalqalahKubra');

	//hukum madd
	Route::get('madd-ashli.html','Step2Controller@MaddAshli');
	Route::get('madd-fari.html','Step2Controller@MaddFari');
});
//end tahap kedua

//tahap ketiga
Route::group(array('prefix'=>'tahap-ketiga'),function()
{
	Route::get('index.html','Step3Controller@GetIndex');
	Route::get('macam-waqaf.html','Step3Controller@GetMacamWaqaf');
	Route::get('tanda-waqaf.html','Step3Controller@GettandaWaqaf');
	Route::get('lafal-waqaf.html','Step3Controller@GetLafalwaqaf');
});
//end tahap ketiga

//tahap keempat
Route::group(array('prefix'=>'tahap-keempat'),function()
{
	Route::get('index.html','Step4Controller@GetIndex');
	Route::get('saktah.html','Step4Controller@GetSaktah');
	Route::get('isymam.html','Step4Controller@GetIsymam');
	Route::get('imalah.html','Step4Controller@GetImalah');
	Route::get('tashil.html','Step4Controller@GetTashil');
	Route::get('naql.html','Step4Controller@GetNaql');
	Route::get('roum.html','Step4Controller@GetRoum');
	Route::get('nun-wiqayah.html','Step4Controller@GetNunWiqayah');
	Route::get('yabshuth.html','Step4Controller@GetYabshuth');
	Route::get('waqaf-washal.html','Step4Controller@GetWaqafWashal');
	Route::get('shifrul-mustadir.html','Step4Controller@GetShifrulMustadir');
	Route::get('shifrul-musthatilul.html','Step4Controller@GetShifrulMusthatilul');
});
//end tahap ketiga

Route::get('tahap-pertama/show-confirm','Step1Controller@ConfirmData');
Route::get('tahap-pertama/callaudiotahap1','Step1Controller@GetCallAudio');
Route::get('tahap-pertama/callvideotahap1','Step1Controller@GetCallVideo');

Route::group(array('prefix'=>'evaluasi'),function()
{
	Route::get('index.html','EvaluasiController@IndexEvaluasi');
	Route::get('start.html','EvaluasiController@StartAction');
	Route::post('answer.html',array('before'=>'csrf','uses'=>'EvaluasiController@MyAnswerPlease'));
});