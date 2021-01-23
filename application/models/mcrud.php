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

    function add(){
        $nm = $this->input->post('nm');
        $em = $this->input->post('em');
        $hp = $this->input->post('hp');
        $al = $this->input->post('al');
        $data = array(
            'name' => $nm,
            'email' => $em,
            'phone' => $hp,
            'address' => $al
        );
        $this->db->insert('crud', $data);
    }

    function edit($a){
        $d = $this->db->get_where('crud', array('id'=>$a))->row();
        return $d;
    }

    function update($id){
        $nm = $this->input->post('nm');
        $em = $this->input->post('em');
        $hp = $this->input->post('hp');
        $al = $this->input->post('al');
        $data = array(
            'name' => $nm,
            'email' => $em,
            'phone' => $hp,
            'address' => $al
        );
        $this->db->where('id', $id);
        $this->db->update('crud', $data);
    }
}
