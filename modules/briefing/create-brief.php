<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php include('../../header.php') ?>

<!-- BODY -->

<body class="brief-template">
    <div class="main">
        <!-- Modules List -->
        <?php include('../../sidebar.php') ?>

        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <h1>Create your brief</h1>
            </div>
            <div class="panel-wrapper">

                <div class="panel-body">
                    <!-- Content Checklist -->
                    <?php if( isset($_POST['create_brief']) == 1 ) { ?>
                        <?php $brief_template = $_POST['brief_template']; ?>
                            <!-- IF ADVERTISING TEMPLATE IS SELECTED -->
                            <?php if($brief_template == "advertising") { ?>
                                <h3>Advertising Brief</h3>
                                <?php include('templates/advertising.php') ?>
                            <?php } ?>
                            <!-- IF ADVERTISING TEMPLATE IS SELECTED -->
                            <?php if($brief_template == "design") { ?>
                                <h3>Design Brief</h3>
                            <?php } ?>
                            <!-- IF ADVERTISING TEMPLATE IS SELECTED -->
                            <?php if($brief_template == "wordpress") { ?>
                                <h3>WordPress Brief</h3>
                            <?php } ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../../js/main.js"></script>
</body>

</html>