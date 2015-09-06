<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Counters extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function process()
	{
		$this->session->set_userdata('user', $this->input->post());
		if($this->session->userdata('counter'))
			$this->session->set_userdata('counter', ($this->session->userdata('counter') + 1) );
		else
			$this->session->set_userdata('counter', 1);	
		redirect('/results');
	}

	public function results()
	{
		$this->load->view('results', array(
			'counter' => $this->session->userdata('counter'),
			'user' => $this->session->userdata('user')
		));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */