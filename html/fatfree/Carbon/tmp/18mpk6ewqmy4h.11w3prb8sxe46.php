<!-- 
A very simple input form View template:
note that the form method is POST, and the action
is the URL for the route that handles form input.
 -->
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
        <!-- END OF HEADER -->
        <body>
            <form class="form-horizontal" id="form1" name="form1" method="post" action="<?= $BASE ?>/simpleform">
                <fieldset>
                <!-- <label class="col-md-4 control-label" for="textinput">Text Input</label>  -->
              <legend align="center" style = "font-family:georgia,garamond,serif;font-size:2.5rem;">Welcome to climate change food calculator. Let's find out how much impact food has on the environment...</legend>              
              <!-- style = "font-family:georgia,garamond,serif;font-size:16px;font-style:italic;" -->
              <div class="form-group">                  
                  <label class="col-md-3 control-label" for="exampleFormControlSelect1">Choose a food item: </label>
                  <div class="col-md-3">
                  <select class="form-control" id="food" name="food" style="width: 50em;">
                      <option value="apples" size="2" selected>Apples</option>
                      <option value="avocados">Avocados</option>
                      <option value="bananas">Bananas</option>
                      <option value="beans">Beans</option>
                      <option value="beef">Beef</option>
                      <option value="beer">Beer</option>
                      <option value="berries and grapes">Berries and grapes</option>
                      <option value="bread">Bread</option>
                      <option value="cheese">Cheese</option>
                      <option value="chicken">Chicken</option>
                      <option value="chocolate (dark)">Chocolate (dark)</option>
                      <option value="chocolate (milk)">Chocolate (milk)</option>
                      <option value="citrus fruit">Citrus fruit</option>
                      <option value="coffee">Coffee</option>
                      <option value="eggs">Eggs</option>
                      <option value="fish">Lamb</option>
                      <option value="milk (almond)">Milk (almond)</option>
                      <option value="milk (dairy)">Milk (dairy)</option>
                      <option value="milk (oat)">Milk (oat)</option>
                      <option value="milk (rice)">Milk (rice)</option>
                      <option value="milk (soy)">Milk (soy)</option>
                      <option value="nuts">Nuts</option>
                      <option value="oatmeal">Oatmeal</option>
                      <option value="pasta">Pasta</option>
                      <option value="peas">Peas</option>
                      <option value="pork">Pork</option>
                      <option value="potatoes">Potatoes</option>
                      <option value="prawns">Prawns</option>
                      <option value="rice">Rice</option>
                      <option value="tea">Tea</option>
                      <option value="tofu">Tofu</option>
                      <option value="tomatoes">Tomatoes</option>
                      <option value="wine">Wine</option>
                  </select>
                  </div>                                
              </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="exampleFormControlSelect1">Choose a frequency: </label>
                    <div class="col-md-3">
                    <select class="form-control" id="frequency" name="frequency" style="width: 50em;">
                        <option value="1-2 times a week" selected>1-2 times a week</option>
                        <option value="3-5 times a week">3-5 times a week</option>
                        <option value="Once a day">Once a day</option>
                        <option value="Twice a day or more">Twice a day or more</option>
                    </select>
                    </div>
                  </div>

                  <div class="form-group">
                      <label class="col-md-6 control-label" for="singlebutton"></label>
                      <div class="col-md-6">
                          <button id="submit" name="Submit" value="Submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                </fieldset>
              </form>

<!-- <form id="form1" name="form1" method="post" action="<?= $BASE ?>/simpleform"> -->

<!-- <p>Choose a food item: 
  <select name="food" id="food">
    <option value="apples" selected>Apples</option>
    <option value="avocados">Avocados</option>
    <option value="bananas">Bananas</option>
    <option value="beans">Beans</option>
    <option value="beef">Beef</option>
    <option value="beer">Beer</option>
    <option value="berries and grapes">Berries and grapes</option>
    <option value="bread">Bread</option>
    <option value="cheese">Cheese</option>
    <option value="chicken">Chicken</option>
    <option value="chocolate (dark)">Chocolate (dark)</option>
    <option value="chocolate (milk)">Chocolate (milk)</option>
    <option value="citrus fruit">Citrus fruit</option>
    <option value="coffee">Coffee</option>
    <option value="eggs">Eggs</option>
    <option value="fish">Lamb</option>
    <option value="milk (almond)">Milk (almond)</option>
    <option value="milk (dairy)">Milk (dairy)</option>
    <option value="milk (oat)">Milk (oat)</option>
    <option value="milk (rice)">Milk (rice)</option>
    <option value="milk (soy)">Milk (soy)</option>
    <option value="nuts">Nuts</option>
    <option value="oatmeal">Oatmeal</option>
    <option value="pasta">Pasta</option>
    <option value="peas">Peas</option>
    <option value="pork">Pork</option>
    <option value="potatoes">Potatoes</option>
    <option value="prawns">Prawns</option>
    <option value="rice">Rice</option>
    <option value="tea">Tea</option>
    <option value="tofu">Tofu</option>
    <option value="tomatoes">Tomatoes</option>
    <option value="wine">Wine</option>
    
      
  </select>
</p> -->
    
<!-- <p>Choose a frequency: 
  <select name="frequency" id="frequency">
    <option value="1-2 times a week">1-2 times a week</option>
    <option value="3-5 times a week" selected>3-5 times a week</option>
    <option value="Once a day">Once a day</option>
    <option value="Twice a day or more">Twice a day or more</option>
  </select>
</p> -->
    
   
    
<!-- <p>
  <input id="submit" type="submit" name="Submit" value="Submit" />
</p> -->
<!-- </form> -->
<div class="results">
<h1>How do your food choices impact the environment?</h1></br>
<p> Over an entire year, your consumption is contributing to this amount of your annual greenhouse gas emissions: <?= $viewResult['gGE'] ?></p>
<p> That is the equivalent of driving a regular petrol car for: <?= $viewResult['car'] ?> </p>
<p> That is the same as heating the average UK home for: <?= $viewResult['houseHeating'] ?> </p>
</div>
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
      color: black;
      text-align:center;
      font-family:georgia,garamond,serif;
      font-size:20px;
    }            
    </style>
    
    <footer>          
      <br><br>
      <p style="text-align:center;color:#C0C0C0;font-size:16px">&copy; FOODPRINT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/~s1884908/fatfree/foodprint/WebDesignReport.pdf">Click Here for the report.</a></p> 
    </footer>
</body>
</div>
</html>


<style>
    .results {
        display: none;
    }
</style>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>

<script>
    $(function() {
        
    $("#form1").submit(function(event){ 
        
        event.preventDefault();
        console.log("data:",$(this).serialize());
    $.ajax(
        {
            type: "POST",
            url: $(this).attr("action"),
            data: $(this).serialize(),
//            dataType: "json",
          success: function(result){
              console.log("ajax result:",result);
              $(".results").html(result);
            $(".results").show(300);},
        error: function(err) {
            console.log("ajax result:",err.responseText);
            $(".results").html(err.responseText);
            $(".results").show(300);
//            alert("Oops, sorry. Try again later.");
                                    
            

        }
        });
});
        });
</script>
<hr />