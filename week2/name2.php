<?php
$name = $_GET['name'];
echo 'welcome to out website, ' .
htmlspecialchars($name, ENT_QUOTES, 'UTF-8'). '!';
?>