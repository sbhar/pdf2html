<?php
if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name'])) {
	chmod("uploads",0700);
	chmod("script.sh",0700);
	shell_exec('./script.sh');
}else{
	echo "There was an error uploading the file, please try again!";
}

?>