<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller {

	public function index()
	{
		$this->load->view('default');
		$this->load->view('donation_view');
	}
}
