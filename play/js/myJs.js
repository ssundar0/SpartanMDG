function validate(){
	   
	   //--------REGISTRATION-------------   
	 var n=document.reg.name.value;
	 var email=document.reg.email.value;
         var mob=document.reg.mobile.value;
	 var un=document.reg.username.value;
	 var pass=document.reg.pass.value;
	 var repass=document.reg.repass.value;
	 var emailtest=/^([a-zA-Z0-9+\.{1}])+\@(([a-zA-Z0-9])+\.)+[a-zA-Z0-9]{2,3}$/;
	 var cn = document.reg.collegename.value;
	 
	 if(n==""){
		 alert("Enter your Name");
		 document.reg.name.focus();
		 return false;
	    }
		
		if (n!="" &&  n.length< 3) 
         {
            alert("Your Name must be at least 3 characters Long.");
            return false;
			
         }
      
        if (n!="" &&  (n.search(/[\!\@\#\$\%\^\&\*\-\=\+\(\)\/\.\,\<\>\?\"\:\;\|\\{\}\[\]\-\_0-9]/)!=-1 )) 
         {
            alert("Your Name is not valid");
            document.reg.name.focus();
	        return false;
			
         }	
		 
         if(email==""){
		 alert("Enter Email..");
		 document.reg.email.focus();
		 return false;
	 }
	 
	 if(email!="" && (!email.match(emailtest))){
		 alert("Please enter correct email ID");
		 document.reg.email.focus();
		  return false;
		 
	 }
	 
	 if(mob!="" && (isNaN(mob))){
	     alert("Enter Correct Mobile number.");
		 document.reg.mobile.value="";
		 document.reg.mobile.focus();
         return false;	
	 }
	 
	 if(un==""){
		 alert("Enter Your username");
		 document.reg.username.value="";
		 document.reg.username.focus();
		 return false;
	 }
	 
        if(un!="" && un.length<3){
		 alert("Your username is very small");
		 document.reg.pass.focus();
		 return false;
	 }
	 
	 if(un!="" &&  (un.search(/[\!\@\#\$\%\^\&\*\-\=\+\(\)\/\.\,\<\>\?\"\:\;\|\\{\}\[\]\-]/)!=-1 ))  {
		 alert("Your username should not contain any symbol");
		 document.reg.username.focus();
		 return false;
	 }
	 
	 

	 if(pass==""){
		 alert("Enter Your Password");
		 document.reg.repass.value="";
		 document.reg.pass.focus();
		 return false;
	 }
	 
	 if(pass!="" && pass.length<3){
		 alert("Your Password is very small");
		 document.reg.pass.focus();
		 return false;
	 }
	 
	 if(pass !="" && pass.search(/[a-zA-Z]/)==-1){
		alert("Your Password doesn't have any letter.");
		 document.reg.pass.value="";
		 document.reg.repass.value="";
		 document.reg.pass.focus();
		 return false;
		 
	 }
	 
	 if(pass !="" && pass.search(/[0-9]/)==-1){
		 alert("Your Password doesn't have any Number Digit.");
		 document.reg.pass.value="";
		 document.reg.repass.value="";
		 document.reg.pass.focus();
		 return false;
	 }
	 
        if(repass==""){
	     alert("Re-enter your Password..");
		 document.reg.repass.focus();
         return(false);	
	 }
	 
	 if(repass!="" && repass!=pass){
	     alert("Password doesn't match");
		 document.reg.repass.value="";
		 document.reg.repass.focus();
         return(false);	
	 }
	 
	 if(cn==""){
		 alert("Enter your College Name");
		 document.reg.collegename.focus();
		 return false;
	 }

}