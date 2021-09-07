<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MyModel;
class Home extends BaseController
{
	public function index()
	{
		$this->add();
		echo view('default/header');
		echo view('main/body');
		echo view('modals/Buy_Modal');
	}

	public function spickers()
	{
		$this->add();
		echo view('default/header');
		echo view('spickers/body');
		echo view('modals/Buy_Modal');
	}

	public function contacts()
	{
		$this->add();
		echo view('default/header');
		echo view('contacts/body');
		echo view('modals/Buy_Modal');
	}

	public function add()
	{
		$model=new MyModel();
		if(!$model->where('ip',$this->request->getIPAddress())->first()){
			$data=[
				'ip'=>$this->request->getIPAddress(),
				'action'=>'Первый раз на сайте'
			];
			$model->insert($data);
		}
	}

	public function register_bilet()
	{
		$model=new MyModel();
		if(!$model->where(['ip'=>$this->request->getIPAddress(),
		'action'=>'Переход на регистрацию'])->first()){
			$data=[
				'ip'=>$this->request->getIPAddress(),
				'action'=>'Переход на регистрацию'
			];
			$model->insert($data);
		}
		return json_encode(true);
	}

	public function live()
	{
		echo view('watch/body');
	}
}
