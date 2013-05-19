<?php
/**
 * Created by IntelliJ IDEA.
 * User: ryu
 * Date: 2013/05/19
 * Time: 14:37
 * To change this template use File | Settings | File Templates.
 */
// router.php
$path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "json") {
	header("Content-Type: application/json");
	readfile($_SERVER["SCRIPT_FILENAME"]);
}
else {
	return FALSE;
}