<?php

class UsuariosController extends AppController{
    
    public $scaffold = 'painel';
    
    public function painel_login(){
        
        if($this->Auth->login()){
            $this->redirect($this->Auth->redirect());
        }
        else{
            $this->Session->setFlash('Dados incorretos');
        }  
    }
    
}
?>
