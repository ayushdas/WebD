<!--  getRandomFood -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FOODPRINT</title>  
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="style.css" rel="stylesheet">
  

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<!--<div class="header" id="header">
    <a href="#default" class="logo">CompanyLogo</a>
    <div class="header-right">
      <a class="active" href="#home">Home</a>
      <a href="#contact">Contact</a>
      <a href="#about">About</a>
    </div>
  </div>-->

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
          <a class="navbar-brand"> <img src="Logo2.png" width="250" alt="Foodprint"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="floatleft"><a href="/~s1884908/fatfree/foodprint/">HOME</a></div>
			  <div class="dropdown floatleft">
				  <span>Recipes</span>
    <!-- 
				   <i class="fa fa-caret-down"></i> -->
                    <div class="dropdown-content">
                         <a href="/~s1884908/fatfree/foodprint/RecipesByCusine.php">by cuisine</a><br />
                         <a href="~s1884908/fatfree/foodprint/RecipesByNutrients.php">by nutrients</a>
                    </div>
			</div>
            <div class="floatleft"><a href="/~s1884908/fatfree/FFF-SimpleExample/feedform">ABOUT</a></div>
        </div>
      </div>
    </nav>
    <!-- END OF HEADER -->

<head>
  <!-- Theme Made By www.w3schools.com -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-image: url("background.png");
      background-size: 125%;
      background-position: 100% 10%;
      width: 100%;
    color: #9FC147;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
	  min-height: 440px;
  }
.jumbotron p {
    margin-bottom: 15px;
    font-size: 21px;
    font-weight: 800;
    color: #fff;
    background-color: rgba(159,193,71, 0.8);
}
  .container-fluid {
    padding: 25px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
      
.header-center {
    width: 50%;
    margin-left: auto;
    margin-right: auto;
}
      
 .bg-image {
        background-image: url(Food2.pgn)
      }
  .logo-small {
    color: #9FC147;
    font-size: 50px;
  }
  .logo {
    color: #9FC147;
    font-size: 200px;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #9FC147;
  }
  .carousel-indicators li {
    border-color: #9FC147;
  }
  .carousel-indicators li.active {
    background-color: #9FC147;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #ffffff; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #9FC147;
    background-color: #fff !important;
    color: #9FC147;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #9FC147 !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #9FC147;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #353535;
    z-index: 9999;
    border: 0;
	  min-height:32px !important
	width: auto;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Vogue, sans-serif;
  }
  .navbar li a, .navbar 
	  .navbar-brand {
		  padding-top: 5px;!important; padding-bottom:5px !important;
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #9FC147 !important;
    background-color: #fff !important;
  }
	  .navbar-toggle {
    border-color: transparent;
	margin-top: 7px;
    padding-top: 0 0;
    margin-bottom: 0; 
    padding-bottom:0px;
    color: #fff !important;
  }
	  
	  .logo-small {
    color: #9FC147;
    font-size: 50px;
}
	  
.dropdown {
  position: relative;
  display: inline-block;
	color: #fff;
}
	  
	  .navbar-collapse {
		      float: right !important;
	  }	  
	  
	  .container-fluid {
		  margin: initial !important;
	  }

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  padding: 9px 7px;
  z-index: 1;
	color: #fff;
}

.dropdown:hover .dropdown-content { 
  display: block;
}  

.floatleft	  
	  {float: left; padding-right: 15px;}
	  
.floatleft a
	  {color: #fff;}
	  
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: auto;
      margin-bottom: 0px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<div class="jumbotron text-center">
    <div class="header-center">
  <p>CARE FOR YOURSELF</p> 
    <p>CARE FOR THE PLANET</p>
    </div>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>How to help save the environment</h2><br>
      <h4>Avoiding meat and dairy products is one of the biggest ways to reduce your environmental impact, according to recent scientific studies. </h4><br>
      <p>As many of us know, the food we eat has a direct impact on our health. It is important to assure that your meals are in accordance with your dietary needs. The healthier you eat, and the wider the range of ingredients you choose, the more energy you will have to seize the day!
		  But did you know that your food consumption choices also directly impact the environment? 
		  Together, let’s eat cleaner for a cleaner planet.</p>
      <br><button class="btn btn-default btn-lg"><a id="id" href="/~s1884908/fatfree/Carbon/simpleform">Check it out</a></button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>FOOD SUSTAINABILITY AND CLIMATE CHANGE </h2><br>
      <h4><strong><i>According to sustainweb.org</i></strong> , agriculture generates 30% of man-made greenhouse gas emissions. Also, in the EU, over 30% of the greenhouse gases from consumer purchases come from the food and drink sector. It is clear that your food consumption choices impact the planet you live on.
      Why just look after your own health when you can also help save the environment? <br><br>Be a good human – check your carbon footprint with FOODPRINT!
    </div>
  </div>
</div>

<!-- Container (Meal Creator Section) -->
<div id="mealcreator" class="container-fluid text-center">
  <h2>WHY FOODPRINT?</h2>
  <br>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart-empty logo-small"></span>
      <h4>LIVES</h4>
      <p>Save lives by eating less meat.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tint logo-small"></span>
      <h4>WATER</h4>
      <p>Save water by avoiding specific food items.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
      <h4>RECIPES</h4>
      <p>Enjoy healthy meals.</p>
    </div>
	</div>
</div>

<!-- Container (Recipes by cuisine Section) -->
<!-- <div id="recipescuisine" class="container-fluid text-center bg-grey">
  <h2>GOOD NUTRITION AND HEALTH</h2><br>
  <h4>We offer various meal options as a result of your personal ingredient selection, which you can base on the climate change calculator or on your personal food preferences and needs. Also, FOODPRINT allows you to choose from a wide range of cuisine types, so you are sure to have the recipe that will not fail to hit the spot! 
We understand it is important to have access to the nutritional values of your meals, this is why we let you tailor your selection based on nutritional value. 
What is there not to love?</h4>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->


    <!-- <div class="carousel-inner" role="listbox">
      <div class="item active"> -->
        <!-- <h4>Foto of Curry...<br><span>Curry with chicken.</span></h4> -->
        <!-- <img id="image_trial" src="blur-breakfast-close-up-376464.jpg" alt="Foto of Curry.. "  height="100" width="600"> -->
      <!-- </div>
      <div class="item">
        <h4>Foto of Pizza...<br><span>Pizza with Cauliflower</span></h4>
      </div>
      <div class="item">
        <h4>Foto of Taco...<br><span>Tacos with Chickpeas.</span></h4>
      </div>
    </div> -->


    <!-- <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> -->



  <!-- FOOTER -->
  <style>
      /* Add a dark background color to the footer */
      footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
        display: flex;
        height: 60px;
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
<!-- END OF FOOTER -->



</html>