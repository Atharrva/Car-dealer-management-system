<?php
include 'connection.php';
$sql="select count(*)  as count from supplier";
$res = $conn->query($sql);
while($rws = $result->fetch_assoc()){
$max=$rws['count'];
}
$s=rand(1,$max);
echo $s;
?>