<head>

</head>
      	<div id="content" class="float_r">
        	<h1>New Products</h1>
			<?php
			include "class.php";
			$p      = new Paging6;
			$batas  = 9;
			$posisi = $p->cariPosisi($batas);
			$sql=mysql_query("SELECT * FROM new_product ORDER BY id DESC LIMIT $posisi, $batas");
			while ($row=mysql_fetch_array($sql)){
			?>

            <div class="product_box">
            	<a href="?menu=productdetail&id=<?php echo $row['id'];?>"><img src=" images/new_product/<?php echo $row['gambar']; ?>" alt="Image 01" /></a>
                <h3><?php echo $row['nama_page']; ?></h3>
                <p class="product_price">Rp.<?php echo $row['price'];?></p>
                <a href="?menu=productdetail&id=<?php echo $row['id'];?>" class="detail"><img src="images/detail.png" title="Detail Product"></a>
			</div>
			
			<?php } ?>  
			
			<div class="cleaner"></div>
            <?php
			$jmldata = mysql_num_rows(mysql_query("select * from new_product order by id"));
			$jmlhalaman  = $p->jumlahHalaman($jmldata, $batas);
			$linkHalaman = $p->navHalaman($_GET[hal], $jmlhalaman);
			echo "<hr /><p align=\"center\">$linkHalaman</p>";
			?>      	
		</div>