<?php
    if(isset($_POST["singup-btn"])) {
        require_once("../database/DBcontrolar.php");
        $db = new DBcontrolar;
        $db->con;

        class singup
        {
            private $name;
            private $uname;
            private $email;
            private $npwd;
            private $cmpwd;
            private $addr;
            private $cname;
            private $dbname;

            public function __construct($db)
            {
                if (!isset($db->con)) return NULL;
                $this->dbname = $db;
                $this->name = htmlentities(htmlspecialchars($_POST["full-name"]));
                $this->uname = htmlentities(htmlspecialchars($_POST["username"]));
                $this->email = htmlentities(htmlspecialchars($_POST["login-email"]));
                $this->npwd = htmlentities(htmlspecialchars($_POST["new-password"]));
                $this->cmpwd = htmlentities(htmlspecialchars($_POST["cm-password"]));
                $this->addr = htmlentities(htmlspecialchars($_POST["address"]));
                $this->cname = htmlentities(htmlspecialchars($_POST["country-name"]));
            }

            public function checkall()
            {
                //Check Full Name
                if ($this->name == '') {
                    header("Location: ../login.php?faild=name");
                }
                //check Username
                if ($this->uname == '') {
                    header("Location: ../login.php?faild=username");
                }
                //check Email
                if ($this->email == '') {
                    header("Location: ../login.php?faild=email");
                }
                //check New Password
                if ($this->npwd == '') {
                    header("Location: ../login.php?faild=newpass");
                }
                //check Comfirm Password
                if ($this->cmpwd == '') {
                    header("Location: ../login.php?faild=comfirmpass");
                }
                //Check New Password are minimum 8 charecter
                if (strlen($this->npwd) < 7) {
                    header("Location: ../login.php?faild=newpassminimam8");
                }
                //Check Comfirm Password are minimum 8 charectar
                if (strlen($this->cmpwd) < 7) {
                    header("Location: ../login.php?faild=comfirmpassminimum8");
                }
                //Check Address
                if ($this->addr == '') {
                    header("Location: ../login.php?faild=address");
                }
                //Check Country Name
                if ($this->cname == '') {
                    header("Location: ../login.php?faild=countryname");
                }

            }

            public function insertData()
            {
                //Check Full Name
                if ($this->name == '') {
                    header("Location: ../login.php?faild=name");
                }
                //check Username
                if ($this->uname == '') {
                    header("Location: ../login.php?faild=username");
                }
                //check Email
                if ($this->email == '') {
                    header("Location: ../login.php?faild=email");
                }
                //check New Password
                if ($this->npwd == '') {
                    header("Location: ../login.php?faild=newpass");
                }
                //check Comfirm Password
                if ($this->cmpwd == '') {
                    header("Location: ../login.php?faild=comfirmpass");
                }
                //Check New Password are minimum 8 charecter
                if (strlen($this->npwd) < 7) {
                    header("Location: ../login.php?faild=newpassminimam8");
                }
                //Check Comfirm Password are minimum 8 charectar
                if (strlen($this->cmpwd) < 7) {
                    header("Location: ../login.php?faild=comfirmpassminimum8");
                }
                //Check Address
                if ($this->addr == '') {
                    header("Location: ../login.php?faild=address");
                }
                //Check Country Name
                if ($this->cname == '') {
                    header("Location: ../login.php?faild=countryname");
                }


                //Create Table If Not Exists
                $this->dbname->con->query("CREATE TABLE IF NOT EXISTS alluser(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,fullname VARCHAR(90) NOT NULL,username VARCHAR(100) NOT NULL,email VARCHAR(100) NOT NULL,password VARCHAR(150) NOT NULL,addressone VARCHAR(250) NOT NULL,addressTwo VARCHAR(250) NOT NULL,country VARCHAR(200),time TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP)");
                //Convert Username to Lowercase String
                $username = strtolower($this->uname);

                //check new password or comfirm password
                if ($this->npwd !== $this->cmpwd) {
                    header("Location: ../login.php?faild=passwordNotMatch");
                } else {
                    $create = $this->cmpwd;
                }

                //select query for check email exists or not
                $checkEmail = $this->dbname->con->query("SELECT * FROM alluser WHERE email='$this->email'");
                $checkUser = $this->dbname->con->query("SELECT * FROM alluser WHERE username='$this->uname'");
                $numuser = mysqli_num_rows($checkUser);
                $num = mysqli_num_rows($checkEmail);
                if($num === 0){
                    //check Youser Name
                    if($numuser === 0 ){
                        //Insert Data In Database
                        $insert = $this->dbname->con->query("INSERT INTO `alluser`(`fullname`, `username`, `email`, `password`, `addressone`, `country`) VALUES ('$this->name','$username','$this->email','$create','$this->addr','$this->cname')");
                        if ($insert == true) {
                            header("Location: ../login.php?successFullCreate");
                        } else {
                            echo "Don't Run This Query";
                        }
                    }else{
                        //redirect to singup form
                        header("Location: ../login.php?faild=sorryThisUserExists");
                    }
                }else{
                    //redirect to singup form
                    header("Location: ../login.php?faild=sorryThisEmailExists");
                }

            }

        }

        $run = new singup($db);
        $run->checkall();
        $run->insertData();
    }
    if(isset($_POST["login-submit"])){
        require_once("../database/DBcontrolar.php");
        $db = new DBcontrolar;
        $db->con;
        class login{
            private $login_email;
            private $login_pass;

            public function __construct()
            {
                $this->login_email = htmlentities(htmlspecialchars($_POST["login-email"]));
                $this->login_pass = htmlentities(htmlspecialchars($_POST["login-password"]));
            }

            public function login($db){
                //Check Login Email
                $check = $db->con->query("SELECT * FROM alluser WHERE email='$this->login_email'");
                $result = $check->fetch_assoc();
                $password = $result["password"];
                //Check Password
                if($password === $this->login_pass){
                    session_start();
                    $id = $_SESSION["userid"] = $result["id"];
                    header("location: ../?success");
                }else{
                    header("Location: ../login.php?WrongInfo");
                }

            }
        }
        $login = new login();
        $login->login($db);
    }