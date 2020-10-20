<?php
    $currPage = "- Country List";
    include('./include/header.php');
    require './require/countriesarray.php';
?>

<div class="container country-list px-1 py-1 my-3">
    <h3>Countries' capitals list</h3>
    <div class="country-list-container">

        <table class="table">
            <thead>
                <tr>
                <th>Country</th>
                <th>Capital</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $evenline = false;
            foreach ($countryArray as $country=>$capital) {
                if ($evenline) {
                    $addcolour = 'class="eventr"';
                } else {
                    $addcolour = "";
                }
                echo '<tr ' . $addcolour . '>
                <td scope="row" class="td1">' . $country . '</td>
                <td>' . $capital . '</td>
                </tr>';
                $evenline = !$evenline;
            }
            
            ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('./include/footer.php'); ?>