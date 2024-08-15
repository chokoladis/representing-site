<?

$root = __DIR__ . '/../';

$pathTemp = $root . 'htdocs/gen.meme/upload/temp/';
$pathGenerated = $root . 'htdocs/gen.meme/upload/generated/';

function clearDir($dir, $rmdir = false)
{

    if ($objs = glob($dir . '/*')) {
        foreach ($objs as $obj) {
            is_dir($obj) ? clearDir($obj, true) : unlink($obj);
        }
    }

    if ($rmdir && is_dir($dir)) {
        rmdir($dir);
    }
}

clearDir($pathTemp);
clearDir($pathGenerated);
