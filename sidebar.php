<?php
        $curepath = '/skel/';
        $imgpath = '/skel/img/';
    ?>

<div class="sidebar">
    <div class="logo">
        <a href="/skel">
            <img src="/skel/img/logo.svg" />
        </a>
    </div>
    <ul>
        <li><a href="<?= $curepath . 'modules/client-reporting.php'?>">Client Reporting</a></li>
        <li><a href="<?= $curepath . 'modules/checklists.php'?>">Checklists</a></li>
        <li><a href="<?= $curepath . 'modules/briefing.php'?>">Briefing</a></li>
        <li><a href="<?= $curepath . 'modules/users.php'?>">Users</a></li>
        <li><a href="<?= $curepath . 'modules/projects.php'?>">Projects</a></li>
        <li class="enable-loader"><a href="<?= $curepath . 'modules/billable-hours.php'?>">Sync Timely & PH</a></li>
    </ul>
</div>