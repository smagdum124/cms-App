<?php
/*include_once('config.php');
include_once('jwt.php');

if(isset($_POST['Delete']) && isset($_POST['Id']))
{
    $postData1 = array("ServiceId"=>&$_POST['Id']);
    $url1 = $apiBaseUrl.'cms/VRdeleteService.php';
	//echo ($_POST['Id']);
    $jsonResponse = rest_call('POST',$url1, $postData1,'multipart/form-data',"Bearer ".$_COOKIE['kpmg-access']);
	header("Refresh:0");
}


$status=1;
$postData = array(&$status);
$url = $apiBaseUrl.'cms/VRshowService.php';
$jsonResponse = rest_call('POST',$url, $postData,'multipart/form-data',"Bearer ".$_COOKIE['kpmg-access']);
//$response = json_decode($jsonResponse,true)['services'][0];
//echo '<script>console.log('.$response.');</script>';

$response = $jsonResponse;

if(empty($response)) {
  echo ("No Service Videos available.");
}*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script type="text/javascript" language="javascript"></script>
    <title>KPMG</title>
</head>
<style>

    *,
    *::before,
    *::after {
    box-sizing: border-box;
    }

    @media (prefers-reduced-motion: no-preference) {
    :root {
        scroll-behavior: smooth;
    }
    }


    body{
        background-image: url(assets/back.png);
        margin: 0px;
        font-family: 'UNIVERSFORKPMG-BOLD';
        src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
    }


    @font-face {    
        font-family: 'UNIVERSFORKPMG-BOLD';
        src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
    }

    p{
        font-family: 'UNIVERSFORKPMG-BOLD';
        src: url("font/UNIVERSFORKPMG-BOLD.TTF") format("truetype");
    }

    .add-button {
        /* right:190px;
        bottom:20px; */
        left:1060px;
        top:-125px;
       position: relative;

    }

    .box-selection {
        height:200px;
        width:150px;
        background-size: contain;
        display: inline-block;
        margin:20px;
        background-image:url('assets/Rectangle-76.png');
        background-repeat:no-repeat;
        color: #FFFFFF;
        text-align: center;
        font-size: 25px;
        vertical-align: middle;
        margin-left: 90px;
        margin-top:50px
    }

    .vertical-center {
        margin: 0;
        position: relative;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }

    .vrscreen-form {
        max-width: 700px;
        margin: 0px auto;
    }
    .btn-custom-small {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        min-width: 157px;
        height: 50px;
        color: #fff;
        background: #00338d;
        font-size: 24px;
        text-decoration: none;
        border-radius: 10px;
        font-family: 'UNIVERSFORKPMG-BOLD';
        cursor: pointer;
        border: 0px;
        padding: 0px 30px;
    }
    .justify-content-between {
        justify-content: space-between;
    }
    .d-flex {
        display: flex;
    }
    .vrscreen-form-row {
        display: flex;
        margin-bottom: 60px;
    }
    .vrscreen-form-text {
        flex: 1 1 auto;
        /* padding-right: -10px; */
        position:relative;
        right:-70px;
    }
    .vrscreen-form-row h3 {
        margin: 0px;
        padding: 0px 0px 10px 0;
        color: #838383;
        font-size: 28px;
        font-family: 'UNIVERSFORKPMG-BOLD';
    }
    .vrscreen-form-row p {
        margin: 0px;
        padding: 0px 0px 0px 0;
        color: #838383;
        font-size: 22px;
        font-family: 'UNIVERSFORKPMG-BOLD';
    }
    .vrscreen-form-actions {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        position:relative;
        left:50px;
    }
    .vrscreen-form-actions button {
        margin: 0px 30px;
    }
    .log{
        margin-left: 100%;
        margin-top:-6%;
    }


</style>
<body>
    <div class="search" id = "searchDiv" style="margin: auto;width: 100%;position: absolute;top: 70px">

        <form action="VRServices.php" method="post" id = "form">
            <div style="width: 800px;height:100px;margin:auto;">
                <div style="height:50px;float: left;background-image:url('assets/login.png');background-repeat:no-repeat;padding-left:50px;cursor:pointer;"onclick="location.href='select_template.php';"></div>
                <div style="height:50px;text-align: center;color: #00338D;text-align: center;font-size: 45px;margin:0px;">
                VR Services</div>
                <div class="log"><img src="assets/Logout button.png" alt=""></div>

                <!-- <div class="Log button"><a href="https://kpmg.experientialetc.com/cms/VRAddServices.php"><img style=" height:50px;
        width:50px;" src="assets/Logout Button.png"></a></div> -->

            </div>

         

            <div class="vrscreen-form">
                <div class="vrscreen-form-row">
                    <div class="vrscreen-form-text">
                        <h3>Item 01</h3>
                    </div>
                    <div class="vrscreen-form-actions">
                        <button class="btn-custom-small">View</button>
                        <button class="btn-custom-small">Delete</button>
                    </div>
                </div>
            </div>
            <div class="vrscreen-form">
                <div class="vrscreen-form-row">
                    <div class="vrscreen-form-text">
                        <h3>Item 01</h3>
                    </div>
                    <div class="vrscreen-form-actions">
                        <button class="btn-custom-small">View</button>
                        <button class="btn-custom-small">Delete</button>
                    </div>
                </div>
            </div>
            <div class="vrscreen-form">
                <div class="vrscreen-form-row">
                    <div class="vrscreen-form-text">
                        <h3>Item 01</h3>
                    </div>
                    <div class="vrscreen-form-actions">
                        <button class="btn-custom-small">View</button>
                        <button class="btn-custom-small">Delete</button>
                    </div>
                </div>
            </div>
            <div class="vrscreen-form">
                <div class="vrscreen-form-row">
                    <div class="vrscreen-form-text">
                        <h3>Item 01</h3>
                    </div>
                    <div class="vrscreen-form-actions">
                        <button class="btn-custom-small">View</button>
                        <button class="btn-custom-small">Delete</button>
                    </div>
                </div>
            </div>
			
			<div class="add-button" id="btnadd"><a href="https://kpmg.experientialetc.com/cms/VRAddServices.php"><img style=" height:95px;
        width:95px;" src="assets/Add Button.png"></a></div>

		
       
        </form>
    </div>
</body>
	
<script>
		
		response = JSON.parse('<?php echo $response; ?>');
		NumberOfServices = response.services.length;
		//console.log(response.services.length);
		var formElem = document.getElementById("form");
		
		if(NumberOfServices === undefined ){
			console.log(NumberOfServices);
			formElem.innerHTML  += `
			<div class="vrscreen-form">
					<div class="vrscreen-form-row">
						<div class="vrscreen-form-text">
							<h3>No Services available</h3>
						</div>
					</div>
				</div>`;
		}else{
			for(var i=0;i<response.services.length;i++){
				formElem.innerHTML  += `
				<div class="vrscreen-form">
						<div class="vrscreen-form-row">
							<div class="vrscreen-form-text">
								<h3>`+(i+1)+`. `+response.services[i].name+`</h3>
							</div>
							<div class="vrscreen-form-actions">
								<a href="VRServiceVideos.php?Id=`+response.services[i].Id+`" class="btn-custom-small">View</a>										
								<input name = "Id" style = "display:none;" value = "`+response.services[i].Id+`" />
								<button class="btn-custom-small" name = "Delete">Delete</button>
							</div>
						</div>
					</div>`;
			}
		}
	//href="EditTwitter.php?id="
</script>	
</html>