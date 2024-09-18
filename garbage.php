<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProject";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);


$rgstr='LEC-123324';
$forinvoice = "SELECT * FROM Car
INNER JOIN CarSeller ON Car.Registration_No = CarSeller.CarRegistration_No
INNER JOIN customer ON customer.CarRegistration_NoCust = Car.Registration_No
WHERE Car.Registration_No = '$rgstr'";

$Result=mysqli_query($conn,$forinvoice);

$myArray = array();
$i = 0;
$numofrows = mysqli_num_rows($Result);
echo $numofrows;
while ($numofrows != 0)
 {
  $row = mysqli_fetch_assoc($Result);
  echo $row['ModelYear'];
  echo $row['Registration_No'];
//   $myArray[$i][2] = $row['CarType'];
//   $myArray[$i][3] = $row['Brand'];
//   $myArray[$i][4] = $row['color'];
//   $myArray[$i][5] = $row['Location'];
//   $myArray[$i][6] = $row['Adress'];
//   $myArray[$i][7] = $row['Car_Price'];
//   $myArray[$i][8] = $row['FuelType'];
//   $myArray[$i][9] = $row['EngineCapacity'];
//   $myArray[$i][10] = $row['transmission'];
//   $myArray[$i][11] = $row['Csellerphone'];

  $i++;
  $numofrows--;
}
?>
