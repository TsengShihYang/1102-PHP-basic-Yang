// form submit 
    //myForm 的submit click


// 宣告
const form = document.getElementById('myForm') ;
const Chi = document.getElementById("Chi");
const Eng = document.getElementById("Eng");
const Mat = document.getElementById("Mat");
const result = document.getElementById("result");
const Grade = document.getElementById("Grade");
const theEnd = document.getElementById("theEnd");

resetBn.addEventListener("click",function(e)
{
   Chi.value = 60;
   Eng.value = 60;
   Mat.value = 60;
});

form.addEventListener("submit",function(e){
    console.log(e);
    // 預防表單重新整理的預設行為
    e.preventDefault();

    
    console.log(typeof(Chi));
    console.log(Chi.value);
    console.log(Eng.value);
    console.log(Mat.value);
    const parseIntChi = parseInt(Chi.value);
    const parseIntEng = parseInt(Eng.value);
    const parseIntMat = parseInt(Mat.value);
    
    // console.log(typeof(option.value));
    let average = (parseIntChi + parseIntEng + parseIntMat ) / 3;
    average = Math.round(average * 100) / 100;
    
    
    alert(average);     
    result.innerText = "平均分數:" + average;
    let sum = parseIntChi +  parseIntEng + parseIntMat;
    //level
    let level;
    let color = "info";
    if( average >= 90) {
        level = "等級: A" ; 
        color = "success"; 
    }
    else if( average >= 80) {
        level = "等級: B" ; 
        color = "success";   
    } 
    else if( average >= 70) {
        level = "等級: C" ; 
        color = "success";   
    }
    else if( average >= 60) {
        level = "等級: D" ; 
        color = "success";   
    }
    else{
        level = "等級: E" ; 
        color = "danger"; 
    }

    console.log("level",level);
    console.log("color",color);
    Grade.innerText = level;

    const finallist =
    `<h3 class="text-${color}" id="theEnd">
    國文:${parseIntChi} <br>
    英文:${parseIntEng} <br>
    數學:${parseIntMat} <br>
    總分:${sum} <br>
    平均分數:${average} <br>
    ${level} <br>  
    </h3>`

    theEnd.innerHTML = finallist;

});

// Grade.innerText = "等級: D" ;  

