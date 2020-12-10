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
function isDigit(value)
{
    const regex = new RegExp(/[^0-9]/,'g');
    value = String(value);
    if (value!='' && value.match(regex)) 
        return false;
    else 
        return true;
}
function add()
{
    getInput();
    if(isDigit(num1)==true && isDigit(num2)==true)
    {
        var result = num1 + num2;
        $("output").innerHTML = "result of addition is " + result;
    }
    else
    {
        alert("input(s) invalid");
    }
}
function sub()
{
    getInput();
    if(isDigit(num1)==true && isDigit(num2)==true)
    {
        var result = num1 - num2;
        $("output").innerHTML = "result of substraction is " + result;
    }
    else
    {
        alert("input(s) invalid");
    }
}
function mul()
{  
    getInput();
    if(isDigit(num1)==true && isDigit(num2)==true)
    {
        var result = num1 * num2;
        $("output").innerHTML = "result of multiplication is " + result;
    }
    else
    {
        alert("input(s) invalid");
    }
}
function div()
{
    getInput();
    if(isDigit(num1)==true && isDigit(num2)==true)
    {
        var result = num1 / num2;
        $("output").innerHTML = "result of multiplication is " + result;
    }
    else
    {
        alert("input(s) invalid");
    }
}