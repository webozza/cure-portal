<?php
        $curepath = '/cure-portal/';
        $imgpath = '/cure-portal/img/';
    ?>

<div class="sidebar">
    <div class="logo">
        <a href="/">
            <img src="/cure-portal/img/logo.svg" />
        </a>
    </div>
    <ul>
        <li><a href="<?= $curepath . 'modules/client-reporting.php'?>">Client Reporting</a></li>
        <li><a href="<?= $curepath . 'modules/checklists.php'?>">Checklists</a></li>
        <li><a href="<?= $curepath . 'modules/briefing.php'?>">Briefing</a></li>
        <li><a href="<?= $curepath . 'modules/users.php'?>">Users</a></li>
        <li><a href="<?= $curepath . 'modules/projects.php'?>">Projects</a></li>
    </ul>
</div>