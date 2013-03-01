<?php

class PalestrantesController extends AppController{
    
    public $scaffold = 'painel';
    
    public function index(){
        
        $palestrantes = $this->Palestrante->find('all');         
        $this->set('palestrantes', $palestrantes);                
    }
    
    public function view($id = null){ 
       
        $this->Palestrante->id = $id;
        $dados = $this->Palestrante->read(null,$id);
        $this->set('palestrante', $dados);
    }
    
    public function inscrever(){
        
        $isPost = $this->request->isPost();      
      
        if ($isPost && !empty($this->request->data)) {
          if ($this->Palestrante->save($this->request->data)) {
              $this->Session->fetch('Palestrante cadastrado com sucesso');
              $this->redirect(array('controller' => 'Palestrantes' , 'action' => 'index'));
          }
        }
    } 
}
?>
