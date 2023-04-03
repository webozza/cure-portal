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
                            <th>Uploads</th>
                        </tr>
                        <!-- VYRO -->
                        <tr>
                            <td>21st Feb "22</td>
                            <td>
                                <a href="#">Vyro</a>
                            </td>
                            <td>
                                <a target="_blank"
                                    href="../uploads/Vyro_Digital Advertising Brief_Initial setup.pdf">Vyro_Digital
                                    Advertising Brief_Initial setup.pdf</a>
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
            <form>
                <!-- SELECT TEMPLATE -->
                <div class="cure-field-group select-brief-project">
                    <select>
                        <option value="" disabled selected>Select Project</option>
                        <option value="metluma">Metluma</option>
                        <option value="vyro">Vyro</option>
                        <option value="treehouse">Treehouse</option>
                    </select>
                </div>

                <div class="error-message"></div>

                <div style="display: none" class="cure-field-group select-template-container">
                    <div class="radio-box left-box">
                        <input type="radio" id="html" name="fav_language" value="HTML" />
                        <label for="html">Branding Template</label><br />
                        <div class="check"></div>
                    </div>
                    <div class="radio-box center-box">
                        <input type="radio" id="css" name="fav_language" value="CSS" />
                        <label for="css">Design Template</label><br />
                        <div class="check"></div>
                    </div>
                    <div class="radio-box right-box">
                        <input type="radio" id="javascript" name="fav_language" value="JavaScript" />
                        <label for="javascript">WordPress Template</label>
                        <div class="check"></div>
                    </div>
                </div>

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
                <button type="submit" class="btn-cure">+ Add</button>
            </form>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="../js/main.js"></script>
</body>

</html>