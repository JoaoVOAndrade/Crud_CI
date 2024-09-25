<?php

class Busca_model extends CI_Model
{
    public function buscar($busca)
    {
        if(empty($busca))
        {
            return array();
        }

        $busca = $this->input->post("busca"); //carregando input method "post" e nome "busca" do nav-top
        $this->db->like("name", $busca); //comparando com banco de dados
        return $this->db->get("tb_games")->result_array();

    }
}