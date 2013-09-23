<?php
/**
 * Created by JetBrains PhpStorm.
 * User: sasha
 * Date: 21.09.13
 * Time: 15:18
 * To change this template use File | Settings | File Templates.
 */
include_once 'Electronics.php';

interface Telephon extends Electronics
{
	public function call();

	public function answer_call();
}