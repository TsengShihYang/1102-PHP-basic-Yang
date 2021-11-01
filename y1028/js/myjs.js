function helloFun(){
    // console.log('helloFun test1');
    // console.log('helloFun test2');
    // console.log('helloFun test3');
    // window.document.body.innerHTML="Hello World !";
   
    let spanObj = window.document.getElementById("spanID");
     spanObj.innerHTML = "Hello";
     spanObj.style.color = "lightpink";

     let span2Obj = window.document.getElementById("spanID2");
     span2Obj.style.color = "#FF00FF";

     function toggleMenu(){
         console.log('toggleMenu');
         let menuObj = document.getElementById("menu");
         if(menuObj.style.display == "none"){
             menuObj.style.display="block";
         }else{

             menuObj.style.display="none";
         }
     }


}