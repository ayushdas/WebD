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
  <!-- <div class="flex-wrapper">
  <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button>
          <a class="navbar-brand">FOODPRINT</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/~s1884908/fatfree/foodprint/">HOME</a></li>
            <li><a href="/~s1884908/fatfree/foodprint/RecipesByCusine.php">RECIPES BY CUSINE</a></li>
            <li><a href="/~s1884908/fatfree/foodprint/RecipesByNutrients.php">RECIPES BY NUTRIENTS</a></li>
            <li><a href="/~s1884908/fatfree/FFF-SimpleExample/feedform">FEEDBACK</a></li>
          </ul>
        </div>
      </div>
    </nav> -->
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
    <!-- END OF HEADER -->
    <body>
<!-- <body onload="getFoodByCusine()"> -->
<form class="form-horizontal">
      <fieldset>
      <!-- Form Name -->
      <legend align="center"><h4>Choose the main ingredients of your dish</h4></legend>
      
      <!-- Multiple Checkboxes (inline) -->
      <legend align="center"><h5>Mandatory</h5></legend>
      <div class="form-group">
        <label class="col-md-2 control-label" for="Base">Base</label>
        <div class="col-md-4" id="BaseList">
          <label class="checkbox-inline" for="Base-0">
            <input type="checkbox" name="Base" class="base" id="Base-0" value="Pasta" checked="checked">
            Pasta&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Base-1">
            <input type="checkbox" name="Base" class="base" id="Base-1" value="Tortilla">
            Tortilla&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Base-2">
            <input type="checkbox" name="Base" class="base" id="Base-2" value="Rice">
            Rice&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Base-3">
            <input type="checkbox" name="Base" class="base" id="Base-3" value="Oats">
            Oats
          </label>
        </div>
      </div>
      
      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="Vegetables">Vegetables</label>
        <div class="col-md-8">
          <label class="checkbox-inline" for="Vegetables-0">
            <input type="checkbox" name="Vegetables" class="vegetables" id="Vegetables-0" value="Potatoes">
            Potatoes
          </label>
          <label class="checkbox-inline" for="Vegetables-1">
            <input type="checkbox" name="Vegetables" class="vegetables" id="Vegetables-1" value="Courgette">
            Courgette
          </label>
          <label class="checkbox-inline" for="Vegetables-2">
            <input type="checkbox" name="Vegetables" class="vegetables" id="Vegetables-2" value="Tomatoes">
            Tomatoes
          </label>
          <label class="checkbox-inline" for="Vegetables-3">
            <input type="checkbox" name="Vegetables" class="vegetables" id="Vegetables-3" value="Peas">
            Peas&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Vegetables-4">
            <input type="checkbox" name="Vegetables" class="vegetables" id="Vegetables-4" value="Beans">
            Beans&nbsp;
          </label>
          <label class="checkbox-inline" for="Vegetables-5">
            <input type="checkbox" name="Vegetables" class="vegetables" id="Vegetables-5" value="Sprouts">
            Sprouts
          </label>
          <label class="checkbox-inline" for="Vegetables-6">
            <input type="checkbox" name="Vegetables" class="vegetables" id="Vegetables-6" value="Cabbages">
            Cabbages
          </label>
          <label class="checkbox-inline" for="Vegetables-7">
            <input type="checkbox" name="Vegetables" class="vegetables" id="Vegetables-7" value="Cauliflower">
            Cauliflower
          </label>
        </div>
      </div>
      
      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="Fruits">Fruits</label>
        <div class="col-md-6">
          <label class="checkbox-inline" for="Fruits-0">
            <input type="checkbox" name="Fruits" class="fruits" id="Fruits-0" value="Apples">
            Apples&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Fruits-1">
            <input type="checkbox" name="Fruits" class="fruits" id="Fruits-1" value="Bananas">
            Bananas&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Fruits-2">
            <input type="checkbox" name="Fruits" class="fruits" id="Fruits-2" value="Avocado">
            Avocado&nbsp;
          </label>
          <label class="checkbox-inline" for="Fruits-3">
            <input type="checkbox" name="Fruits" class="fruits" id="Fruits-3" value="Grapes">
            Grapes
          </label>
          <label class="checkbox-inline" for="Fruits-4">
            <input type="checkbox" name="Fruits" class="fruits" id="Fruits-4" value="Lemon">
            Lemon
          </label>
          <label class="checkbox-inline" for="Fruits-5">
            <input type="checkbox" name="Fruits" class="fruits" id="Fruits-5" value="Nuts">
            Nuts
          </label>
        </div>
      </div>
      
      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="Dairy">Dairy</label>
        <div class="col-md-5">
          <label class="checkbox-inline" for="Dairy-0">
            <input type="checkbox" name="Dairy" class="dairy" id="Dairy-0" value="Eggs">
            Eggs&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Dairy-1">
            <input type="checkbox" name="Dairy" class="dairy" id="Dairy-1" value="Cheese">
            Cheese&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Dairy-2">
            <input type="checkbox" name="Dairy" class="dairy" id="Dairy-2" value="Cream">
            Cream&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Dairy-3">
            <input type="checkbox" name="Dairy" class="dairy" id="Dairy-3" value="Butter">
            Butter&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="Dairy-4">
            <input type="checkbox" name="Dairy" class="dairy" id="Dairy-4" value="Curd">
            Curd
          </label>
        </div>
      </div>
      
      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="meats">Meat/Seafood</label>
        <div class="col-md-6">
          <label class="checkbox-inline" for="meats-0">
            <input type="checkbox" name="meats" class="meats" id="meats-0" value="Chicken">
            Chicken&nbsp;
          </label>
          <label class="checkbox-inline" for="meats-1">
            <input type="checkbox" name="meats" class="meats" id="meats-1" value="Pork">
            Pork&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="meats-2">
            <input type="checkbox" name="meats" class="meats" id="meats-2" value="Beef">
            Beef&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="meats-3">
            <input type="checkbox" name="meats" class="meats" id="meats-3" value="Lamb">
            Lamb&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="meats-4">
            <input type="checkbox" name="meats" class="meats" id="meats-4" value="Prawns">
            Prawns
          </label>
          <label class="checkbox-inline" for="meats-5">
            <input type="checkbox" name="meats" class="meats" id="meats-5" value="Scallops">
            Scallops
          </label>
        </div>
      </div>
      
      <!-- Multiple Checkboxes (inline) -->
      <div class="form-group">
        <label class="col-md-2 control-label" for="MeatAlternatives">Meat Alternatives</label>
        <div class="col-md-2">
          <label class="checkbox-inline" for="MeatAlternatives-0">
            <input type="checkbox" name="MeatAlternatives" class="meat_alternatives" id="MeatAlternatives-0" value="Tofu">
            Tofu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </label>
          <label class="checkbox-inline" for="MeatAlternatives-1">
            <input type="checkbox" name="MeatAlternatives" class="meat_alternatives" id="MeatAlternatives-1" value="Soya">
            Soya
          </label>
        </div>
      </div>
    <!-- Multiple Radios (inline) -->
    <hr>
    <legend align="center"><h5>Optional</h5></legend>
    <div class="form-group">
      <label class="col-md-2 control-label" for="Cuisine">Cuisine</label>
      <div class="col-md-14"> 
          <label class="radio-inline" for="Cuisine-None">
            <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-None" value="None" checked="checked">
              None
            </label>
        <label class="radio-inline" for="Cuisine-0">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-0" value="African">
          African
        </label> 
        <label class="radio-inline" for="Cuisine-1">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-1" value="Chinese">
          Chinese
        </label> 
        <label class="radio-inline" for="Cuisine-2">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-2" value="French">
          French
        </label> 
        <label class="radio-inline" for="Cuisine-3">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-3" value="Greek">
          Greek
        </label> 
        <label class="radio-inline" for="Cuisine-4">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-4" value="German">
          German
        </label> 
        <label class="radio-inline" for="Cuisine-5">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-5" value="Indian">
          Indian
        </label> 
        <label class="radio-inline" for="Cuisine-6">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-6" value="Italian">
          Italian
        </label> 
        <label class="radio-inline" for="Cuisine-7">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-7" value="Japanese">
          Japanese
        </label> 
        <label class="radio-inline" for="Cuisine-8">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-8" value="Korean">
          Korean
        </label> 
        <label class="radio-inline" for="Cuisine-9">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-9" value="Mexican">
          Mexican
        </label> 
        <label class="radio-inline" for="Cuisine-10">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-10" value="Spanish">
          Spanish
        </label> 
        <label class="radio-inline" for="Cuisine-11">
          <input type="radio" name="Cuisine" class="cuisine" id="Cuisine-11" value="Thai">
          Thai
        </label> 
      </div>
      <hr>
      <p style="text-align:center;color:black;"><strong>Note: </strong> Please select at least one option in the madatory section.</p>
      <div class="form-group">
          <label class="col-md-4 control-label" for="submit"></label>
          <div class="col-md-8">
            <button type="button" id="submit" name="submit" onclick="getFoodByCusine();" class="btn btn-success">&#160;&#160;Click To Get Recipes&#160;&#160;</button>
            <button type="button" id="submit2" name="submit" onclick="clearSearches();" class="btn btn-danger">&#160;&#160;Click To Clear Search Results&#160;&#160;</button>
          </div>
        </div>
    </div>
      <!-- Button -->
      </fieldset>
      </form>

  <div id="root"></div>
<script src="script.js"></script>
  

  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Loading Content..</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  <div id="scroll_div"><img id="scroll" src="icons8-scroll-down-100.png"></div>
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
