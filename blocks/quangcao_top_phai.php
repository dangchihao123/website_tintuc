<?php
$vitri = 1;
$top = new ketnoidatabase1;
$quangcao = $top->quangcao($vitri);
while($row_quangcao = mysqli_fetch_array($quangcao)){
?>
<img width="280" src="images/1.png" />
<div style="height:10px"></div>
<?php
}
?>