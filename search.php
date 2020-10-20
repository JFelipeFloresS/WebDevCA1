<?php
    $currPage = "- Search Country";
    include('./include/header.php');
    require './require/countriesarray.php';
?>

<div class="container px-5 py-3 my-3">
    <div class="row">
        <form action="#" class="col-sm">
            <input type="text" id="typecountry" name="typecountry" placeholder="search for country" required="required">
            <input type="submit" value="Check!" class="btn btn-secondary">
        </form>
        
        <form action="#" class="col-sm mx-5 country-select-form">
            <label for="country">Select country: </label>
            <select name="country" id="country" onchange="this.form.submit()">
                <option value=""></option>
                <?php
                    foreach ($countryArray as $country => $capital) {
                        echo '<option value=' . str_replace(' ', '&;', $country) . '>' . $country . '</option>';
                    }
                    ?>
            </select>
    </form>
    </div>
    
    <div class="mx-5 my-5">
        <h1 class="selected-country">
            <?php
            if (isset($_GET['typecountry'])) {
                $country = "";
                $countryparts = explode(" ", $_GET['typecountry']);
                foreach ($countryparts as $part) {
                    $country .= strtoupper(substr($part, 0, 1)) . strtolower(substr($part, 1)) . " ";
                }
                $country = trim($country);
                if(array_key_exists($country, $countryArray)) {
                    echo "$country's capital is $countryArray[$country].";
                } else {
                    echo "$country is not listed.";
                }
            } else if (isset($_GET['country'])) {
                $country = $_GET['country'];
                $country = str_replace('&;', ' ', $country);
                echo "$country's capital is $countryArray[$country]";
            } else {
                echo "Please type or select a country.";
            }
            ?>
        </h1>
    </div>

</div>

<?php include('./include/footer.php'); ?>