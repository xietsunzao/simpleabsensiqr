<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller
{


    function __construct()
    {
      parent::__construct();
      if (!$this->ion_auth->logged_in()){
			redirect('auth');
		}
        $this->load->model('Users_model');
        $this->load->library('form_validation');
        $this->load->library('form_validation','ion_auth');
        $this->load->helper('url');
        $this->user = $this->ion_auth->user()->row();
        $this->form_validation->set_error_delimiters('','');
    }



    public function output_json($data, $encode = true)

  	{

          if($encode) $data = json_encode($data);
          $this->output->set_content_type('application/json')->set_output($data);
  	}


      public function data($id = null)
      {
  		$this->is_admin();
          $this->output_json($this->users->getDataUsers($id), false);
      }

      public function messageAlert($type, $title) {
        $messageAlert = "
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });

        Toast.fire({
            type: '".$type."',
            title: '".$title."'
        });
        ";
        return $messageAlert;
    }

    public function update($id)

    {
        $user = $this->user;
        $row = $this->Users_model->get_by_id($id);
        $level = $this->ion_auth->get_users_groups($id)->result();
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('users/update_action'),
		'id' => set_value('id', $row->id),
		'username' => set_value('username', $row->username),
		'email' => set_value('email', $row->email),
		'active' => set_value('active', $row->active),
		'first_name' => set_value('first_name', $row->first_name),
		'last_name' => set_value('last_name', $row->last_name),
    'user' => $user,
    'user1'	=> $this->ion_auth->user()->row(),
    'users' 	=> $this->ion_auth->user($id)->row(),
    'groups'	=> $this->ion_auth->groups()->result(),
    'level'		=> $level[0],
	    );
            $this->template->load('template','users_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('dashboard'));
        }
    }


    public function update_info()
    {

      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('first_name', 'First Name', 'required');
      $this->form_validation->set_rules('last_name', 'Last Name', 'required');
      $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

      if($this->form_validation->run()===FALSE){
        $data['status'] = false;
        $data['errors'] = [
          'username' => form_error('username'),
          'first_name' => form_error('first_name'),
          'last_name' => form_error('last_name'),
          'email' => form_error('email'),
        ];
      }else{
        $id = $this->input->post('id', true);
        $input = [
          'username' 		=> $this->input->post('username', true),
          'first_name'	=> $this->input->post('first_name', true),
          'last_name'		=> $this->input->post('last_name', true),
          'email'			=> $this->input->post('email', true)
        ];
        $update = $this->Users_model->update_b('users', $input, 'id', $id);
        $data['status'] = $update ? true : false;
      }
      $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil merubah data info'));
      $this->output_json($data);
      redirect(site_url('dashboard'));
    }

    public function change_password()
  	{
  		$this->form_validation->set_rules('old', $this->lang->line('change_password_validation_old_password_label'), 'required');
  		$this->form_validation->set_rules('new', $this->lang->line('change_password_validation_new_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|matches[new_confirm]');
  		$this->form_validation->set_rules('new_confirm', $this->lang->line('change_password_validation_new_password_confirm_label'), 'required');

  		if ($this->form_validation->run() === FALSE){
  			$data = [
  				'status' => false,
  				'errors' => [
  					'old' => form_error('old'),
  					'new' => form_error('new'),
  					'new_confirm' => form_error('new_confirm')
  				]
  			];
  		}else{
  			$identity = $this->session->userdata('identity');
  			$change = $this->ion_auth->change_password($identity, $this->input->post('old'), $this->input->post('new'));
  			if($change){
  				$data['status'] = true;
          $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil merubah password'));
          redirect(site_url('dashboard'));
  			}
  			else{
  				$data = [
  					'status' 	=> false,
  					'msg'		=> $this->ion_auth->errors(),
  				];
  			}
  		}
      $this->session->set_flashdata('messageAlert', $this->messageAlert('warning', 'passswod salah'));
  		$this->output_json($data);
      redirect($_SERVER['HTTP_REFERER']);
  	}


    function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;

		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}


}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-03-18 03:21:05 */
/* http://harviacode.com */
