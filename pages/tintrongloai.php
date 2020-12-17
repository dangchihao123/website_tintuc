<?php
$idLT = $_GET["idLT"];
settype($idLT, "int");
if(isset($_GET["trang"])){
    $trang = $_GET["trang"];
    settype($trang,"int");
}else{
    $trang =1;
}
?>
<?php
$brum = $top-> Creakbrum($idLT);
$row_brum = mysqli_fetch_array($brum);
?>
<div> trang chủ >> <?php echo $row_brum["TenTL"]?> >> <?php echo $row_brum["Ten"]?> </div>
<?php
$sotin1trang = 4;
$from = ($trang -1)*$sotin1trang;
$top = new ketnoidatabase1;
$tintheoloaitin = $top->tintheoloaitin_phantrang($idLT,$from,$sotin1trang);
while ($row_tintheoloaitin = mysqli_fetch_array($tintheoloaitin)) {
?>
    <div class="box-cat">
        <div class="cat1">
            <div class="clear"></div>
            <div class="cat-content">
                <div class="col0 col1">
                    <div class="news">
                        <h3 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tintheoloaitin["idTin"] ?>"><?php echo $row_tintheoloaitin["TieuDe"] ?></a></h3>
                        <img class="images_news" src="upload/tintuc/<?php echo $row_tintheoloaitin["urlHinh"] ?>" align="left" />
                        <div class="des"><?php echo $row_tintheoloaitin["TomTat"] ?></div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

<?php
}
?>

<style>
#phantrang{
    text-align: center;


}
#phantrang a{
    margin-right: 3px;
    background-color: blueviolet;
}
#phantrang a:hover{background-color: red;}
</style>
<div id="phantrang">
<?php
    $row_tintheoloaitin = $top->tintheoloaitin($idLT);
    $tongsotin = mysqli_num_rows($row_tintheoloaitin);
    $tongsotrang = ceil($tongsotin/$sotin1trang);
    for(  $i = 1 ; $i<=$tongsotrang ; $i++){
?>
<a <?php if($trang == $i) echo "style = 'background-color:red'"?>href="index.php?p=tintrongloai&idLT=<?php echo $idLT?>&trang=<?php echo $i?>"><?php echo $i?></a>
<?php
    }
?>
</div>
<!-- box cat-->