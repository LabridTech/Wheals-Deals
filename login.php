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
     session_start();
     ?>
    <div class="bg-black-2 container-fluid pb-5">
        <div class="contianer pt-5 ">

            <div class="contianer pt-5 ">
                <div class="text-center">
               <img src="image/logo.png" alt="" width="400px">
                </div>
                <div class="h1 text-white text-center display-4 title-style">WHEELS AND DEALS</div>
                <div class="contianer pt-5 ">

                    <div class="contianer pt-3 ">
                        <div class="contianer pb-3">
                            <div class="text-center text-white container pb-5">
                                <div class="container">
                                    <div class="row justify-content-center">

                                        <div class="col-lg-5 col-xl-5 col-sm-12 col-md-12">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class="title-style fw-bolder mt-5">
                                                        <div class="text-white h2 ">Log In </div>
                                                      <form action="login.php" method="post">
                                                        <div class="text-white pt-3">phoneNO</div>
                                                        <input name="loginphoneNO_" type="text" class="form-control" placeholder="PhoneNO">
                                                        <div class="text-white pt-3">Password</div>
                                                        <input name="password" type="password" class="form-control"
                                                            placeholder="password">
                                                      <a href="#" id="loginicon"><button class="mt-4 button-class rounded-pill  p-2 col-6 ">Log
                                                            in</button></a>
                                                      </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="mt-5 col-lg-2 col-xl-2 fw-bolder title-style display-6 col-sm-2 col-md-2 p-1">
                                            OR
                                        </div>
                                        <div class="col-lg-5 col-xl-5 col-sm-12 col-md-12">
                                            <div class="row justify-content-center">
                                                <div class="col-10">
                                                    <div class=" mt-5 mb-5 title-style fw-bolder">
                                                        <div class="text-white h2 fw-bolder ">Sign Up </div>
                                                        <div class="text-white pt-3">Set Username</div>
                                                      <form action="login.php" method="post">
                                                        <input name="SetUserName" type="text" class="form-control mt-1"
                                                            placeholder="username">
                                                            <div class="text-white mt-3">Phone</div>
                                                            <input name="sighnupphoneNO_" type="text" class="mt-1 form-control" required
                                                            placeholder="phoneNO">
                                                        <div class="text-white pt-3">Set Password</div>
                                                        <input name="SetPassword" type="password" class="mt-1 form-control" required
                                                            placeholder="password">
                                                        <div class="text-white pt-3">Confirm Password</div>
                                                        <input name="ConfirmPassword"  type="password" class="mt-1 form-control" required
                                                            placeholder="confirm password">
                                                        <a id="sighnupicon"><button class=" mt-4 button-class rounded-pill p-2 col-6 ">Sign
                                                            up</button></a>
                                                       </form>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBProject";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$dbname);

    if(isset($_POST["loginphoneNO_"]) && isset($_POST["password"]))
    {
        echo "login";
        $check=0;
        $phoneNO1=$_POST["loginphoneNO_"];
        $password=$_POST["password"];  
        $checklogindata="SELECT * from sighnup 
        where sighnup.phoneNO='$phoneNO1' &&  sighnup.password='$password'";
        $Result=mysqli_query($conn,$checklogindata);
        
        $row = mysqli_fetch_assoc($Result);
        
        if(isset($row['Name']) && isset($row['phoneNO']) && isset($row['password']))
        {
            $namm=$row['Name'];
            $phonn=$row['phoneNO'];
            $_SESSION["visitorName"]=$namm;
            $_SESSION["visitorphone"]=$phonn;
            echo "Alraedy exit";
            $check=1;
            $check2=0;
            $gotofront = json_encode($check);
            $gotofront2 = json_encode($check2);
        }
        else
        {
            echo "sighn up";
            echo "Not Alraedy exit";
            $check=2;
            $check2=0;
            $gotofront = json_encode($check);
            $gotofront2 = json_encode($check2);
        }

    }

    if(isset($_POST["SetUserName"]) && isset($_POST["SetPassword"]) && isset($_POST["ConfirmPassword"]) && (isset($_POST["sighnupphoneNO_"])))
    {
       // echo "sighn up";

        $check2=0;
        $SetUserNamee=$_POST["SetUserName"]; 
        $SetUserpassword=$_POST["SetPassword"]; 
        $phonn=$_POST["sighnupphoneNO_"];
        $checalreadydata="SELECT * from sighnup 
        where sighnup.phoneNO='$phonn'";
        $Result=mysqli_query($conn,$checalreadydata);

        $row = mysqli_fetch_assoc($Result);
        
        if(isset($row['Name']) && isset($row['sighnupphoneNO_']) && isset($row['password']))
        {
            $check=11;
            $check2=1;   
            $gotofront2 = json_encode($check2);
            $gotofront = json_encode($check);
        }
        else
        {
           $insertinsighnup="insert into sighnup(Name,phoneNO,password) values ('$SetUserNamee','$phonn','$SetUserpassword')";
           mysqli_query($conn,$insertinsighnup);
           $check=11;
           $check2=2;
           $gotofront2 = json_encode($check2);
           $gotofront = json_encode($check);
        }
    }
    ?>
  
  
    <script>
        
     var check = <?php echo $gotofront; ?>;
     var check1 = <?php echo $gotofront2; ?>;
     if(check==1)
     {
        console.log(check);
        window.location.href = "front.html";
        //document.getElementById('loginicon').setAttribute('href','we.php');
     }
     else if(check==2)
     {
        alert('Please Sign up');
     }
     if(check1==1)
     {
        alert('Please log in (gmail already exists)');
     }
     else if(check1==2) 
     {
        alert('Now you can login');
     }

         
    </script>


</body>

</html>
