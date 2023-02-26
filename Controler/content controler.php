<?php
require "./Model/combined_yesterday.php";
function combined_yesterday_Action()
{
    database_connect();


    $result = pagination();
    include "./Views/Liste_combined_yesterday.php";
}


function create()
{
    database_connect();
    include "./Views/createone.php";
    ajou();
}
function DeleteAction()
{
    database_connect();
    deletemodel();
}

function Modifier()
{
    database_connect();
    include "./Views/modifi.php";
    Modifier_model();
}
