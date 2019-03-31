<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>FOODPRINT</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" >
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" >
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->


    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" >

    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet">
  

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<!-- HEADER -->
<div class="flex-wrapper">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button>
            <a href="/~s1884908/fatfree/foodprint/" class="navbar-brand"> <img id="logo" src="Logo2.png" width="250" alt="Foodprint"></a>
          </div>
        
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/~s1884908/fatfree/foodprint/">HOME</a></li>
              <li><a href="/~s1884908/fatfree/Carbon/simpleform">SUSTAINABILITY</a></li>
              <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">RECIPES
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                    <li><a href="/~s1884908/fatfree/foodprint/RecipesByCusine.php">BY INGREDIENTS</a></li>
                    <li><a href="/~s1884908/fatfree/foodprint/RecipesByNutrients.php">BY NUTRIENTS</a></li>
                  </ul>
                </li>		  
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                <li><a href="/~s1884908/fatfree/FFF-SimpleExample/feedform">FEEDBACK</a></li>
                  <li><a href="/~s1884908/fatfree/foodprint/login.php">LOGIN</a></li>
                  <li><a href="/~s1884908/fatfree/Signup/">SIGNUP</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<body>
    <form id="contact-form" method="post" action="<?= $BASE ?>/simpleform" role="form">
    <div class="page-wrapper bg-green p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">SIGNUP</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-2" type="text" size="50" placeholder="Name: Maximum 20 characters *" name="name" pattern=".{1,20}" required="required" data-error="Name is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        <div class="input-group">
                                <input class="input--style-2" type="email" size="50" placeholder="Email: For verification *" name="email" required="required" data-error="Email is required.">
                                <div class="help-block with-errors"></div>
                              </div>
                            <div class="input-group">
                                <input class="input--style-2" type="text" size="50" placeholder="Username: Maximum 20 characters *" name="username" pattern=".{1,20}" required="required" data-error="Username is required.">
                                <div class="help-block with-errors"></div>
                              </div>
                        <div class="input-group">
                            <input class="input--style-2" type="password" size="50" placeholder="Password: Minimum 8 And Maximum 20 characters *" pattern=".{8,20}" name="password" required="required" data-error="Password is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <!-- Main JS-->
    <script src="js/global.js"></script>

    <style>
      /* Add a dark background color to the footer */
      footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
        display: flex;
        height: 60px;
        bottom: 0;
        /* position:sticky;
        bottom:0;
        width:100%;
        height:60px;
        margin-top: -100px;
        clear: both; */
        /* background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px; */
        /* height: 4rem; */
      }
      
      footer a {
        color: #f5f5f5;
      }
      
      footer a:hover {
        color: #777;
        text-decoration: none;
      }
      p{
        color: #C0C0C0;
        align: center;
      }            
      </style>
      
      <footer>          
        <br><br>
        <p style="text-align: center">&copy; FOODPRINT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/~s1884908/fatfree/foodprint/WebDesignReport.pdf">Click Here for the report.</a></p> 
      </footer>
</body>
</div>
</html>
<!-- end document-->