<?php
$this->db->where('product_id',$result->product_id);
$rr2=$this->db->get('productimage')->row();
?>

<tr>
	<!--<th rowspan="10"></th>-->
	<td rowspan="10" bordercolor="#000000">
    <img src="<?php echo base_url()?>./images/<?php echo $rr2->image ?>" height="200" width="250"></td>
</tr>

<tr>
	<th align="center">Id </th>
	<td ><?php echo $result->product_id; ?></td>
</tr>
<tr>
	<th align="center">Name</th>
	<td ><?php echo $result->product_name; ?></td>
</tr>
<tr>
	<th align="center">Description &nbsp;</th>
	<td ><?php echo $result->product_description; ?></td>
</tr>

<tr>
	<th align="center"> Disccount</th>
	<td ><?php echo $result->product_discount; ?></td>
</tr>
<tr>
	<th align="center"> Purchase</th>
	<td ><?php echo $result->product_peateched ; ?></td>
</tr>
<tr>
	<th align="center">Stock</th>
	<td ><?php echo $result->stock; ?></td>
</tr>
<tr>
	<th align="center">Start-Date</th>
	<td ><?php echo $result->stating_date ; ?></td>
</tr>
<tr>
	<th align="center">End-Date</th>
	<td ><?php echo $result->endig_date  ; ?></td>
</tr>

