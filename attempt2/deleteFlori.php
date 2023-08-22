<?php
require_once 'connection2.php';
$sql1 = "DROP PROCEDURE IF EXISTS deleteFlori";
$sql2="CREATE PROCEDURE deleteFlori(
    IN strNume varchar(30)
    )
     BEGIN
     DELETE FROM flori WHERE nume=strNume;
    END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();
//////////////////////////////////////////////////
$sql3="DROP TRIGGER IF EXISTS TriggerADelete";
$sql4="CREATE TRIGGER TriggerADelete AFTER DELETE ON flori FOR EACH ROW
BEGIN
INSERT INTO flower_update(nume,status,edtime) VALUES(OLD.nume,'DELETED', NOW());
END;"; 
$stmt3=$con->prepare($sql3);
$stmt4=$con->prepare($sql4);
$stmt3->execute();
$stmt4->execute();
/////////////////////////////////////////////////
$nume='trandafiri';
$sql="CALL deleteFlori('{$nume}')";
$q=$con->query($sql);

?>

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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="mainpage.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="cookie.php">Cookie</a></li>
                        <li class="nav-item"><a class="nav-link" href="bdd.php">Baze de Date</a></li>
                        <li class="nav-item"><a class="nav-link" href="leaflet.html">Leaflet</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="hero-title"> Data was succesfully deleted! <br/> <span class="highlight"><a href="Proc&Triggers.php">Back</a></span></h1>
                    </div>
                </div>
            </div>
        </header>
    <br/><br/>
</body>
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
</html>