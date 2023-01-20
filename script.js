function verif() {
	var email = login.email.value;
	var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
 	if (expressionReguliere.test(email)==false) {
		document.getElementById("outputDiv").innerHTML = "Invalid Email";
		return false ;
	}
	
}

function test_sign(){
	var email = sign.email.value;
	var expressionReguliere = /^(([^<>()[]\.,;:s@]+(.[^<>()[]\.,;:s@]+)*)|(.+))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
 	if (expressionReguliere.test(email)==false) {
		document.getElementById("emailvf").innerHTML = "Invalid Email ! <br>";
		return false ;
	}


	var pass = sign.password.value; 
	var passr = sign.passwordretyp.value;
	if (pass != passr) {
		document.getElementById("outputDivpass").innerHTML = "Password Not match !";
		return false;
	}
}
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("open").style.display = "none";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("open").style.display = "block";
  document.getElementById("sub").style.display ="block";
} 
function copy() {
  var copyText = document.getElementById("url");

  copyText.select();
  copyText.setSelectionRange(0, 99999);

  document.execCommand("copy");

 document.getElementById("outtextcopied").innerHTML = "<br>Link Copied !";
} 

