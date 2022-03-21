// // console.log("Hello Word");
// // // alert("yo");
// // // prompt("yo yo");
// // document.write("THis is used to write ");
// // console.warn("this is used to print warning in cinsole");
// // console.error("this is used to print error in console");

// var a=14;
// if (a==14) {
//     // console.log("You are a kid");
// }

// if(a<12){
//     document.writeln("you are a chota bachha");
// }

// else {
//     document.writeln("You are not a chota bachha");
// }

// if(a==8){
//     document.writeln("you cannot drink rasna");
// }

// else if(a>10){
//     document.writeln("you can drink a rasna water");
// }

// var arr = [1,2,3,4,5,6,7,8];

// // for (var i = 0; i < arr.length; i++) {
// //     console.log(arr[i]);
    
// // }

// // arr.forEach(function(element){
// //     console.log(element);
// // })

// // let scope of let is inside the block/function
// // const is used to create constant variable you can not change the value of const

// let j=0;
// // while(j<arr.length){
// //     console.log(arr[j]);
// //     j++;
// // }

// // do{
// //     console.log(arr[j]);
// //     j++;

// // }while(j<arr.length);

// // for (var i = 0; i < arr.length; i++) {
// //     if(i==2){
// //         // break;
// //         continue;
// //     }
    
// //     console.log(arr[i]);
// // }

// let myDate = new Date();
//     console.log(myDate.getTime());
//     console.log(myDate.getFullYear());

// DOM Maniupulation

let elm =document.getElementById("click");
console.log(elm);

let elmClass= document.getElementsByClassName("container");
    console.log(elmClass);
// elmClass[0].style.background = "yellow";
elmClass[0].classList.add("bg-primary");

