<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 21.09.13
 * Time: 15:44
 * To change this template use File | Settings | File Templates.
 */
include_once 'Telephon.php';
include_once 'Contact.php';

abstract class Mobile implements Telephon
{
	private $contacts = array();

	public function getVoltage()
	{
	}

	abstract public function call();

	abstract public function answer_call();

	public function addContact($name, $number)
	{
		$this->contacts[] = new Contact($name, $number);
		return $this->contacts;
	}
}