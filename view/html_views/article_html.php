<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<div class="p-10">
   <!--Card 1-->
   <div class=" max-w-sm rounded overflow-hidden shadow-lg ">
      <div class="font-bold text-center text-xl mb-2"><?php echo $article["title"] ?></div>
      <div class="px-6 py-4" style="height: 200px;">
      
         <?php

         // these lines get image name from database and match it with local image
         $link = $article["image"];
         $src = "images/$link"; // source file of the image
        echo '<img class="h-full w-full"  src=' . $src . ' width="100%" height="100%" alt="image">'

         ?>
      
      </div>
      <p class="text-gray-700 text-base">
            <?php
            $description = substr($article['description'],0,80).'...';
            echo $description;
            ?>
         </p>
         <form  action="article_details" class="form-container" method='POST'>
         <?php echo "<input type='hidden' name='id_article' value=" . $article["id_article"] . "></input>" ?>
         <button class="text-blue-500 text-xs ml-3" type="submit" class="btn">Afficher l'article</button>
      </form>
   </div>
</div>

</html>