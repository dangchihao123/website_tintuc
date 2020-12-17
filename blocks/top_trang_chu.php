<?php
require_once "lib/dbCon.php";
?>
<div id="slide-left">
        	<div id="slideleft-main">
                <?php
                $top = new ketnoidatabase1;
                $tinmoinhat_mottin = $top->tinmoinhat_mottin();
                $row_tinmoinhat_mottin = mysqli_fetch_array($tinmoinhat_mottin);
                ?>
                <img src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlHinh']?>"  /><br />
                <h2 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_mottin['idTin']?>"><?php echo $row_tinmoinhat_mottin['TieuDe']?></a> </h2>
                <div class="des">
                    <?php echo $row_tinmoinhat_mottin['TomTat']?>
                </div>                  
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
            <?php
                  $tinmoinhat_bontin = $top->tinmoinhat_bontin();
                  while($row_tinmoinhat_bontin = mysqli_fetch_array($tinmoinhat_bontin))
                  {
            ?>
               <li>
                <div class="title_news">
               		<a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_bontin['idTin'] ?>" class="txt_link"> <?php echo $row_tinmoinhat_bontin['TieuDe'] ?> </a> 
                </div>
              </li> 
              <?php 
                  }
              ?>
            </ul>
            </div>			
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     