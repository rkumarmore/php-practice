<?php 
$path = 'F:';
$bytestotal = 0;
$path = realpath($path);
if($path!==false && $path!='' && file_exists($path)){
    foreach(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path, FilesystemIterator::SKIP_DOTS)) as $object){
        echo "$object size : ".$object->getSize();
    }
}