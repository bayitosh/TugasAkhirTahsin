<?php

class Step3Controller extends BaseController
{
	function GetIndex()
	{
		return View::make('step3/index');
	}
	function GetMacamWaqaf()
	{
		return View::make('step3/macamwaqaf');
	}
	function GettandaWaqaf()
	{
		return View::make('step3/tandawaqaf');
	}
	function GetLafalwaqaf()
	{
		return View::make('step3/lafalwaqaf');
	}
}