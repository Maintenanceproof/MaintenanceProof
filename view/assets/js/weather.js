const apiKey="a4d05dfcd1ce24a0ba464f985472632b";
const apiUrl="https://api.openweathermap.org/data/2.5/weather?units=metric&q=";
const returnCity = document.querySelector("#p_city");
const weatherBtn = document.querySelector(".btn1");
const weatherIcon = document.querySelector(".weather-icon");
const met = document.querySelector('.meteo');
async function checkWeather(city){
    const response = await fetch(apiUrl + city + `&appid=${apiKey}`);
    var data = await response.json(); 
    console.log(data);
    document.querySelector(".city").innerHTML = data.name;
document.querySelector(".temp").innerHTML = Math.round(data.main.temp) +"°C";
document.querySelector(".humidity").innerHTML = data.main.humidity +" %";
document.querySelector(".wind").innerHTML = data.wind.speed +" km/h";
document.querySelector(".pressure").innerHTML = data.main.pressure +" hPa";


if(data.weather[0].main == "Clouds"){
    weatherIcon.src = "views/includes/img/nuageux.png";
    met.innerHTML ="Temps nuageux"
} else if(data.weather[0].main == "Clear"){
    weatherIcon.src = "views/includes/img/soleil.png";
    met.innerHTML ="Temps ensoleillé"
}else if(data.weather[0].main == "Rain"){
    weatherIcon.src = "views/includes/img/pluie.png";
    met.innerHTML ="Temps pluvieux"
}else if(data.weather[0].main == "Drizzle"){
    weatherIcon.src = "views/includes/img/alternence.png";
    met.innerHTML ="Alternance soleil nuages"
}else if(data.weather[0].main == "Snow"){
    weatherIcon.src = "views/includes/img/neige.png";
    met.innerHTML ="Temps neigeux"
}
}
weatherBtn.addEventListener("click", ()=>{
    checkWeather(returnCity);
})
