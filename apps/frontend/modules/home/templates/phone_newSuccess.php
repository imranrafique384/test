<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<br>
<body>


<form id="form1" name="form1" method="post" action="<?php echo url_for('home/phone_new')?>">
  <table width="589" border="1">
    <tr>
      <td width="208">first_name</td>
      <td width="298"><label for="first_name"></label>
      <input type="text" name="first_name" id="first_name" /></td>
      <td width="61">&nbsp;</td>
    </tr>
    <tr>
      <td>last_name</td>
      <td><label for="last_name"></label>
      <input type="text" name="last_name" id="last_name" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<table width="1000" border="1">
  <tr>
    <td>Phone_id</td>
    <td>User_id</td>
    <td>first_name</td>
    <td>last_name</td>
    <td>phone</td>
  </tr>
 <?php 
foreach($result as $row)
{
?>
  <tr>

    <td><?php echo $row['phone_id'] ?></td>
    <td><?php echo $row['user_id'] ?></td>
    <td><?php echo $row['first_name'] ?></td>
    <td><?php echo $row['last_name'] ?></td>
    <td><?php echo $row['phone'] ?></td>
  </tr>
<?php
}
?>  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>
<?php 
for($i = 1; $i<=$total_pages; $i++)
{
?>
<a href=" <?php echo url_for('home/phone_new?num='.$i) ?> "> <?=$i ?> </a>|

<?php
}
?>
</p>
<p>
  <?php 
echo "first page is:-".$first_page;
echo "<br>";
echo  "total number of rows:- ".$number_row;
echo "<br>";
echo  "Total pages :- ".$total_pages;
?>
</p>
</body>
</html>