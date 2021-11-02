<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Custom Css Link -->
    <link rel="stylesheet" href="login.css">
    <!-- Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/dcc6da25ef.js" crossorigin="anonymous"></script>
</head>
<body>
<section <?php if(isset($_GET["faild"])){
    echo "style='display:none'";
}?> id="login">
    <div class="container">
        <div class="main-box-login">
            <h3 class="form-heading">Login Hare</h3>
            <div class="flex-box light-bg o-hidden b-shadow">
                <div class="form-right-box"></div>

                <div class="form-left-box">
                    <form action="content/singup_core.php" id="main-form" method="POST">
                        <h2 class="form-margin"></h2>
                        <div class="form-data-box">
                            <label for="email" class="form-label-title">Enter Username</label>
                            <input type="text" id="email" class="form-input" name="login-email" placeholder="Example@gmail.com">
                        </div>

                        <div class="form-data-box p-r">
                            <label for="password" class="form-label-title">Enter Your password</label>
                            <input type="password" name="login-password" id="login-password" class="form-input" placeholder="Enter Your Password">
                            <i onclick='showPwd("login-password","eye-0")' id="eye-0" class="fas fa-eye p-a"></i>
                        </div>

                        <div class="form-data-box">
                            <input type="submit" value="Login" class="btn-input color-btn color-btn-bg" name="login-submit">
                        </div>

                        <div class="form-data-box">
                            <span class="main-text" id="go-singup" style="color: #555;cursor: pointer;" onclick="showsingup()">I Want To Create A Account!</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section <?php if(isset($_GET["faild"])){
    echo "style='display:block'";
}?> id="singup" style="display:none">
    <div class="container">
        <div class="main-box-login" style="height: 75vh;">
            <h3 class="form-heading">Sing Up Form</h3>
            <div class="flex-box light-bg b-shadow o-hidden">
                <div class="form-right-box" style="height: 80vh;"></div>

                <div class="form-left-box">
                    <form action="content/singup_core.php" id="main-form" method="POST">
                        <h2 class="form-margin"></h2>
                        <div class="flex-box">
                            <div class="form-data-box">
                                <label for="full-name" class="form-label-title">Full Name:</label>
                                <input required type="text" class="form-input" id="full-name" name="full-name" placeholder="Example Md Zahid">
                            </div>

                            <div class="form-data-box">
                                <label for="username" class="form-label-title">Username</label>
                                <input required type="text" class="form-input" name="username" id="username" placeholder="Enter Username">
                            </div>
                        </div>

                        <div class="form-data-box">
                            <label for="email" class="form-label-title">Enter Email Account</label>
                            <input required type="email" id="email" class="form-input" name="login-email" placeholder="Example@gmail.com">
                        </div>

                        <div class="flex-box">
                            <div class="form-data-box p-r">
                                <label for="password" class="form-label-title">Enter password</label>
                                <input required type="password" name="new-password" id="new-password" class="form-input" placeholder="Enter Your Password">
                                <i onclick='showPwd("new-password","eye-1")' id="eye-1" class="fas fa-eye p-a"></i>
                            </div>

                            <div class="form-data-box p-r">
                                <label for="comfirm-password" class="form-label-title">Comfirm Password</label>
                                <input required type="password" name="cm-password" id="comfirm-password" class="form-input" placeholder="Enter Comfirm Password">
                                <i onclick='showPwd("comfirm-password","eye-2")' id="eye-2" class="fas fa-eye p-a"></i>
                            </div>
                        </div>

                        <div class="form-data-box">
                            <label for="address" class="form-label-title">Your Address</label>
                            <input required type="text" class="form-input" id="address" placeholder="Example Tongi Gazipur" name="address">
                        </div>

                        <div class="form-data-box">
                            <label for="country" class="form-label-title">Your Country Name</label>
                            <select required name="country-name" id="country" class="form-input">
                                <option>-Select Your Country Name-</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Indea">Indea</option>
                                <option value="USA United Stated">USA United Stated</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Srilanka">Srilanka</option>
                            </select>
                        </div>

                        <div class="form-data-box">
                            <input type="submit" value="Sing Up" class="btn-input color-btn color-btn-bg" name="singup-btn">
                        </div>
                        <div class="form-data-box">
                            <span class="main-text" id="go-login" style="color: #555;cursor: pointer;" onclick="showLogin()">I Have an Account!</span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    function showLogin(){
        let id = document.getElementById("login");
        let singup = document.getElementById("singup");
        id.style.display='block';
        singup.style.display='none';
    }

    function showsingup(){
        let login = document.getElementById("login");
        let id = document.getElementById("singup");
        id.style.display='block';
        login.style.display='none';
    }

    function showPwd(n,id){
        let input = document.getElementById(n);
        let eye = document.getElementById(id);
        if(input.type === "password"){
            input.type='text';
            eye.classList.add("fa-eye-slash");
        }else{
            input.type='password';
            eye.classList.remove("fa-eye-slash");
        }
    }
</script>
</body>
</html>