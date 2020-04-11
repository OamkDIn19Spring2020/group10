<?php
	class Destinations extends CI_Controller{
		public function index(){

			$data['title'] = 'Welcome to the destination selector';

			$data['destinations'] = $this->destination_model->get_destinations();

			$this->load->view('templates/header');
			$this->load->view('destinations/index', $data);
			$this->load->view('templates/footer');
		}
	}