function validatename(){
	var fname=document.getElementById("fname").value;
	if(fname.length<4){
		document.getElementById("nameerror").innerHTML="Invalid name";
		return false;
	}
	else{
		document.getElementById("nameerror").innerHTML="Name is Valid";
		return true;
	}
}