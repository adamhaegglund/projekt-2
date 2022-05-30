<?php
session_start();
session_destroy();
header("Location: /projekt-2/index.html?logged_out");
exit;
?>