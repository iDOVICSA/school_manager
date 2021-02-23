<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<body>
    <div class="grid grid-cols-4 gap-2 px-8">
         <?php
        $nbr_articles = 0;
        foreach ($articles as $article) {
            $nbr_articles = $nbr_articles + 1;
            if ($nbr_articles <= 8) {
                require("./view/html_views/article_html.php");
            }
            else break ; 

        }
        ?>
    </div>
 
</body>

</html>