<div id="content" class="float_r"> 

<?php
$sql = mysql_query("SELECT * FROM new_product  WHERE id='$_GET[id]'");
$data = mysql_fetch_array($sql);
?>  	
            <h1><?php echo $data['nama_page'];?></h1>
            <div class="content_half float_l">
        	<a  rel="lightbox[portfolio]"><img src="images/new_product/<?php echo $data['gambar'];?>" alt="Image 01" /></a>
            </div>
            <div class="content_half float_r">
				<table>
                    <tr>
                        <td height="30" width="160">Harga: </td>
                        <td>Rp. <?php echo $data['price'];?></td>
                    </tr>
                    <tr>
                        <td height="30">Stok:</td>
                        <td><?php echo $data['stok'];?></td>
                    </tr>
                    <tr><td height="30">Quantity</td><td><input type="text" value="1" style="width: 20px; text-align: right" /></td></tr>
                </table>
                <div class="cleaner h20"></div>
                <a href="?menu=etransaksi" class="add_to_card"><img src="images/shop.png" /></a>
			</div>
            <div class="cleaner h30"></div>
            
            <h5>Product Description</h5>
            <p><?php echo $data['isi'];?></p>	
			
            <div class="cleaner h50"></div>
			
			
			<h4>Coba produk lainnya</h4>
			<?php
			$sql = mysql_query("SELECT * FROM new_product ORDER BY RAND() DESC LIMIT 3 ");
			while ($data=mysql_fetch_array($sql)){
			?>
        	<div class="product_box">
            	<a href="?menu=productdetail&id=<?php echo $data['id'];?>"><img src="images/new_product/<?php echo $data['gambar'];?>" alt="Image 01" /></a>
                <h3><?php echo $data['nama_page'];?></h3>
                <p class="product_price">Rp.<?php echo $data['price'];?></p>
				<a href="?menu=productdetail&id=<?php echo $data['id'];?>" class="detail"><img src="images/detail.png" title="Detail Product"></a>
            </div>
			<?php } ?>
</div> 

        <div class="cleaner"></div>