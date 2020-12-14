// external javascript file
var num1,num2;
function $(id)
{
    return document.getElementById(id);
}
function getValue(id)
{
    return $(id).value;
}
function isDigit(value)
{
    if (value!="" && isFinite(value)==true) 
        return true;
    else 
        return false;
}


function ValidateInput(e)
{
    var td = "td" + e.target.id;
    if(isDigit(getValue(e.target.id))==false)
        $(td).className ="error";
    else
        $(td).className ="noerror";
}
function getInput()
{

    num1 = parseInt(getValue("txtnum1"));
    num2 = parseInt(getValue("txtnum2"));
}
function add()
{
    getInput();
    if(isNaN(num1)==false && isNaN(num2)==false)
    {
        var result = num1 + num2;
        $("output").innerHTML = "result of addition is " + result;
    }
    
}
function sub()
{
    getInput();
    if(isNaN(num1)==false && isNaN(num2)==false)
    {
        var result = num1 - num2;
        $("output").innerHTML = "result of substraction is " + result;
    }
}
function mul()
{  
    getInput();
    if(isNaN(num1)==false && isNaN(num2)==false)
    {
        var result = num1 * num2;
        $("output").innerHTML = "result of multiplication is " + result;
    }
}
function div()
{
    getInput();
    if(isNaN(num1)==false && isNaN(num2)==false)
    {
        var result = num1 / num2;
        $("output").innerHTML = "result of multiplication is " + result;
    }
}
$("txtnum1").addEventListener("blur", (e)=>{
    ValidateInput(e);
 });
 
$("txtnum2").addEventListener("blur", (e)=>{
     ValidateInput(e);
 });