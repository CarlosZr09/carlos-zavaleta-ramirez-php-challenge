<?php

namespace App;


class Call
{

	private $phone_number;
	function __construct($phone_number)
	{
		$this->phone_number = $phone_number;
	}

	public function IsValidCall()
	{
		return !empty($this->phone_number);
	}
}
