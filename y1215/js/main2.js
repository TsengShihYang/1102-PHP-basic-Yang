// form submit 
    //myForm 的submit click



// 宣告
const form = document.getElementById('myForm') ;
const num1 = document.getElementById("origin");
const num2 = document.getElementById("discount");
const num3 = document.getElementById("cashD");
const resultOutput = document.getElementById("resultOutput");
const Alltotal = document.getElementById("Alltotal");
// resultOutput.innerText = "12345";

//get form

form.addEventListener("submit",function(e){
    console.log(e);
    // 預防表單重新整理的預設行為
    e.preventDefault();
    console.log(num1.value);
    console.log(num2.value);
    console.log(num3.value);

    parseIntNum1 = parseInt(num1.value);
    console.log(parseIntNum1);
    parseFloNum2 = parseFloat(num2.value / 100);
    console.log(parseFloNum2);
    parseIntNum3 = parseInt(num3.value);
    console.log(parseIntNum3);

    let discount = 0 ;
    // if
    // console.log(typeof(option.value));

    if(parseIntNum1 >= 500){
        discount = parseIntNum1 * (1 -parseFloNum2);
    }
    if( parseIntNum1 * parseFloNum2 >=  200) {
        discount =  discount  + parseIntNum3  ;
    }
    
    console.log(discount);
            
           
    discount=Math.floor(discount);
    alert(discount);   
    total =  parseIntNum1 - discount; 
    alert(total);   

    resultOutput.innerText = "Result :省了" + discount;

    Alltotal.innerText = "總消費金額 :" + total;
    // switch end


    
});


