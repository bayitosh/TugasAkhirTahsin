<?php

class HomeController extends BaseController 
{
	function getIndex()
	{
		return View::make('home.index');
	}
}