function scrollFunction(){
  document.getElementById("scroll").style.visibility="visible"
    setTimeout(function () {
    document.getElementById("scroll").style.visibility="hidden"
}, 1000);
}
function clearSearches(){
  location.reload();
  return;
}

function constructAPICall_getFoodByCusine(selected_mandatory,selected_optional)
{
  if(selected_optional[0]=="None"){
  var baseURI = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?number=9&offset=0&type=main+course&query="
  query=selected_mandatory.join('+');
  var URI = baseURI+query;
  return URI;
  }
  else{
    var baseURI = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search?cuisine="+selected_optional[0];
    baseURI += "&number=9&offset=0&type=main+course&query=";    
    query=selected_mandatory.join('+');
    var URI = baseURI+query;
    return URI;
  }
}

function getFoodByCusine()
{
  const app = document.getElementById('root');
  var baseArray = [];
  var vegetablesArray = [];
  var fruitsArray = [];
  var dairyArray = [];
  var meat_seafoodArray = [];
  var meat_alternativesArray =[];
  var cuisineArray =[];
  $(".base:checked").each(function() { 
    baseArray.push($(this).val());
  });
  $(".vegetables:checked").each(function() {
    vegetablesArray.push($(this).val());
  });
  $(".fruits:checked").each(function() {
    fruitsArray.push($(this).val());
  });
  $(".dairy:checked").each(function() {
    dairyArray.push($(this).val());
  });
  $(".meats:checked").each(function() {
    meat_seafoodArray.push($(this).val());
  });
  $(".meat_alternatives:checked").each(function() {
    meat_alternativesArray.push($(this).val());
  });
  $(".cuisine:checked").each(function() {
    cuisineArray.push($(this).val());
  });
  var selected_mandatory;
  selected_mandatory = baseArray.concat(vegetablesArray)
  selected_mandatory = selected_mandatory.concat(fruitsArray)
  selected_mandatory = selected_mandatory.concat(dairyArray)
  selected_mandatory = selected_mandatory.concat(meat_seafoodArray)
  selected_mandatory = selected_mandatory.concat(meat_alternativesArray)
  var slected_optional;
  slected_optional = cuisineArray
  var selected_mandatory_to_print
  var slected_optional_to_print
  selected_mandatory_to_print = selected_mandatory.join(',');
  if(selected_mandatory_to_print.length <= 0){
    alert("Please select at least one item in the mandatory section.");
    return;
  }
  const container = document.createElement('div');
  container.setAttribute('class', 'container');
  app.appendChild(container);
  var request = new XMLHttpRequest();
  var resultsCtr = 0;  
  URI = constructAPICall_getFoodByCusine(selected_mandatory,slected_optional)
  request.open('GET',URI,true,"ayush.das007@gmail.com");
  request.setRequestHeader("X-RapidAPI-Key", "208e6edba5mshc9fbd7dbf8b607cp113952jsn136cfb2f1d7b");
  request.onload = function () {
    var data = JSON.parse(this.response);
    if (request.status >= 200 && request.status < 400) {
      data.results.forEach(item => {
        resultsCtr += 1
        logo_src = data.baseUri+item.image;
        const card = document.createElement('div');
        card.setAttribute('class', 'card');
        const h1 = document.createElement('h1');
        h1.textContent = item.title;
        const img = document.createElement('img');
        img.addEventListener("click",function(){
          func(item.id, item.title)
        }, false);
        img.src = logo_src;
        container.appendChild(card);
        card.appendChild(h1);
        card.appendChild(img);
      });
      console.log(resultsCtr);
      if (resultsCtr == 0){
        var error = "No recipes available with the current choice. Please try another choice.";
        alert(error);
      } else {
        scrollFunction();
      }
    } else {
      console.log('error');
    }
  }
  request.send();
}

function constructAPICall_getFoodByNutrients(proteins,calcium,vitaminb12,fiber,iron)
{
  var URI = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/findByNutrients?minProtein=0&offset=0&number=9";
  var proteins_string = "&"+"maxProtein="+proteins;
  var calcium_string = "minCalcium=0"+"&"+"maxCalcium="+calcium;
  var vitaminb12_string = "minVitaminB12=0"+"&"+"maxVitaminB12="+vitaminb12;
  var fiber_string = "minFiber=0"+"&"+"maxFiber="+fiber;
  var iron_string = "minIron=0"+"&"+"maxIron="+iron;
  var limitLicense = "limitLicense=false";
  if (proteins != 0){
    URI += "&"+ proteins_string;
  }
  if (calcium != 0){
    URI += "&"+ calcium_string;
  }
  if (vitaminb12 != 0){
    URI += "&"+ vitaminb12_string;
  }
  if (fiber != 0){
    URI += "&"+ fiber_string;
  }
  if (iron != 0){
    URI += "&"+ iron_string;
  }
  URI += "&"+ limitLicense;
  return URI;
}

