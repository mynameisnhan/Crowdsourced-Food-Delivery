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

$sql = "SELECT * FROM proj1_Hours;";
$result = $conn->query($sql);
?>
   <table class="table table-striped">
      <tr>
         <th>Restaurant ID</th>
         <th>Opening Time</th>
         <th>Closing Time</th>
		 <th>Week Day</th>
      <tr>
<?php
while($row = $result->fetch_assoc()){
?>
      <tr>
          <td><?php echo $row['r_id']?></td>
          <td><?php echo $row['opening_time']?></td>
          <td><?php echo $row['closing_time']?></td>
          <td><?php echo $row['week_day']?></td>
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



