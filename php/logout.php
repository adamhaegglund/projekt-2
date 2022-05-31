<?php
session_start();
session_destroy();
header("Location: /projekt-2/index.php?logged_out");
exit;
?>