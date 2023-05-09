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
        
        <div class="card bg-dark" style="width: 70%; margin: auto">
            <div class="card-body">
                
                <h2 class="text-light">Offered streams:</h2>

                <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <!-- -->
                    <button class="bg-dark-subtle text-dark fs-5 fw-bold accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Pure Science Stream
                    </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body bg-dark">
                            <p class="fs-5 fw-bold text-light">Requirements: </p>
                            <table class="table table-dark table-striped table-bordered offeredTables">
                            <thead class="thead-dark">
                                <tr>
                                <th class="col-md-auto" scope="col">Subject</th>
                                <th class="col-md-auto" scope="col">Grade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Science</td>
                                <td>B</td>
                                </tr>
                                <tr>
                                <td>Mathematics</td>
                                <td>B</td>
                                </tr>
                            </tbody>
                            </table>
                            <p class="fs-5 text-light fw-bold">Electives: </p>
                            <table class="table table-dark table-striped table-bordered offeredTables">
                            <thead>
                                <tr>
                                <th class="col-md-auto" scope="col">Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>Additional Mathematics</td>
                                </tr>
                                <tr>
                                <td>Biology</td>
                                </tr>
                                <tr>
                                <td>Chemistry</td>
                                </tr>
                                <tr>
                                <td>Physics</td>
                                </tr>
                            </tbody>
                            </table>
                            <p class="fs-5 text-light fw-bold">Compulsory: </p>
                            <table class="table table-dark table-striped table-bordered offeredTables">
                            <thead>
                                <tr>
                                <th class="col-md-auto" scope="col">Subject</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>English</td>
                                </tr>
                                <tr>
                                <td>Bahasa Melayu</td>
                                </tr>
                                <tr>
                                <td>Mathematics</td>
                                </tr>
                                <tr>
                                <td>History</td>
                                </tr>
                                <tr>
                                <td>Islamic Education</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="bg-dark-subtle text-dark fs-5 fw-bold accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Sub Science Stream
                    </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="bg-dark-subtle text-dark fs-5 fw-bold accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accounting Stream
                    </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                    </div>
                </div>
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
