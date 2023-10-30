<?php

$result= $_GET["number1"]  + $_GET["number2"];





?>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

</body>
<div class="container"> </div>
<form action="calc.php" method="GET" class="form">
    <div>
        <label>Enter Number1:</label>
        <input type="number" name="number1" class="form-control">
    </div>

    <div>
        <label>Enter Number2:</label>
        <input type="number" name="number2" class="form-control">
    </div>


    <div class=" alert alert-success">
    <?php echo $result ?>

    </div>
    <br>
    <input type="submit" class="btn btn-primary">

</form>

</div>
</body>
