<?php
    class Signup{
        private $error = "";
        public function evaluate($data){
            foreach($data as $key => $value){
                if(empty($value)){
                    $this->error = $this->error . $key . " is empty! <br>";
                }
            }

            if($this->error == ""){
                $this->createUser($data);
            }else{
                return $this->error;
            }
        }

        public function createUser($data){
            $firstName = $data['firstName'];
            $lastName = $data['lastName'];
            $email = $data['email'];
            $pass = $data['password'];
            $url_address = strtolower($firstName) . "." . strtolower($lastName);
            $userid = $this->create_userid();

            $query = " insert into userTable (userid, firstName, lastName, email, pass, url_address) 
            values ('$userid','$firstName', '$lastName', '$email', '$pass', '$url_address' )";

            
            $DB = new Database();
            $DB->save($query);
        }

        private function create_userid(){
            $length = rand(4,19);
            $number = "";
            for($i = 0; $i < $length; $i++){
                $new_rand = rand(0,9);
                $number = $number . $new_rand;
            }

            return $number;
        }
    }
?>