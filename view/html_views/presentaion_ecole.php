<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<body>
 
    <?php


    foreach ($presentation as $paragraph_image) {
        $link = $paragraph_image["image"];
        $src = "images/$link"; // source file of the image
        echo $paragraph_image['presentation'];
        echo '<br>';
        echo '<img style="margin: auto;" src=' . $src . '  width="80%" height="60%"> ';
    }
    ?>

</body>

</html>