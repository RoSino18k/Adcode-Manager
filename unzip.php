<?php
@mkdir('mng');
$zip = new ZipArchive;
$res = $zip->open('imanager.zip');
if ($res === TRUE) {
$zip->extractTo('mng/');
$zip->close();
echo 'Successful!';
} else {
echo 'Failed!';
}
?>
