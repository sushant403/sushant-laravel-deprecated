<?php
$targetFolder = '/home/sushantp/storage/app/public';
$linkFolder = '/home/sushantp/public_html/storage';
symlink($targetFolder,$linkFolder);
echo 'Symlink process successfully completed';
?>