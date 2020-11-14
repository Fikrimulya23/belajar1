<?php namespace App\Controllers;

class AdminController1 extends BaseController
{
	public function index()
	{
		echo view ('templates/header');
		echo view ('templates/index');
		echo view ('templates/footer');
	}
}