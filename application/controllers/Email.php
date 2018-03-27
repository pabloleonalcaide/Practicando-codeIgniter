<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {
 
 function __construct(){

  parent::__construct();
  //load the  library
  $this->load->library('email');
 }

function sendMail()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'pruebaIgniter@gmail.com', // change it to yours
  'smtp_pass' => 'igniter123', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

      $this->load->library('email', $config);
      $this->email->from('pruebaIgniter@gmail.com'); // change it to yours
      $this->email->to('pruebaIgniter@gmail.com');// change it to yours
      $this->email->subject('prueba');
      $this->email->message("estamos probando");
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
}