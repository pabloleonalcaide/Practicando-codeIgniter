<?php  
class Lista extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->output->cache(50);
		$this->load->helper('url_helper'); 
		$this->load->model('links_model'); //load our news model

	}


	public function view(){
		$this->output->cache(50);
		$data['links'] = $this->links_model->get_links(); //load the news from the model (News_model.php)
		$data['title'] ='titulo';
		$data['page_title'] = "lista";
		$data['subTitle'] = "lista de prueba";
		//render the view
		$this->load->view('templates/header',$data);
		$this->load->view('list/index');
		$this->load->view('templates/footer');	
	}

}
?>