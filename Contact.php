<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 21.09.13
 * Time: 20:13
 * To change this template use File | Settings | File Templates.
 */

class Contact
{
	private $number;
	private $name;

	function __construct($name, $number)
	{
		$this->name = $name;
		$this->number = $number;
	}
}