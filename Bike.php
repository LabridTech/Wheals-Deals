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
    <div class="bg-black container-fluid ">
        <!-- navbar start -->
        <div class="container  pt-3">
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
    <div class="container h2 text-blue mt-5 col-8">
    Get your Bike registered in Wheels and deals Sell It For Me
    </div>
    <div class="container col-10 border mt-4">
        <div class="container pt-3">
            <div class="">Discover our wide selection of premium bikes for sale! From road bikes to mountain bikes,
                 we offer high-quality options to fit your lifestyle and budget. Browse our inventory 
                 to find your perfect ride.</div>

                 <form action="Bike.php" method="post">  <!--start form -->

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
                                <input required type="text" name="RegistrationNO"  id="" class="form-control getter" placeholder="e.g AHK-123">  
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
                                <option value="Silver">Blue</option>
                                <option value="Orange">Orange</option>
                                <option value="Green">Green</option>
                                <option value="Green">Yellow</option>
                              </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Bike Type *
                        </div>
                        <div class="col-9"> 
                            <select name="BikeType" required id="" class="form-control getter" >
                                <option value="">select</option>
                                <option value="Red">Chopper</option>
                                <option value="Black">Cross</option>
                                <option value="Silver">Enduro</option>
                                <option value="Orange">Cruiser</option>
                                <option value="Green">ATV</option>
                                <option value="Red">touring</option>
                                <option value="Black">Naked</option>
                                <option value="Silver">Street </option>
                                <option value="Orange">Sport</option>
                                <option value="Green">Sport tourist</option>
                                <option value="Red">Scooter</option>
                              </select>
                        </div>
                    </div>
                </div>
               
                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Bike price (PKR) *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="Bike_Price" id="" class="form-control getter" placeholder="e.g 500,000">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Brand *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="brand" id="" class="form-control getter" placeholder="e.g Honda">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Engin_CCs *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="EngineCCs" id="" class="form-control getter" placeholder="e.g 1000cc">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Location *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="Location" id="" class="form-control getter" placeholder="e.g Karachi">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Address *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="Adress" id="" class="form-control getter" placeholder="e.g 616 Q Block mt Lahore">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Seller Name *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="SellerNAme" id="" class="form-control getter" placeholder="e.g Ali">
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Phone *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="phoneNo" id="" class="form-control getter" placeholder="e.g 0300-1234567">
                        </div>
                    </div>
                </div>  -->

            </div>   
        </div>

        <div class="text-center"><button id="click" class="mt-5 rounded-pill  get2 fs-1 fw-bolder">Post</button></div>
        </form>
     
    </div>
    </body>

    <?php
use LDAP\Result;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBProject";
     // Create connection
     $conn = mysqli_connect($servername, $username, $password,$dbname);

    //  Registration_No varchar(30) primary key,
    //  BikeType varchar(20),
    //  ModalYear int,
    //  Comapany varchar(20),
    //  Bike_Price INT,
    //  color varchar(10),
    //  Engin_CCs int not NULL,
    //  Location varchar(10),
    //  Adress varchar(50),

    if(isset($_POST["ModelYear"]))
    {
        $BModelYear=$_POST["ModelYear"];    
        $BregistrationNO=$_POST["RegistrationNO"];    
        $BColor=$_POST["color"];   
        $BBikeType=$_POST["BikeType"];       
        $Bprice=$_POST["Bike_Price"];     
        $BEngineINCCs=$_POST["EngineCCs"];       
        $BLocation=$_POST["Location"];              
        $BAdress=$_POST["Adress"];    
        $BBSellerName= $_POST["SellerNAme"];  
        $Bcompany=$_POST["brand"];
        $BBphone=$_SESSION["visitorphone"];
       
        $bikeinsertdata="insert into Bikes (BBRegistration_No ,BikeType, ModalYear ,Comapany ,Bike_Price,color
        ,Engin_CCs ,Location ,Adress,BSellerName,Bsellerphone) 
         values ('$BregistrationNO','$BBikeType',' $BModelYear','$Bcompany','$Bprice','$BColor',
         '$BEngineINCCs','$BLocation','$BAdress',' $BBSellerName',' $BBphone')";
         mysqli_query($conn,$bikeinsertdata);
           
    }
     
     ?>

</html>