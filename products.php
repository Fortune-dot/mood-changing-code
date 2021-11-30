
<!DOCTYPE HTML>
<html>
<head>
<title>Admdin Home</title>
<link rel="StyleSheet" href="css/style.css" type="text/css" media="screen">
</head>
<body>

<div id="maincontent">

    <div id="breadcrumbs">
        <a href="">Home</a> >
        <a href="">Manage Users</a> >
        List Users
    </div>
    <h2>Teachers List</h2>
</div>
<?php

echo "<table border='1'>
<tr>
<th>E-mail</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Type</th>
</tr>";

while($row = mysqli_fetch_array(mysqli_result $result ))

  {
  echo "<tr>";
    echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['type'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($conn);
?>

</body>
<?php include("includes/footer.php"); ?>
</html>
