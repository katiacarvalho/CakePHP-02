<?php echo $this->Html->link('Retornar', array('controller' => 'Palestras', 'action' => 'index')); ?>
<?php
    echo $this->Form->create('Palestra', array('action' => 'cadastrar'));
    echo $this->Form->input('nome');
    echo $this->Form->input('descricao');
    echo $this->Form->input('palestrante_id');    
    echo $this->Form->input('inicio', array('placeholder' => '00:00'));
    echo $this->Form->input('fim', array('placeholder' => '00:00'));
    echo $this->Form->submit('Cadastrar');
    echo $this->Form->end();
?>