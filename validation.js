function cityvalidate()
{
	if(document.forms['details']['citylist'].value == "-1" || document.forms['details']['citylist'].value == "0")
	{
		var x;
		x = "Please select a valid city or the City you have selected is not supported yet.";
		document.getElementById("span3").innerHTML = x;
		document.forms['details']['citylist'].focus();
		return false;
	}
}// cityvalidate

function emailvalidate()
{
	if(document.forms['details']['email'].value != "")
	{
		var x = document.forms['details']['email'].value;
		var atpos = x.indexOf("@");
		var dotpos = x.lastIndexOf(".");
		if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) 
		{
			document.getElementById("span6").innerHTML = "Invalid Email Address";
			document.forms['details']['email'].focus();
			return false;
		}
	}
}// email validate

function numbervalidate(checknumber)
{
		var p = /^\(?([7-9]{1})\)?[-. ]?([0-9]{9})$/;
		if(checknumber.value.match(p))
		{
			return true;
		}
		else
		{
		document.getElementById("span5").innerHTML = "Wrong number added, please enter valid number.";
		document.forms['details']['number'].focus();
		return false;
		}
	if(checknumber.length < 10)
	{
		document.getElementById("span5").innerHTML = "A number must be of 10 digits!";
		document.forms['details']['number'].focus();
		return false;
	}
}//end number validate

function checkname(cname)
{
	var val = /^[a-z A-Z.]+$/;
	if(cname.value.match(val))
	{
		return true;
	}
	else
	{
		document.getElementById("span1").innerHTML = "Name must only consist of letters from a-z or A-Z.";
		document.forms['details']['fullname'].focus();
		return false;
	}
}

function pinvalidate(checkpin)
{
	var s = /^\(?([1]{1})\)?[-. ]?([0-9]{5})$/
	if(checkpin.value.match(s))
	{
		return true;
	}
	else
	{
		document.getElementById("span4").innerHTML = "Invalid Pin Code Entered.";
		document.forms['details']['pincode'].focus();
		return false;
	}
}



//javascript queries for payment page start below.
//both the 'DIV' and the 'SELECT' have to be hidden or visible together for any element.

function paymentmode()
{
	if(document.getElementById("payment_mode").value == 0)
	{
		alert("Please select a payment mode.");
		document.getElementById("bank_head").style.visibility = "hidden";
		document.getElementById("bank").style.visibility = "hidden";
		return true;
	}
	if(document.getElementById("payment_mode").value == "credit")
	{
		document.getElementById("bank_head").style.visibility = "visible";
		document.getElementById("bank").style.visibility = "visible";
		document.getElementById("card_details").style.visibility = "visible";
		document.getElementById("debit_pin").style.visibility = "hidden";
		document.getElementById("debit_pin").required = false;
		document.getElementById("payment").style.visibility = "visible";
		return true;
	}
	if(document.getElementById("payment_mode").value == "debit")
	{
		document.getElementById("bank_head").style.visibility = "visible";
		document.getElementById("bank").style.visibility = "visible";
		document.getElementById("card_details").style.visibility = "visible";
		document.getElementById("debit_pin").style.visibility = "visible";
		document.getElementById("debit_pin").required = true;
		document.getElementById("payment").style.visibility = "visible"
		return true;
	}
	if(document.getElementById("payment_mode").value == "cash")
	{
		document.getElementById("bank_head").style.visibility = "hidden";
		document.getElementById("bank").style.visibility = "hidden";
		document.getElementById("payment").style.visibility = "visible";
		document.getElementById("debit_pin").required = false;
		document.getElementById("payment_mode").required = false;
		document.getElementById("bank").required = false;
		document.getElementById("cardno").required = false;
		document.getElementById("card_month").required = false;
		document.getElementById("card_cvv").required = false;
		document.getElementById("debit_pin").required = false;
		document.getElementById("card_holder").required = false;
		return true;
	}
	if(document.getElementById("payment_mode").value == "-1")
	{
		alert("Net Banking Unavailable right now. Please choose another mode of payment.")
		document.getElementById("bank_head").style.visibility = "hidden";
		document.getElementById("bank").style.visibility = "hidden";
		document.getElementById("payment_mode").focus();
		return false;
	}
}

function banklist()
{
	if(document.getElementById("bank").value != null)
	{
		document.getElementById("card_details").style.visibility = "visible";
		document.getElementById("cardno").style.visibility = "visible";
		return true;
	}
}

//-----------------------------------------------VALIDATION FUNCTIONS BELOW!-----------------------------------------------------
//-----------------------------------------------VALIDATION FUNCTIONS BELOW!-----------------------------------------------------
function cardnumber()
{
	var x;
	x = document.getElementById("cardno").value;
	if(x.length < 13)
	{
		alert("Invalid card number!");
		document.getElementById("cardno").focus();
		return false;
		
	}
	else if(x.length >13 && x.length < 16)
	{
		alert("Invalid card number!");
		document.getElementById("cardno").focus();
		return false;
	}
	else if(x.length == 13 || x.length == 16)
	{
	  if(isNaN(x))
	  {
		  alert("Please enter a valid card number!");
		  document.getElementById("cardno").focus();
		  return false;
	  }
	}
}

function cardcvv()
{
	var x;
	x = document.getElementById("card_cvv").value;
	if(x.length < 3)
	{
		alert("CVV must contain 3 digits!");
		document.getElementById("card_cvv").focus();
		return false;
	}
	else
	{
		if(isNaN(x))
		{
			alert("Invalid CVV entered!");
			document.getElementById("card_cvv").focus();
			return false;
		}
	}
}

function debitpin()
{
	var x;
	x = document.getElementById("debit_pin").value;
	if(x.length < 4)
	{
		alert("ATM Pin invalid!");
		document.getElementById("debit_pin").focus();
		return false;
	}
	else
	{
		if(isNaN(x))
		{
			alert("ATM Pin must consist of digits!");
			document.getElementById("debit_pin").focus();
			return false;
		}
	}
}

function cardname()
{
	var x;
	x = document.getElementById("card_holder").value;
	if(isNaN(x) == false)
	{
		alert("Please enter a valid name!");
		document.getElementById("card_holder").focus();
		return false;
	}
	else
	{
		document.getElementById("payment").disabled = false;
		return true;
	}
}

function conditions()
{
	if(document.getElementById("conditions").value != 1)
	{
		alert("Please accept the Terms and Conditions!");
	}
}