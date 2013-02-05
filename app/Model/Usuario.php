<?php

App::uses('AuthComponent', 'Controller/Component');

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
                'message' => 'Informe sua senha'
            )            
        ),
        'confirma_senha' => array(
            'required'=>'notEmpty',
            'match'=>array(
                'rule' => 'validatePasswdConfirm',
                'message' => 'Passwords do not match'
            )
        )
    );
    
    public function validatePasswdConfirm() {
        if ($this->data['Usuario']['senha'] !== $this->data['Usuario']['confirma_senha']) {
            return false;
        }
        return true;
    }
    
    public function beforeSave($options = array()) {
        
        if($this->data['Usuario']['senha'] != 'notEmpty'){
            if(isset($this->data['Usuario']['senha'])){
                $password = &$this->data['Usuario']['senha'];
                $password = AuthComponent::password($password);
            }
        }
        
        parent::beforeSave($options);
    }
}
?>