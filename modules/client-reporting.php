<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php include('../header.php') ?>

<body>
    <div class="main">
        <!-- Modules List -->
        <?php include('../header.php') ?>

        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <h1>Client Reporting</h1>
            </div>

            <!-- Panel Main View -->
            <div class="panel-body">
                <!-- Chart View -->
                <div>
                    <!-- DATA FILTERS -->
                    <div class="cr-filters">
                        <div class="data-type">
                            <select>
                                <option>CPA</option>
                                <option>Spend</option>
                                <option>Conversions</option>
                            </select>
                        </div>
                        <div class="data-range">
                            <select>
                                <option>Week to Date</option>
                                <option>Mont to Date</option>
                                <option>Custom</option>
                            </select>
                        </div>
                    </div>

                    <!-- CHART -->
                    <canvas id="clientReportingChart"></canvas>
                </div>

                <!-- Table View -->
                <div class="client-reporting cure-table">
                    <!-- DATA FROM API -->
                    <table>
                        <tr>
                            <th>Project</th>
                            <th>Ad Spend</th>
                            <th>conversions</th>
                            <th>CPA</th>
                            <th></th>
                        </tr>
                        <!-- VYRO -->
                        <tr>
                            <td><a href="client-reporting/vyro.html">Vyro</a></td>
                            <td>$5.38k</td>
                            <td>102</td>
                            <td>$52.74</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- DQ -->
                        <tr>
                            <td>
                                <a href="client-reporting/diabetes-qualified.html">Diabetes Qualified</a>
                            </td>
                            <td>$1.76k</td>
                            <td>68</td>
                            <td>$25.94</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- LGI -->
                        <tr>
                            <td>
                                <a href="client-reporting/langley-group-institute.html">Langley Group Institute</a>
                            </td>
                            <td>$4.26k</td>
                            <td>299</td>
                            <td>$11.35</td>
                            <td>Above Target</td>
                        </tr>
                        <!-- SL -->
                        <tr>
                            <td><a href="client-reporting/shoe-life.html">Shoe Life</a></td>
                            <td>$936</td>
                            <td>99</td>
                            <td>$9.36</td>
                            <td>Under Target</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../js/chart.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>