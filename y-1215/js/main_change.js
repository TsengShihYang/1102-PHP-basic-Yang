
const form = document.getElementById('myForm') ;
const num1 = document.getElementById("cNum");
const num2 = document.getElementById("eNum");
const cmUnit = document.getElementById("cmUnit");
const enUnit = document.getElementById("enUnit");


cNum.addEventListener("change",function(e){

    const cm = parseFloat(cNum.value);
    console.log(cm);
    let inch = cm / 2.54 ;
    console.log(inch);
    inch=Math.round(inch * 100) / 100 ;
    console.log(inch);
    eNum.value = inch;  
}); 

eNum.addEventListener("change",function(e){

    const inch = parseFloat(eNum.value);
    console.log(inch);
    cm = inch * 2.54 ;
    cm=Math.round(cm * 100) / 100 ;
    console.log(cm);
    cNum.value = cm;  
}); 

cLeg.addEventListener("change",function(e){

    const leg = parseFloat(cLeg.value);
    console.log(leg);
    let pin =  leg / 3.3 ;
    console.log(pin);
    pin=Math.round(pin * 100) / 100 ;
    console.log(pin);
    Ping.value = pin;  
}); 

Ping.addEventListener("change",function(e){

    const pin = parseFloat(Ping.value);
    console.log(pin);
    leg =  pin * 3.3 ;
    leg=Math.round(leg * 100) / 100 ;
    console.log(leg);
    cLeg.value = leg;  
});
  

    



