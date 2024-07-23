<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_video');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['video'] = $this->Model_video->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_video',$data);
		$this->load->view('admin/view_footer');
	}

	public function add()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$error = '';
		$success = '';

		if(isset($_POST['form1'])) {

				$next_id = $this->Model_video->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

	            
	            $form_data = array(
					'video_name' => $_POST['video_name'],
					'url' => $_POST['url'],
	            );
	            
	            $this->Model_video->add($form_data);

		        $success = 'Video is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/video');

		    
            
        } else {            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_video_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no photo in this id, then redirect
    	$tot = $this->Model_video->video_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/video');
        	exit;
    	}
       	
       	$data['setting'] = $this->Model_common->get_setting_data();
		$error = '';
		$success = '';


		if(isset($_POST['form1'])) 
		{

		
		   
		    	$data['photo'] = $this->Model_video->getData($id);

			//	unlink('./public/uploads/'.$data['photo']['video_name']);

			//	$final_name = 'photo-'.$id.'.'.$ext;
	        //	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

	        	$form_data = array(
					'video_name' => $_POST['video_name'],
					'url' => $_POST['url'],
	            );
	            $this->Model_video->update($id,$form_data);

				$success = 'Video is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/video');
		   
		    //	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/video/edit'.$id);
		    
           
		} else {
			$data['photo'] = $this->Model_video->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_video_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no photo in this id, then redirect
    	$tot = $this->Model_video->video_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/video');
        	exit;
    	}

        $data['video'] = $this->Model_video->getData($id);
        

        $this->Model_video->delete($id);
        $success = 'video is deleted successfully';
		$this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/video');
    }

}