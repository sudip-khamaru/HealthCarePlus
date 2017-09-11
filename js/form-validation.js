function validation1(){
    if($("#name").val()=="")
    {
        alert("Please Enter Your Mobile No or Email Id");
        document.getElementById("name").focus();
        return false;
    }
     if($("#pass").val()=="")
    {
        alert("Please Enter Your Password");
        document.getElementById("pass").focus();
        return false;
    }

}
function mobile_check()
{

        var numbers=/^[0-9]+$/; 
	    if($("#mob").val().match(numbers))
        {
            return true;
        }
        else
        {
                 alert("Please Enter a Valid Mobile Number");
                 document.getElementById("mob").value='';
                 document.getElementById("mob").focus();
        }

}
function validation2(){
    if($("#reg").val()=="")
    {
        alert("Please Enter Your University Registration No");
        document.getElementById("reg").focus();
        return false;
    }

    if($("#mob").val()=="" || $("#mob").val().length<10 )
    {
       
            alert("Please Enter a Valid Mobile Number");
            document.getElementById("mob").focus();
            return false;
        
    }

    if($("#email").val()=="")
    {
        alert("Please Enter Your Email Id");
        document.getElementById("email").focus();
        return false;
    }
    
    if($("#pass2").val()=="")
    {
        alert("Please Enter Your New Password");
        document.getElementById("pass2").focus();
        return false;
    }

     if($("#cap").val()=="")
    {
        alert("Please Enter Proper security Code");
        document.getElementById("cap").focus();
        return false;
    }

}