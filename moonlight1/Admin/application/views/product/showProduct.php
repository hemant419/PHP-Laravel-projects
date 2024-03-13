<?php
	$col=$product->prd_color;
	$color=preg_split("/-/",$col);

	$desc=$product->prd_description;
	$description=preg_split("/-/",$desc);
	
	$fea=$product->prd_feature;
	$feature=preg_split("/-/",$fea);
?>
<tr>
<td rowspan="9" width="500" align="center">
<div>
	
		<div class="row">
			<div class="col-md-10">
				<div class="form-group" style="border:solid #66FFFF">
					<img id="img" src="<?php echo base_url()?>/product/<?php echo $product->prd_img1;?>" class="img-responsive" />
				</div>
			</div>
		
			<div class="col-md-3">
				
						<img src="<?php echo base_url()?>/product/<?php echo $product->prd_img1;?>" class="img-responsive" id="img2" onclick="hi(<?php echo base_url()?>/product/<?php echo $product->prd_img1;?>)"  width="100" height="120" style="border:solid #66FFFF"/>
	
				
			</div>
			<div class="col-md-3">
				
						<img src="<?php echo base_url()?>/product/<?php echo $product->prd_img2;?>" class="img-responsive" id="img3"  width="100" height="120" style="border:solid #66FFFF"/>              
				
			</div>
			<div class="col-md-3">
				
					<img src="<?php echo base_url()?>/product/<?php echo $product->prd_img3;?>" class="img-responsive"id="img4"  width="100" height="120" style="border:solid #66FFFF"/>              
				
			</div>
		</div>
</div>
<div>
</td>
</tr>
<tr>
<th align="center">Deatil</th>
<td style="text-align:left-justify">
		<?php for($i=0;$i<count($description);$i++){echo  "<br> * ".$description[$i];} ?></td>
</tr>
<tr>
<th>&nbsp;</th>
<td style="text-align:left-justify">
		<?php for($i=0;$i<count($feature);$i++){echo  "<br> * ".$feature[$i];} ?></td>
</tr>
<tr>
<th align="center">Discount</th>
<td ><?php echo $product->prd_discount ?> %</td>
</tr>
<tr>
<th align="center">Color</th>
<td >
	1) <?php echo $color[0] ?><br />
	2) <?php echo $color[1] ?></td>
</tr>

<tr>
<th align="center">Stock</th>
<td><?php echo $product->prd_stock ?></td>
</tr>
<tr>
<th align="center">Size</th>
<td><?php echo $product->prd_size ?></td>
</tr>
<tr>
<th align="center">Start Date
:	<?php echo $product->prd_startdate ?></th>
<th align="center">End Date :
<?php echo $product->prd_enddate ?></th>
</tr>


