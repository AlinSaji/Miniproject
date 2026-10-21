<?php
include '../connection.php';
$x=$_GET['x'];


$sel_district=mysqli_query($dbcon,"select * from sub_cate where cid='$x'");
if(mysqli_num_rows($sel_district)>0)
{
    ?>
<div class="form-select" id="default-select">
<select name="t3" class="form-control" required="required" >
<option value="">Choose One</option>
<?php
while($r_district=mysqli_fetch_row($sel_district))
{
    ?>
<option value="<?php echo $r_district[2] ?>"><?php echo $r_district[2] ?></option>
<?php
}
?>
</select>
</div>
<?php
}
else{
    ?>
<select name="t3" class="form-control" required="required">
<option value="">Choose One</option>
  </select>
<?php
}
?>