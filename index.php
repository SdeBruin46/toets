<?php
 if (isset($_POST['verzenden'])) {
     $invoer = filter_input(INPUT_POST, "textvak", FILTER_SANITIZE_NUMBER_INT);

     echo $invoer;
     echo "<br><br>";
 } else {
     $invoer = "";
 }
?>
<form method="post" action="">
    <input type="text" name="Getal 1" value="<?php echo $invoer;?>">

    <input type="submit" name="verzenden" value="Verzenden">
</form>