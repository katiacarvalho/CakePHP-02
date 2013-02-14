<?php
echo $this->Form->create('Usuario');
echo $this->Form->input('nome');
echo $this->Form->input('login');
echo $this->Form->input('senha', array('type'=>'password'));
echo $this->Form->input('confirma_senha', array('type'=>'password'));
echo $this->Form->end('Cadastrar');
?>