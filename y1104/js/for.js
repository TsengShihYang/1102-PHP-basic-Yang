const myArr = ['amy', 'bob', 'cat', 'dog'];

myArr.forEach(myFunc);
function myFunc(value,key){
    console.log(value);
    console.log(key);
}

const iphoneObj ={
    "iphone8" :1000,
    "iphone9" :2000,
    "iphone10" :3000,
    "iphone11" :4000,
}

console.log(iphoneObj);

for (const [key, value] of Object.entries(iphoneObj)){
    console.log(`${key}:${value}`);
}




// console.log(myArr[0]);
// console.log(myArr[1]);

// for (let i in myArr){
//     console.log("for in , i =" +i);
// }
// // myArr.pop();
// myArr.push('egg');
// console.log(myArr);
// console.log(myArr[4]);


// for (let index = 0; index < myArr.length; index++){
//     console.log(myArr[index]);
// }
// for (let i = 0; i < 10; i++) {
//     console.log("i=  " +i);
// }