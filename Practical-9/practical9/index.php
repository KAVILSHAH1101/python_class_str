<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">

		var tout=setTimeout(extend(),18000);
		function extend()
		{
			var ch=prompt("How time need to extend upto 3 min");
			if(ch)
		}
		function  validateuser(user)
		{
			// var user=document.getElementById("username").value;
			if(user.value.length < 6 )
			{
				document.getElementById("uerror").innerHTML="username not valid";
			}
			else
			{
				document.getElementById("uerror").innerHTML=" ";
			}
		}
		function validateEmail(email)
		{
			  var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
			if(reg.test(email.value) == false)
			{
				document.getElementById("eerror").innerHTML="Email not valid";

			}
			else
			{
				document.getElementById("eerror").innerHTML=" ";
			}
			
		}
		function validatepassword(pass)
		{
			var password=pass.value;
			 if (!(password.match(/[a-z]/g) && password.match(/[A-Z]/g) && password.match(/[0-9]/g) && password.match(/[^a-zA-Z\d]/g) && password.length >= 8 && password.length <= 12)) 
			 {
			 	document.getElementById("perror").innerHTML="password not valid";

			 }
			 else
			 {
			 	document.getElementById("perror").innerHTML=" ";
			 }
		}
		function validatedate(date)
		{
				if(!/^\d{1,2}\-\d{1,2}\-\d{4}$/.test(date.value))
				{
					document.getElementById("derror").innerHTML="DATE MUST IN dd-MM-YYYY "
				}
				else
				{
					document.getElementById("derror").innerHTML=" ";
				}
		}
	</script>
</head>
<body>
	username :  <input type="text" name="username" id="username" onblur="validateuser(this)"><span id="uerror"></span>
	<br>
	Email : <input type="text" name="email" id="email" onblur="validateEmail(this)"><span id="eerror"></span>
	<br>
	password : <input type="text" name="password" id="password" onblur="validatepassword(this)"><span id="perror"></span>
	<br>
	Date : <input type="text" name="date" id="date" onblur="validatedate(this)"><span id="derror"></span><br>
	<input type="submit" name="submit">

</body>
</html>