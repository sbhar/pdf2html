<?php
curl -X POST --include 'https://netservice-convert-pdf-to-html-v1.p.mashape.com/api/documents/pdf2html.json' \
  -H 'X-Mashape-Key: In6SBZF6oJmshwk3zDfm0kWTzvVkp11hzE3jsntXMDKRReTK0U' \
  -H 'X-BlackboxApiId: 3' \
  -H 'X-BlackboxApiToken: Mashape' \
  -F 'document=@test.pdf' \
  -F 'dpi=144' \
  -F 'embedCSS=true' \
  -F 'embedFont=true' \
  -F 'embedImage=true' \
  -F 'embedJavascript=true' \
  -F 'enableOutline=false' \
  -F 'zoom=1.0'
?>