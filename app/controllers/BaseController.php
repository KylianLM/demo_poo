<?php
namespace App\Controllers;

use App\Http\Request;

abstract class BaseController
{
	function __construct()
	{
		$this->request = new Request();
	}
	
    public function index()
    {
        return "Hello World" . PHP_EOL;
    }
}
