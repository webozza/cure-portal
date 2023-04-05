<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php include('../header.php') ?>

<!-- BODY -->

<body class="users">
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
                    <table class="cure-table">
                        <!-- METLUMA -->
                        <tr>
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
                        </tr>

                        <!-- VYRO -->
                        <tr>
                            <td>Vyro</td>
                            <td>
                                <div class="">
                                    <select>
                                        <option value="">Team Leader</option>
                                        <option value="">Administrator</option>
                                        <option value="">Client Service</option>
                                        <option value="">Team Member</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <a href="#"><i class="flaticon-cogwheel"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <?php include('../scripts.php') ?>
</body>

</html>