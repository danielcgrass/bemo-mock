<?php
    class Account{
        private $con;
        private $errorArray;

        public function login($un, $pw) {
            $pw = md5($pw);

            $query = mysqli_query($this->con, "SELECT * FROM users WHERE username= '$un' AND PASSWORD='$pw'");
            if(mysqli_num_rows($query) == 1) {
                return true;
            }
            else {
                array_push($this->errorArray, Constants::loginFailed);
                return false;
            }
        }
        public function __construct($con) {
            $this->con = $con;
            $this->errorArray = array();
        }

        public function getError($error) {
            if(!in_array($error, $this->errorArray)){
                $error = "";
            }
            return "<span class='errorMessage'>$error</span>";
        }
    }
?>