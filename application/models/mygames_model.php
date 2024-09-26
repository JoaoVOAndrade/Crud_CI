<?php

Class Mygames_model extends CI_Model{


    public function show($user)
    {
        return $this->db->get_where("tb_users")->result_array();
    }
}