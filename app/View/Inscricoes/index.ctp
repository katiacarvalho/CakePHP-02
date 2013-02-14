<?php
echo $this->Html->link('Nova Inscrição', array('controller' => 'Inscricoes', 'action' => 'inscrever'))
?>
<table>    
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Email</th>
        <th>Data da Inscrição</th>        
    </tr>    
    <?php foreach ($inscricoes as $inscricao): ?>     
       
    <tr>
        <td><?php echo $inscricao['Inscricao']['nome']; ?></td>
        <td><?php echo $inscricao['Inscricao']['telefone']; ?></td>
        <td><?php echo $inscricao['Inscricao']['endereco']; ?></td> 
        <td><?php echo $inscricao['Inscricao']['email']; ?></td>        
        <td><?php echo $inscricao['Inscricao']['created']; ?></td>         
    </tr>
    
    <?php endforeach; ?>
</table>

