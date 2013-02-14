<div id="menu-global">    
 <ul>
      <li><?php echo $this->Html->link('Home', '/');?></li>        
      <li><?php echo $this->Html->link('Sobre', '/sobre');?></li>
      <li><?php echo $this->Html->link('Como Chegar', '/onde');?>
      <li><?php echo $this->Html->link('Inscrição', '/inscricao');?></li>
      <li><?php echo $this->Html->link('Palestras', '/palestras');?></li>            
      <li><?php echo $this->Html->link('Palestrantes', '/palestrantes');?></li>     
      <li><?php echo $this->Html->link('Login', array('controller' => 'usuarios', 'action' => 'painel_login'));?></li>
</ul>
</div>
