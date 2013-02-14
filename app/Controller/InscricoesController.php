<?php

class InscricoesController extends AppController{
    
    public $scaffold = 'painel';
    
    public function index(){
        
        $inscricoes = $this->Inscricao->find('all'); 
        $this->set('inscricoes', $inscricoes);                
    }
    
    public function inscrever(){
        
        if ($this->request->isPost()){
            $this->Inscricao->create(); //o que esse create()
            if ($this->Inscricao->save($this->request->data)) {          
                $this->Session->setFlash('Inscrição realizada com sucesso');              
                $this->redirect('/obrigada');
            }
            else
                $this->Session->setFlash('Inscrição não realizada');              
        }
    }  
}
?>
