<?php

$file = $_GET['file'] .".txt";

header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.urlencode($file));
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
readfile($file);

?>
