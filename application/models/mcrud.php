<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mcrud extends CI_Model {

	function view()
	{
        $ambil = $this->db->get('crud');
        if($ambil->num_rows() > 0) {
            foreach ($ambil->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
	}
}
