<?php
$host="localhost";
$user="root";
$pass="";
$db_name="test";
$query="SELECT * FROM fortest";
$mysqli=new mysqli($host,$user,$pass,$db_name) or die ('no connection');
$display=$mysqli->query($query) or die ('rrrrrr');
while ($view=$display->fetch_assoc()){
    echo $view['tt'];
}
$ttt='iiiiii';
$q2="INSERT INTO fortest ('tt') VALUES ($ttt)";
$mysqli->query($q2) ;
