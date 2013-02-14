<?php 

echo $this->Html->link('Início','/');
if($this->Session->check('Auth.User.id')) {
    echo '<b>\</b>Bem vindo, <b>' . AuthComponent::user('nome') . '</b><br/>';		
    echo $this->Html->link('Menu', '/painel/usuarios/view'). '<b>\</b>';		
    echo $this->Html->link('Logout', '/painel/usuarios/painel_logout');
}
?>