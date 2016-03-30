<?php
class Login extends CI_Controller {

		public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login_form');
                }
                else
                {
                	redirect('dashboard');
                }
        }

}