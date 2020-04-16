<?php
	class Destinations extends CI_Controller{
		public function index(){

			$data['title'] = 'Welcome to the destination selector';

			$data['destinations'] = $this->destination_model->get_destinations();

			$this->load->view('templates/header');
			$this->load->view('destinations/index', $data);
			$this->load->view('templates/footer');
		}
<<<<<<< HEAD

=======
>>>>>>> 6816b9c00238dfdc607bf4ffba507eaff5f120b0
		public function view($slug = NULL){
			$data['destination'] = $this->destination_model->get_destinations($slug);

			if(empty($data['destination'])){
				show_404();
			}

			$data['title'] = $data['destination']['destination_name'];

			$this->load->view('templates/header');
			$this->load->view('destinations/view', $data);
			$this->load->view('templates/footer');
		}
	}