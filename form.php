<form action="form.php" method="POST">

    F_Name: <input type="text" name="f_name">
    <br>
    L_Name: <input type="text" name="l_name">
    <br>
    <input type="submit">


</form>

<?php 
echo $_POST["f_name"];
echo $_POST["l_name"];
?>




