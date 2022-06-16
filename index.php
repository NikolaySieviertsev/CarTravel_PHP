<?php
$page = $_GET['page'];
$page = strip_tags($page);
$page = htmlspecialchars($page);
require 'pages/'.$page.'.php';
require "footer.php";
