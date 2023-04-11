<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php include($curepath . 'header.php') ?>

<!-- Auth -->
<?php

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.timelyapp.com/1.1/oauth/authorize?response_type=code%0A&redirect_uri=urn:ietf:wg:oauth:2.0:oob&client_id=pRVYnxXWTFYlo92q1Pw0PrmosVjg0UoLoABZoZXYe0s%0A%0A',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
    
?>

<!-- BODY -->
<body class="billable-hours">
    
    <div class="main">
        <!-- Modules List -->
        <?php require('../sidebar.php') ?>
        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <h1>Billable Hours</h1>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <?php include($curepath . 'scripts.php') ?>
</body>
</html>