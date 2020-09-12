<?php
$conn_string = "dbname=d5u353vd41p87 host=ec2-34-237-89-96.compute-1.amazonaws.com port=5432 user=crkeeozulhprof password=5363a0f08cbeb8e9d5350fd1aaa0216899af82c7348056608697ea2f4e24c1af sslmode=require";

$dbconn = pg_connect($conn_string)
or die('No se ha podido conectar: ' . pg_last_error());
?>