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

<!-- Second Modal-->
<div id="salesinv" class="container pb-4">
<div class="mt-5 container">
<div id="title" class="h2 text-center">Customer's Invoice</div>
<div id="customernamee" class="h4 text-center mt-5"></div>
<div id="customerphone" class="h4 text-center"></div>
<div class="container mt-5">
   <div class="row h5 mt-5 justify-content-center">
  <div class="col-1 headings"></div>
  <div class="col-2 headings"></div>
  <div class="col-1 headings"></div>
  <div class="col-2 headings"></div>
  <div class="col-1 headings"></div>
  <div class="col-2 headings"></div>
  <div class="col-1 headings"></div>
  <div class="col-2 headings"></div>
</div>
<div class="row justify-content-center">
  <div class="col-1 d"></div>
  <div class="col-2 d"></div>
  <div class="col-1 d"></div>
  <div class="col-2 d"></div>
  <div class="col-1 d"></div>
  <div class="col-2 d"></div>
  <div class="col-1 d"></div>
  <div class="col-2 d"></div>
</div>
</div>
<div class="container mt-5">
  <div class="row justify-content-center">
  <div class="col-3 fw-bolder" id="gross"></div>
  <div class="col-3" id="value"></div>
  </div>
</div>
</div>
</div>
<div class="text-center mt-4"><button onclick="printt()" id="pb" class="shadow-lg rounded-pill btn-lg">Print</button></div>

</body>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBProject";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $insertsalesinvoice="SELECT * from sales_Bike_invoice";
    $Result=mysqli_query($conn,$insertsalesinvoice);
    $myArray1=array();
    $numofrows = mysqli_num_rows($Result);
    $j=0;
    while ($numofrows != 0) 
    {
      $row = mysqli_fetch_assoc($Result);
      $myArray1[$j][0] = $row['BSellerName'];
      $myArray1[$j][1] = $row['Bsellerphone'];
      $myArray1[$j][2] = $row['Registration_No'];
      $myArray1[$j][3] = $row['ModelYear'];
      $myArray1[$j][4] = $row['color'];
      $myArray1[$j][5] = $row['Brand'];
      $myArray1[$j][6] = $row['Engin_CCs'];
      $myArray1[$j][7] = $row['Bike_Price'];
      $myArray1[$j][8] = $row['customerName'];
      $myArray1[$j][9] = $row['custmrphoneNo'];
  
      $j++;
      $numofrows--;
    }

    // $truncateinvoice="Truncate TABLE sales_invoice";
    // mysqli_query($conn,$truncateinvoice);

    $forinvoice = json_encode($myArray1);
?>

<script>


     var myArray1 = <?php echo $forinvoice; ?>;
    //  $myArray1[$j][0] = $row['BSellerName'];
    //   $myArray1[$j][1] = $row['Bsellerphone'];
    //   $myArray1[$j][2] = $row['Registration_No'];
    //   $myArray1[$j][3] = $row['ModelYear'];
    //   $myArray1[$j][4] = $row['color'];
    //   $myArray1[$j][5] = $row['Brand'];
    //   $myArray1[$j][6] = $row['Engin_CCs'];
    //   $myArray1[$j][7] = $row['Bike_Price'];
    //   $myArray1[$j][8] = $row['customerName'];
    //   $myArray1[$j][9] = $row['custmrphoneNo'];

     document.getElementById('salesinv').style.border="4px solid black";

      document.getElementById('title').innerHTML="Customer's Invoice";
      document.getElementById('customernamee').innerHTML=myArray1[0][8];
      document.getElementById('customerphone').innerHTML=myArray1[0][9];
      document.getElementsByClassName('headings')[0].innerHTML="Seller Name";
      document.getElementsByClassName('headings')[1].innerHTML="Seller Phone";
      document.getElementsByClassName('headings')[2].innerHTML="Reg No";
      document.getElementsByClassName('headings')[3].innerHTML="Model Year";
      document.getElementsByClassName('headings')[4].innerHTML="Color";
      document.getElementsByClassName('headings')[5].innerHTML="Brand";
      document.getElementsByClassName('headings')[6].innerHTML="Engine Capacity";
      document.getElementsByClassName('headings')[7].innerHTML="Amount";
      var sum=0;
      for(var i=0;i<myArray1.length;i++)
       {
          //let f="5000000";
          document.getElementsByClassName('d')[0].innerHTML+=myArray1[i][0]+"<br>";
          document.getElementsByClassName('d')[1].innerHTML+=myArray1[i][1]+"<br>";
          document.getElementsByClassName('d')[2].innerHTML+=myArray1[i][2]+"<br>";
          document.getElementsByClassName('d')[3].innerHTML+=myArray1[i][3]+"<br>";
          document.getElementsByClassName('d')[4].innerHTML+=myArray1[i][4]+"<br>";
          document.getElementsByClassName('d')[5].innerHTML+=myArray1[i][5]+"<br>";
          document.getElementsByClassName('d')[6].innerHTML+=myArray1[i][6]+"<br>";
          document.getElementsByClassName('d')[7].innerHTML+=myArray1[i][7]+"<br>";
          sum=sum+Number(myArray1[i][7]);
       }
       document.getElementsByClassName('d')[6].innerHTML+="<br>"+"<b>"+"Total";
       document.getElementsByClassName('d')[7].innerHTML+="<br>"+"<b>"+sum +" "+"RS";
       var d=(17/100)*sum;
       var gross_total=sum+d;
       document.getElementById('gross').innerHTML="Total Price: "+"<br>"+"Sales Tax: "+"<br>"+"Gross Total: ";
       document.getElementById('value').innerHTML=sum+" "+"Rs"+"<br>"+"17%"+"<br>"+gross_total+" "+"Rs";
       function printt()
       {
        document.getElementById('pb').style.display="none";
        window.print();
       }
    </script>


</html>
