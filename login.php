<!DOCTYPE html>
<html lang="en">
<?php  require('includes/head.php') ; ?>
<body class="animsition">
    <div class="page-wrapper">>
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                    <?php
                        $error = (isset($_GET['error'])) ? $_GET['error'] : 0;
                        if ($error == 1) {
                            echo '<div class="alert alert-danger" role="alert">There was a problem, please log in!</div>';
                        }elseif ($error == 2) {
                            echo '<div class="alert alert-success" role="alert">You have logged out successfully!</div>';
                        }
                    ?>
                        <div class="login-logo">
                            <a href="#">
                                Logo Goes Here
                                <!-- <img src="images/icon/logo.png" alt="CoolAdmin"> -->
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="login_action.php" method="post">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                        <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/jquery.php') ; ?>
</body>
</html>
<!-- end document-->