<?php $cakeDescription = __d('cake_dev', 'CIM'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription; ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');                
		echo $this->Html->css('cake.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <?php echo $this->element('topo')?>    
    <div id="corpo">
        <div id="banner">
            <img src="\img\logo-farmacia.jpg" border="0"></img>
        </div>
        <div id="container">
            <?php echo $this->element('conteudo')?>                
        </div>
    </div>
    <?php echo $this->element('rodape', array(
        'instituicao' => 'CENTRO DE INFORMAÇÃO SOBRE MEDICAMENTOS (CIM)',
        'endereco' => 'Avenida Teotônio Segurado 1501 Sul Palmas - TO',
        'telefone' => 'Fone: (63) 3219-8069'
    ))?>
    <?php echo $this->element('google-analytics', array('UA-37449125-1'))?>
</body>
</html>