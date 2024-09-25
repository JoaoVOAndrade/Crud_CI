<?php

Class Users_model extends CI_Model{

    public function store($user)
    {
        $this->db->insert("tb_users", $user);
    }

    public function show()
    {
        return $this->db->get("tb_users")->result_array();
    }
}