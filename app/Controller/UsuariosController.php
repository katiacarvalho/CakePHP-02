<?php

class UsuariosController extends AppController{
    
    public $scaffold = 'painel';
    
    public function painel_login(){
        
        //se estiver logado redireciona pra home_login
//        if($this->Session->check('Auth.User.id')){
//            $this->redirect(array('controller' => 'usuarios', 'action' => 'profile', 'painel' => true));
//        }
        
        //$this->layout = 'login';
        
        if($this->Auth->login()){
            $this->redirect($this->Auth->redirect());
        }
        else{
            $this->Session->setFlash('Dados incorretos');
        }  
    }
    
    public function painel_logout(){
        $this->redirect($this->Auth->logout());
    }
}
?>
