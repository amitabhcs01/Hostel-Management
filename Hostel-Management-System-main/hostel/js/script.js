//calculating total fees from months
document.getElementById("duration").addEventListener("change",function(){
	var v=document.getElementById("duration").options[document.getElementById("duration").selectedIndex].value;
	document.getElementById("ta").value=v*3000;
});
//student registration form validation
function validate_registration()
{
	var name = /^[a-zA-Z\W]*$/;
	var contact = /^\d{10}$/;
	var emailid = /^([\S]+)@gmail.com$/i;
	var fname = document.registration.fname.value;
	if(!fname.match(name))
	{
		alert("Please enter valid First Name..!");
		document.registration.fname.focus();
		return false;
	}
	var mname = document.registration.mname.value;
	if(!mname.match(name))
	{
		alert("Please enter valid Middle Name..!");
		document.registration.mname.focus();
		return false;
	}
	var lname = document.registration.lname.value;
	if(!lname.match(name))
	{
		alert("Please enter valid Last Name..!");
		document.registration.lname.focus();
		return false;
	}
	var no = document.registration.contact.value;
	if(!no.match(contact))
	{
		alert("Please enter valid mobile number..!");
		document.registration.contact.focus();
		return false;
	}
	var email = document.registration.email.value;
	if(!email.match(emailid))
	{
		alert("Please enter valid Email Address..!");
		document.registration.email.focus();
		return false;
	}
	if(document.registration.password.value!= document.registration.cpassword.value)
	{
	alert("Password and Re-Type Password Field do not match  !!");
	document.registration.cpassword.focus();
	return false;
	}
	return true;
}