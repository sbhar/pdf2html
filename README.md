# pdf2xml

This implementation extracts the text from the PDF file and creates xml/s out of it. A cURL request to the url http://pdfx.cs.man.ac.uk is made by executing the shell script below which packs all the xml content output into 
output.zip.

Demo:
https://sugataportfolio.firebaseapp.com/#pdftoxml

script.sh:
`find uploads/ -name "*.pdf" | while read file;
do
curl --data-binary @"$file" -H "Content-Type: application/pdf" -L "http://pdfx.cs.man.ac.uk" > "${file}x.xml";
done
zip -r output.zip uploads
chmod 777 output.zip`

