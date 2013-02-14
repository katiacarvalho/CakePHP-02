<?php

App::uses('AuthComponent', 'Controller/Component');

class Usuario extends AppModel{
    
    public $order = array('nome' => 'ASC');
    public $cacheQueries = true;
    public $displayField = 'nome';
    
    public $validate = array(
        
        'nome' => array(
            array(
                'rule' => 'notEmpty',
                'message' => 'Informe seu nome'                        
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'O nome informado já existe'
            )
        ),
        'login' => array(
            array(
            'rule' => 'notEmpty',
            'message' => 'Informe seu login'
            ),
            array(
                'rule' => 'isUnique',
                'message' => 'O login informado já existe'
            )
        ),
        'senha' => array(            
            array(
                'rule' => array('minLength', 6),
                'message' => array('Informe no minímo 6 caracteres')
            ),
            array(
                'rule' => 'notEmpty',
                'message' => 'Informe sua senha'
            )            
        ),
        'confirma_senha' => array( //by William
            'required'=>'notEmpty',
            'match' => array(
                'rule' => 'validatePasswdConfirm',
                'message' => 'As senhas não coincidem'
            )
        )
    );
    
    public function validatePasswdConfirm() { //by William
        if ($this->data['Usuario']['senha'] !== $this->data['Usuario']['confirma_senha']) {
            return false;
        }
        return true;
    }
    
    public function beforeSave($options = array()) {
        
        //if($this->data['Usuario']['senha'] != 'notEmpty'){
            if(isset($this->data['Usuario']['senha'])){
                $password = &$this->data['Usuario']['senha'];
                $password = AuthComponent::password($password);
            }
      //  }
        
        parent::beforeSave($options);
    }
}
?>