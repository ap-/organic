<?php $iBlogPath = str_replace('/','',$GLOBALS['path']);?>
<?php $iArchive = 'archive-' . $iBlogPath .'.php';?>
<?php include(locate_template($iArchive));?>