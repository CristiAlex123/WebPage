<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Baze de Date</title>
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
                        <li class="nav-item"><a class="nav-link" href="mainpage.php">Back</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">Baze de Date</h1>
                        <section>
                        <br/><br/>
                        <form name="search_form" method="post" action="search.php">
                            <input type="text" name="search_box" value=""/>
                            <input type="submit" name="search" value="Search">
                            <input type="reset" value="Reset"/>
                        </form>
                        <br/>
                        <?php
                            include 'connection.php';
                            $sql='SELECT * FROM images;';
                            $query= mysqli_query($con,$sql)or die(mysqli_error($con));
                            ?>
                            <table align='center'>
                                <tr>
                                    <th>Nume</th>
                                    <th>Imagine</th>
                                    <th colspan ="3" align='center'>Actions</th>
                                </tr>
                            <?php
                            while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr style='border-bottom: 1px solid black;'>
                                    <td><?php echo $row['title'];?></td>
                                    <td><img src='<?php echo $row['image'];?>'></td>
                                    <td>
                                    <?php echo "<a href=\"viewimage.php?id=".$row['id']."\">View</a>
                                    <a href=\"deleteimage.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
                                    </td>
                                </tr>
                            <?php } ?>
                            </table>
                            <br/><br/>
                            <a href='uploadimage.php'>Upload another image</a>
                            <br/><br/>
                    </section>
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