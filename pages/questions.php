<?php
/**
Coder: Florendo,Edson M.
Description:
    Class for question for management between each randomize;
**/
    class questions{
        private $id;
        private $question;
        private $answer;
        
        
    public function __construct($id, $question, $answer){
        $this->id = $id;
        $this->question = $question;
        $this->answer = $answer;
    }
    
    public function get_Id(){
        return $this->id;
    }
        
    public function get_question(){
        return $this->question;
    }
        
    public function get_answer(){
        return $this->answer;
    }
        
    }
?>