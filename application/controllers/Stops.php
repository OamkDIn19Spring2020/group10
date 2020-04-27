<?php
	class Stops extends CI_Controller{
		public function index(){

			$data['title'] = 'Welcome to the stop selector';

			$data['stops'] = $this->stop_model->get_stops();

			$this->load->view('templates/header');
			$this->load->view('stops/index', $data);
			$this->load->view('templates/footer');
		}
		public function view($slug = NULL){
			$data['stop'] = $this->stop_model->get_stops($slug);

			if(empty($data['stop'])){
				show_404();
			}

			$data['title'] = $data['stop']['stop_name'];

			$this->load->view('templates/header');
			$this->load->view('stops/view', $data);
			$this->load->view('templates/footer');
		}
	}