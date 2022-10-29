<?php

$zipArchive = new ZipArchive();
$zipFile = "./berkas-artwork.zip";
if ($zipArchive->open($zipFile, ZipArchive::CREATE) !== TRUE) {
    exit("Unable to open file.");
}
$folder = 'berkas/';
createZip($zipArchive, $folder);
$zipArchive->close();

function createZip($zipArchive, $folder)
{
    if (is_dir($folder)) {
        if ($f = opendir($folder)) {
            while (($file = readdir($f)) !== false) {
                if (is_file($folder . $file)) {
                    if ($file != '' && $file != '.' && $file != '..') {
                        $zipArchive->addFile($folder . $file);
                    }
                } else {
                    if (is_dir($folder . $file)) {
                        if ($file != '' && $file != '.' && $file != '..') {
                            $zipArchive->addEmptyDir($folder . $file);
                            $folder = $folder . $file . '/';
                            createZip($zipArchive, $folder);
                        }
                    }
                }
            }
            closedir($f);
        } else {
            exit("Unable to open directory " . $folder);
        }
    } else {
        exit($folder . " is not a directory.");
    }
}

$filename = "berkas-artwork.zip";
if (file_exists($filename)) {
    // adjust the below absolute file path according to the folder you have downloaded
    // the zip file
    // I have downloaded the zip file to the current folder
    $absoluteFilePath = __DIR__ . '/' . $filename;
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false);
    // content-type has to be defined according to the file extension (filetype)
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . basename($filename) . '";');
    header('Content-Transfer-Encoding: binary');
    header('Content-Length: ' . filesize($absoluteFilePath));
    readfile($absoluteFilePath);
    unlink($zipFile);
    exit();
}

echo "
    <script>
        window.location.href = '';
    </script>
";
