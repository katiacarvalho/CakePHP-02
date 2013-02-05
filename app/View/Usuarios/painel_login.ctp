<?php

echo $this->Session->flash(); //vai aparecer a mensagem definida no controller
echo $this->Session->flash('auth');

echo $this->Form->create('Usuario');
echo $this->Form->input('Login');
echo $this->Form->input('Senha');
echo $this->Form->end('Entrar');

?>
