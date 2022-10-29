<?php
  $link = $_SERVER['PHP_SELF'];
  $link_array = explode('/', $link);
?>
<aside class="col-1">
  <ul>
    <li class="<?= in_array("dashboard", $link_array) ? 'active' : ''  ?>">
      <a href="../../admin/dashboard">
        <i class="fa-solid fa-2x fa-bars-progress"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="<?= in_array("companies", $link_array) ? 'active' : ''  ?>">
      <a href="../../admin/companies">
        <i class="fa-solid fa-2x fa-building-flag"></i>
        <span>Company</span>
      </a>
    </li>
    <li class="<?= in_array("auditors", $link_array) ? 'active' : ''  ?>">
      <a href="../../admin/auditors">
        <i class="fa-solid fa-2x fa-user-tie"></i>
        <span>Auditor</span>
      </a>
    </li>
    <li class="<?= in_array("examinations", $link_array) ? 'active' : ''  ?>">
      <a href="../../admin/examinations">
        <i class="fa-solid fa-2x fa-people-group"></i>
        <span>Examination</span>
      </a>
    </li>
    <li class="<?= in_array("settings", $link_array) ? 'active' : ''  ?>">
      <a href="../../admin/settings">
        <i class="fa-solid fa-2x fa-gears"></i>
        <span>Settings</span>
      </a>
    </li>
  </ul>
</aside>