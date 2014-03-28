<?php

class Step4Controller extends BaseController
{
	function GetIndex()
	{
		return View::make('step4/index');
	}
	function GetSaktah()
	{
		return View::make('step4/saktah');
	}
	function GetIsymam()
	{
		return View::make('step4/isymam');
	}
	function GetImalah()
	{
		return View::make('step4/imalah');
	}
	function GetTashil()
	{
		return View::make('step4/tashil');
	} 
	function GetNaql()
	{
		return View::make('step4/naql');
	}
	function GetRoum()
	{
		return View::make('step4/roum');
	}
	function GetNunWiqayah()
	{
		return View::make('step4/nunwiqayah');
	}
	function GetYabshuth()
	{
		return View::make('step4/yabshuth');
	}
	function GetWaqafWashal()
	{
		return View::make('step4/hamzah');
	}
	function GetShifrulMustadir()
	{
		return View::make('step4/mustadir');
	}
	function GetShifrulMusthatilul()
	{
		return View::make('step4/musthatilul');
	}
}