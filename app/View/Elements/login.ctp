<div id="topHalf acess">
<?php

if($this->Session->check('Auth.User.id'))
     echo $this->Html->link('Encerrar', array('controller' => 'Usuarios', 'action' => 'logout', 'full_base' => true, 'painel' => true));
else
    echo $this->Html->link('Acessar', array('controller' => 'Usuarios', 'action' => 'login', 'full_base' => true, 'painel' => true));
?>
</div>