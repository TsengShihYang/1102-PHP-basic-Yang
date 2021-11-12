const MyForm = document.getElementById("MyForm");
const num1Input = document.getElementById("num1");
const num2Input = document.getElementById("num2");
const result = document.getElementById("result");

// MyForm.addEventListener("submit",function(e){
//     alert("55688");
// });

// num1Input.addEventListener("submit",function(e){
//     alert("forcus");
// });

MyForm.addEventListener("submit",function(e){
    e.preventDefault();
    calResult = parseInt(num1Input.value) * parseInt(num2Input.value) ;
    console.log(calResult);
});