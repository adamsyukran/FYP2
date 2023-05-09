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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../Stylesheet/stylesheet.css" />
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Stream Pintar - Teacher</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarText"
        aria-controls="navbarText"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Add<span class="sr-only">(current)</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="addstreams.php">Streams</a>
            <a class="dropdown-item" href="addsubjects.php">Subjects</a>
            <a class="dropdown-item" href="addpackages.php">Packages</a>
            <a class="dropdown-item" href="addstudents.php">Students</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Manage
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="managestreams.php">Streams</a>
            <a class="dropdown-item" href="managesubjects.php">Subjects</a>
            <a class="dropdown-item" href="managepackages.php">Packages</a>
            <a class="dropdown-item" href="managestudents.php">Students</a>
          </div>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Placeholder</a>
          </li>
        </ul>
        <span class="navbar-text"><em>"Smart decisions lead to success..."</em>  </span>
      </div>
    </nav>
    <br /><br />
    <div class="card" style="width: 70%; margin: auto">
      <div class="card-body">
        <h2>Add new students</h2>
        <?php
            $row_num = 12; // row number
            $col_num = 8; // column number
            $row_count = 0; // initialize row count

            // open the CSV file
            $csv_file = fopen("Book1.csv", "r");

            // read and discard the first 6 rows
            while ($row_count < $row_num - 1 && ($data = fgets($csv_file)) !== false) {
                $row_count++;
            }

            // read the desired row
            if (($data = fgetcsv($csv_file)) !== false) {
                // access the desired column
                $cell_value = $data[$col_num - 1];
                echo "Value at row $row_num, column $col_num: $cell_value";
            } else {
                echo "Row $row_num not found in the CSV file.";
            }

            // close the CSV file
            fclose($csv_file);
        ?>
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
