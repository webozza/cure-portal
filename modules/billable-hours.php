<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php require('../header.php') ?>

<script>
    let currentLoc = window.location.href;
    if(currentLoc.indexOf('?code=') == -1) {
        window.location.href = 'https://api.timelyapp.com/1.1/oauth/authorize?response_type=code&redirect_uri=https://checklist.curedev.com.au/skel/modules/billable-hours.php&client_id=pRVYnxXWTFYlo92q1Pw0PrmosVjg0UoLoABZoZXYe0s';
    }
</script>

<!-- Auth with Timely -->
<?php if( isset($_GET['code']) ) {

    // GET TOKEN
    $response_code = $_GET['code'];
    $access_token = "";

    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.timelyapp.com/1.1/oauth/token?client_id=pRVYnxXWTFYlo92q1Pw0PrmosVjg0UoLoABZoZXYe0s&client_secret=EQZi9DwhIQHi6W6gPSklmLnAqXY9NhmR1BUhcvWPiCk&redirect_uri=https://checklist.curedev.com.au/skel/modules/billable-hours.php&code='.$response_code.'&grant_type=authorization_code',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    ));

    $token = curl_exec($curl);
    $token = json_decode($token);
    $access_token = $token->access_token;
    curl_close($curl);
    
    // GET USERS
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.timelyapp.com/1.1/1029812/users',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Authorization: '.$access_token.''
    ),
    ));

    $users = curl_exec($curl);
    echo '<script>let users = '.$users.'</script>';
    curl_close($curl);

} ?>

<!-- BODY -->
<body class="billable-hours">
    
    <div class="main">
        <!-- Modules List -->
        <?php require('../sidebar.php') ?>
        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <h1>Billable Hours</h1>
                <?= $token->access_token ?>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <?php include($curepath . 'scripts.php') ?>
</body>
</html>