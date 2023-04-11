<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php include($curepath . 'header.php') ?>

<!-- Auth with Timely -->
<?php

    $redirect_uri = 'https://checklist.curedev.com.au/skel/modules/billable-hours.php';
    $client_id = 'pRVYnxXWTFYlo92q1Pw0PrmosVjg0UoLoABZoZXYe0s';
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.timelyapp.com/1.1/oauth/authorize?response_type=code
    &redirect_uri=' . $redirect_uri . '&client_id=' . $client_id,
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