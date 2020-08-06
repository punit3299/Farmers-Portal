var submit=document.querySelector('.submit');
var inputvalue=document.querySelector('.inputvalue');
var main=document.querySelector('.name');
var temp=document.querySelector('.temp');
var desc=document.querySelector('.desc');
var humid=document.querySelector('.humid');
var wind=document.querySelector('.wind');
var pic=document.querySelector('.pic');
var press=document.querySelector('.press');
var mintemp=document.querySelector('.mintemp');
var maxtemp=document.querySelector('.maxtemp');

submit.addEventListener('click',function(){
fetch('https://api.openweathermap.org/data/2.5/weather?q='+inputvalue.value+'&appid=c71aa9acb1c11fddc34e52f5ea8ecb53')
.then(response=>response.json())
.then(data =>{

	var namevalue=data['name'];
	var tempvalue=data['main']['temp'];
	var descvalue=data['weather'][0]['description'];
	var humidvalue=data['main']['humidity'];
	var windvalue=data['wind']['speed'];
	var picvalue=data['weather'][0]['icon'];
	var pressvalue=data['main']['pressure']
	var mintempval=data['main']['temp_min'];
	var maxtempval=data['main']['temp_max'];

	
	mintempval-=273.15;
	maxtempval-=273.15;
	tempvalue=tempvalue-273.15;
	tempvalue=Math.ceil(tempvalue);
	mintempval=Math.round(mintempval);
	maxtempval=Math.round(maxtempval);
	windvalue=windvalue*3.16;
	windvalue=Math.round(windvalue);
	pressvalue=pressvalue/100;

	pic.innerHTML='<img src="http://openweathermap.org/img/wn/'+picvalue+'.png"/ height="100px" width="100px">';
	main.innerHTML="<h1>"+namevalue+"</h1>";
	temp.innerHTML="Temp : "+tempvalue+"&#8451;";
	desc.innerHTML="Desc : "+descvalue;
	humid.innerHTML="Humidity : "+humidvalue+" %";
	wind.innerHTML="Wind speed : "+windvalue+" kmph";
	press.innerHTML="Pressure : "+pressvalue+" Pa";
	mintemp.innerHTML=mintempval+"&#8451;";
	maxtemp.innerHTML=maxtempval+"&#8451;";
})
	.catch(err => alert("Wrong city input !"))
})
