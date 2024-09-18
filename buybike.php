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
                                                                                                                                                                                                                 
<div class="container-fluid bg-blackr">
            
    <!-- accordian start -->
    <div class="row pt-5">
      <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12">
        
      <form action="buybike.php" method="post">
   
        <div class="accordion-item">
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button h2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
             Search By Keyboard
            </button>
          </h2>
          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <div class="row justify-content-center">
                <div class="col-8">
                    <div class="row justify-content-center">
                    <input type="text" class="col-9" id="i1" name="searchByKeyword" placeholder="e.g Honda in Lahore">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
         <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed h2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
              City 
            </button>
          </h2>
          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
              <div class="col-5">
                <input type="checkbox" id="c1" name="city" value="Karachi">
                <label for="1" class="h5">Karachi</label><br>
                <input type="checkbox" id="c2" name="city" value="Lahore">
                <label for="2"  class="h5">Lahore</label><br>
                <input type="checkbox" id="c3" name="city" value="Islamabad">
                <label for="3"  class="h5">Islamabad</label><br>
                <input type="checkbox" id="c4" name="city" value="Rawalpindi">
                <label for="4"   class="h5"> Rawalpindi</label><br>
                <input type="checkbox" id="c5" name="city" value="Peshawar">
                <label for="5"   class="h5">Peshawar</label><br>
              </div>
            </div>
          </div>
         </div>
        
        <div class="accordion-item">
          <h2 class="accordion-header" id="panelsStayOpen-headingFour">
            <button class="accordion-button collapsed  h2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
              Price
            </button>
          </h2>
          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-collapseFour">
            <div class="accordion-body">
              <div class="row justify-content-center">
                <div class="col-8">
                  <div class="row">
                  <!-- <form action="buy.php" method="POST"> -->
                    <select name="price_range_from_" id="price_range_from" class="col-4">
                      <option value=""  class="h5">From</option>
                      <option value="5000000" class="h5">500,0000</option>
                      <option value="4000000" class="h5">400,0000</option>
                      <option value="3000000" class="h5">300,0000</option>
                      <option value="2000000" class="h5">200,0000</option>
                      <option value="1000000" class="h5">100,0000</option>
                      <option value="500000" class="h5">500,000</option>
                 
                    </select>
                    <select name="price_range_to_" id="price_range_to" class="col-4">
                      <option value="" class="h5">To</option>
                      <option value="5000000" class="h5">500,0000</option>
                      <option value="4000000" class="h5">400,0000</option>
                      <option value="3000000" class="h5">300,0000</option>
                      <option value="2000000" class="h5">200,0000</option>
                      <option value="1000000" class="h5">100,0000</option>
                      <option value="500000" class="h5">500,000</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingFive">
              <button class="accordion-button collapsed h2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                Year
              </button>
            </h2>
            <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-collapseFive">
              <div class="accordion-body">
                <div class="row justify-content-center">
                  <div class="col-8">
                    <div class="row">
                       <select name="year_from_" id="year_from" class="col-4">
                        <option value="" class="h5">From</option>
                                <option value="2023" class="h5">2023</option>
                                <option value="2022" class="h5">2022</option>
                                <option value="2021" class="h5">2021</option>
                                <option value="2020" class="h5">2020</option>
                                <option value="2019" class="h5">2019</option>
                                <option value="2018" class="h5">2018</option>
                                <option value="2017" class="h5">2017</option>
                                <option value="2016" class="h5">2016</option>
                                <option value="2015" class="h5">2015</option>
                                <option value="2014" class="h5">2014</option>
                                <option value="2013" class="h5">2013</option>
                                <option value="2012" class="h5">2012</option>
                                <option value="2011" class="h5">2011</option>
                                <option value="2010" class="h5">2010</option>
                                <option value="2009" class="h5">2009</option>
                                <option value="2008" class="h5">2008</option>
                                <option value="2007" class="h5">2007</option>
                                <option value="2006" class="h5">2006</option>
                                <option value="2005" class="h5">2005</option>
                                <option value="2004" class="h5">2004</option>
                                <option value="2003" class="h5">2003</option>
                                <option value="2002" class="h5">2002</option>
                                <option value="2001" class="h5">2001</option>
                                <option value="2000" class="h5">2000</option>
                       </select>
                       <select name="year_to_" id="year_to" class="col-4">
                                <option value="" class="h5">To</option> 
                                <option value="2023" class="h5">2023</option>
                                <option value="2022" class="h5">2022</option>
                                <option value="2021" class="h5">2021</option>
                                <option value="2020" class="h5">2020</option>
                                <option value="2019" class="h5">2019</option>
                                <option value="2018" class="h5">2018</option>
                                <option value="2017" class="h5">2017</option>
                                <option value="2016" class="h5">2016</option>
                                <option value="2015" class="h5">2015</option>
                                <option value="2014" class="h5">2014</option>
                                <option value="2013" class="h5">2013</option>
                                <option value="2012" class="h5">2012</option>
                                <option value="2011" class="h5">2011</option>
                                <option value="2010" class="h5">2010</option>
                                <option value="2009" class="h5">2009</option>
                                <option value="2008" class="h5">2008</option>
                                <option value="2007" class="h5">2007</option>
                                <option value="2006" class="h5">2006</option>
                                <option value="2005" class="h5">2005</option>
                                <option value="2004" class="h5">2004</option>
                                <option value="2003" class="h5">2003</option>
                                <option value="2002" class="h5">2002</option>
                                <option value="2001" class="h5">2001</option>
                                <option value="2000" class="h5">2000</option>
                       </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingSix">
              <button class="accordion-button collapsed h2" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                Color
              </button>
            </h2>
            <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-collapseSix">
              <div class="accordion-body">
                <div class="row">
                  <div class="col-8">
                    <input type="checkbox" id="cl1" name="Color" value="Black">
                    <label for="1" class="h5">Black</label><br>
                    <input type="checkbox" id="cl2" name="Color" value="Red">
                    <label for="2" class="h5">Red</label><br>
                    <input type="checkbox" id="cl3" name="Color" value="Green">
                    <label for="3" class="h5">Green</label><br>
                    <input type="checkbox" id="cl4" name="Color" value="Blue">
                    <label for="4" class="h5"> Blue</label><br>
                    <input type="checkbox" id="cl5" name="Color" value="Orange">
                    <label for="5" class="h5">Orange</label><br>
                    <input type="checkbox" id="cl5" name="Color" value="Yellow">
                    <label for="5" class="h5">Yellow</label><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
          <button onclick="GetDataa()" class="get fs-5 rounded-pill col-4 mt-5" >GET</button>
          </div>
          <br>
        </form>
       <div class="text-center">
       <a href="bikesaleinvoice.php"><button class="proceedButton rounded-pill fs-5 mt-3" id="proceed"> Proceed</button></a>   

