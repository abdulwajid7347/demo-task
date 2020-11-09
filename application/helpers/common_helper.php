<?php

function is_loggedin( $obj ){
    $controller = $obj->uri->segment(1);
    $method = $obj->uri->segment(2);
    if(!$obj->session->userdata('id')){
        if($controller !='auth'){
            redirect('auth');
        }
        return;
    }
    if($obj->session->userdata('id')){
        if($controller =='auth' && $method=='logout'){
            return;
        }elseif($controller =='auth'){
            redirect('timeline');
        }
        return;
    }
}




 ?>
