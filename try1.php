<?php
$doc=$_FILES['doc']['name'];
echo $doc;
$docs=$_FILES['doc']['size'];
echo $docs;
$docext=pathinfo($doc,PATHINFO_EXTENSION);
echo $docext;
?>