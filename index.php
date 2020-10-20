<?php
    $currPage = "- Home";
    include('./include/header.php'); 
?>

<!-- main container -->
<div class="container px-5 py-3 my-3">
    <!-- personal details row with 2 columns -->
    <div class="row">

        <h3 class="col-sm">Jose Felipe Flores da Silva</h3>

        <div class="col-sm" style="text-align: right;">
            <h4>2019405</h4>
            <h4>BSc in Information Technology</h4>
        </div>

    </div>

    <!-- project title -->
    <div>
        <h1 style="text-align: center;" class="my-5">PHP Project 1</h1>
    </div>

    <hr>

    <!-- main features -->
    <div class="row my-5">

        <!-- sends to list of countries -->
        <div class="col-sm list-container" style="text-align: center;">
            <h4>List of countries:</h4>
            <a href="./countrylist.php">
                <button class="btn btn-primary list-btn">Check list</button>
            </a>
        </div>

        <!-- search for country -->
        <div class="col-sm search-container" style="text-align: center;">
            <form action="./search.php" class="search-form">
                <input type="text" name="typecountry" id="typecountry" placeholder="search country" required="required">
                <br><br>
                <input type="submit" value="Search" class="btn btn-secondary list-btn">
            </form>
        </div>
    </div>
</div>

<?php include('./include/footer.php'); ?>