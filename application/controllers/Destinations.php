<?php
	class Destinations extends CI_Controller{
		public function index(){

			$data['title'] = 'Welcome to the destination selector';

			$data['destinations'] = $this->destination_model->get_destinations();

			$data['stops'] = $this->destination_model->get_stops();

			$this->load->view('templates/header');
			$this->load->view('destinations/index', $data);
			$this->load->view('templates/footer');
		}
		public function view($slug = NULL){
			$data['destination'] = $this->destination_model->get_destinations($slug);

			$data['stop'] = $this->destination_model->get_stops($slug);

			if(empty($data['destination'])){
				show_404();
			}

			$data['title'] = $data['destination']['destination_name'];

			$this->load->view('templates/header');
			$this->load->view('destinations/view', $data);
			$this->load->view('templates/footer');
		}
	}