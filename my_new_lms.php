<?php
session_start();

if (isset($_SESSION['login']) and $_SESSION['login']) {
    header('Location: homepage.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>LMS</title>
    <link rel="icon" type="image/png" href="images/icons/sltc.ico"/>
    <link rel="stylesheet" href="style.css">

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        #login-form {
            display: flex;
            align-items: center;
            flex-direction: column;
            height: 100vh;
        }

        .full-page {
            /* height: 100%; */
            width: 100%;
            background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('img/01.jpg');
            background-position: center;
            background-size: cover;
            position: absolute;
        }

        .navbar {
            display: flex;
            align-items: center;
            padding: 20px;
            padding-left: 50px;
            padding-right: 30px;
            /* padding-top: 50px; */
        }

        nav {
            flex: 1;
            text-align: right;
        }

        nav ul {
            display: inline-block;
            list-style: none;
        }

        nav ul li {
            display: inline-block;
            margin-right: 70px;
        }

        nav ul li a {
            text-decoration: none;
            font-size: 20px;
            color: white;
            font-family: sans-serif;
        }

        nav ul li button {
            font-size: 20px;
            color: white;
            outline: none;
            border: none;
            background: transparent;
            cursor: pointer;
            font-family: sans-serif;
            font-weight: bold;
        }

        nav ul li button:hover {
            color: aqua;
        }

        nav ul li a:hover {
            color: aqua;
        }

        a {
            text-decoration: none;
            color: rgb(255, 255, 255);
            font-size: 28px;
            font-weight: bold;
        }

        /* #login-form {
            display: none;
        } */

        .form-box {
            width: 380px;
            height: 650px;
            position: absolute;
            margin: 2% auto;
            background: #ffffffbd;
            overflow: hidden;
            border-radius: 9px;
        }

        .button-box {
            width: 220px;
            margin: 35px auto;
            position: relative;
            /* box-shadow: 0 0 20px 9px #ff61241f; */
            border-radius: 30px;
        }

        .toggle-btn {
            padding: 10px 30px;
            cursor: pointer;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }

        #btn {
            top: 0;
            left: 0;
            position: absolute;
            width: 100px;
            height: 100%;
            background: #4f5161;
            border-radius: 30px;
            transition: .5s;
        }

        .input-group-login {
            top: 170px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .input-group-register {
            top: 95px;
            position: absolute;
            width: 280px;
            transition: .5s;
            background: transparent;
        }

        .input-field {
            width: 100%;
            padding: 13px 0;
            margin: 5px 0;
            border-left: 0;
            border-top: 0;
            border-right: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: #bcbbbb8c;
            color: black;
            opacity: 1;
        }

        .submit-btn {
            width: 85%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: #4f5161;
            border: 0;
            outline: none;
            border-radius: 30px;
        }

        .check-box {
            margin: 30px 10px 34px 0;
        }

        span {
            color: #0f0f0f;
            font-size: 14px;
            bottom: 68px;
            /* position: absolute; */
            font-family: sans-serif;
            font-weight: bold;
            margin-top: -3px;
        }

        #login {
            left: 50px;
        }

        #login input {}

        #register {
            left: 450px;
        }

        #register input {
            /* color: white;
            font-size: 15; */
        }

        .scan-qr {
            padding: 10px;
            font-size: 10px;
            text-align: center;
            /* width: 111%; */
            background-color: #009688;
            display: block;
            border-radius: 30px;
            margin: 13px 22px;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div class="full-page">
        <div class="navbar">
            <div>
                <a href='website.html'>Laundry Management System</a>
            </div>
            <nav>
                <ul id='MenuItems'>
                    <li><a href='#'>About Us</a></li>
                    <li><a href='#'>Services</a></li>
                    <li><a href='#'>Contact</a></li>

                </ul>
            </nav>
        </div>
        <div id='login-form' class='login-page'>
            <div class="form-box">
                <div class='button-box'>
                    <div id='btn'></div>
                    <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
                    <button type='button' onclick='register()' class='toggle-btn'>Register</button>
                </div>

                <form id='login' action="login.php" method="POST" class='input-group-login'>
                    <input type='text' class='input-field' placeholder='Student ID' autocomplete='off' name="student_id" required>
                    <input type='password' class='input-field' placeholder='Password' name="password" required>
                    <div class="text-center">
                        <label class="text-center">
                            <input type='checkbox' class='check-box'><span>Remember Password</span>
                        </label>
                    </div>
                    <button type='submit' class='submit-btn' name="login">Log in</button>
                    <a href="scanQRcode.php" class='scan-qr' name="login">Use Qr Code to Login</a>
                </form>


                <form id='register' action="register.php" method="POST" class='input-group-register'>

                    <input type='text' autocomplete="off" class='input-field' placeholder='First Name' name="first_name" required>
                    <input type='text' class='input-field' placeholder='Last Name ' name="last_name" required>
                    <input type='text' class='input-field' placeholder='Address' name="address" required>
                    <input type='text' class='input-field' placeholder='Contact Number' name="contact_number" required>
                    <input type='email' class='input-field' placeholder='Email' name="email" required>
                    <input type='text' class='input-field' placeholder='Student ID' name="student_id" required>
                    <input type='password' class='input-field' placeholder='Enter Password' name="password" required>
                    <input type='password' class='input-field' placeholder='Confirm Password' name="con_password" required>
                    <div class="text-center">
                        <label class="text-center">
                            <input type='checkbox' class='check-box' name="terms"><span>I agree to the terms and conditions</span>
                        </label>
                    </div>
                    <button type='submit' class='submit-btn' name="register">Register</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register() {
            x.style.left = '-400px';
            y.style.left = '50px';
            z.style.left = '104px';
        }

        function login() {
            x.style.left = '50px';
            y.style.left = '450px';
            z.style.left = '0px';
        }
    </script>
    <!-- <script>
        var modal = document.getElementById('login-form');
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->
</body>

</html>