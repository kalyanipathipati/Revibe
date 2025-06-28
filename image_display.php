<!DOCTYPE html>
<html>
<head>
    <style>
        .image-display {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-display img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 20px;
        }
        .image-display .product-info {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
            color: white;
        }
    </style>
</head>
<body>
<?php
if (isset($_POST['image_src'])) {
    $image_src = $_POST['image_src'];
    echo '<div class="modal-dialog">';
    echo '<div class="modal-content">';
    echo '<img src="' . $image_src . '" alt="Product Image">';
    echo '<button class="close-button">&times;</button>';
    echo '</div>';
    echo '</div>';
}
?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var closeButtons = document.getElementsByClassName('close-button');
    for (var i = 0; i < closeButtons.length; i++) {
        closeButtons[i].addEventListener('click', function() {
            document.getElementById("image_display").innerHTML = '';
        });
    }
});
function showImage(image_src) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("image_display").innerHTML = this.responseText;
        }
    };
    xhttp.open("POST", "image_display.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("image_src=" + encodeURIComponent(image_src));
}
</script>
</body>
</html>