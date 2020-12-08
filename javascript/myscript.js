// external javascript file
var num1,num2;
function getInput()
{
    num1 = parseInt(getValue("txtnum1"));
    num2 = parseInt(getValue("txtnum2"));
}
function $(id)
{
    return document.getElementById(id);
}
function getValue(id)
{
    return $(id).value;
}
function add()
{
    getInput();
    var result = num1 + num2;
    $("output").innerHTML = "result of addition is " + result;
}
function sub()
{
    getInput();
    var result = num1 - num2;
    $("output").innerHTML = "result of substraction is " + result;
}
function mul()
{  
    getInput();
    var result = num1 * num2;
    $("output").innerHTML = "result of multiplication is " + result;
}
function div()
{
    getInput();
    var result = num1 / num2;
    $("output").innerHTML = "result of division is " + result;
}