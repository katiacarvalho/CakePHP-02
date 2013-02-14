<?php

class PalestrasController extends AppController{
    
    public $scaffold = 'painel';   
    
    public function index(){
        
        $palestras = $this->Palestra->find('all'); 
        $this->set('palestras', $palestras);                        
    } 
    
    public function cadastrar(){
        
        if ($this->request->isPost()){
            $this->Palestra->create();
            if ($this->Palestra->save($this->request->data)) {          
                $this->Session->setFlash('Palestra cadastrada com sucesso');                              
            }
            else
                $this->Session->setFlash('Palestra não cadastrada');              
        }
    }
}
?>
