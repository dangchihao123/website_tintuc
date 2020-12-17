<?php
// $con = mysqli_connect("localhost","root","");
// mysqli_select_db($con,"khoaphamtraining");
// mysqli_query($con,"SET NAMES 'utf8'");
?>
<?php

class ketnoidatabase1 {

    public $conn = "";
    public function __construct() {
        $this->conn = mysqli_connect('localhost', 'root', '', 'khoaphamtraining') or die('Không thể kết nối tới database');
    }
    function tinmoinhat_mottin(){
        $qr =mysqli_query($this->conn,"SELECT * FROM tin order by idTin DESC LIMIT 0,1");
        return $qr;
    }
    function tinmoinhat_bontin(){
        $qr =mysqli_query($this->conn,"SELECT * FROM tin order by idTin DESC LIMIT 1,6");
        return $qr;
    }
    function tinxemnhieunhat(){
        $qr = mysqli_query($this->conn,"SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,6");
        return $qr;
    }
    function tinmoinhat_mottin_theoloaitin($idLT){
        $qr =mysqli_query($this->conn,"SELECT * FROM tin WHERE idLT=$idLT order by idTin DESC LIMIT 0,1");
        return $qr;
    }
    function tinmoinhat_bontin_theoloaitin($idLT){
        $qr =mysqli_query($this->conn,"SELECT * FROM tin WHERE idLT=$idLT order by idTin DESC LIMIT 1,4");
        return $qr;
    }
    function tenloaitin($idLT){
        $qr = mysqli_query($this->conn,"SELECT ten FROM loaitin WHERE idLT=$idLT");
        return $qr;
    }
    function quangcao($vitri){
        $qr = mysqli_query($this->conn,"SELECT * FROM quangcao WHERE vitri=$vitri");
        return $qr;
    }
function danhsachtheloai(){
    $qr = mysqli_query($this->conn,"SELECT * FROM theloai");
    return $qr;
    }
function danhsachloaitin_theotheloai($idTL){
    $qr = mysqli_query($this->conn,"SELECT * FROM loaitin WHERE idTL = $idTL");
    return $qr;
}
function tinmoi_bentrai($idTL){
    $qr = mysqli_query($this->conn,"SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin LIMIT 0,1");
    return $qr;
}
function tinmoi_bentrai_haitin($idTL){
    $qr = mysqli_query($this->conn,"SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin LIMIT 1,2");
    return $qr;
}
function tintheoloaitin($idLT){
 $qr = mysqli_query($this->conn,"SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC");
 return $qr;
}
function Creakbrum($idLT){
$qr = mysqli_query($this->conn,"SELECT TenTL,Ten FROM theloai,loaitin WHERE theloai.idTL = loaitin.idTL AND idLT =$idLT");
return $qr;
}
function tintheoloaitin_phantrang($idLT,$from,$sotin1trang){
    $qr = mysqli_query($this->conn,"SELECT * FROM tin WHERE idLT=$idLT ORDER BY idTin DESC LIMIT $from,$sotin1trang");
    return $qr;
   }
 }

?>