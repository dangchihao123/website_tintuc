<div class="thongtin-title">
   <div class="right">

      <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>

      <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>

   </div>
</div>
<div class="thongtin-content">
   <?php
   $top = new ketnoidatabase1;
   $theloai = $top->danhsachtheloai();
   while($row_theloai = mysqli_fetch_array($theloai)){
      $idTL = $row_theloai["idTL"];
   ?>
   <ul class="ulBlockMenu">
      <li class="liFirst">
         <h2>
            <a class="mnu_giaoduc" href="#"><?php echo $row_theloai["TenTL"]?></a>
         </h2>
      </li>
      <?php
          $loaitin = $top->danhsachloaitin_theotheloai($idTL);
          while($row_loaitintheotheloai = mysqli_fetch_array($loaitin)){
      ?>
      <li class="liFollow">
         <h2><a href="index.php?p=tintrongloai&idLT=<?php echo $row_loaitintheotheloai["idLT"]?>"><?php echo $row_loaitintheotheloai["Ten"]?></a></h2>
      </li>
      <?php
          }
      ?>

   </ul>
   <?php
   }
   ?>
</div>