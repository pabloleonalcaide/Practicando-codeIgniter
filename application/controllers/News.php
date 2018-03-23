<?php  
class News extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model'); //load our news model
		$this->load->helper('url_helper'); 
	}

	/**
	* load index of news
	*/
	public function index(){
		$this->output->cache(50);
		$data['news'] = $this->news_model->get_news(); //load the news from the model (News_model.php)
		if(empty($data['news'])){
			show_404();
		}
		$data['title'] = 'News archive'; //set value to title param for the header template
		$data['page_title'] = 'Titulo prueba';
		$data['subTitle'] = "Subtitle";

		//render the view
		$this->load->view('templates/header',$data);
		$this->load->view('news/index',$data);
		$this->load->view('templates/footer');
	}
	/**
	* load selected element
	*/
	public function view($slug = NULL){
		$this->output->cache(50);	
		$data['news_item'] = $this->news_model->get_news($slug); //load the news from the model (News_model.php)
		if(empty($data['news_item'])){
			show_404();
		}
		$data['title'] = $data['news_item']['title'];
		$data['subTitle'] = "Subtitle";


		//render the view
		$this->load->view('templates/header',$data);
		$this->load->view('news/view',$data);
		$this->load->view('templates/footer');	
	}
	/**
	* Insert news on db
	*/
	public function create(){
		$this->output->cache(50);	
	    $this->load->helper('form');
	    $this->load->library('form_validation');
		$data['subTitle'] = "Subtitle";
	    $data['title'] = 'Create a news item';
	    //set_rules set the rules for the form validation
	    $this->form_validation->set_rules('title', 'Title', 'required'); //nameInputField, nameErrorMessages, rule
	    $this->form_validation->set_rules('text', 'Text', 'required');

	    if ($this->form_validation->run() === FALSE){ //check the form
	        $this->load->view('templates/header', $data);
	        $this->load->view('news/create');
	        $this->load->view('templates/footer');
	    }
	    else{
	        $this->news_model->set_news(); // insert into the db
	        $this->load->view('news/sucess');
	    }
	}
		public function save_news(){
		$this->load->dbutil();
		$backup = $this->dbutil->backup();

		$this->load->helper('file');
		write_file('./application/comprimido.gz', $backup);
	}
}
?>