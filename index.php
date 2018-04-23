<?php
$ch = curl_init();
$file_path_str = 'test.pdf';
$fh_res = fopen($file_path_str, 'r');

curl_setopt($ch, CURLOPT_URL, "http://pdfx.cs.man.ac.uk");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$post = array(
    "file" => "@" .realpath("\"/test.pdf\"")
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_POST, 1);

//curl_setopt($ch, CURLOPT_INFILE, $fh_res);
//curl_setopt($ch, CURLOPT_INFILESIZE, filesize($file_path_str));



//$file=curl_exec($ch); //store the content in variable

if(!curl_errno($ch))
{
    set_time_limit(0);
//This is the file where we save the    information
$fp = fopen (dirname(__FILE__) . '/localfile.tmp', 'w+');

curl_setopt($ch, CURLOPT_TIMEOUT, 50);
// write curl response to file
curl_setopt($ch, CURLOPT_FILE, $fp); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
// get curl response
curl_exec($ch); 
curl_close($ch);
fclose($fp);
} else echo 'Curl error: ' . curl_error($ch);


if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

?>