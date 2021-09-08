

// Javascript for the Clock

const deg = 6;

var h1,mm1,ss1;
var h2,mm2,ss2;
var h3,mm3,ss3;

var date_kolkata;
var date_paris;
var date_newyork;



setInterval(() => {
    const tz1="Asia/Kolkata";
    const tz2="Europe/Paris";
    const tz3="America/New_York"


    let day1 = new Date().toLocaleString('en-GB',{timeZone:tz1,timeZoneName:"long"});
    let day2 = new Date().toLocaleString('en-GB',{timeZone:tz2,timeZoneName:"long"});
    let day3 = new Date().toLocaleString('en-GB',{timeZone:tz3,timeZoneName:"long"});

    


    

    if(day1[13]==":"){
        h1 = parseInt(day1[12]);
        mm1 = parseInt(day1[14]+day1[15]) * deg;
        ss1 = parseInt(day1[17]+day1[18]) * deg;

    }
    else{
        h1 = parseInt(day1[12]+day1[13]);
        mm1 = parseInt(day1[15]+day1[16]) * deg;
        ss1 = parseInt(day1[18]+day1[19]) * deg;
    }
    if(day2[13]==":"){
        h2 = parseInt(day2[12]);
        mm2 = parseInt(day2[14]+day2[15]) * deg;
        ss2 = parseInt(day2[17]+day2[18]) * deg;
    }
    else{
        h2 = parseInt(day2[12]+day2[13]);
        mm2 = parseInt(day2[15]+day2[16]) * deg;
        ss2 = parseInt(day2[18]+day2[19]) * deg;
    }
    if(day3[13]==":"){
        h3 = parseInt(day3[12]);
        mm3 = parseInt(day3[14]+day3[15]) * deg;
        ss3 = parseInt(day3[17]+day3[18]) * deg;
    }
    else{
        h3 = parseInt(day3[12]+day3[13]);
        mm3 = parseInt(day3[15]+day3[16]) * deg;
        ss3 = parseInt(day3[18]+day3[19]) * deg;
    }

   

    if(h1>12){

        h1=h1-12;
    }
    if(h2>12){

        h2=h2-12;
    }
    if(h3>12){

        h3=h3-12;
    }

    let hh1 = h1 * 30;
    let hh2 = h2 * 30;
    let hh3 = h3 * 30;

    

    document.getElementById("hr1").style.transform = 'rotateZ('+hh1+'deg)';
    document.getElementById("mn1").style.transform = 'rotateZ('+mm1+'deg)';
    document.getElementById("sc1").style.transform = 'rotateZ('+ss1+'deg)';   

    document.getElementById("hr2").style.transform = 'rotateZ('+hh2+'deg)';
    document.getElementById("mn2").style.transform = 'rotateZ('+mm2+'deg)';
    document.getElementById("sc2").style.transform = 'rotateZ('+ss2+'deg)';   
   
    document.getElementById("hr3").style.transform = 'rotateZ('+hh3+'deg)';
    document.getElementById("mn3").style.transform = 'rotateZ('+mm3+'deg)';
    document.getElementById("sc3").style.transform = 'rotateZ('+ss3+'deg)';   

    

})

