<?php // file not found view
    // check if component included
    if (basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"])) {
        die(header('Location: /?process=upload'));
    } else {
                   
        // check if file get seted
        if (empty($_GET["file"])) {
            die(header('Location: /?process=upload'));
        } else {
            echo '<p class="not-found">File ' . $_GET["file"] . ' not found</br></br> please check link and file name.</p>';
        }
    } 
?>