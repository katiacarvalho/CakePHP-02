<?php 

if( $this->Session->check('Auth.User.id')) {
    echo $this->Html->link('Início', '/painel/usuarios/view');
    echo '/ Bem vindo, <b>' . AuthComponent::user("nome") .'</b>';   
}
    else {
    //echo 'Não Logado-Inicio';
    }
    if( $this->Session->check('Auth.User.id')) {		
    echo $this->Html->link('Logout', '/painel/usuarios/logout', array('classe' => 'menu10'));
    }
    else {
    //echo 'LOGGED';
    }	

?>