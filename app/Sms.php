<?php

namespace App;


class Sms
{

	private $to;

	function __construct($to)
	{
		$this->to = $to;
	}
	public function getTo()
	{
		return $this->to;
	}
	public function send()
	{
		return !empty($this->to);
	}
}
