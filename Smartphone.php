<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 21.09.13
 * Time: 15:45
 * To change this template use File | Settings | File Templates.
 */
include_once 'Mobile.php';

abstract class Smartphone extends Mobile
{
	private $sms;

	public function write_sms($sms)
	{
		$this->sms = $sms;
	}

	abstract protected function getOS();

}