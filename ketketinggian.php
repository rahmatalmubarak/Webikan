<?php
include "koneksi.php";

$sql = mysqli_query($con, "SELECT ketinggian FROM datasensor order by id DESC");
$data=mysqli_fetch_array($sql);
$ketinggian=$data["ketinggian"];
if($ketinggian > 10 ){
    $ket = "Aman";
}else{
    $ket = "Tidak Aman";
}
echo  $ket;
