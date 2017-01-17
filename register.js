function validate(){
if(document.forms["reg_form"]["btype"].value=="Select"){
alert("please select blood type");
return false;
}
if(document.forms["reg_form"]["rhtype"].value=="Select"){
alert("please select Rh type");
return false;
}
if(document.forms["reg_form"]["payment"].value=="OnPayment"){
	if(document.forms["reg_form"]["price"].value=="")
alert("please Enter price for your blood bottle");
return false;
}

}