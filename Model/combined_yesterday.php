<?php
function database_connect()
{

    $chain = "mysql:host=localhost;dbname=base1";
    $user = "root";
    $pass = "";
    $db = new PDO($chain, $user, $pass);
    return $db;
}

function pagination()
{

    $db = database_connect();
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    }
    $num_page = 160;
    $start = ($page - 1) * 10;

    $que = "SELECT * from combined_yesterday ";
    $result = $db->query($que);
    $couunt = $result->rowCount();
    echo "<h3 id='ddd' class='text-center'>Choisirer la page que vous vouler :</h3>";
    echo "<br>";
    $total_page = ceil($couunt / $num_page);

    echo "<div>";

    if ($page > 1) {
        $min = $page - 1;
        echo   "<a href ='index.php?page=$min' class='btn btn-danger'>PREVIOUS</a>";
    }


    for ($i = 1; $i < $total_page; $i++) {
        echo   "<a href ='index.php?page=$i' class='btn btn-primary'>$i</a>";

        echo "  ";
    }

    if ($page >= 1) {
        $max = $page + 1;
        echo   "<a href ='index.php?page=$max' class='btn btn-success'>NEXT</a>";
    }
    echo "</div>";


    $sql = "SELECT * from combined_yesterday LIMIT  $start,$num_page";
    $res = $db->query($sql);
    return $res;
}

function ajou()
{

    try {
        if ((isset($_POST["AJOUTEREL"]))) {


            $db = database_connect();


            $Code = $_POST["Code"];
            $Name = $_POST["Name"];
            $Ex = $_POST["Ex"];
            $Date = $_POST["Date"];
            $MarketCapitalization = $_POST["MarketCapitalization"];
            $Open = $_POST["Open"];
            $High = $_POST["High"];
            $Low = $_POST["Low"];
            $Close = $_POST["Close"];
            $Adjusted_close = $_POST["Adjusted_close"];
            $Volume = $_POST["Volume"];
            $EMA_50 = $_POST["EMA_50"];
            $EMA_200 = $_POST["EMA_200"];
            $High_250 = $_POST["High_250"];
            $Low_250 = $_POST["Low_250"];
            $Avgvol_14d = $_POST["Avgvol_14d"];
            $Avgvol_50d = $_POST["Avgvol_50d"];
            $Avgvol_200d = $_POST["Avgvol_200d"];

            /*
            $sql = "INSERT INTO combined_yesterday values ('$Code','$Name','$Ex','$Date','$MarketCapitalization','$Open','$High' ,'$Low','$Close',$Adjusted_close','$Volume','$EMA_50','$EMA_200','$High_250','$Low_250','$Avgvol_14d','$Avgvol_50d','$Avgvol_200d')";
            $db->exec($sql);*/
            $sql = $db->prepare(query: "INSERT INTO combined_yesterday values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $sql->execute([$Code, $Name, $Ex, $Date, $MarketCapitalization, $Open, $High, $Low, $Close, $Adjusted_close, $Volume, $EMA_50, $EMA_200, $High_250, $Low_250, $Avgvol_14d, $Avgvol_50d, $Avgvol_200d]);
            echo "L'element est ajouter avec succes";
            echo "<br>";
            $que = "SELECT * from combined_yesterday ";
            $result = $db->query($que);
            $couunt = $result->rowCount();
            echo $couunt;
            header("location:index.php");
        }
    } catch (PDOException $msg) {
        echo $msg;
    }
}
function deletemodel()
{

    $db = database_connect();
    $codei = $_GET["code"];
    $sql = "DELETE from combined_yesterday where COL1='$codei' ";
    $db->exec($sql);
    echo "Suprimer avec succes";
    header("location:index.php");
}
function Modifier_model()
{
    $test = 0;
    $db = database_connect();


    if (isset($_POST['MODIFIERL'])) {

        $c = $_POST["Code"];
        $Name = $_POST["Name"];
        $Ex = $_POST["Ex"];
        $Date = $_POST["Date"];
        $MarketCapitalization = $_POST["MarketCapitalization"];
        $Open = $_POST["Open"];
        $High = $_POST["High"];
        $Low = $_POST["Low"];
        $Close = $_POST["Close"];
        $Adjusted_close = $_POST["Adjusted_close"];
        $Volume = $_POST["Volume"];
        $EMA_50 = $_POST["EMA_50"];
        $EMA_200 = $_POST["EMA_200"];
        $High_250 = $_POST["High_250"];
        $Low_250 = $_POST["Low_250"];
        $Avgvol_14d = $_POST["Avgvol_14d"];
        $Avgvol_50d = $_POST["Avgvol_50d"];
        $Avgvol_200d = $_POST["Avgvol_200d"];

        $test = 1;

        $sql = "UPDATE combined_yesterday set COL2 ='$Name' , COL3='$Ex' ,COL4 = '$Date' , COL5='$MarketCapitalization',COL6='$Open' ,COL7 = '$High' , COL8='$Low',COL9='$Close' ,COL10 = '$Adjusted_close' , COL11='$Volume',COL12='$EMA_50' ,COL13 = '$EMA_200' , COL14='$High_250',COL15='$Low_250' ,COL16 = '$Avgvol_14d' , COL17='$Avgvol_50d', COL18='$Avgvol_200d' where COL1 = '$c' ";
        $db->exec($sql);
        if ($test == 1) {
            echo "<h1>";
            echo "l'element  est bien modifier";
            echo "</h1>";
        } else {
            echo "<h1>";
            echo "l'element n'est pas modifier";
            echo "</h1>";
        }
    }
}
