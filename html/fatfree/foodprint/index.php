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
  #id {
  text-decoration: none ;
  color:green;
}
#id:hover
{
 color:white;
 text-decoration:none;
 cursor:pointer;
}
</style>
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
<!-- End of Header  -->
<script src="script.js"></script>
<body onload="scrollFunction()">
<div class="jumbotron text-center">
    <div class="header-center">
  <p>CARE FOR YOURSELF</p> 
    <p>CARE FOR THE PLANET</p>
    </div>
</div>
<div id="scroll_div3"><img id="scroll" src="icons8-scroll-down-100.png"></div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>How to help save the environment</h2><br>
      <h4>Avoiding meat and dairy products is one of the biggest ways to reduce your environmental impact, according to recent scientific studies. </h4><br>
      <p style="color:#505050;text-align:justify;">As many of us know, the food we eat has a direct impact on our health. It is important to assure that your meals are in accordance with your dietary needs. The healthier you eat, and the wider the range of ingredients you choose, the more energy you will have to seize the day!
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
      <h4 style="text-align:justify;"><strong><i>According to sustainweb.org</i></strong> , agriculture generates 30% of man-made greenhouse gas emissions. Also, in the EU, over 30% of the greenhouse gases from consumer purchases come from the food and drink sector. It is clear that your food consumption choices impact the planet you live on.
      Why just look after your own health when you can also help save the environment?<br><br> Be a good human – check your carbon footprint with FOODPRINT!</h4>
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
      <p style="color:#505050">Save lives by eating less meat.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-tint logo-small"></span>
      <h4>WATER</h4>
      <p style="color:#505050">Save water by avoiding specific food items.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-cutlery logo-small"></span>
      <h4>RECIPES</h4>
      <p style="color:#505050">Enjoy healthy meals.</p>
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
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>Foto of Curry...<br><span>Curry with chicken.</span></h4>
      </div>
      <div class="item">
        <h4>Foto of Pizza...<br><span>Pizza with Cauliflower</span></h4>
      </div>
      <div class="item">
        <h4>Foto of Taco...<br><span>Tacos with Chickpeas.</span></h4>
      </div>
    </div>

    
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div> -->
</div>



  <!-- FOOTER -->
  <style>
      /* Add a dark background color to the footer */
      footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
        display: flex;
        height: 60px;
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