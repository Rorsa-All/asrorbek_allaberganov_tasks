// A simple function that triggers alert box
function hello() {
    alert("Welcome to my website");
}

//a simple function to add 2 numbers
function add() {
    document.write(5 + 6);
}
//document.getElementById(id)
//display or like echo
//document.write
//windows.alert
//innerHTML
//console.log



//funcyion to change the background color of the page
// function changeColor(where, newColor){
//       if (where == "background"){
//         document.body.style.backgroundColor = newColor;
//       }
// }
function changeColor() {
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;
}

function changeFColor() {
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}


function crud() {
    let fname = (document.form1.fname.value).trim();
    if (fname.length < 5) {
        alert("First Name must have atleast 5 character");
        return false;
    }
    let lname = (document.form1.lname.value).trim();
    if (lname.length < 5) {
        alert("Last Name must have atleast 5 character");
        return false;
    }
}
function fname() {

    let fname = (document.form1.fname.value).trim();
    if (fname.length < 5) {
        alert("First Name must have atleast 5 character");
        return false;
    }
}