<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 21.09.13
 * Time: 15:52
 * To change this template use File | Settings | File Templates.
 */

include_once 'Smartphone.php';

class android extends Smartphone
{
	private $model;

	public function call()
	{
		return 'Calling with android';
	}

	public function getOS()
	{
		return 'android 4.1';
	}

	public function answer_call()
	{
		return 'Answer to call in iPhone';
	}

	public function __construct($mobil)
	{
		$this->model = $mobil;
	}
}