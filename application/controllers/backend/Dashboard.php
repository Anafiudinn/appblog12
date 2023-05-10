<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends MY_Controller {


	public function index()
	{
		//  $this->load->view('template/backend/theme');
		 view('backend/dashboard/index');
	}

	public function table()
	{
		view('backend/dashboard/table');
	} 


}
