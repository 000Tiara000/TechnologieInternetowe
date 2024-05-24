<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    if (!empty($_POST['module']) && !empty($_POST['name']) && !empty($_POST['comment']) && !empty($_POST['rating'])) {
       
        $module = $_POST['module'];
        $subject = !empty($_POST['subject']) ? $_POST['subject'] : 'module';
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $rating = $_POST['rating'];

       
        $filename = "comments_" . preg_replace('/\s+/', '_', $module) . "_" . preg_replace('/\s+/', '_', $subject) . ".txt";

        
        $file = fopen($filename, "a");

        
        fwrite($file, "<strong>$name:</strong> $comment (Ocena: $rating/5)<br>");

        
        fclose($file);

       
        echo "success";
    } else {
        
        echo "Prosimy wypełnić wszystkie pola.";
    }
}
?>
