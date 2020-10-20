<!doctype html>
<html lang="en">
<head>
    <!-- gets current page to set which page is active for the navbar -->
    <?php 
        $currentURL = $_SERVER['REQUEST_URI'];
    ?>

    <title>PHP Project 1 <?php echo $currPage; ?></title>

    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>


    <header class="header">
        <!-- main navbar inside header -->
        <nav class="navbar navbar-expand-sm main-navbar navbar-dark bg-dark">

            <!-- project name -->
            <a class="navbar-brand" href="./index.php">PHP Project 1</a>

            <!-- navbar toggler button -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="mynavbar"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- content of navbar -->
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

                    <!-- home -->
                    <li class="nav-item <?php if($currentURL == "/" || strpos($currentURL, "/index.php") !== false){echo "active";}?>">
                        <a class="nav-link" href="./index.php">Home <?php if($currentURL == "/" || strpos($currentURL, "/index.php") !== false){echo '<span class="sr-only">(current)</span>';}?></a>
                    </li>
                
                    <!-- country list -->
                    <li class="nav-item <?php if(strpos($currentURL, "/countrylist.php") !== false) {echo "active";}?>">
                        <a class="nav-link" href="./countrylist.php">Country list <?php if(strpos($currentURL, "/countrylist.php") !== false) {echo '<span class="sr-only">(current)</span>';}?></a>
                    </li>
                
                    <!-- search -->
                    <li class="nav-item <?php if(strpos($currentURL, "/search.php") !== false) {echo "active";}?>">
                        <a class="nav-link" href="./search.php">Search <?php if(strpos($currentURL, "/search.php") !== false) {echo '<span class="sr-only">(current)</span>';}?></a>
                    </li>

            </div>
        </nav>

    </header>
