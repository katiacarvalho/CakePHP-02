<?php
echo $this->Form->create('Usuario');
echo $this->Form->input('nome');
echo $this->Form->input('Login');
echo $this->Form->input('Senha', array('type'  =>  'password'));
echo $this->Form->input('Confirmar Senha', array('type' => 'password'));
echo $this->Form->end('Cadastrar');
?>