<!DOCTYPE html>
<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<?php
require_once('db_setup.php');
$sql = "USE alai3;";
if ($conn->query($sql) !== TRUE) {
   echo "Error using  database: " . $conn->error;
}

$sql = "SELECT * FROM proj1_Driver;";
$result = $conn->query($sql);
?>
   <table class="table table-striped">
      <tr>
         <th>Driver ID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Password</th>
         <th>Routing No.</th>
         <th>Phone No.</th>
         <th>Email</th>
	 <th>Street Address</th>
         <th>State</th>
         <th>Zip Code</th>
         <th>License No.</th>
	 <th>Registration No.</th>
      <tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['d_id']?></td>
          <td><?php echo $row['fname']?></td>
          <td><?php echo $row['lname']?></td>
          <td><?php echo $row['password']?></td>
		  <td><?php echo $row['routing_no']?></td>
          <td><?php echo $row['phone']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['st_address']?></td>
		  <td><?php echo $row['state']?></td>
          <td><?php echo $row['zip']?></td>
          <td><?php echo $row['license_no']?></td>
          <td><?php echo $row['registration_no']?></td>
      </tr>

<?php
}
?>

    </table>

<?php
$conn->close();
?>

</body>
</html>



