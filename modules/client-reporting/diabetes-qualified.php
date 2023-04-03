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
                <img src="<?= $imgpath . 'diabetes-qualified.png'?>" />
            </div>

            <!-- Panel Main View -->
            <div class="panel-body">
                <div class="cure-table">
                    <table>
                        <tr>
                            <th></th>
                            <th>Ad Spend</th>
                            <th>conversion</th>
                            <th>CPA</th>
                            <th>Target CPA</th>
                        </tr>
                        <!-- From Facebook -->
                        <tr>
                            <td>Facebook Ads</td>
                            <td>$5.38k</td>
                            <td>102</td>
                            <td>$52.74</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- From Google -->
                        <tr>
                            <td>Google Ads</td>
                            <td>$1.76k</td>
                            <td>68</td>
                            <td>$25.94</td>
                            <td>Under Target</td>
                        </tr>
                        <!-- Total -->
                        <tr>
                            <td>Total</td>
                            <td>$7.14k</td>
                            <td>170</td>
                            <td>$42</td>
                            <td>Under Target</td>
                        </tr>
                    </table>
                </div>
            </div>

            <button class="btn-cure trigger-modal-insights">+ Add Insights</button>

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