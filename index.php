<?php
require("tpl/libs/smarty.class.php"); // On inclut la classe Smarty
$smarty = new Smarty();
$smarty->display("./views/home.html");

?>
