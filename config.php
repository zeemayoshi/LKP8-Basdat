<?php
$db=pg_connect('host=localhost port=5433 dbname=sekolah user=postgres password=AgaruKa1zen');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
