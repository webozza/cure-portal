<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php require('../header.php') ?>

<body>
    <div class="main">
        <!-- Modules List -->
        <div class="sidebar">
            <div class="logo">
                <a href="/">
                    <img src="../img/logo.svg" />
                </a>
            </div>
            <ul>
                <li>
                    <a href="../modules/client-reporting.html">Client Reporting</a>
                </li>
                <li><a href="../modules/checklists.html">Checklists</a></li>
                <li><a href="../modules/briefing.html">Briefing</a></li>
                <li><a href="../modules/users.html">Users</a></li>
                <li><a href="../modules/projects.html">Projects</a></li>
            </ul>
        </div>
        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <h1>Checklist</h1>
            </div>

            <!-- Table View -->
            <div class="checklist cure-table">
                <!-- DATA FROM API -->
                <table>
                    <tr>
                        <th>Project</th>
                        <th>Checklist Type</th>
                        <th>Progress</th>
                        <th></th>
                    </tr>
                    <!-- VYRO -->
                    <tr>
                        <td>
                            <a href="../modules/checklists/shoelife-checklist.html">Vyro</a>
                        </td>
                        <td>Website Go live</td>
                        <td>
                            <div class="checklist-meter">
                                <meter max="100" min="0" value="70"></meter> <span>70%</span>
                            </div>
                        </td>
                    </tr>
                    <!-- DQ -->
                    <tr>
                        <td>
                            <a href="../modules/checklists/shoelife-checklist.html">Diabetes Qualified</a>
                        </td>
                        <td>Website Maintenance</td>
                        <td>
                            <div class="checklist-meter">
                                <meter max="100" min="0" value="60"></meter> <span>60%</span>
                            </div>
                        </td>
                    </tr>
                    <!-- LGI -->
                    <tr>
                        <td>
                            <a href="../modules/checklists/shoelife-checklist.html">Langley Group Institute</a>
                        </td>
                        <td>Website Maintenance</td>
                        <td>
                            <div class="checklist-meter">
                                <meter max="100" min="0" value="80"></meter> <span>80%</span>
                            </div>
                        </td>
                    </tr>
                    <!-- SL -->
                    <tr>
                        <td>
                            <a href="../modules/checklists/shoelife-checklist.html">Shoe Life</a>
                        </td>
                        <td>Shopify Go-Live</td>
                        <td>
                            <div class="checklist-meter">
                                <meter max="100" min="0" value="75"></meter> <span>75%</span>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../js/main.js"></script>
</body>

</html>