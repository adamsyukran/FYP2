<?php
    require_once '../../PHP/config.php';
    require '../../PHP/functions.php';
    ob_start();
    session_start();
    $_SESSION['code']="empty";
    $msg = '';                    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Stream Pintar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="../../Stylesheet/stylesheet.css" />
        <style>
            .btn {
                margin:10px 5px 10px 0px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style="font-size:2rem"><strong><span style="color:rgb(0,255,177)">Stream </span><span style="color:yellow">Pintar</span></strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><strong><span style="color:rgb(0,255,177)">Stream </span><span style="color:yellow">Pintar</span></strong></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Add
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="addstudents.php">Students</a></li>
                                    <li><a class="dropdown-item" href="addclassrooms.php">Class</a></li>
                                    <li><a class="dropdown-item" href="addstreams.php">Stream</a></li>
                                    <li><a class="dropdown-item" href="addsubjects.php">Subject</a></li>
                                    <li><a class="dropdown-item" href="addpackages.php">Package</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Manage
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="managestudents.php">Students</a></li>
                                    <li><a class="dropdown-item" href="manageclassrooms.php">Class</a></li>
                                    <li><a class="dropdown-item" href="managestreams.php">Stream</a></li>
                                    <li><a class="dropdown-item" href="managesubejcts.php">Subject</a></li>
                                    <li><a class="dropdown-item" href="managepackages.php">Package</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        
        <div class="card bg-dark" style="width: 70%; margin: auto; padding:8px">
        <h2 class="text-light">Enter your results:</h2>
            <div class="card bg-secondary-subtle" style="width:90%; margin:auto">
                <div class="card-body bg-dark-subtle">  
                    <form method="post" action="../../PHP/recommend.php">
                        <label for="malay">Bahasa Melayu</label>
                        <select name="malay" id="malay" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <label for="english">Bahasa Inggeris</label>
                        <select name="english" id="english" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <label for="science">Science</label>
                        <select name="science" id="science" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <label for="math">Mathematics</label>
                        <select name="math" id="math" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <label for="history">History</label>
                        <select name="history" id="history" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <label for="geography">Geography</label>
                        <select name="geography" id="geography" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <label for="lifeskills">Kemahiran Hidup</label>
                        <select name="lifeskills" id="lifeskills" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <label for="religion">Religion</label>
                        <select name="religion" id="religion" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <label for="arts">Arts</label>
                        <select name="arts" id="arts" class="form-select">
                        <option value="" disabled selected>Select your grade...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F">F</option>
                        </select>
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <br>
        <div class="container text-light">
        <footer class="py-5 text-light">
            <div class="row">
            <div class="col-6 col-md-2 mb-3">
                <h5>Test</h5>
                <ul class="nav flex-column">
                <li style="color:red" class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light" style="color:red">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
                </ul>
            </div>
            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
            <p>© 2023 Stream Pintar, Sdn. Bhd. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
                <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
            </ul>
            </div>
        </footer>
        </div>
        
        <script
        src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"
        ></script>
        <script
        src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"
        ></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>
