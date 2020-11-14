<?php namespace App\Controllers;

class AdminController2 extends BaseController
{
	public function index()
	{
		echo view ('templates/header');
		echo view ('templates/index2');
		echo view ('templates/footer');
	}
}