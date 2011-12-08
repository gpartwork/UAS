<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calculator extends CI_Controller {

	public function index()
	{
		$this->load->view('calculator_view');
	}
	
	public function add()
	{
		$this->load->library('uri');
		$a = $this->uri->segment(3);
		$b = $this->uri->segment(4);
		echo "Result: " . ($a + $b);
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */