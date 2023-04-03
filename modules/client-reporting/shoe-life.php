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
                <img src="../../img/shoe-life.webp" />
            </div>

            <!-- Panel Main View -->
            <div class="panel-headline">
                <h2>Overview</h2>
            </div>
            <div class="panel-body">
                <div class="cure-table">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ad Spend</th>
                            <th>conversion</th>
                            <th>CPA</th>
                            <th>Sessions</th>
                            <th>Cost Per Session</th>
                            <th>Pairs Sold</th>
                            <th>Cost Per Pair</th>
                            <th>Orders</th>
                            <th>Target CPA</th>
                        </tr>
                        <!-- From Facebook -->
                        <tr>
                            <td>Facebook Ads</td>
                            <td>$5.38k</td>
                            <td>102</td>
                            <td>$52.74</td>
                            <td>19,041</td>
                            <td>0.28</td>
                            <td>52</td>
                            <td>103</td>
                            <td>120</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- From Google -->
                        <tr>
                            <td>Google Ads</td>
                            <td>$1.76k</td>
                            <td>68</td>
                            <td>$25.94</td>
                            <td>6,168</td>
                            <td>0.28</td>
                            <td>13</td>
                            <td>135</td>
                            <td>130</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- Total -->
                        <tr>
                            <td>Total</td>
                            <td>$7.14k</td>
                            <td>170</td>
                            <td>$42</td>
                            <td>25,209</td>
                            <td>0.28</td>
                            <td>65</td>
                            <td>100</td>
                            <td>250</td>
                            <td>Under Target</td>
                        </tr>
                    </table>
                </div>
            </div>

            <button class="btn-cure trigger-modal-insights">+ Add Insights</button>

            <!-- Shopping behaviour -->
            <div class="panel-headline">
                <h2>Shopping Behaviour</h2>
            </div>
            <div class="panel-body">
                <div class="cure-table">
                    <table>
                        <tr>
                            <th></th>
                            <th>sessions</th>
                            <th>product views</th>
                            <th>add to carts</th>
                            <th>Sessions</th>
                            <th>checkouts</th>
                            <th>transactions</th>
                        </tr>
                        <!-- From Facebook -->
                        <tr>
                            <td>Facebook Ads</td>
                            <td>$5.38k</td>
                            <td>102</td>
                            <td>$52.74</td>
                            <td>19,041</td>
                            <td>0.28</td>
                            <td>52</td>
                            <td>103</td>
                            <td>120</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- From Google -->
                        <tr>
                            <td>Google Ads</td>
                            <td>$1.76k</td>
                            <td>68</td>
                            <td>$25.94</td>
                            <td>6,168</td>
                            <td>0.28</td>
                            <td>13</td>
                            <td>135</td>
                            <td>130</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- Total -->
                        <tr>
                            <td>Total</td>
                            <td>$7.14k</td>
                            <td>170</td>
                            <td>$42</td>
                            <td>25,209</td>
                            <td>0.28</td>
                            <td>65</td>
                            <td>100</td>
                            <td>250</td>
                            <td>Under Target</td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- POPUPS -->
            <div class="cure-modal modal-add-insights" style="display: none">
                <div class="add-insights cure-modal-inner">
                    <div class="modal-close">
                        <a href="javascript:void(0)">X</a>
                    </div>
                    <div class="modal-title">
                        <h3>Add insights and actions for this report</h3>
                    </div>
                    <form>
                        <div class="cure-field-group">
                            <label>Insights</label>
                            <textarea placeholder="Insights go here"></textarea>
                        </div>
                        <div class="cure-field-group">
                            <label>Actions</label>
                            <textarea placeholder="Actions go here"></textarea>
                        </div>
                        <div class="cure-field-group">
                            <label>Clients Email</label>
                            <input type="email" placeholder="client@abc.com" />
                        </div>
                        <button type="submit" class="btn-cure">+ Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../../js/main.js"></script>
</body>

</html>