<!DOCTYPE html>
<link href="./css/tailwind.min.css" rel="stylesheet">

<html>

<body>

    <div class="w-full border-b flex flex-row flex-wrap items-center p-1">


        <div class="w-full md:w-2/5 mx-auto">
            <div class="mx-5 my-3 text-sm">

            </div>
            <div class="w-full text-gray-800 text-4xl px-5 mb-10  font-bold leading-none">
                <?php echo $article['title'] ?>
            </div>

            <div class="mx-5">
                <?php
                $link = $article["image"];
                $src = "images/$link"; // source file of the image
                echo '<img src=' . $src . '  width="100%" height="100%"> ';
                ?>
            </div>

            <div class="px-5 w-full mx-auto">
                <p class="my-5"><?php echo $article['description'] ?> </p>
            </div>
        </div>

</body>

</html>