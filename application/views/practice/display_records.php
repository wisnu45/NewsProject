<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
    <th>Gender</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
<?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->mobile."</td>";
  echo "<td>".$row->address."</td>";
  echo "<td>".$row->gender."</td>";
  echo "<td><a href='deletedata?id=".$row->user_id."'>Delete</a></td>";
  echo "<td><a href='updatedata?id=".$row->user_id."'>Update</a></td>";//updatedata is controller page function
  echo "</tr>";
  $i++;
  }
  ?>
  
</table>

</body>
</html>