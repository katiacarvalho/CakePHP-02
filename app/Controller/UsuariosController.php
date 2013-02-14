<?php

class UsuariosController extends AppController{
    
    public $scaffold = 'painel';
    
    public function painel_login(){
        
        if($this->request->isPost()){
            if($this->Auth->login())
                $this->redirect($this->Auth->redirect());
            else
                $this->Session->setFlash('Dados incorretos');      
        }        
    }
    
    public function painel_logout(){
        
        $this->Auth->logout();
        $this->redirect('/');
    }
    
    public function painel_view(){
        
    }
    
    public function painel_add() {
        
         if($this->request->isPost()) {
            $this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash('Usuário cadastrado com sucesso');
            }
            else
                $this->Session->setFlash('Usuário não cadastrado');
         }  
    }
}
?>
<!--$this->redirect(array('controller' => 'Palestras' , 'action' => 'index'));-->