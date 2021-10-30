<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {background-color: lightGrey;}
body
{
  background-image: url(https://image.freepik.com/free-photo/long-hospital-corridor-with-empty-seats_117023-1679.jpg);
  background-size: cover;
  background-attachment: fixed;
}
.content
{
  background: transparent;
  width: 50%;
  padding: 40px;
  margin: 100px auto;
  font-family: calibri;

}


</style>
<div class="content">

</div>
  </head>
  <body>
    <h1><em><center>
      Registered Patients
    </center></em></h1>
    <table border="2">
      <tr>
        <td><em><h4>ID</h4></em></td>
        <td><em><h4>First Name</h4></em></td>
        <td><em><h4>Last Name</h4></em></td>
        <td><em><h4>Age</h4></em></td>
        <td><em><h4>Address</h4></em></td>
        <td><em><h4>BP</h4></em></td>
        <td><em><h4>Sugar</h4></em></td>
        <td><em><h4>Vaccine</h4></em></td>
      </tr>
      <?php

include "connection.php";
$records=mysqli_query($connection,"SELECT * from Patient_Details");
while($data=mysqli_fetch_array($records))
{
  ?>
  <tr>
    <td><em><?php echo $data['ID']; ?></em></td>
    <td><em><?php echo $data['FirstName']; ?></em></td>
    <td><em><?php echo $data['SecondName']; ?></em></td>
    <td><em><?php echo $data['age']; ?></em></td>
    <td><em><?php echo $data['address']; ?></em></td>
    <td><em><?php echo $data['BP']; ?></em></td>
    <td><em><?php echo $data['sugar']; ?></em></td>
    <td><em><?php echo $data['vaccine']; ?></em></td>
  </tr>
  <?php
}


       ?>

    </table>
    <?php mysqli_close($connection);?>
</div>
  </body>
</html>
