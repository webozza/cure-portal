<!DOCTYPE html>
<html lang="en">
<!-- HEAD -->
<?php require('../header.php') ?>

<body class="brief-module">
    <div class="main">
        <!-- Modules List -->
        <?php include('../sidebar.php') ?>

        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <h1>Briefing</h1>
                <!-- Add Brief Button -->
                <div class="cure-action-wrapper">
                    <button class="btn-cure trigger-add-brief">+ Add Brief</button>
                </div>
            </div>

            <!-- Panel Main View -->
            <div class="panel-body">
                <!-- SEARCH BAR -->
                <div class="search-bar">
                    <i class="flaticon-magnifiying-glass"></i>
                    <input type="search" placeholder="quickly find a brief" />
                </div>

                <!-- BRIEF LIST -->
                <div class="cure-table">
                    <!-- FILTERS -->
                    <div class="cure-filter">
                        <input type="date" />
                    </div>

                    <!-- DATA FROM API -->
                    <table>
                        <tr>
                            <th>Date</th>
                            <th>Project</th>
                            <th>Briefing</th>
                        </tr>
                        <!-- VYRO -->
                        <tr>
                            <td>21st Feb "22</td>
                            <td>
                                <a href="#">Vyro</a>
                            </td>
                            <td>
                                <a href="../modules/briefing/vyro-digital-advertising-brief.php">Digital Advertising
                                    Brief</a>
                            </td>
                        </tr>
                        <!-- DQ -->
                        <tr>
                            <td>3rd Mar "23</td>
                            <td>
                                <a href="javascript:void(0)">Diabetes Qualified</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- POPUPS -->
    <div class="cure-modal modal-add-brief" style="display: none">
        <div class="add-insights cure-modal-inner">
            <div class="modal-close">
                <a href="javascript:void(0)">X</a>
            </div>
            <div class="modal-title">
                <h3>
                    We just need to check a few things first, please select a project to
                    get started
                </h3>
                <p>
                    <i>Only show this if the current "user is team leader" and if
                        "client overview has been completed".</i>
                </p>
            </div>
            <form id="brief-form" method="post" action="<?= $curepath . 'modules/briefing/create-brief.php'?>">
                <!-- SELECT TEMPLATE -->
                <div class="cure-field-group select-template-container">
                    <div class="radio-box left-box">
                        <input type="radio" id="html" name="fav_language" value="advertising" />
                        <label for="html">Advertising Template</label><br />
                        <div class="check"></div>
                    </div>
                    <div class="radio-box center-box">
                        <input type="radio" id="css" name="fav_language" value="design" />
                        <label for="css">Design Template</label><br />
                        <div class="check"></div>
                    </div>
                    <div class="radio-box right-box">
                        <input type="radio" id="javascript" name="fav_language" value="wordpress" />
                        <label for="javascript">WordPress Template</label>
                        <div class="check"></div>
                    </div>
                </div>

                <div class="cure-field-group select-brief-project">
                    <select>
                        <option value="0" disabled selected>Select Client</option>
                        <option value="client1">Client 1</option>
                        <option value="client2">Client 2</option>
                        <option value="client3">Client 3</option>
                    </select>
                </div>

                <div class="error-message"></div>

                <!-- TEXTAREA -->
                <!-- <div class="cure-field-group">
            <label>Write your brief</label>
            <textarea style="min-height: 180px"></textarea>
          </div> -->
                <!-- UPLOAD FILE -->
                <!-- <div class="cure-field-group">
            <label>Upload brief</label>
            <input type="file" />
          </div> -->
                <input type="hidden" name="brief_template" value="0">
                <input type="hidden" name="brief_client" value="0">
                <input type="hidden" name="create_brief" value="1">
                <button type="submit" class="btn-cure">+ Create Brief</button>
            </form>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../js/main.js"></script>
</body>

</html>