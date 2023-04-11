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

    /* Timely API
    --------------------------------------------------------------------*/

    // GET TOKEN
    $response_code = $_GET['code'];

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
        'Authorization: Bearer '.$token->access_token.''
    ),
    ));

    $users = curl_exec($curl);
    echo '<script>let users = '.$users.'</script>';
    curl_close($curl);

    // GET PROJECTS
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.timelyapp.com/1.1/1029812/projects',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$token->access_token.''
    ),
    ));

    $projects = curl_exec($curl);
    echo '<script>let projects = '.$projects.'</script>';
    curl_close($curl);

    // GET EVENTS
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.timelyapp.com/1.1/1029812/events',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer '.$token->access_token.''
    ),
    ));

    $events = curl_exec($curl);
    echo '<script>let events = '.$events.'</script>';
    curl_close($curl);

    /* PH API
    --------------------------------------------------------------------*/

    // GET TASKS for Vyro Retainer > Project Brief List
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://curecollective.proofhub.com/api/v3/projects/7462242253/todolists',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'User-Agent: AppName (lee.morgan@curecollective.com.au)',
        'X-API-KEY: bb7f3dfb14212df54449865a85627cb8ab207c6b',
        'Cookie: ci_session=a%3A5%3A%7Bs%3A10%3A%22session_id%22%3Bs%3A32%3A%22c2f7cf6892c853fe0cf4a74bc3df5389%22%3Bs%3A10%3A%22ip_address%22%3Bs%3A15%3A%22192.168.142.134%22%3Bs%3A10%3A%22user_agent%22%3Bs%3A42%3A%22AppName+%28lee.morgan%40curecollective.com.au%29%22%3Bs%3A13%3A%22last_activity%22%3Bi%3A1680850662%3Bs%3A9%3A%22user_data%22%3Bs%3A0%3A%22%22%3B%7D7d2700be8b1512e014ab290c3ca3c04d'
    ),
    ));

    $cure_tasks = curl_exec($curl);
    echo '<script>let cureTasks = '.$cure_tasks.'</script>';
    $cure_tasks = json_decode($cure_tasks);
    curl_close($curl);

    // CREATE TASKS / EVENTS ON TIMELY WITH DATA FROM PH
    foreach($cure_tasks as $cure_task) {
        // var_dump($cure_task);
    }


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
                <?= str_replace(' ', '', $token->access_token) ?>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <?php include($curepath . 'scripts.php') ?>
</body>
</html>