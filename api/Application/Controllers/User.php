<?php

use MVC\Controller;

class ControllersUser extends Controller {

	public function index() 
	{
		$model = $this->model('home');

		$users = $model->getAllUser();

		$this->response->sendStatus(200);
		$this->response->setContent($users);
	}
}