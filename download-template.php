<?php

$filezip = "Template Online Competition-20220920T135132Z-001.zip";
header("Content-type: application/zip");
header("Content-Disposition: attachment; filename=$filezip");
header("Content-length: " . filesize($filezip));
header("Pragma: no-cache");
header("Expires: 0");
readfile("$filezip");
