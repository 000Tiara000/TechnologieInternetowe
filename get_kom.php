<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET['module'])) {
    $module = $_GET['module'];
    $subject = !empty($_GET['subject']) ? $_GET['subject'] : 'module';

    
    $filename = "comments_" . preg_replace('/\s+/', '_', $module) . "_" . preg_replace('/\s+/', '_', $subject) . ".txt";

  
    if (file_exists($filename)) {
        readfile($filename);
    } else {
        echo "Brak komentarzy dla wybranego modułu/przedmiotu.";
    }
}
?>
