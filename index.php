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



$headers = array();
$headers[] = "Content-Type: application/pdf";

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// Check if any error occurred
if (!curl_errno($ch)) {
  $info = curl_getinfo($ch);
  echo 'upload content length:  ', $info['upload_content_length'],  "\n";
}

$result = curl_exec($ch);
echo $result;
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

?>