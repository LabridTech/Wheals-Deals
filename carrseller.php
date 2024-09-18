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

<?php
     session_start();
     ?>


<body>
    
     
    <div class="bg-black container-fluid ">
        <!-- navbar start -->
        <div class="container pt-3">
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
        Get your car registered in Wheels and deals Sell It For Me
    </div>
    <div class="container col-10 border mt-4">
        <div class="container pt-3">
            <div class="">Let Wheels and Deals experts take the difficulty out of selling your car! We will manage your
                ad and find the best possible deal for you. chose what's best for you today.</div>

                 <form action="carrseller.php" method="post">  <!--start form -->

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
                            Brand *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="brand" id="" class="form-control getter" placeholder="e.g Civic">
                        </div>
                    </div>
                </div>
               
                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Car price (PKR) *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="Car_Price" id="" class="form-control getter" placeholder="e.g 500,000">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Fuel Type *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="FuelType" id="" class="form-control getter" placeholder="e.g Petrol or Diesel">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Engine Capacity *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="EngineCapacity" id="" class="form-control getter" placeholder="e.g 1300cc">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Transmition *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="transmission" id="" class="form-control getter" placeholder="e.g Auto or Manual">
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
                            <input required type="text" name="SellerNAme" id="" class="form-control getter" placeholder="e.g Hamza">
                        </div>
                    </div>
                </div>

                <!-- <div class="col-sm-12 col-lg-10 col-xl-10 col-md-10 mt-4">
                    <div class="row">
                        <div class="col-3">
                            Phone *
                        </div>
                        <div class="col-9">
                            <input required type="text" name="phoneNo" id="" class="form-control getter" placeholder="e.g 0323-4917846">
                        </div>
                    </div>
                </div>  -->
            </div>   
        </div>
        <div class="text-center"><button id="click" class="mt-5 rounded-pill  get2 fs-1 fw-bolder">Post</button></div>
        </form>
    </div>

<?php
use LDAP\Result;

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBProject";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    $sql = "Create DATABASE DBProject";
   // mysqli_query($conn,$sql);

    $sighnup="create table sighnup
    (
        Name varchar(20), 
        phoneNO varchar(20),
        password varchar(20),
        primary key(phoneNO)
    )";
    //mysqli_query($conn,$sighnup);

    $customer="create table customer
    (
	    CustomerName varchar(20),
        customerphone BIGINT,
        CarRegistration_NoCust varchar(30),
        Primary key(CarRegistration_NoCust)
    )"; 
    //mysqli_query($conn,$customer);

    $CarSeller="create table CarSeller
    (
        CarRegistration_No varchar(30),
	    CSellerName varchar(20),
        Csellerphone BIGINT,
        primary key(CarRegistration_No)
    )";
    //mysqli_query($conn,$CarSeller);

    $Car="create table Car
    (
        ModelYear int,
        Registration_No varchar(30),
        CarType varchar(30),
        Brand varchar(30),
        color varchar(10),
        Location varchar(10),
        Adress varchar(50),
        Car_Price INT,
        FuelType varchar(20),
        EngineCapacity int,
        transmission varchar(20),
        FOREIGN key(Registration_No) REFERENCES CarSeller(CarRegistration_No),
        Primary key(Registration_No)
    )";
   // mysqli_query($conn,$Car);

    $RentCars="create table RentCars
    (
        CarType varchar(30),
        Registration_No varchar(30) primary key,
        color varchar(10),
        ModelYear int,
        PricePerDay int,
        Location varchar(10),
        Adress varchar(50),
        OwnerName varchar(30),
        OwnerPhoneNO BIGINT
    )";
   // mysqli_query($conn,$RentCars);

    $RentserviceGetter="create table RentserviceGetter  
    (
	    CustomerName varchar(20),
        customerphone BIGINT,
        Registration_No varchar(30),
        Primary key(Registration_No)
    )";
    //mysqli_query($conn,$RentserviceGetter);

    $sales_invoice="create table sales_invoice
    (
        CSellerName varchar(20),
        Csellerphone BIGINT,
        Registration_No  varchar(30) primary key, 
        ModelYear int,
        color varchar(10),
        Brand varchar(30),
        EngineCapacity int,
        Car_Price INT,
        customerName varchar(20),
        custmrphoneNo BIGINT 
    )";
    //mysqli_query($conn,$sales_invoice);
    $sales_rent_invoice="create table sales_rent_invoice
    (
        CSellerName varchar(20),
        Csellerphone BIGINT,
        Registration_No  varchar(30) primary key, 
        ModelYear int,
        color varchar(10),
        Brand varchar(30),
        Car_Price INT,
        customerName varchar(20),
        custmrphoneNo BIGINT 
    )";
    // mysqli_query($conn,$sales_rent_invoice);

    $Bikes="create table Bikes 
    (
        BBRegistration_No varchar(30) ,
        BikeType varchar(20),
        ModalYear int,
        Comapany varchar(20),
        Bike_Price INT,
        color varchar(10),
	    Engin_CCs int not NULL,
        Location varchar(10),
        Adress varchar(50),
        BSellerName varchar(20),
        Bsellerphone BIGINT,
        primary key(BBRegistration_No)
    )";
    //mysqli_query($conn,$Bikes);

    $BikeCustomer="Create table BikeCustomer
    (
        BCustomerName varchar(20),
        Bcustomerphone BIGINT,
        BRegistration_No varchar(30),
        primary key(BRegistration_No)
    )";
    //mysqli_query($conn,$BikeCustomer);

    $sales_Bike_invoice="create table sales_Bike_invoice
    (
        BSellerName varchar(20),
        Bsellerphone BIGINT,
        Registration_No  varchar(30) primary key, 
        ModelYear int,
        color varchar(10),
        Brand varchar(30),
        Bike_Price INT,
        Engin_CCs int not NULL,
        customerName varchar(20),
        custmrphoneNo BIGINT 
    )";
    //mysqli_query($conn,$sales_Bike_invoice);

    // $getphonn=$_SESSION["visitorphone"];
    // $getname=$_SESSION["visitorName"];

   if(isset($_POST["ModelYear"]))
   {
    $ModelYear=$_POST["ModelYear"];    
    $RegistrationNO=$_POST["RegistrationNO"];   
    $Color=$_POST["color"];       
    $Cartype=$_POST["CarType"];       
    $Carprice=$_POST["Car_Price"];       
    $fueltype=$_POST["FuelType"];
    $enginecapacity=$_POST["EngineCapacity"];       
    $transmission=$_POST["transmission"];       
    $location=$_POST["Location"];       
    $Adress=$_POST["Adress"];              
    $SellerName=$_POST["SellerNAme"];    
    $phone=$_SESSION["visitorphone"]; 
    $sellerid=0;
    $Brand=$_POST["brand"];
    
    $seller="insert into carseller(CSellerName,Csellerphone,CarRegistration_No) 
    values ('$SellerName','$phone','$RegistrationNO')";
    mysqli_query($conn,$seller);
 
    $carinsertdata="insert into car (ModelYear ,Registration_No ,color ,CarType,Brand
    ,Car_Price ,FuelType ,EngineCapacity ,transmission ,Location ,Adress) 
    values ('$ModelYear','$RegistrationNO','$Color','$Cartype' ,'$Brand','$Carprice',
    '$fueltype','$enginecapacity','$transmission','$location','$Adress')";
     mysqli_query($conn,$carinsertdata);
 
   }

?>

</body>
</html>
