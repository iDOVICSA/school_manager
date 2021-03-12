<!DOCTYPE html>
<html>
<div class="slideshow">
    <img class="mySlides" src="images/diapo1.jpg">
    <img class="mySlides" src="images/diapo2.jpg">
    <img class="mySlides" src="images/diapo3.jpg">
    <img class="mySlides" src="images/diapo4.jpg">

</div>

</html>


<style>
    .slideshow {
        height: 20%;
        width: 70%;
        margin: auto;
        background-color: black;
    }

    .slideshow img {
        padding-left: 5%;
        padding-right: 5%;
        width: 100%;
        height: 500px;
    }
</style>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 3000); // Change image every 3 seconds
    }
</script>