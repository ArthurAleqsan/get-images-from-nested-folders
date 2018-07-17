<?php

function get_imgs($Folder) {
    $img_extensions = array('jpg','png','jpeg','gif');

    $scdir = scandir($Folder);
    foreach ($scdir as $value)
    {
        $ext = pathinfo($value, PATHINFO_EXTENSION);
        if(in_array($ext, $img_extensions)) {
            echo '<center>'.$value.'</center>';
            echo '<center><img style="margin:0 auto;" src="'.$Folder . DIRECTORY_SEPARATOR . $value.'"></center></br></br></br>';

        }
        if (!in_array($value,array(".","..")))
        {

            if (is_dir($Folder . DIRECTORY_SEPARATOR . $value))
            {
                get_imgs($Folder . DIRECTORY_SEPARATOR . $value);
            }

        }
    }
}
get_imgs( './');

?>

