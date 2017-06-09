<?php
namespace App\Http;

class Request
{
	private $inputs = [];

	public function __construct()
	{
		$this->inputs = $_POST;
	}

	public function getInputs()
	{
		return $this->inputs;
	}
}
