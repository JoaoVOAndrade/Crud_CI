<?php

function permission()
{
    $ci = get_instance();
        $loggedUser = $ci->session->userdata("logged_user");
        if(!$loggedUser){
            $ci->session->set_flashdata("danger", "Você precisa realizar o login para acessar a pagina");
            redirect("login");
        
        return $loggedUser;
    }
}