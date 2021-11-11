<?php

namespace App\Providers;

use App\Contact;
use App\Mobile;
use App\Interfaces\CarrierInterface;
use App\Call;
use App\Sms;

class OtherProviderTest implements CarrierInterface
{
	private $contact = null;
	public function dialContact(Contact $contact)
	{
		$this->contact = $contact;
	}
	public function makeCall(): Call
	{
		if (empty($this->contact->getPhoneNumber)) {
			return new Call('');
		}
		return new Call($this->contact->getPhoneNumber());
	}

	public function makeSMS($from): Sms
	{
		return new Sms($from, $this->contact->getPhoneNumber(), 'test message');
	}
}
