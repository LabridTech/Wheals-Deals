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
    
<?php
	// Attempt to start a new session after outputting some content
	session_start();
	?>
    <!-- navbar start -->
    <div class="bg-black container-fluid">
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

    <!-- navbar end-->
    <div class="container h2 text-blue mt-5 col-8">
    Rent a car for your next adventure! Browse our selection of high-quality vehicles and book online today
    </div>
    <div class="container col-10 border mt-4">
        <div class="container pt-3">
            <div class="">Looking for a reliable car rental service? Look no further! We offer a wide range 
                of vehicles for rent, from compact cars to luxury SUVs, at competitive prices. Our rental process 
                is easy and hassle-free, and our knowledgeable staff is always ready to assist you with any 
                questions you may have.Contact us today to learn more and reserve your rental car!</div>

                 <form action="RentCar.php" method="post">  <!--start form -->

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Model Year *
                        </div>
                        <div class="col-9">
                            <select name="ModelYear" required id="" class="form-control getter">
                                <option value="" class="">select</option>
                                <option value="2023" class="">2023</option>
                                <option value="2022" class="">2022</option>
                                <option value="2021" class="">2021</option>
                                <option value="2020" class="">2020</option>
                                <option value="2019" class="">2019</option>
                                <option value="2018" class="">2018</option>
                                <option value="2017" class="">2017</option>
                                <option value="2016" class="">2016</option>
                                <option value="2015" class="">2015</option>
                                <option value="2014" class="">2014</option>
                                <option value="2013" class="">2013</option>
                                <option value="2012" class="">2012</option>
                                <option value="2011" class="">2011</option>
                                <option value="2010" class="">2010</option>
                                <option value="2009" class="">2009</option>
                                <option value="2008" class="">2008</option>
                                <option value="2007" class="">2007</option>
                                <option value="2006" class="">2006</option>
                                <option value="2005" class="">2005</option>
                                <option value="2004" class="">2004</option>
                                <option value="2003" class="">2003</option>
                                <option value="2002" class="">2002</option>
                                <option value="2001" class="">2001</option>
                                <option value="2000" class="">2000</option>
                            </select>
                        </div>
                    </div>
                </div>

                    <div class="-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                        <div class="row">
                            <div class="col-3">
                                Registeration Number *
                            </div>
                            <div class="col-9">
                                <input required type="text" name="RegistrationNO"  id="" class="form-control getter" placeholder="e.g LEC-6700">  
                            </div>
                        </div>
                    </div>
                    
                 <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Color *
                        </div>
                        <div class="col-9">
                            <select name="color" required id="" class="form-control getter" >
                                <option value="">select</option>
                                <option value="Red">Red</option>
                                <option value="Black">Black</option>
                                <option value="Silver">Silver</option>
                                <option value="Orange">Orange</option>
                                <option value="Green">Green</option>
                              </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Car Type *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="CarType" id="" class="form-control getter" placeholder="e.g sedan">
                        </div>
                    </div>
                </div>
               
                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            price perDay (PKR) *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="Priceperday" id="" class="form-control getter" placeholder="e.g 1000">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Location *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="Location" id="" class="form-control getter" placeholder="e.g Islamabad">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Address *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="Adress" id="" class="form-control getter" placeholder="e.g 123 A Kareem Block  Lahore">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Owner Name *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="OwnerNAme" id="" class="form-control getter" placeholder="e.g Awan">
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Phone *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="phoneNo" id="" class="form-control getter" placeholder="e.g 0333-491783461">
                        </div>
                    </div>
                </div>  -->

            </div>   
        </div>

      <div class="text-center"><button id="click" class="mt-5 rounded-pill  get2 fs-1 fw-bolder">Open For Rent</button></div>
        </form>
     
    </div>
    </body>
</html>

<?php
use LDAP\Result;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBProject";
     // Create connection
     $conn = mysqli_connect($servername, $username, $password,$dbname);

     if(isset($_POST["ModelYear"]))
     {
     $ModelYear=$_POST["ModelYear"];    
     $RegistrationNO=$_POST["RegistrationNO"];   
     $Color=$_POST["color"];       
     $Cartype=$_POST["CarType"];       
     $priceperDay=$_POST["Priceperday"];     
     $location=$_POST["Location"];       
     $Adress=$_POST["Adress"];              
     $OwnerName=$_POST["OwnerNAme"];    
     $phone=$_SESSION["visitorphone"];  

     $Rentcarinsertdata="insert into RentCars (CarType ,Registration_No ,color ,ModelYear,PricePerDay
     ,Location ,Adress ,OwnerName ,OwnerPhoneNO) 
      values ('$Cartype','$RegistrationNO','$Color','$ModelYear','$priceperDay','$location',
      '$Adress','$OwnerName','$phone')";
      mysqli_query($conn,$Rentcarinsertdata);
     }
?>