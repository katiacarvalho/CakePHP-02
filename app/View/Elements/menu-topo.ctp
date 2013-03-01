<div id="menu-global">    
    <ul>
      <li><?php echo $this->Html->link('Home', '/');?></li>
      <li><?php echo $this->Html->link('Sobre', '/sobre');?></li>
      <li><?php echo $this->Html->link('Como Chegar', '/onde');?>
      <li><?php echo $this->Html->link('Inscrição', '/inscricao');?></li>
      <li><?php echo $this->Html->link('Palestras', '/palestras');?></li>            
      <li><?php echo $this->Html->link('Palestrantes', '/palestrantes');?></li>
      <?php if($this->Session->check('Auth.User.id')){?>
            <li><?php echo $this->Html->link('Logout', array('controller' => 'usuarios', 'action' => 'painel_logout'))?></li>
      <?php } else {?>
                <li><?php echo $this->Html->link('Login', array('controller' => 'usuarios', 'action' => 'painel_login'))?></li>
            <?php }?>
      <!--<?php if($this->Session->check('Auth.User.id')){?>
            <li><?php echo $this->Html->link('a', array('controller' => 'usuarios', 'action' => 'painel_logout'))?></li>
      <?php } else {?>
                
            <?php }?>-->
    </ul>
</div>