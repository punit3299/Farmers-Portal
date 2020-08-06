fetch('https://api.openweathermap.org/data/2.5/forecast?id=524901')
.then(response=>response.json())
.then(data =>{console.log(data)})