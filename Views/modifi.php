<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Document</title>
</head>
<?php
if (isset($_GET['code'])) {
    $code = $_GET['code'];
}
?>

<body>
    <h1 class="text-muted">MODIFIER UN ELEMENT</h1><br>
    <form action="Modifier.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Code</label>
            <input value="<?php if (isset($code)) {
                                echo $code;
                            }
                            ?>" class="form-control" name="Code" type="text"><br>
            <label for="exampleInputEmail1">Name </label>
            <input class="form-control" name="Name" type="text"><br>
            <label for="exampleInputEmail1">Ex</label>
            <input class="form-control" name="Ex" type="text"><br>

            <label for="exampleInputEmail1">Date</label>
            <input class="form-control" name="Date" type="text"><br>
            <label for="exampleInputEmail1">MarketCapitalization</label>
            <input class="form-control" name="MarketCapitalization" type="text"><br>
            <label for="exampleInputEmail1">Open </label>
            <input class="form-control" name="Open" type="text"><br>
            <label for="exampleInputEmail1">High</label>
            <input class="form-control" name="High" type="text"><br>
            <label for="exampleInputEmail1">Low </label>
            <input class="form-control" name="Low" type="text"><br>
            <label for="exampleInputEmail1">Close </label>
            <input class="form-control" name="Close" type="text"><br>
            <label for="exampleInputEmail1">Adjusted_close </label>
            <input class="form-control" name="Adjusted_close" type="text"><br>
            <label for="exampleInputEmail1">Volume </label>
            <input class="form-control" name="Volume" type="text"><br>
            <label for="exampleInputEmail1">EMA_50 </label>
            <input class="form-control" name="EMA_50" type="text"><br>
            <label for="exampleInputEmail1">EMA_200 </label>
            <input class="form-control" name="EMA_200" type="text"><br>
            <label for="exampleInputEmail1">High_250 </label>
            <input class="form-control" name="High_250" type="text"><br>
            <label for="exampleInputEmail1">Low_250 </label>
            <input required class="form-control" name="Low_250" type="text"><br>
            <label for="exampleInputEmail1">Avgvol_14d</label>
            <input required class="form-control" name="Avgvol_14d" type="text"><br>
            <label for="exampleInputEmail1">Avgvol_50d </label>
            <input required class="form-control" name="Avgvol_50d" type="text"><br>
            <label for="exampleInputEmail1">Avgvol_200d</label>
            <input required class="form-control" name="Avgvol_200d" type="text"><br>
            <button class='btn btn-success' name="MODIFIERL" type="submit">MODIFIER</button>
            <br>
        </div>
    </form>
    <br>
</body>


</html>