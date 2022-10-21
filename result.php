<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2>
        <?php
        if($_POST["marks"] >= 80){
        echo $_POST["name"] ." you grade is A+ ";
        }

        elseif($_POST["marks"] >= 70){
        echo $_POST["name"] . " you grade is A";
        }

        elseif($_POST["marks"] >= 60){
        echo $_POST["name"] . " you grade is B";
        }

        elseif($_POST["marks"] >= 50){
        echo $_POST["name"] . " you grade is C";
        }

        else{
        echo $_POST["name"] ." you are Failed";
        }
        ?>
      </h2>
    </div>
  </div>
</div>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
