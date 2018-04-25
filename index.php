<?php
header("Access-Control-Allow-Origin: *");
if (!file_exists('uploads')) {
	mkdir('uploads', 0700, true);
}
$outputchoice = htmlentities($_POST['outputchoice'], ENT_QUOTES, "UTF-8");
echo $outputchoice;exit;
if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name'])) {
	if(isset($outputchoice == "html") {
		echo "HTML output is selected";
		chmod("scripthtml.sh",0700);
		shell_exec('./scripthtml.sh');
	}elseif($outputchoice == "xml") {
		chmod("script.sh",0700);
		shell_exec('./script.sh');
	}
}else{
	echo "There was an error uploading the file, please try again!";
}

?>