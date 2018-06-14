<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
    <?php if(isset($data['title'])){
        echo $data['title'];
    };?>
    </title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
   <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?m=/index">CareerTestDrives.com by BridgeYear</a>
            </div>
            <div class = "collapse navbar-collapse" id = "bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Career Simulations<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="?m=/simulation/Medical_Lab_Technician">Medical Lab Technician</a></li>
                        <li><a href="?m=/simulation/Medical_Biller">Medical Biller and Coder</a></li>
                        <li><a href="?m=/simulation/Pharmacy_Technician">Pharmacy Technician</a></li>
                        <li><a href="?m=/simulation/Web_Developer">Web Developer</a></li>
                      </ul>
                    </li> 
                    <li><a href="?m=/survey">Take the BridgeYear Survey</a></li>
                </ul>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div>
    </nav>