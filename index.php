<?php
header("Access-Control-Allow-Origin: *");
if (!file_exists('uploads')) {
	mkdir('uploads', 0700, true);
}
$outputchoice = htmlentities($_POST['outputchoice'], ENT_QUOTES, "UTF-8");
echo $outputchoice;
exit;


?>