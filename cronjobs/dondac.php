<?php
$di = new RecursiveDirectoryIterator('../');
foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
if(preg_match("/error_log/i",$filename))
{
$size = $file->getSize()+$size;
echo $filename . ' - ' . $file->getSize()/1/1 . ' KB ( done ) <br/>';
unlink($filename);
}
}
echo $size/1/1;
?>