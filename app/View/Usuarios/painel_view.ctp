<ul>
    <li><p>Inscrição</p>
        <ul>
            <li><?php echo $this->Html->link('Listar', array('controller' => 'inscricoes', 'action' => 'index'))?></li>
            <li><?php echo $this->Html->link('Cadastrar', array('controller' => 'inscricoes', 'action' => 'inscrever'))?></li>
        </ul>
    </li>
    <li><p>Palestra</p>
        <ul>
            <li><?php echo $this->Html->link('Listar', array('controller' => 'palestras', 'action' => 'index'))?></li>
            <li><?php echo $this->Html->link('Cadastrar', array('controller' => 'palestras', 'action' => 'cadastrar'))?></li>
        </ul>
    </li>
    <li><p>Palestrante</p>
        <ul>
            <li><?php echo $this->Html->link('Listar', array('controller' => 'palestrante', 'action' => 'index'))?></li>
            <li><?php echo $this->Html->link('Cadastrar', array('controller' => 'palestrante', 'action' => 'cadastrar'))?></li>
        </ul>
    </li>
    <li><p>Usuários</p>
        <ul>
            <li><?php echo $this->Html->link('Listar', array('controller' => 'usuarios', 'action' => 'index'))?></li>
            <li><?php echo $this->Html->link('Cadastrar', array('controller' => 'palestras', 'action' => 'painel_add'))?></li>
        </ul>
    </li>
</ul>