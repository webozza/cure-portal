<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php include('../../header.php') ?>

<body class="single-report">
    <div class="main">
        <!-- Modules List -->
        <?php include('../../sidebar.php') ?>

        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <img src="../../img/vyro.svg" />
                <div class="cure-btn-wrapper">
                    <button data-panel="overview" class="active btn-cure">Overview</button>
                    <button data-panel="weekly-snapshot" class="btn-cure">Weekly Snapshot</button>
                    <button data-panel="monthly-report" class="btn-cure">Monthly Report</button>
                </div>
            </div>

            <!-- Overview -->
            <div class="panel-body overview">
                <div class="cure-table">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ad Spend</th>
                            <th>Visitor</th>
                            <th>conversion</th>
                            <th>Conversion rate</th>
                            <th>CPA</th>
                            <th>Target CPA</th>
                        </tr>
                        <!-- From Facebook -->
                        <tr>
                            <td>Facebook Ads</td>
                            <td>$5.38k</td>
                            <td>2.4K</td>
                            <td>102</td>
                            <td>2.54%</td>
                            <td>$52.74</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- From Google -->
                        <tr>
                            <td>Google Ads</td>
                            <td>$1.76k</td>
                            <td>3.2K</td>
                            <td>68</td>
                            <td>2.1%</td>
                            <td>$25.94</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- Total -->
                        <tr>
                            <td>Total</td>
                            <td>$7.14k</td>
                            <td>5.6K</td>
                            <td>170</td>
                            <td>2.32%</td>
                            <td>$42</td>
                            <td>Under Target</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Weekly Snapshot -->
            <div style="display:none;" class="panel-body weekly-snapshot">
                <div class="report-container">
                    <div class="report-inner">
                        <div class="report-head">
                            <div class="">
                                <h4 class="sub-headline">Online</h5>
                                <h4 class="headline">Weekly Snapshot Report</h5>
                            </div>
                            <img src="../../img/vyro.svg" />
                        </div>
                        <div class="report-body">
                            <!-- REPORT DATA -->
                            <table class="report-table">
                                <tr>
                                    <th></th>
                                    <th>Spend</th>
                                    <th>Visitors</th>
                                    <th>Sessions</th>
                                    <th>Cost per Visitor</th>
                                    <th>Deposits</th>
                                    <th>Cost per Deposit</th>
                                </tr>
                                <tr>
                                    <td>Week to Date</td>
                                    <td>$1.0K</td>
                                    <td>3,100</td>
                                    <td>3,600</td>
                                    <td>$0.32</td>
                                    <td>2</td>
                                    <td>$512</td>
                                </tr>
                                <tr>
                                    <td>Month to Date</td>
                                    <td>$2.5K</td>
                                    <td>3,800</td>
                                    <td>4,600</td>
                                    <td>$0.65</td>
                                    <td>2</td>
                                    <td>$1200</td>
                                </tr>
                            </table>
                            <!-- REPORT INSIGHTS -->
                            <div class="report-notes">
                                <div class="report-insights">
                                    <h5>Insights:</h5>
                                    <ul></ul>
                                </div>
                                <div class="report-actions">
                                    <h5>Actions:</h5>
                                    <ul></ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="add-to-report-btn-wrapper">
                    <div class="cure-field-group">
                        <input type="text" value="">
                        <button class="btn-cure add-insight">+ Add Insights</button>
                    </div>
                    <div class="cure-field-group">
                        <input type="text" value="">
                        <button class="btn-cure add-action">+ Add Actions</button>
                    </div>                    
                </div>
                <div class="report-final-actions">
                    <button class="btn-cure trigger-modal-insights">Download REPORT</button>
                    <button class="btn-cure trigger-modal-insights">SEND REPORT</button>
                </div>
            </div>

            <!-- Monthly Report -->
            <div style="display:none;" class="panel-body monthly-report">
                <div class="report-container">
                    <div class="report-inner">
                        <div class="report-head">
                            <div class="">
                                <h4 class="sub-headline">Online</h5>
                                <h4 class="headline">Monthly Report</h5>
                            </div>
                            <img src="../../img/vyro.svg" />
                        </div>
                        <div class="report-body">
                            <table class="report-table">
                                <tr>
                                    <th></th>
                                    <th>Spend</th>
                                    <th>Visitors</th>
                                    <th>Sessions</th>
                                    <th>Cost per Visitor</th>
                                    <th>Deposits</th>
                                    <th>Cost per Deposit</th>
                                </tr>
                                <tr>
                                    <td>Week to Date</td>
                                    <td>$1.0K</td>
                                    <td>3,100</td>
                                    <td>3,600</td>
                                    <td>$0.32</td>
                                    <td>2</td>
                                    <td>$512</td>
                                </tr>
                                <tr>
                                    <td>Month to Date</td>
                                    <td>$2.5K</td>
                                    <td>3,800</td>
                                    <td>4,600</td>
                                    <td>$0.65</td>
                                    <td>2</td>
                                    <td>$1200</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <button class="btn-cure trigger-modal-insights">+ Add Insights</button>
                <button class="btn-cure">SEND REPORT</button>
            </div>

            <!-- POPUPS -->
            <div class="cure-modal modal-add-insights" style="display: none">
                <div class="add-insights cure-modal-inner">
                    <div class="modal-close">
                        <a href="javascript:void(0)">X</a>
                    </div>
                    <div class="modal-title">
                        <h3>Email this report</h3>
                    </div>
                    <form>
                        <div class="cure-field-group">
                            <label>Clients Email</label>
                            <input type="email" placeholder="client@abc.com" />
                        </div>
                        <button type="submit" class="btn-cure">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../../js/main.js"></script>
</body>

</html>