<?php
function settingsUpdate(){ 

}

function makeBackup(){
    // Get real path for our folder
    $rootPath = realpath('.');

    // Initialize archive object
    $zip = new ZipArchive();
    $dirname = 'backups';
    $filename = $dirname.'/backup_'.date('YmdHis').'.zip';
    if (!file_exists($dirname)) {
        mkdir($dirname, 0777, true);
        file_put_contents($dirname.'/index.php', '<?php // Silence is gold');
    }
    $zip->open($filename, ZipArchive::CREATE | ZipArchive::OVERWRITE);

    // Create recursive directory iterator
    /** @var SplFileInfo[] $files */

    $files = new RecursiveIteratorIterator( new RecursiveDirectoryIterator($rootPath), RecursiveIteratorIterator::LEAVES_ONLY );

    foreach ($files as $name => $file)
    {
        
        // Skip directories (they would be added automatically)
        if(stripos(basename($file), 'backup') === 0){
            continue;
        }
        if (!$file->isDir())
        {
            // Get real and relative path for current file
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen($rootPath) + 1);

            // Add current file to archive
            $zip->addFile($filePath, $relativePath);
        }
    }

    // Zip archive will be created only after closing object
    $zip->close();

    echo "Backup is ready, <a href='/$filename' download>download</a>";


}

