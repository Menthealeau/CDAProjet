<?php
include_once("model/DiscModel.php");
include_once("model/ArtistModel.php");

$nbdiscs = Number_Disc();
$discs = All_Info_Disc();


include("view/AcceuilView.php");