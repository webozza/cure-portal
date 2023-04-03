<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php include('../../header.php') ?>

<!-- BODY -->

<body class="single-checklist ads-templates">
    <div class="main">
        <!-- Modules List -->
        <?php include('../../sidebar.php') ?>

        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <h1>Vyro - Digital Advertising Brief</h1>
            </div>
            <div class="panel-wrapper">

                <div class="panel-body">
                    <!-- Content Checklist -->
                    <div class="cards" id="content-checklist">
                        <div class="card">
                            <div class="card-head">
                                <h3>Initial set up</h3>
                            </div>
                            <div class="card-body">
                                <table class="cure-table">
                                    <tr>
                                        <td><label>Background:</label></td>
                                        <td><input type="text" name="background"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Campaign objective:</label></td>
                                        <td><input type="text" name="campaign-objective"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Audience</label></td>
                                        <td><input type="text" name="audience"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Deliverables</label></td>
                                        <td><input type="text" name="deliverables"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Key messages</label></td>
                                        <td><input type="text" name="messages"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>desired action</label></td>
                                        <td><input type="text" name="action"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Budget</label></td>
                                        <td><input type="text" name="budget"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Expected return</label></td>
                                        <td><input type="text" name="expected-return"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Metrics to track</label></td>
                                        <td><input type="text" name="metrics-to-track"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Compliance Requirements</label></td>
                                        <td><input type="text" name="metrics-to-track"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><label>Any other supporting</label></td>
                                        <td><input type="text" name="any-other-"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="cure-action-wrapper">
                                                <button class="btn-cure trigger-add-brief">Submit</button>
                                            </div>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../../js/main.js"></script>
</body>

</html>