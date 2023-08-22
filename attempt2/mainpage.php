<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body id="page-top">
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" nonce="PC6CMo8O"></script>
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
                        <li class="nav-item"><a class="nav-link" href="Proc&Triggers.php">Proc&Triggers</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <header class="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                        <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">
                            <br/><br/>
                                <iframe width="820" height="615"
                                src="https://www.youtube.com/embed/dQw4w9WgXcQ">
                                </iframe> 
                            <br/><br/>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
    <br/><br/>
    <section class="projects-section bg-light" id="projects">
            <div class="container px-4 px-lg-5">
                <div class="d-flex justify-content-center">
                        <div class="text-center">
                            <h4 align="center">Mp4 Local</h4>
                            <video align="center" width="320" height="240" controls>
                                <source src="multimedia/movie.mp4" type="video/mp4">
                            </video> 
                        </div>
                    <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="box_count" data-action="like" data-size="large" data-share="true"></div>
                </div>
                <!-- Project One Row-->
                <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="template/assets/img/xd02.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Mp3 Local</h4>
                                    <audio controls>
                                       <source src="multimedia/DT.mp3" type="audio/mpeg">
                                    </audio>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6"><img class="img-fluid" src="template/assets/img/xd03.jpg" alt="..." /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Upload File</h4>
                                    <div id="content">
                                        <form action="upload.php" method="post" enctype="multipart/form-data">
                                          Select image to upload:
                                          <input type="file" name="fileToUpload" id="fileToUpload">
                                          <input type="submit" value="Upload Image" name="submit">
                                        </form>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <br/><br/>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Canvas</h4>
                                    <br/>
                                    <div id="content">
                                        <canvas id="myCanvas" width="300" height="150" style="border:1px solid #000000;"></canvas>
                                        <script>
                                        var canvas = document.getElementById("myCanvas");
                                        var ctx = canvas.getContext("2d");
                                        ctx.fillStyle = "#df2020";
                                        ctx.fillRect(0, 0, 300, 150);
                                        ctx.fillStyle = "#ffe400";
                                        ctx.fillRect(0, 0, 200, 150);
                                        ctx.fillStyle = "#0000ff";
                                        ctx.fillRect(0, 0, 100, 150);
                                        </script>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                <br/><br/>
                <div class="row gx-0 justify-content-center">
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">SVG</h4>
                                    <br/>
                                    <div id="content"   >
                                        <svg height="130" width="500">
                                        <defs>
                                          <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                                            <stop offset="0%" style="stop-color:rgb(255,255,255);stop-opacity:1" />
                                            <stop offset="100%" style="stop-color:rgb(255,0,0);stop-opacity:1" />
                                          </linearGradient>
                                        </defs>
                                        <ellipse cx="225" cy="70" rx="120" ry="55" fill="url(#grad1)" />
                                        <text fill="#000000" font-size="45" font-family="Verdana" x="122" y="86">Nemylas</text>
                                        Sorry, your browser does not support inline SVG.
                                      </svg>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>   
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