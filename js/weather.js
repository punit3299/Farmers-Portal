var input = document.querySelector('.input_text');
var main = document.querySelector('#name');
var temp = document.querySelector('.temp');
var desc = document.querySelector('.desc');
var humidity = document.querySelector('.humidity');
var button= document.querySelector('.submit');
var wind= document.querySelector('.wind');

button.addEventListener('click', function(name){
fetch('https://api.openweathermap.org/data/2.5/weather?q='+input.value+'&appid=c71aa9acb1c11fddc34e52f5ea8ecb53')
.then(response => response.json())
.then(data => {
  var tempValue = data['main']['temp'];
  var nameValue = data['name'];
  var descValue = data['weather'][0]['description'];
  var humvalue=data['main']['humidity'];
  var winvalue=data['wind']['speed'];

  //tempValue=tempValue-273.15;
  winvalue=windvalue*3.16;
  //tempValue=parseInt(tempValue,10);
  main.innerHTML = nameValue;
  desc.innerHTML = "Desc : </b>"+descValue;
  temp.innerHTML = "Temp : "+tempValue+"&#8451;";
  humidity.innerHTML = "Humidity : "+humvalue+"%";
  wind.innerHTML = "<b>Wind Speed : "+winvalue+"kmph";
})

.catch(err => alert("Wrong city name!"));
})
