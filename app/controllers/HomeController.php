<?php
namespace App\Controllers;

class HomeController extends BaseController
{
	public function store()
	{
		var_dump($this->request->getInputs());
		return "POST";
	}
}
