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

<!-- <body onload="getFoodByNutrients()"> -->
<body>
<legend align="center"><h4>Nutrients Selector</h4></legend>
  <div class="slidecontainer">
      <label><h4>Proteins (grams): <span id="demo1" display=inline float=left></span></h4></label>
      <input type="range" min="0" max="100" value="0" class="slider" id="proteins">
    </div>
    
    
    <div class="slidecontainer">
        <label><h4>Calcium (milli grams): <span id="demo2" display=inline float=left></span></h4></label>
        <input type="range" min="0" max="50" value="0" class="slider" id="calcium">
      </div>
    
      <div class="slidecontainer">
        <label><h4>Vitamin B12 (micro grams): <span id="demo3" display=inline float=left></span></h4></label>
        <input type="range" min="0" max="50" value="0" class="slider" id="vitaminb12">
      </div>
    
      <div class="slidecontainer">
        <label><h4>Fiber (grams): <span id="demo4" display=inline float=left></span></h4></label>
        <input type="range" min="0" max="50" value="0" class="slider" id="fiber">
      </div>
    
      <div class="slidecontainer">
        <label><h4>Iron (milli grams): <span id="demo5" display=inline float=left></span></h4></label>
        <input type="range" min="0" max="50" value="0" class="slider" id="iron">
      </div>
      
          <!-- <p style="text-align:center;color:black;"><strong>Note: </strong> Please select at least one option in the madatory section.</p> -->
          <div class="form-group">
              <label class="col-md-4 control-label" for="submit"></label>
              <div class="col-md-8">
                <button type="button" id="submit" name="submit" onclick="getFoodByNutrients();" class="btn btn-success">&#160;&#160;Click To Get Recipes&#160;&#160;</button>
                <button type="button" id="submit2" name="submit" onclick="clearSearches();" class="btn btn-danger">&#160;&#160;Click To Clear Search Results&#160;&#160;</button>
              </div>
            </div>
        </div>

        <script>
            var slider1 = document.getElementById("proteins");
            var output1 = document.getElementById("demo1");
            var slider2 = document.getElementById("calcium");
            var output2 = document.getElementById("demo2");
            var slider3 = document.getElementById("vitaminb12");
            var output3 = document.getElementById("demo3");
            var slider4 = document.getElementById("fiber");
            var output4 = document.getElementById("demo4");
            var slider5 = document.getElementById("iron");
            var output5 = document.getElementById("demo5");
            
            output1.innerHTML = slider1.value;
            output2.innerHTML = slider2.value;
            output3.innerHTML = slider3.value;
            output4.innerHTML = slider4.value;
            output5.innerHTML = slider5.value;
            
            slider1.oninput = function() {
              output1.innerHTML = this.value;
            }
            slider2.oninput = function() {
              output2.innerHTML = this.value;
            }
            slider3.oninput = function() {
              output3.innerHTML = this.value;
            }
            slider4.oninput = function() {
              output4.innerHTML = this.value;
            }
            slider5.oninput = function() {
              output5.innerHTML = this.value;
            }
            </script>


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
  <div id="scroll_div2"><img id="scroll" src="icons8-scroll-down-100.png"></div>
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