</div>
      </div>
     
   
   
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
</div>
</div>
</div>
</div> 

    <?php
    
    @include 'config.php';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBProject";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    function fetchBike($Result) 
    {
      $myArray = array();
      $i = 0;
      $numofrows = mysqli_num_rows($Result);
       while ($numofrows != 0) 
      {
        $row = mysqli_fetch_assoc($Result);
        $myArray[$i][0] = $row['ModalYear'];
        $myArray[$i][1] = $row['BBRegistration_No'];
        $myArray[$i][2] = $row['BikeType'];
        $myArray[$i][3] = $row['Comapany'];
        $myArray[$i][4] = $row['color'];
        $myArray[$i][5] = $row['Location'];
        $myArray[$i][6] = $row['Adress'];
        $myArray[$i][7] = $row['Bike_Price'];
        $myArray[$i][8] = $row['Engin_CCs'];
        $myArray[$i][9] = $row['Bsellerphone'];

        echo  $myArray[$i][4];
    
        $i++;
        $numofrows--;
      }
    
      return $myArray;
    }
       
      $BikeBrand=isset($_POST["searchByKeyword"]) ? $_POST["searchByKeyword"] : 0;
      $city = isset($_POST["city"]) ? $_POST["city"] : 0;
      $priceRangeFrom=isset($_POST["price_range_from_"]) ? $_POST["price_range_from_"] : 0;   
      $priceRangeTo=isset($_POST["price_range_to_"]) ? $_POST["price_range_to_"] : 0;    
      $yearFrom=isset($_POST["year_from_"]) ? $_POST["year_from_"] : 0;  
      $yearTo=isset($_POST["year_to_"]) ? $_POST["year_to_"] : 0;      
      $Color=isset($_POST["Color"]) ? $_POST["Color"] : 0;   

    if($BikeBrand && $priceRangeFrom && $priceRangeTo && $city &&  $yearFrom  && $yearTo && $Color)
    {

        $combinefilter="SELECT * 
        FROM Bikes
        WHERE Bikes.Bike_Price >= ' $priceRangeFrom' AND Bikes.Bike_Price <= '$priceRangeTo' AND 
        Bikes.ModalYear>= '$yearFrom' AND Bikes.ModalYear<= '$yearTo' AND Bikes.Location='$city' AND Bikes.Comapany='$BikeBrand' AND Bikes.color='$Color'
        ORDER BY Bikes.Bike_Price ASC;";

        $Result=mysqli_query($conn,$combinefilter);
    
        $myArray = fetchBike($Result);
        $jsonData = json_encode($myArray);

      $BikeBrand=$priceRangeFrom=$priceRangeTo=$city=$yearFrom=$yearTo=$Color=0;
    }
    else if($Color)
    {
        $exexcutebikepriceprocedure11=("SELECT *
        FROM Bikes 
        where Bikes.color='$Color'
        ORDER BY Bikes.Bike_Price ASC;");
        
        $Result=mysqli_query($conn,$exexcutebikepriceprocedure11);
    
        $myArray = fetchBike($Result);
       
       $jsonData = json_encode($myArray);
       $BikeBrand=$priceRangeFrom=$priceRangeTo=$city=$yearFrom=$yearTo=$Color=0;
    }
    else if($city) 
    {  
      $exexcutecarcityprocedure3="SELECT *
      FROM Bikes 
      where Bikes.Location='$city'
      ORDER BY Bikes.Bike_Price ASC;";
      $Result=mysqli_query($conn,$exexcutecarcityprocedure3);
  
      $myArray = fetchBike($Result);
      $jsonData = json_encode($myArray);
      $BikeBrand=$priceRangeFrom=$priceRangeTo=$city=$yearFrom=$yearTo=$Color=0;
    }
    else if($BikeBrand)
    {
      echo "in carBrand <br>";
      $exexcutecarpriceprocedure1="SELECT *
      FROM Bikes 
      where Bikes.Comapany='$BikeBrand'
      ORDER BY Bikes.Bike_Price ASC;";

      $Result=mysqli_query($conn, $exexcutecarpriceprocedure1);
  
      $myArray = fetchBike($Result);
      $jsonData = json_encode($myArray);
      $BikeBrand=$priceRangeFrom=$priceRangeTo=$city=$yearFrom=$yearTo=$Color=0;
     }
    else if($yearFrom && $yearTo)
    {
      $exexcutecarpriceprocedur2e="SELECT *
      FROM Bikes 
      where Bikes.ModalYear>='$yearFrom' AND Bikes.ModalYear<='$yearTo'
      ORDER BY Bikes.Bike_Price ASC;";

      $Result=mysqli_query($conn, $exexcutecarpriceprocedur2e);
  
      $myArray = fetchBike($Result);
      $jsonData = json_encode($myArray);
      $BikeBrand=$priceRangeFrom=$priceRangeTo=$city=$yearFrom=$yearTo=$Color=0;
      }
      else if($priceRangeTo && $priceRangeFrom) 
      { 

        $exexcutecarpriceprocedure2 = "SELECT *
        FROM Bikes 
        where Bikes.Bike_Price<='$priceRangeTo' AND Bikes.Bike_Price>='$priceRangeFrom'
        ORDER BY Bikes.Bike_Price ASC;";
        $Result = mysqli_query($conn, $exexcutecarpriceprocedure2);
        
        $myArray = fetchBike($Result);
        
        $jsonData = json_encode($myArray);

        $BikeBrand=$priceRangeFrom=$priceRangeTo=$city=$yearFrom=$yearTo=$Color=0;
      }
      else
      {
        $GeneralBIke="SELECT *
        FROM Bikes";

        $Result = mysqli_query($conn,$GeneralBIke);
        
        $myArray = fetchBike($Result);

        $jsonData = json_encode($myArray);
        $BikeBrand=$priceRangeFrom=$priceRangeTo=$city=$yearFrom=$yearTo=$Color=0;
      }


      $getphonn=$_SESSION["visitorphone"];
      $getname=$_SESSION["visitorName"];

      $array2 = $_POST["array2"] ?? null;

      //for customer data
     if($array2)
     {

      $arr = json_decode($array2);
      $length = count($arr);
      if($arr)
      {
         for($i=0; $i<$length; $i++) 
         {
           $rg=$arr[$i];
           $insertintobikecustomer="insert into BikeCustomer (BCustomerName,Bcustomerphone,BRegistration_No)
           values ('$getname','$getphonn','$rg')";
           mysqli_query($conn,$insertintobikecustomer);
         }
      }
    }
    
    // for invoice
    if($array2)
    {
     $arr = json_decode($array2);
     $length = count($arr);
          $myArray1 = array();
          for($i=0; $i<$length; $i++)
            {
              $rgstr=$arr[$i];
             
              $forinvoice1 = "SELECT * FROM Bikes
              INNER JOIN BikeCustomer ON BikeCustomer.BRegistration_No = Bikes.BBRegistration_No
              WHERE Bikes.BBRegistration_No = '$rgstr'";

              $Result1=mysqli_query($conn,$forinvoice1);

                $row = mysqli_fetch_assoc($Result1);
                $sellernam= $row['BSellerName'];
                $sellerphone = $row['Bsellerphone'];
                $rgstr1 = $row['BRegistration_No'];
                $modelyear= $row['ModalYear'];
                $color= $row['color'];
                $brand= $row['Comapany'];
                $enginecapacity = $row['Engin_CCs'];
                $price = $row['Bike_Price'];

          
                $insertinsaleinvoice="insert into sales_Bike_invoice(BSellerName,Bsellerphone,Registration_No,
                ModelYear,color,Brand,Bike_Price,Engin_CCs,customerName,custmrphoneNo) 
                values( '$sellernam','$sellerphone','$rgstr1','$modelyear','$color',' $brand',' $enginecapacity','$price','$getname','$getphonn')";
                mysqli_query($conn,$insertinsaleinvoice);
            }
         
          }
          else
          {
            echo "In iNvoice data array not received ";
          }


     // for deletion data
      if ($array2) 
      {
        $arr = json_decode($array2);
        $length = count($arr);

        for($i=0; $i<$length; $i++)
        {
          $rg=$arr[$i];
          $deletedataofcar="Delete from Bikes where Bikes.BBRegistration_No='$rg'";
        
          mysqli_query($conn,$deletedataofcar);
        }

        http_response_code(200);
        echo "Data deleted successfully.";
      }
      else 
      {
        echo "Array not received.";
      }
  ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <script>
  var myArray = <?php echo $jsonData; ?>;
     console.log(myArray.length);
      let array=[];
       for (var i = 0; i < myArray.length; i++) 
       {
         console.log(myArray[i][4]);
          document.getElementById('main2').style.border="4px solid white";
          let output="";
          output=myArray[i][0]+" "+myArray[i][1]+" "+myArray[i][2]+" "+myArray[i][3]+" "+myArray[i][4];
          var show=document.getElementById('buy');
          show.textContent=output;
          var show2=document.getElementById('buy2');
        show2.innerHTML="<br>"+myArray[i][5]+" | "+myArray[i][6];
        let output2="";
        output2="<br>"+"<br>"+myArray[i][1]+" | "+myArray[i][8];
        show2.innerHTML+=output2;
        var show3=document.getElementById('buy3');
        show3.innerHTML="PKR  "+myArray[i][7];
        document.getElementById('phone').innerHTML="Selcet Phone Number";
        document.getElementById('select').value=myArray[i][1];
        document.getElementById('select').textContent="Select";
        document.getElementById('phone').value=myArray[i][9];
        let result={"data":"","no":""};
        result.data=document.getElementById('main').innerHTML;
        result.no=myArray[i][9];
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

   document.getElementById("proceed").addEventListener("click", function()
   {
   // Create new XMLHttpRequest object
   let xhr = new XMLHttpRequest();

  // Define request parameters
  xhr.open("POST", "buybike.php");
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
 xhr.send("array2=" + encodeURIComponent(json_arr));});

</script>


</body>
</html>
