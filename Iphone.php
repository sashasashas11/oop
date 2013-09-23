<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 21.09.13
 * Time: 19:23
 * To change this template use File | Settings | File Templates.
 */

class Iphone extends Smartphone
{

	public function call()
	{
		return 'Calling with iPhone';
	}

	public function getOS()
	{
		return 'ios 7';
	}

	public function answer_call()
	{
		return 'Answer to call in iPhone';
	}
}