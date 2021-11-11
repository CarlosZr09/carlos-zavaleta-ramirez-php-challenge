<?php

namespace App;


class Contact
{
	private $name = '';
	private $phone_number = '';

	function __construct($name, $phone_number)
	{
		$this->name = $name;
		$this->phone_number = $phone_number;
	}

	function getPhoneNumber()
	{
		return $this->phone_number;
	}
}
