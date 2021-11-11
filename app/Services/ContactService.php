<?php

namespace App\Services;

use App\Contact;

const DATABASE_CONTACTS = [
	array('name' => 'carlos', 'phone_number' => '918363389'),
	array('name' => 'alberto', 'phone_number' => '962222212')
];



class ContactService
{

	public static function findByName(string $name): Contact
	{
		foreach (DATABASE_CONTACTS as $contact) {
			if ($name == $contact['name']) {
				return new Contact($contact['name'], $contact['phone_number']);
				break;
			}
		}
		return new Contact('', '');
	}

	public static function validateNumber(string $number): bool
	{
		if (is_numeric($number)) {
			foreach (DATABASE_CONTACTS as $contact) {
				if ($number == $contact['phone_number']) {
					return true;
					break;
				}
			}
			return false;
		} else {
			return false;
		}
	}
}
