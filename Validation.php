<?php 

class Validation {
    private $recomended = 'yes';
    private $notRecomended = 'no';

    public function getRecomended() {
        return $this->recomended;
    }
    public function setRecomended($recomended){
        $this->recomended=$recomended;
    }
   
    public function getNotRecomended() {
        return $this->notRecomended;
    }
    public function setNotRecomended($notRecomended){
        $this->notRecomended=$notRecomended;
    }

    public function validate($post) {
        $message = '';
        if(empty($post["full_name"])){
            $message .= 'Full Name is required ';
        }

        if(empty($post["email"])){
            $message .='Email is required ';
        } else {
            if (!filter_var($post["email"], FILTER_VALIDATE_EMAIL)) {
                $message .='Invalid email format ';
            }
        }
        return $message;
    }
}