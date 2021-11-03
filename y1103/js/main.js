const form = document.getElementById("myForm");
const num1 = document.getElementById("num1");
const num2 = document.getElementById("num2");
const option = document.getElementById("option");
const resault = document.getElementById("resault");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    // console.log("submit",e);
    console.log(num1.value);
    console.log(num2.value);
    console.log(option.value);
    calResault = parseInt(num1.value) +  parseInt(num2.value);
    console.log(typeof(calResault));
    console.log(calResault);
    pResault.innerText = "Resault :" + calResault;
}
)

// document.getElementById("resault").addEventListener("click", function() {
//     document.getElementById("demo").innerHTML = (num1 + num2 + option);});