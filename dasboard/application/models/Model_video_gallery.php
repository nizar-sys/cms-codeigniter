<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_video_gallery extends CI_Model 
{
    public function all_video()
    {
        $query = $this->db->query("SELECT * FROM tbl_video ORDER BY video_id ASC");
        return $query->result_array();
    }
}