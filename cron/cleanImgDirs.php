<?

$pathTemp = $_SERVER['DOCUMENT_ROOT'].'/htdocs/gen.meme/upload/temp/';
$pathGenerated = $_SERVER['DOCUMENT_ROOT'].'/htdocs/gen.meme/upload/generated/';

function clearDir($dir, $rmdir = false) {

    if ($objs = glob($dir . '/*')) {
        foreach ($objs as $obj) {
            is_dir($obj) ? clearDir($obj, $rmdir) : unlink($obj);
        }
    }

    if ($rmdir && is_dir($dir)) {
        rmdir($dir);
    }

}

clearDir($pathTemp, true);
clearDir($pathGenerated, true);