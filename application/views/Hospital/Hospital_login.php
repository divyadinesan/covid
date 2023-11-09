<style type="">
	/*author:starttemplate*/
/*reference site : starttemplate.com*/
body {
  background-image:url('<?php echo base_url('Asset/Hospital/images/b1.jpg')?>');
  background-position:center;
  background-size:cover;
  
  -webkit-font-smoothing: antialiased;
  font: normal 14px Roboto,arial,sans-serif;
  font-family: 'Dancing Script', cursive!important;
}

.container {
    padding: 110px;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #ffffff!important;
    opacity: 1; /* Firefox */
    font-size:18px!important;
}
.form-login {
    background-color: rgba(0,0,0,0.55);
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:white;
    box-shadow:0 1px 0 #cfcfcf;
}
.form-control{
    background:transparent!important;
    color:white!important;
    font-size: 18px!important;
}
h1{
    color:white!important;
}
h4 { 
 border:0 solid #fff; 
 border-bottom-width:1px;
 padding-bottom:10px;
 text-align: center;
}

.form-control {
    border-radius: 10px;
}
.text-white{
    color: white!important;
}
.wrapper {
    text-align: center;
}
.footer p{
    font-size: 18px;
}



</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--author:starttemplate-->
<!--reference site : starttemplate.com-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Unique Login Form | Bootstrap Templates</title>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4 text-center">
            <h1 class='text-white'>Signup Now</h1>
              <div class="form-login"></br>
                <h4>Secure Login</h4>
                </br>
                <form action="<?php  echo base_url('index.php/Hospital_controller/Hospital_login_form')?>" method="post" enctype="multipart/form-data">
               
                <input type="text" id="" class="form-control input-sm chat-input" name="email" placeholder="email"/>
                </br></br>
                <input type="text" id="" class="form-control input-sm chat-input" name="password"placeholder="password"/>
                

                </br></br>
                
                
                <div class="wrapper">
                        <span class="group-btn">
                            <input type="submit" class="btn btn-danger btn-md">
                        </span>
                </div>
                <br>
                <div align="right">
                 <a href="<?php echo base_url('index.php/Hospital_controller/Hospital_registration')?>"><h5 style="color: white">Register Here</h5></a>
                 </div>
                 <a href="<?php echo base_url('index.php/Index_controller/index')?>"><img src="<?php echo base_url('Asset/Patient/images/home1.png')?>"style="width:40px;height:40px"></a>
            </div>
        </form>
       
        </div>
    </div>
    </br></br></br>
    <!--footer-->
   
    <!--//footer-->
</div>
</body>
</html>
