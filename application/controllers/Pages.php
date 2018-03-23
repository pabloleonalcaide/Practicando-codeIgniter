<?php
class Pages extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}

	public function view($page = 'home'){
		$this->output->cache(50);
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404(); // page not found..
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter
		$data['subTitle'] = "Hi! this works!";
		$data['page_title'] = 'Titulo prueba';
		//the controller loads the views and the selected page
		$this->load->view('templates/header',$data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer',$data);
	}
}