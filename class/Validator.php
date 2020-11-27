<?php 

class Validator{

    private $data;
    private $errors =[];

    public function __construct($data){

        return $this->data = $data;
    }


    private function getField($field){

        if(!isset($this->data[$field])){

            return null;
        }
        return $this->data[$field];
    }


    public function isAlpha($field, $errorsMsg){

        if(!preg_match('/^[a-zA-Z0-9_]+$/', $this->getField($field))){
            $this->errors[$field] = $errorsMsg;
            
        }
        
    }

   /* public function isUniq($field, $db, $table, $errorMsg){

        $records = $db->query("SELECT id FROM $table WHERE $field=?", [$this->getField($field]))->fetch();

    }
    */

    public function isEmail($field, $errorsMsg){

        if (!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)){

            $this->errors[$field] = $errorsMsg;
            
        }
    }

    public function isConfirmed($field, $errorsMsg=''){
        
        $value = $this->getField($field);
        
        if (empty($value) || $value != $this->getField($field)) {

            $this->errors[$field] = $errorsMsg;
            
        }
    }

    public function isvalid(){

        return empty($this->errors);
    }

    public function getErros(){

        return $this->errors;
    }
}