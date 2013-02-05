<?php

class Usuario extends AppModel{
    
    public $order = array('nome' => 'ASC');
    public $cacheQueries = true;
    public $displayField = 'nome';
    
    public $validate = array(
        
        'nome' => array(            
                'rule' => 'notEmpty',
                'message' => 'Informe seu nome'                        
        ),
        'login' => array(
            'rule' => 'notEmpty',
            'message' => 'Informe seu login'
        ),
        'senha' => array(            
            array(
                'rule' => array('minLength', '6'),
                'message' => array('Informe no minímo 6 caracteres')
            ),
            array(
                'rule' => 'notEmpty',
                'message' => 'Informe seu email'
            )            
        ),
        ''
    );    
}
?>