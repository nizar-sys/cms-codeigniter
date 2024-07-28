<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_gallery extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_video_gallery');
		$this->load->model('Model_portfolio');
	}

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_video_gallery'] = $this->Model_common->all_page_video_gallery();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['video_gallery'] = $this->Model_video_gallery->all_video();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		// $this->load->view('view_header', $data);
		// $this->load->view('view_video_gallery', $data);
		// $this->load->view('view_footer', $data);

		$this->load->view('new/header', $data);
		$this->load->view('new/video_gallery', $data);
		$this->load->view('new/footer', $data);
	}
}
