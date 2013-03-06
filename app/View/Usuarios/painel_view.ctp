<ul>
    <li><p>Inscrição</p><br/>
        <ul>
            <li><?php echo $this->Html->link('Listar', array('controller' => 'inscricoes', 'action' => 'index'))?></li>
            <li><?php echo $this->Html->link('Cadastrar', array('controller' => 'inscricoes', 'action' => 'add'))?></li></br>
        </ul>
    </li>
    <li><p>Palestra</p><br/>
        <ul>
            <li><?php echo $this->Html->link('Listar', array('controller' => 'palestras', 'action' => 'index'))?></li>
            <li><?php echo $this->Html->link('Cadastrar', array('controller' => 'palestras', 'action' => 'add'))?></li><br/>
        </ul>
    </li>    
    <li><p>Palestrante</p><br/>
        <ul>
            <li><?php echo $this->Html->link('Listar', array('controller' => 'palestrantes', 'action' => 'index'))?></li>
            <li><?php echo $this->Html->link('Cadastrar', array('controller' => 'palestrantes', 'action' => 'add'))?></li><br/>
        </ul>
    </li>
    <li><p>Usuários</p><br/>
        <ul>
            <li><?php echo $this->Html->link('Listar', array('controller' => 'usuarios', 'action' => 'index'))?></li>
            <li><?php echo $this->Html->link('Cadastrar', array('controller' => 'usuarios', 'action' => 'add'))?></li><br/>
        </ul>
    </li>
</ul>