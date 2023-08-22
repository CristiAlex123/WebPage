<?php
session_start();
global $number1, $number2, $sum;
$number1 = rand(1,9);
$number2 = rand(1,9);
$sum = $number1 + $number2;
$_SESSION['xd']=$sum;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Page</title>
        <link rel="icon" type="image/x-icon" href="template/assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="template/css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Masthead-->
        <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">User login page</h1>
                            <form name="login" method="post" action="login.php">
                                Username: <input type="text" name="username"><br>
                                Password: <input type="password" name="password"><br>
                                <form method='post' action='pag1.php'>​

                                        <input type="hidden" name="correctsum" value="<?php echo $sum; ?>"/>​

                                        <?php echo $number1.' + '.$number2.' = '; ?>​

                                        <input type="text" name="captcha" /><br/>​
                                        
                                        Remember Me: <input type="checkbox" name="rememberme" value="1"><br>

                                        <input type="submit" name="submit" value="Login"/>​

                                     </form>
                                 </form>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Your Website 2022</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="template/js/scripts.js"></script>
        <script src="js/script1.js"></script>
        <script src="js/script2.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>