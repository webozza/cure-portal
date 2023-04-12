<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->
<?php include('header.php') ?>

<!-- BODY -->

<body class="home">
    <div class="main">
        <!-- Modules List -->
        <?php include('sidebar.php') ?>
        <!-- Panel -->
        <div class="panel">
            <div class="panel-head">
                <img class="user-profile" src="img/profile.jpeg" />
                <h1>Good morning, Lee!</h1>
            </div>
            <div class="panel-body">
                <!-- CPA Above Target -->
                <div class="cards">
                    <div class="card">
                        <div class="card-head">
                            <h3>CPA above Target</h3>
                            <select>
                                <option>Week to Date</option>
                                <option>Month to Date</option>
                                <option>Last Week</option>
                                <option>Last Month</option>
                                <option>Custom</option>
                            </select>
                        </div>
                        <div class="cr-highlights cure-highlights">
                            <table>
                                <tr>
                                    <td>Langley Group Institute</td>
                                    <td>
                                        <i class="flaticon-up-arrow"></i>
                                        $1.35
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Active Checklists -->
                    <div class="card">
                        <div class="card-head">
                            <h3>Active Checklists</h3>
                        </div>
                        <div class="cl-highlights cure-highlights">
                            <table>
                                <tr>
                                    <td>Vyro</td>
                                    <td>Website Go-Live</td>
                                    <td><meter max="100" min="0" value="70"></meter></td>
                                    <td>70%</td>
                                </tr>
                                <tr>
                                    <td>Shoe Life</td>
                                    <td>Shopify Go-Live</td>
                                    <td><meter max="100" min="0" value="45"></meter></td>
                                    <td>45%</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Sales Target -->
                    <div class="card">
                        <div class="card-head">
                            <h3>Sales Target</h3>
                            <select>
                                <option>Week to Date</option>
                                <option>Month to Date</option>
                                <option>Last Week</option>
                                <option>Last Month</option>
                                <option>Custom</option>
                            </select>
                        </div>
                        <div class="cr-highlights cure-highlights">
                            <table>
                                <tr>
                                    <td>Shoe Life</td>
                                    <td>$6.9k</td>
                                    <td><meter max="100" min="0" value="80"></meter></td>
                                    <td>80%</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Briefing Card -->
                    <div class="card">
                        <div class="card-head">
                            <h3>Recent Briefs</h3>
                        </div>
                        <div class="cl-highlights cure-highlights">
                            <table>
                                <tr>
                                    <td>Vyro</td>
                                    <td class="link-to-brief">
                                        <a href="" style="background-color: #ffd54f">Billboard Banner</a>
                                    </td>
                                    <td class="uploaded-by">
                                        <img src="img/james.jpeg" />
                                        James Windeyer
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vyro</td>
                                    <td class="link-to-brief">
                                        <a href="/uploads/Vyro_Digital Advertising Brief_Initial setup.pdf"
                                            style="background-color: #aed581" target="_blank">Digital Advertising</a>
                                    </td>
                                    <td class="uploaded-by">
                                        <img src="img/profile.jpeg" />
                                        Lee Morgan
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Approvals Required -->
                    <div class="card">
                        <div class="card-head">
                            <h3>Approvals Pending</h3>
                        </div>
                        <div class="cl-highlights cure-highlights">
                            <table>
                                <tr>
                                    <td>DQ</td>
                                    <td class="link-to-brief">G-Ads Action Plan</td>
                                    <td class="uploaded-by">
                                        <img src="img/rony.jpeg" />
                                        Rony Chowdhury
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <a target="_blank" href="approvals/Vyro - Google Ads Action Plan.pdf">
                                                <i title="view" class="flaticon-eye"></i>
                                            </a>
                                            <a class="cc--approval-comment" href="javascript:void(0)"><i title="message"
                                                    class="flaticon-chat"></i></a>
                                            <input class="approval-status" title="approve" type="checkbox" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DQ</td>
                                    <td class="link-to-brief">G-Ads Audit</td>
                                    <td class="uploaded-by">
                                        <img src="img/rony.jpeg" />
                                        Rony Chowdhury
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <a target="_blank" href="approvals/Vyro - Google Ads Audit.pdf">
                                                <i title="view" class="flaticon-eye"></i>
                                            </a>
                                            <a class="cc--approval-comment" href="javascript:void(0)"><i title="message"
                                                    class="flaticon-chat"></i></a>
                                            <input title="approve" class="approval-status" type="checkbox" />
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

    <!-- MODALS -->
    <div class="cure-modal modal-approval-comment" style="display: none">
        <div class="add-insights cure-modal-inner">
            <div class="modal-close">
                <a href="javascript:void(0)">X</a>
            </div>
            <div class="modal-title">
                <h3>Should we do in-portal chat, email or in-portal comment ?</h3>
            </div>
            <form>
                <div class="cure-field-group">
                    <label>Any ammends Rony should make?</label>
                    <textarea style="min-height: 200px"></textarea>
                </div>
                <button type="submit" class="btn-cure">Notify Rony ></button>
            </form>
        </div>
    </div>

    <!-- SCRIPTS -->
    <?php include('scripts.php') ?>
</body>

</html>