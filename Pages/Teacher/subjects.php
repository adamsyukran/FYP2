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
        <title>Add Subjects</title>
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
        
        <div class="card" style="width: 70%; margin: auto">
            <div class="card-body">
                
                <h2>Create new subject:</h2>
                <br />
                <div class="container bg-light">
                    <form method="post">
                        <br>
                        <label label for="subjectname" class="form-label">Subject name</label>
                        <input type="text" id="subjectname" class="form-control" name="subjectname">
                        <br>
                        <label for="subjecttype">Subject Type</label>
                        <select id="subjecttype" name="subjecttype" class="form-select">
                            <option value="" disabled selected>Select type...</option>
                            <option value="Core">Core</option>
                            <option value="Compulsory">Compulsory</option>
                            <option value="Elective">Elective</option>
                        </select>
                        <br>
                        <label for="subjectcategory">Subject category</label>
                        <select id="subjectcategory" name="subjectcategory" class="form-select">
                            <option value="" disabled selected>Select category...</option>
                            <option value="Form 1">Form 1</option>
                            <option value="Form 2">Form 2</option>
                            <option value="Form 3">Form 3</option>
                            <option value="Form 4">Form 4</option>
                            <option value="Form 5">Form 5</option>
                        </select>
                        <br>
                        <label for="streamID">Subject stream</label>
                        <select id="streamID" name="streamID" class="form-select">
                        <option value="" disabled selected>Select stream...</option>
                            <?php
                                $sql = "SELECT * FROM `stream`";
                                $result = $mysqli->query($sql);
                                if($result->num_rows>0){
                                $counter=1;
                                while($rows = $result->fetch_assoc()){
                                echo "<option value = '".$counter."'>";
                                echo $rows['streamName'];
                                echo "</option>";
                                $counter++;
                                }
                                }
                            ?>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-primary" name="Submit">Add new subject</button>
                    </form>
                    <?php
                        if (isset($_POST["Submit"])){
                        $sql = "INSERT INTO `subject_stream`(`subjectName`, `subjectType`, `subjectCategory`, `streamID`) VALUES ('".$_POST["subjectname"]."','".$_POST["subjecttype"]."','".$_POST["subjectcategory"]."','".$_POST["streamID"]."')";
                        $mysqli->query($sql);
                        }
                    ?>
                    <br>
                </div>
            </div>
        </div>
        <br>
        <div class="bg-light" style="width:100%">
            <div class="container">
                <footer class="row row-cols-5 py-5 my-5 border-top">
                    <div class="col">
                        <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                        </a>
                        <p class="text-muted">Stream Pintar © 2023</p>
                    </div>

                    <div class="col">

                    </div>

                    <div class="col">
                        <h5>Add</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="addstudents.php" class="nav-link p-0 text-muted">Student</a></li>
                        <li class="nav-item mb-2"><a href="addclassrooms.php" class="nav-link p-0 text-muted">Class</a></li>
                        <li class="nav-item mb-2"><a href="addstreams.php" class="nav-link p-0 text-muted">Stream</a></li>
                        <li class="nav-item mb-2"><a href="addsubejcts.php" class="nav-link p-0 text-muted">Subject</a></li>
                        <li class="nav-item mb-2"><a href="addpackages.php" class="nav-link p-0 text-muted">Package</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Manage</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="managestudents.php" class="nav-link p-0 text-muted">Student</a></li>
                        <li class="nav-item mb-2"><a href="manageclassrooms.php" class="nav-link p-0 text-muted">Class</a></li>
                        <li class="nav-item mb-2"><a href="managestreams.php" class="nav-link p-0 text-muted">Stream</a></li>
                        <li class="nav-item mb-2"><a href="managesubjects.php" class="nav-link p-0 text-muted">Subject</a></li>
                        <li class="nav-item mb-2"><a href="managepackages.php" class="nav-link p-0 text-muted">Package</a></li>
                        </ul>
                    </div>

                    <div class="col">
                        <h5>Contact us</h5>
                        <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">support@streampintar.com</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">012-123-456</a></li>
                        <li class="nav-item mb-2">
                            <a href="#" class="nav-link p-0 text-muted">
                                Management and Science University DU019(B)
                                University Drive, Off Persiaran Olahraga,
                                Section 13, 40100 Shah Alam,
                                Selangor Darul Ehsan, Malaysia
                            </a>
                        </li>
                        </ul>
                    </div>
                </footer>
            </div>
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
