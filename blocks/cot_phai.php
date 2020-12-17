<!-- box cat -->
<?php
$idLT=5;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        <?php
        $ten_loaitin = $top->tenloaitin($idLT);
        $row_tenloaitin = mysqli_fetch_array($ten_loaitin);
        ?>
        	<a href="#"><?php echo $row_tenloaitin["ten"]?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
          <?php 
            $top = new ketnoidatabase1;
            $mottin =  $top->tinmoinhat_mottin_theoloaitin($idLT);
            $row_mottin = mysqli_fetch_array($mottin);
          ?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin["idTin"]?>"> <?php echo $row_mottin["TieuDe"]?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_mottin["urlHinh"] ?>" align="left" />
                    <div class="des"> <?php echo $row_mottin["TomTat"]?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
              <?php
              $bontin = $top->tinmoinhat_bontin_theoloaitin($idLT);
              while($row_bontin = mysqli_fetch_array($bontin)){
              ?>
            <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_bontin["idTin"]?>"><?php echo $row_bontin["TieuDe"]?></a></h3>
            <?php
            }
            ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php
$idLT=4;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        <?php
        $ten_loaitin = $top->tenloaitin($idLT);
        $row_tenloaitin = mysqli_fetch_array($ten_loaitin);
        ?>
        	<a href="#"><?php echo $row_tenloaitin["ten"]?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
          <?php 
            $top = new ketnoidatabase1;
            $mottin =  $top->tinmoinhat_mottin_theoloaitin($idLT);
            $row_mottin = mysqli_fetch_array($mottin);
          ?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin["idTin"]?>"> <?php echo $row_mottin["TieuDe"]?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_mottin["urlHinh"] ?>" align="left" />
                    <div class="des"> <?php echo $row_mottin["TomTat"]?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
              <?php
              $bontin = $top->tinmoinhat_bontin_theoloaitin($idLT);
              while($row_bontin = mysqli_fetch_array($bontin)){
              ?>
            <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_bontin["idTin"]?>"><?php echo $row_bontin["TieuDe"]?></a></h3>
            <?php
            }
            ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php
$idLT=3;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        <?php
        $ten_loaitin = $top->tenloaitin($idLT);
        $row_tenloaitin = mysqli_fetch_array($ten_loaitin);
        ?>
        	<a href="#"><?php echo $row_tenloaitin["ten"]?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
          <?php 
            $top = new ketnoidatabase1;
            $mottin =  $top->tinmoinhat_mottin_theoloaitin($idLT);
            $row_mottin = mysqli_fetch_array($mottin);
          ?>
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_mottin["idTin"]?>"> <?php echo $row_mottin["TieuDe"]?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_mottin["urlHinh"] ?>" align="left" />
                    <div class="des"> <?php echo $row_mottin["TomTat"]?></div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
              <?php
              $bontin = $top->tinmoinhat_bontin_theoloaitin($idLT);
              while($row_bontin = mysqli_fetch_array($bontin)){
              ?>
            <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_bontin["idTin"]?>"><?php echo $row_bontin["TieuDe"]?></a></h3>
            <?php
            }
            ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->