<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="web.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>

<div class="bg-black-2 container-fluid">
        <!-- navbar start -->
        <div class="container pt-3 ">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid pb-4">
                    <a class="navbar-brand" href="#">
                        <img src="image/logo.png" width="150px" alt="" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars fs-2 text-warning"></i>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active text-white fs-5 text-lg" aria-current="page" href="front.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-5 text-lg" href="buy.php">Buy Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-5 text-lg" href="buybike.php">Buy Bikes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-5 text-lg" href="Bike.php">Sell Bikes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-5 text-lg" href="RentCar.php">Register Rent Cars</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-5 text-lg" href="rentcarservice.php">Rent car Service</a>
                            </li>
                        </ul>
                    </div>
            </nav>
        </div>
        <!-- navbar end-->
    </div>

    <div class="bg-blackr">
<div class="col-xl-8 col-lg-8 col-sm-12 col-md-12 container">
        <div class="" value="" id="main">
          <div class="row pb-4 bg-purple" id="main2">
            <div class="col-12">
                <div class="row">
                   <div class="col-8">
                      <div class="fs-4 fw-bold" id="buy"></div>
                       <div class="fs-6 fw-bold" id="buy2"></div>
                   </div>
                   <div class="col-4" value="" id="parent">
                     <div class=" mt-3 h4 fw-bold" id="buy3"></div>
                    <button onclick="show_number(this)" value="" class="rounded-pill mt-1" id="phone"></button>
                    <div id="show_phoneNO" class="fs-4"></div>
                    <button onclick="main_box(this)" class="rounded-pill mt-1" id="select"></button>
                    </div>

                 </div>
            </div>
        </div>
    </div>

    <button class="proceedButton rounded-pill fs-5 mt-3" id="proceed2">Delete</button>
</div>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProject";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

    $getphonn=$_SESSION["visitorphone"];
    $getname=$_SESSION["visitorName"];

    $carinventory="SELECT * 
    FROM Car 
    INNER JOIN CarSeller ON CarSeller.Csellerphone='$getphonn'
    where Car.Registration_No=CarSeller.CarRegistration_No";

    $Result = mysqli_query($conn, $carinventory);
    $numofrows = mysqli_num_rows($Result);
  
      $myArray = array();
      $i = 0;
      while ($numofrows != 0) 
      {
        $row = mysqli_fetch_assoc($Result);
        $myArray[$i][0] = $row['ModelYear'];
        $myArray[$i][1] = $row['Registration_No'];
        $myArray[$i][2] = $row['CarType'];
        $myArray[$i][3] = $row['Brand'];
        $myArray[$i][4] = $row['color'];
        $myArray[$i][5] = $row['Location'];
        $myArray[$i][6] = $row['Adress'];
        $myArray[$i][7] = $row['Car_Price'];
        $myArray[$i][8] = $row['FuelType'];
        $myArray[$i][9] = $row['EngineCapacity'];
        $myArray[$i][10] = $row['transmission'];
        $myArray[$i][11] = $row['Csellerphone'];

    
        $i++;
        $numofrows--;
      }

      $jsonData = json_encode($myArray);

      $getphonn=$_SESSION["visitorphone"];
      $getname=$_SESSION["visitorName"];

      $array2 = $_POST["array2"] ?? null;

      if ($array2) 
      {
        $arr = json_decode($array2);
        $length = count($arr);

        for($i=0; $i<$length; $i++)
        {
          $rg=$arr[$i];
          $deletedataofcar="Delete from car where Car.Registration_No='$rg'";
          $deletedaatodseller="Delete from CarSeller where CarSeller.CarRegistration_No='$rg'";
        
          mysqli_query($conn,$deletedataofcar);
          mysqli_query($conn,$deletedaatodseller);
        }

        http_response_code(200);
        echo "Data deleted successfully.";
      } 
      else 
      {
        //echo "Array not received.";
      }

?>

<script>
  var myArray = <?php echo $jsonData; ?>;
    
      let array=[];
       for (var i = 0; i < myArray.length; i++) 
       {
          document.getElementById('main2').style.border="4px solid white";
          let output="";
          output=myArray[i][0]+" "+myArray[i][1]+" "+myArray[i][2]+" "+myArray[i][3]+" "+myArray[i][4];
          var show=document.getElementById('buy');
          show.textContent=output;
          var show2=document.getElementById('buy2');
        show2.innerHTML="<br>"+myArray[i][5]+" | "+myArray[i][6];
        let output2="";
        output2="<br>"+"<br>"+myArray[i][1]+" | "+myArray[i][8]+" | "+myArray[i][9]+" | "+myArray[i][10];
        show2.innerHTML+=output2;
        var show3=document.getElementById('buy3');
        show3.innerHTML="PKR  "+myArray[i][7];
        document.getElementById('phone').innerHTML="Selcet Phone Number";
        document.getElementById('select').value=myArray[i][1];
        document.getElementById('select').textContent="Select";
        document.getElementById('phone').value=myArray[i][11];
        let result={"data":"","no":""};
        result.data=document.getElementById('main').innerHTML;
        result.no=myArray[i][11];
        array.push(result);
       }
       document.getElementById('main').innerHTML="";
     for(let x in array)
     {
        document.getElementById('main').innerHTML+=array[x].data+"<br>";
     }
  

    function show_number(b)
    {
      b.textContent=b.value;
    }
    let array2=[];
    
   function main_box(a)
   {
      var selected_no=a.value;
      array2.push(selected_no);
      a.textContent="Selected";
      a.style.backgroundColor="purple";
      a.style.color="white";
   }

   document.getElementById("proceed2").addEventListener("click", function()
   {
   // Create new XMLHttpRequest object
   let xhr = new XMLHttpRequest();

  // Define request parameters
  xhr.open("POST", "Carinventory.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

   // Handle response
   xhr.onreadystatechange = function() {
   if (xhr.readyState === XMLHttpRequest.DONE) 
   {
   if (xhr.status === 200)  
   {
     // Data deleted successfully, update UI
     console.log(xhr.responseText);
   } 
   else 
   {
    // Error occurred, handle error
    console.log("Error: " + xhr.statusText);
   }
  }
 };

 // Encode the array as a JSON string
 let json_arr = JSON.stringify(array2);

 // Send request with array2 data
 xhr.send("array2=" + encodeURIComponent(json_arr));

});

</script>

</body>
</html>