 function print(Err)
{
    
    document.getElementById("Err").innerHTML = " ";
    document.getElementById("fname").style.borderColor="none";
}
function printlame(lnameErr)
{
    document.getElementById("lnameErr").innerHTML = " ";
    document.getElementById("lname").style.borderColor="none";
}
function printemail(emailErr)
{
    document.getElementById("emailErr").innerHTML = " ";
    document.getElementById("email").style.borderColor="none";
}
function printnumber(numberErr)
{
    document.getElementById("numberErr").innerHTML = " ";
    document.getElementById("number").style.borderColor="none";
}
function printcity(cityErr)
{
    document.getElementById("cityErr").innerHTML = " ";
    document.getElementById("city").style.borderColor="none";
}
function printcode(codeErr)
{
    document.getElementById("codeErr").innerHTML = " ";
    document.getElementById("code").style.borderColor="none";
}
function val(){
    var f_name =document.forms.reg.fname.value;
    var lname = document.forms.reg.lname.value;
    var email = document.forms.reg.email.value;
    var number = document.forms.reg.number.value;
    var city= document.forms.reg.city.value;
    var code= document.forms.reg.code.value;

    //regex for name
    var regfname =  /^[a-zA-Z ]{2,30}$/;
    var regemail =/^([a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,})$/;
    var regnumber=/^[0-9]+$/;
    var regcode=/^[0-9]{1,6}$/;

    if(f_name =="")
    {
        document.getElementById("Err").innerHTML=" Fname is Empty";
        document.getElementById("fname").style.borderColor = "red ";
        return false;
    }else if(regfname.test(f_name) == false){

        document.getElementById("Err").innerHTML=" Fname is Incorrect";
        document.getElementById("fname").style.borderColor = "red ";
        return false;
}
    if(lname=="")
    {
        document.getElementById("lnameErr").innerHTML="Lname is Empty";
        document.getElementById("lname").style.borderColor = "red ";
        return false;
    }
    else if(regfname.test(lname) == false )
    {
        document.getElementById("lnameErr").innerHTML="Error in Lname";
        document.getElementById("lname").style.borderColor = "red ";
        return false;
    }
    if(email=="" )
    {
        document.getElementById("emailErr").innerHTML=" email is empty ";
        document.getElementById("email").style.borderColor = "red ";
        return false;
    }
    else if(regemail.test(email)== false)
    {
        document.getElementById("emailErr").innerHTML="Error in email "; 
        document.getElementById("email").style.borderColor = "red ";
        return false;
    }
    if(number=="")
    {
        document.getElementById("numberErr").innerHTML=" number  is empty";
        document.getElementById("number").style.borderColor = "red ";
        return false;
    }
    else if(regnumber.test(number)== false)
    {
        document.getElementById("numberErr").innerHTML=" Error in empty";
        document.getElementById("number").style.borderColor = "red ";
        return false;
    }
    if(city=="")
    {
        document.getElementById("cityErr").innerHTML=" city is empty";
        document.getElementById("city").style.borderColor = "red ";
        return false;
    }
    if(code==""||regcode.test(code))
    {
        document.getElementById("codeErr").innerHTML="Error in code";
        document.getElementById("code").style.borderColor = "red ";
        return false;
    }
}
