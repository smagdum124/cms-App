<?php
/*include_once('config.php');
include_once('jwt.php');
$status=1;
$postData = array(&$status);
$url = $apiBaseUrl.'cms/showSignOff.php';
$jsonResponse = rest_call('POST',$url, $postData,'multipart/form-data',"Bearer ".$_COOKIE['kpmg-access']);
$response = json_decode($jsonResponse,true)['text'][0];
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="./style1.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./assets/js/bootstrap.min.js"></script>
    <title>KPMG || SignOff</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
</head>
<style>
      *{
          margin-top: 0px;
          padding-top: 0px;
      }
    .welcome{
        height: 50px;
      text-align: center;
      color: #00338d;
      text-align: center;
      font-size: 51px;
      margin-top: 68px;
      margin-left: -14%;
      font-family:  sans-serif;
    }
    .name{
        margin-left: -60px;
        font-size: 31px;
color: grey;
padding-top: 100px;
font-family: "Oswald", sans-serif;
    }
    .text {
      background-image: url(./assets/edit.png);
      background-position: center;
      background-repeat: repeat;
      margin-left: 160px;
      position: relative;
       top:-50px;
      border-radius: 15px;
      border: 1px solid grey;
      height: 50px;
      width: 250px;
      padding-left: 15px;
      font-size: 15px;
      padding-right: 10px;
    }
    .btn{
        
        height: 70px;
        width: 350px;
        margin-top: -250px;
        margin-left: -40px;
        border-radius: 15px;
        border: none;
    }
    .log {
        margin-left: 80%;
        margin-top: -2%;
      }
      .arrow{
        margin-left: 175%;
        margin-top: 85%;
    }
    .hea{
      position:relative;
      left:850px;
      top:-90px;
    }
    .hea2{
      position:relative;
      left:850px;
      top:-125px;
    }
    .container2 {
        position:relative;
      left:220px;
      top:-150px;
    }
    .del-image1{
        position:relative;
      left:-70px;
      top:-5px;
      
    }
</style>



<body class="body-bg">
    <div class="container-lg">
        <div class="welcome-screen signOff">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-1 col-lg-1 col-1">
                    <span class="arrow-left-image" onclick="location.href='TableTop.php';">
                    <img class="arrow" src="./assets/login.png" alt="">
                </div>
                <div class="col-xs-9 col-sm-9 col-md-11 col-lg-11 col-11 common-welcome-color welcome-screen-font"
                    onclick="location.href='select_template.php';">
                    <div class="welcome">
                        
                    <span >SignOff Message</span>
                    </div>
                </div>
                <div class="log">
          <img style="height: 45px;width:45px" src="assets/Logout button.png" alt="" />
        </div>
            </div>
            <form action="updateSignOff.php" method="post" class="resource-form">
                <div class="row justify-content-md-center">
                    <div class=" col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="row  type-select">
                            <div class="col-4 col-sm-4 col-xs-12">
                                <div class="position-relative">
                                    <div class="container1">

                                    
                                    <img class="del-image1" src="assets/Info button.png" alt="welcome-text">
                                    <label class="name">Main Text</label>
                                    <input
          class="text"
          placeholder="Thank you orgplaceholder for great session"
          style="
              background-image: url('assets/Group 159.png');
              background-repeat: no-repeat;
              background-position: 630px;
              height: 50px;
              width: 680px;
              
              "
          />
          <img class="hea" src="./assets/Highlight Header Text.png" alt=""><br /><br />
        </div>
                                    <!-- <span class="tooltiptext">Please input the keyword orgplaceholder in the welcome
                                        text
                                        instead of the visiting company name. The keyword will fetch the company name
                                        from
                                        the booking application. Similarly please use the following keywords -
                                        nameplaceholder instead of the visiting client name, timeplaceholder instead of
                                        the
                                        visiting time and timeplaceholder instead of the visiting date.</span> -->
                                </div>
                            </div>
                            <div class="col-8 col-sm-8 col-xs-12">


                                <!-- <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Recipient's username"
                                        name="signoff_text" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2" value="<?php #echo $response['signoff_text'];?>">
                                    <div class=" input-group-append">
                                        <img src="assets/Group 159.png" alt="editIcon"
                                            class="edit-icon input-group-text" id="basic-addon2"> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row type-select">
                            <div class="col-4 col-sm-4 col-xs-12">
                                <div class="container2">
                                <label class="name"> Footer Text</label>
                                <input
          class="text"
         
          style="
              background-image: url('assets/Group 159.png');
              background-repeat: no-repeat;
              background-position: 630px;
              height: 150px;
              width: 680px;
              
              "
          />
          <img class="hea2" src="./assets/Highlight Header Text.png" alt=""><br /><br />
          </div>
                                
                            </div>
                            <div class="col-8 col-sm-8 col-xs-12">
                                <div class="input-group mb-3">

                                    <!-- <textarea class="form-control" placeholder="Footer Text" name="signoff_footer"
                                        aria-label="Recipient's username"
                                        aria-describedby="basic-addon2"><?php #echo $response['signoff_footer'];?></textarea> -->
                                    <div class=" input-group-append">
                                        <!-- <img src="assets/Group 159.png" alt="editIcon"
                                            class="edit-icon input-group-text" id="basic-addon2"> -->

                                    </div>


                                </div>
                            </div>
                            <div class=" row type-select">
                                <div class="col-12 text-center">
                                    <button class="btn" style="background-color: darkblue;color:white;font-size: 31px;" type="submit" >Edit Message</button>
                                </div>

                            </div>


                        </div>
                    </div>
            </form>

        </div>


    </div>


</body>

</html>