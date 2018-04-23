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



$file=curl_exec($ch); //store the content in variable
echo $file;
if(!curl_errno($ch))
{
    //send out headers and output
    header ("Content-Type:text/xml");
    header ("Content-Length: ".curl_getinfo($ch, CURLINFO_CONTENT_LENGTH_DOWNLOAD)."");
    echo $file;
} else echo 'Curl error: ' . curl_error($ch);


if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

?>