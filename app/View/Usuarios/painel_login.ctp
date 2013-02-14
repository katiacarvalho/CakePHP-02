<?php

echo $this->Session->flash(); //vai aparecer a mensagem definida no controller
echo $this->Session->flash('auth');

echo $this->Form->create('Usuario');
echo $this->Form->input('login');
echo $this->Form->input('senha',array('type'=>'password'));
echo $this->Form->input('confirma_senha',array('type'=>'password'));
echo $this->Form->end('Acessar');

?>
