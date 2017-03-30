<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Deret Fibonachi Oleh Andika Octavia</h2>
<?php
if(!isset($_GET['jml'])){
?>
<!-- hasil -->
<p>Berikut ini merupakan deret Fibonachi: 
<?php
	$j=10;
	$awal[0]=0;
	$awal[1]=1;
	for($i=0;$i<$j;$i++){
		if($i==0){
				echo $awal[$i];
		}else if($i==1){
			echo ",";
			echo $awal[$i];		
		}else{
			echo ",";
			$awal[$i]= $awal[$i-1]+$awal[$i-2];
			if(($awal[$i]%2)==0){
				echo "<b class='text-primary'>".$awal[$i]."</b>";
			}else{
				echo $awal[$i];
			}
		}
	}
?>
</p>
<a href="index.php?jml=-10"><span class="btn btn-danger disabled">Prevoius</span></a>
<a href="index.php?jml=<?php echo $j ?>"><span class="btn btn-primary">Next</span></a>
<!-- end -->
<?php
}else{
?>
<!-- hasil -->
<p>Berikut ini merupakan deret Fibonachi: 
<?php
	$jml=$_GET['jml'];
	$j=$jml+10;
	$awal[0]=0;
	$awal[1]=1;
	for($i=0;$i<$j;$i++){
		if($i==0){
				echo $awal[$i];
		}else if($i==1){
			echo ",";
			echo $awal[$i];		
		}else{
			echo ",";
			$awal[$i]= $awal[$i-1]+$awal[$i-2];
			if(($awal[$i]%2)==0){
				echo "<b class='text-primary'>".$awal[$i]."</b>";
			}else{
				echo $awal[$i];
			}
		}
	}
?>
</p>
<p>Jumlah Deret: <?php echo $j; ?></p>
<?php if($j==10){ ?> <a href="#"><span class="btn btn-danger disabled">Prevoius</span></a> <?php }else{ ?>
<a href="index.php?jml=<?php echo $j-20 ?>"><span class="btn btn-danger">Prevoius</span></a><?php } ?> 
<a href="index.php?jml=<?php echo $j ?>"><span class="btn btn-primary">Next</span></a>
<!-- end -->
<?php
}
?>
</div>
</body>
</html>