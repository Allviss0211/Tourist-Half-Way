<!DOCTYPE html>
<html>
<head>
  <title>Danh sách sinh viên</title>
</head>
<body>
  <table border="1">
    <tr>
  	  <td>Id</td>
  	  <td>Name</td>
  	  <td>Age</td>
  	</tr>
  	<?php foreach ($list as $value) {?>
  	<tr>
  	  <td><?php echo $value["id"];?></td>
  	  <td><?php echo $value["name"];?></td>
  	  <td><?php echo $value["age"];?></td>
  	</tr>
  	<?php } ?>
  </table>
</body>
</html>