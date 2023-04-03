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
                <h1>Users</h1>
                <button class="btn-cure" type="button">+ Add User</button>
            </div>
            <div class="panel-body">
                <!-- Content Checklist -->
                <div class="card-body">
                    <table class="cure-table">
                        <tr>
                            <td>
                                <img src="../img/profile.jpeg" /><span>Lee Morgan</span>
                            </td>
                            <td>
                                <div class="">
                                    <select>
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
                        <tr>
                            <td>
                                <img src="../img/rony.jpeg" /><span>Rony Chowdhury</span>
                            </td>
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
    <script src="/js/main.js"></script>
</body>

</html>