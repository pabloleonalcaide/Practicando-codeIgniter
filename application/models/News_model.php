<?php
class News_model extends CI_Model{
	public function __construct(){
		//  create a new model that extends from CI_Model and load the database library.
		$this->load->database();
	}

	public function get_news($slug = FALSE){
		//return all the news
		if ($slug === FALSE){
			$query = $this->db->get('news');
			return $query->result_array();
		}
		//filtering the query
		$query = $this->db->get_where('news',
			array('slug'=>$slug));
		return $query->row_array();
	}
	
	public function set_news(){
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'),'dash',TRUE); //parse the url

		$data = array(
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
			);
		return $this->db->insert('news',$data);
	}
	public function save_news(){
		$this->load->dbutil();
		$backup = $this->dbutil->backup();

		$this->load->helper('file');
		write_file('./comprimido.gz', $backup);
		$this->load->helper('download');
		force_download('comprimido.gz',$backup);
	}
}

 ?>