function getFoodByNutrients() {
  var proteins = document.getElementById("proteins").value;
  var calcium = document.getElementById("calcium").value;
  var vitaminb12 = document.getElementById("vitaminb12").value;
  var fiber = document.getElementById("fiber").value;
  var iron = document.getElementById("iron").value;
  if (proteins == 0 && calcium==0 && vitaminb12==0 && fiber==0 && iron==0){
    var error = "No recipes available with the current choice. Please choose at lest one non-zero nutrient.";
    alert(error);
    return;
  }
  else{
    var URI = constructAPICall_getFoodByNutrients(proteins,calcium,vitaminb12,fiber,iron);
    console.log(URI);
  }
const app = document.getElementById('root');
const container = document.createElement('div');
container.setAttribute('class', 'container');
app.appendChild(container);
var request = new XMLHttpRequest();
var resultsCtr = 0;
request.open('GET',URI,true,"ayush.das007@gmail.com");
request.setRequestHeader("X-RapidAPI-Key", "208e6edba5mshc9fbd7dbf8b607cp113952jsn136cfb2f1d7b");
request.onload = function () {
  var data = JSON.parse(this.response);
  if (request.status >= 200 && request.status < 400) {    
    data.forEach(item => {
      resultsCtr += 1;
      logo_src = item.image
      const card = document.createElement('div');
      card.setAttribute('class', 'card');
      const h1 = document.createElement('h1');
      h1.textContent = item.title;
      const img = document.createElement('img');
      img.addEventListener("click",function(){
        func(item.id, item.title)
      }, false);
      img.src = logo_src;
      container.appendChild(card);
      card.appendChild(h1);
      card.appendChild(img);
    });
    if (resultsCtr == 0){
      var error = "No recipes available with the current choice. Please try another choice.";
      alert(error);
    }
    else{
      scrollFunction();
    }
  } else {
    console.log('error');
  }
}
request.send();
}


function getRandomFood() {
  const app = document.getElementById('root');
  const container = document.createElement('div');
  container.setAttribute('class', 'container2');
  app.appendChild(container);
  var request = new XMLHttpRequest();
  URI = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/random?number=1"
  request.open('GET',URI,true,"ayush.das007@gmail.com");
  request.setRequestHeader("X-RapidAPI-Key", "208e6edba5mshc9fbd7dbf8b607cp113952jsn136cfb2f1d7b");
  request.onload = function () {
    var data = JSON.parse(this.response);
    if (request.status >= 200 && request.status < 400) {
      console.log(data.recipes)
      data.recipes.forEach(item => {
        logo_src = item.image
        console.log(logo_src)
        const card = document.createElement('div');
        card.setAttribute('class', 'card');
        const h1 = document.createElement('h1');
        h1.textContent = item.title;
        const img = document.createElement('img');
        img.addEventListener("click",function(){
          func(item.id, item.title)
        }, false);
        img.src = logo_src;
        container.appendChild(card);
        card.appendChild(h1);
        card.appendChild(img);
      });
    } else {
      console.log('error');
      } 
    }
  request.send();
  }

  function getFoodTrivia() {
    const app = document.getElementById('root');
    const container = document.createElement('div');
    container.setAttribute('class', 'container');
    app.appendChild(container);
    const card = document.createElement('div');
    card.setAttribute('class', 'card2');
    const h1 = document.createElement('h1');
    const p = document.createElement('p');
    container.appendChild(card);
    card.appendChild(h1);
    card.appendChild(p);
    p.setAttribute('class', 'jokepara');
    h1.textContent = 'WELCOME';
    p.textContent = 'We focus on providing users with recipes from different cuisine types as well as nutritional value information. Browse along to find out what your next meal will be! Here is a suggestion for you...';
    container.appendChild(card);
    card.appendChild(h1);
    card.appendChild(p);
    }

function temp() {
  getFoodTrivia();
  getRandomFood();
}

function func(id,title) {
  // alert (id);
  var request = new XMLHttpRequest();
  URI = "https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/"+id+"/information";
  request.open('GET',URI,true,"ayush.das007@gmail.com");
  request.setRequestHeader("X-RapidAPI-Key", "208e6edba5mshc9fbd7dbf8b607cp113952jsn136cfb2f1d7b");
  var modal = $('#myModal');
  title = 'Recipe for '+title;
  modal.find('.modal-header h4').html(title);
  console.log('Outside onload');
  request.onload = function () {
    console.log("In Onload function");
    var data = JSON.parse(this.response);
    if (request.status >= 200 && request.status < 400) {
      recipeAndProc = "<strong>Ingredients</strong></br>";
      ingredients = "";
      data.extendedIngredients.forEach(item => {
        ingredients += item.name + ": " + parseFloat(item.amount).toFixed(2).toString() + " " + item.unit + "</br>" ;
      });
      recipeAndProc += ingredients + "</br>";      
        if (data.instructions == null){
          recipeAndProc += "<strong>Procedure</strong></br>"+"Yet to be provided by chefs!!";
          modal.find('.modal-body p').html(recipeAndProc);
        }
        else{
          recipeAndProc += "<strong>Procedure</strong></br>"+data.instructions
          modal.find('.modal-body p').html(recipeAndProc);
        }
        console.log(data.instructions);      
  } else {
      console.log('error');
    }
  }
  $('#myModal').modal('show');
  request.send();
}

