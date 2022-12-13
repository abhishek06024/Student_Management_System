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

let elm = document.getElementById("click");
console.log(elm);

let elmClass = document.getElementsByClassName("container");
console.log(elmClass);
// elmClass[0].style.background = "yellow";
elmClass[0].classList.add("bg-primary");


let x = 1;
function migrat() {

    var select = document.getElementById('status');
    var value = select.options[select.selectedIndex].value;
    var update = document.getElementById('mtm');
    var det = document.getElementById('dtm');
    //    console.log(value);           

    // var opt = 'Migrated';
    // if ($('#sel option:contains('+ opt +')').length) {
    //    alert('This option exists')
    // }
    if (x > 1) {
        return;
    }
    else {
        if (value == "Migrated") {

            update.setAttribute("selected", "");
            // console.log(update);
            document.getElementById("stat").innerHTML +=
                " <div class='form-group'><input type='text' name='migrt' placeholder='Student migrated to' required>";
            document.getElementById("stat").innerHTML += " <input type='date' name='mdate'> </div>";
            x++;
        }
        else if (value == "Detained") {

            det.setAttribute("selected","");
            // console.log(update);
          document.getElementById("stat").innerHTML += "<div> <input type='date' name='ddate'> </div>";
            x++;
        }

    }

}
let y = 1;
function edtmgr() {

    var select = document.getElementById('status');
    var value = select.options[select.selectedIndex].value;
    var update = document.getElementById('m');
    var det = document.getElementById('dt');
    var stdet = document.getElementById('st');
    //    console.log(value);           

   
    if (y > 1) {
        return;
    }
    else {

    
        if (value == "Migrated") {

            // console.log(update);
            // if(document.getElementById("st") != null)
            
                update.setAttribute("selected", "");
                document.getElementById("st").innerHTML += " <div class='form-group'><input type='text' name='migrt' placeholder='Student migrated to' required>";
            
                document.getElementById("st").innerHTML += " <input type='date' name='mdate'> </div>";
               y++;
        }

        else if (value == "Detained") {

            det.setAttribute("selected","");
            // console.log(update);
            if(document.getElementById("st") != null){
            document.getElementById("st").innerHTML += "<div> <input type='date' name='mdate'> </div>";
            y++;
            }
        }

        else if (value == "Stuck off") {

            stdet.setAttribute("selected","");
            // console.log(update);
            if(document.getElementById("st") != null){
            document.getElementById("st").innerHTML += "<div> <input type='date' name='sdate'> </div>";
            a++;
            }
        }
    }


}

let z = 1;
function chedit2() {

    var select = document.getElementById('status');
    var value = select.options[select.selectedIndex].value;
    var update = document.getElementById('m2');
    var det = document.getElementById('dt2');
    var stdet = document.getElementById('st2');
    //    console.log(value);           

   
    if (z > 1) {
        return;
    }
    else {

        if (value == "Migrated") {

            // console.log(update);
            // if(document.getElementById("st") != null)
            
                update.setAttribute("selected", "");
                document.getElementById("st").innerHTML += " <div class='form-group'><input type='text' name='migrt' placeholder='Student migrated to' required>";
            
                document.getElementById("st").innerHTML += " <input type='date' name='mdate'> </div>";
               z++;
        }

        else if (value == "Detained") {

            det.setAttribute("selected","");
            // console.log(update);
            if(document.getElementById("st") != null){
            document.getElementById("st").innerHTML += "<div> <input type='date' name='mdate'> </div>";
            z++;
            }
        }

        else if (value == "Stuck off") {

            // stdet.setAttribute("selected","");
            // console.log(update);
            if(document.getElementById("st") != null){
            document.getElementById("st").innerHTML += "<div> <input type='date' name='sdate'> </div>";
            a++;
            }
        }
    

    }

}


let a = 1;
function chedit3() {

    var select = document.getElementById('status');
    var value = select.options[select.selectedIndex].value;
    var update = document.getElementById('m3');
    var det = document.getElementById('dt3');
    var stdet = document.getElementById('st3');
    //    console.log(value);           

   
    if (a > 1) {
        return;
    }
    else {

        if (value == "Migrated") {

            // console.log(update);
            // if(document.getElementById("st") != null)
            
                update.setAttribute("selected", "");
                // if(document.getElementById("st") != null){
                document.getElementById("st").innerHTML += " <div class='form-group'><input type='text' name='migrt' placeholder='Student migrated to' required>";
                
                document.getElementById("st").innerHTML += " <input type='date' name='mdate'> </div>";
               a++;
        }

        else if (value == "Detained") {

            det.setAttribute("selected","");
            // console.log(update);
            if(document.getElementById("st") != null){
            document.getElementById("st").innerHTML += "<div> <input type='date' name='mdate'> </div>";
            a++;
            }
        }
        else if (value == "Stuck off") {

            stdet.setAttribute("selected","");
            // console.log(update);
            if(document.getElementById("st") != null){
            document.getElementById("st").innerHTML += "<div> <input type='date' name='sdate'> </div>";
            a++;
            }
        }
    

    }

}