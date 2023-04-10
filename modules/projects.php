<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php include('../header.php') ?>

<!-- Request Projects from PH -->
<?php
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://curecollective.proofhub.com/api/v3/projects/',
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

    $cure_projects = curl_exec($curl);
    echo '<script>let cureProjects = '.$cure_projects.'</script>';
    $cure_projects = json_decode($cure_projects);
    curl_close($curl);
?>

<!-- BODY -->

<body class="projects">
    <div class="main">
        <!-- Modules List -->
        <?php include('../sidebar.php') ?>

        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <h1>Projects</h1>
                <button class="btn-cure" type="button">+ Add Project</button>
            </div>
            <div class="panel-body">
                <!-- Content Checklist -->
                <div class="card-body">
                    <div class="search-projects">
                        <input type="text" class="quicksearch" placeholder="Search" />
                    </div>

                    <table class="cure-table grid">
                        <!-- METLUMA -->
                        <!-- <tr>
                            <td>Metluma</td>
                            <td>
                                <div class="select-team-leader">
                                    <select>
                                        <option value="" disabled selected>
                                            Select Team Leader
                                        </option>
                                        <option value="">Administrator</option>
                                        <option value="">Team Leader</option>
                                        <option value="">Client Service</option>
                                        <option value="">Team Member</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <a href="#"><i class="flaticon-cogwheel"></i></a>
                            </td>
                        </tr> -->
                        
                        <!-- The Project Loop -->
                        <?php foreach($cure_projects as $cure_project) { ?>
                            <tr class="element-item">
                                <td data-project-id="<?= $cure_project->id ?>">
                                    <div class="cure-project">
                                        <div class="project-color" style="background-color: <?= $cure_project->color ?>"></div>
                                        <h5 class="project-title"><?= $cure_project->title ?></h5>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <?php include('../scripts.php') ?>
</body>

</html>