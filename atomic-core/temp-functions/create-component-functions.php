<?php




function createCompFile($catName, $compName)
{
    $config = getConfig('../..');

    $compDir = $config[0]['component_directory'];
    $compExt = $config[0]['component_extension'];


    fopen("../../$compDir/$catName/$compName.$compExt", 'x+') or die("can't open file");
}

function createCompComment($catName, $compName)
{

    $config = getConfig('../..');

    $compDir = $config[0]['component_directory'];
    $compExt = $config[0]['component_extension'];

    $commentString = '<!-- '.$compDir.'/'.$catName.'/'.$compName.'.'.$compExt.' -->';
    $commentString = "\n$commentString\n";
    $fileHandle = fopen('../../'.$compDir.'/'.$catName.'/'.$compName.'.'.$compExt.'', 'w') or die("can't open file");
    fwrite($fileHandle, $commentString);
    fclose($fileHandle);
    file_put_contents('../../'.$compDir.'/'.$catName.'/'.$compName.'.'.$compExt.'', implode(PHP_EOL, file('../../'.$compDir.'/'.$catName.'/'.$compName.'.'.$compExt.'', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
}



function createStylesFile($catName, $compName)
{
    $config = getConfig('../..');

    $stylesDir = $config[0]['styles_directory'];
    $stylesExt = $config[0]['styles_extension'];

    fopen("../../$stylesDir/$catName/_$compName.$stylesExt", 'x+') or die("can't open file");
}

function createStyleComment($catName, $compName)
{

    $config = getConfig('../..');

    $stylesDir = $config[0]['styles_directory'];
    $stylesExt = $config[0]['styles_extension'];


    $commentString = '/* '.$stylesDir.'/'.$catName.'/_'.$compName.'.'.$stylesExt.' */';
    $commentString = "\n$commentString\n";
    $fileHandle = fopen('../../'.$stylesDir.'/'.$catName.'/_'.$compName.'.'.$stylesExt.'', 'w') or die("can't open file");
    fwrite($fileHandle, $commentString);
    fclose($fileHandle);
    file_put_contents('../../'.$stylesDir.'/'.$catName.'/_'.$compName.'.'.$stylesExt.'', implode(PHP_EOL, file('../../'.$stylesDir.'/'.$catName.'/_'.$compName.'.'.$stylesExt.'', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
}



function writeStylesImport($catName, $compName)
{

    $config = getConfig('../..');

    $stylesDir = $config[0]['styles_directory'];
    $stylesExt = $config[0]['styles_extension'];

    //create @import string
    $importString = "@import " . '"_'.$compName.'";' ;
    $importString = "\n$importString\n";

    //open parent scss file and write @import string to it
    $fileHandle = fopen('../../'.$stylesDir.'/'.$catName.'/'.'_'.$catName.'.'.$stylesExt.'', 'a') or die("can't open file");
    fwrite($fileHandle, $importString);
    fclose($fileHandle);

    //remove any extra line breaks from file
    file_put_contents('../../'.$stylesDir.'/'.$catName.'/'.'_'.$catName.'.'.$stylesExt.'', implode(PHP_EOL, file('../../'.$stylesDir.'/'.$catName.'/'.'_'.$catName.'.'.$stylesExt.'', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES)));
}













