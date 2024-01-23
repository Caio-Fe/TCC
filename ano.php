<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Repositório: Ano</title>
    <!-- add icon link to the page-->
    <link rel="icon" href="img/image2.jpg" type="image/x-icon">
</head>

<body>

    <!--Bootstrap Javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!--grid do header-->
    <?php include_once 'header.php'; ?>

    <!--Grid do menu lateral com o corpo-->
    <?php include_once 'lateral.php'; ?>

    <!--Grid do corpo-->
    <div class="col-lg-6" style="padding-top:100px">
        <div class="container" style=" background-color:#435281;text-align: center;
    margin-left:60% ;margin-right:30%;margin-bottom:15%; margin-top:8%; color:#000;">
            <?php
include_once 'dbcon.php';
$selectQuery = 'SELECT ano FROM projects';
// squery saves the result of the query
$squery = mysqli_query($con, $selectQuery);
$anos = [];
$counter = 0;
// result here is an array with the data from the database
while ($result = mysqli_fetch_assoc($squery)) {
    //salva os anos com projetos em um array
    if(!in_array($result['ano'], $anos)) {
        $anos[$counter] = $result['ano'];
        $counter++;
    }
}
foreach($anos as $ano) {
    $projetos = 0;
    $selectQuery = "SELECT ano FROM projects WHERE ano LIKE '$ano'";
    $squery = mysqli_query($con, $selectQuery);
    while ($result = mysqli_fetch_assoc($squery)) {
        $projetos++;
    }
    echo "<div>";
    echo "<div class='container'>";
    echo "<div class='row' style='border-width:5px; border-style:solid; border-color:#435281'>";
    echo "<div class='col'>";
    echo "<h4 style='background-color:rgb(255, 193, 24)'>Ano</h4>";
    echo "<p style='background-color:rgb(176, 198, 255)'>$ano</p>";
    echo "</div>";
    echo "<div class='col'>";
    echo "<h4 style='background-color:rgb(255, 193, 24)'>Projetos</h4>";
    echo "<p style='background-color:rgb(176, 198, 255)'>$projetos</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<br>";
}


?>


        </div>
    </div>
    <!-- grid do footer -->
    <?php include_once 'footer.php'; ?>
</body>

</html>