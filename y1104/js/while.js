
for ( i=1;i<10; i++){
    for (j=1; j<10; j++){
        console.log(i ,"*",j ,"=",i*j)
    }
}



const resultBtn = document.getElementById("resultBtn");
const pResult = document.getElementById("pResult");

const form = document.getElementById("myForm");

const num1 = document.getElementById("num1");
const num2 = document.getElementById("num2");

form.addEventListener("submit",function(e){
    e.preventDefault();

    calResult = parseInt(num1.value) * parseInt(num2.value);

    pResult.innerText = (num1.value)+" * "+(num2.value)+" = "  + calResult;
}
)
    

