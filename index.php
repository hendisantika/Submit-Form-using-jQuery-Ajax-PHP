<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Submit PHP Forms without Page Refresh using jQuery and Ajax</title>
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
{	
	/*
	
	using $.post() function
	
	$(document).on('submit', '#reg-form', function()
	{		
		$.post('submit.php', $(this).serialize())
		.done(function(data)
		{
			$("#reg-form").fadeOut('slow', function()
			{
				$(".result").fadeIn('slow', function()
				{
					$(".result").html(data);	
				});
			});
		})
		.fail(function()
		{
			alert('fail to submit the data');
		});
		return false;
	});	
	
	using $.post() function
	
	*/
	
	$(document).on('submit', '#reg-form', function()
	{
		
		//var fn = $("#fname").val();
		//var ln = $("#lname").val();
	
		//var data = 'fname='+fn+'&lname='+ln;
		
		var data = $(this).serialize();
		
		
		$.ajax({
		
		type : 'POST',
		url  : 'submit.php',
		data : data,
		success :  function(data)
				   {						
						$("#reg-form").fadeOut(500).hide(function()
						{
							$(".result").fadeIn(500).show(function()
							{
								$(".result").html(data);
							});
						});
						
				   }
		});
		return false;
	});
});
</script>
<style type="text/css">
*{margin:0;padding:0;}
#container
{
	margin:50px auto;
	padding:15px;
	border:solid #cdcdcd 1px;
	width:500px;
	height:320px;
	background:#f9f9f9;
}
table,td
{
	width:100%;
	border-collapse:collapse;
	padding:10px;
}
input
{
	width:100%;
	height:35px;
	text-align:center;
	border:solid #cddcdc 2px;
	font-family:Verdana, Geneva, sans-serif;
	border-radius:3px;
}
button
{
	text-align:center;
	width:50%;
	height:35px;
	border:0;
	font-family:Verdana, Geneva, sans-serif;
	border-radius:3px;
	background:#00a2d1;
	color:#fff;
	font-weight:bolder;
	font-size:18px;
}
hr
{
	border:solid #cecece 1px;
}
#header
{
	width:100%;
	height:50px;
	background:#00a2d1;
	text-align:center;
}
#header label
{
	font-family:Verdana, Geneva, sans-serif;
	font-size:35px;
	color:#f9f9f9;
}
a{
	color:#00a2d1;
	text-decoration:none;
}
</style>
</head>

<body>

<div id="header">
	<label>cleartuts - Programming Blog</label>
</div>
<br /><br />
<center><a href="http://cleartuts.blogspot.com/2015/06/submit-php-form-without-page-refresh-jquery-ajax.html">tutorial link</a></center>

<div id="container">
	<div id="form" class="result">
    	<form method="post" id="reg-form">
        <table border="0">
        <tr>
        <td><input type="text" name="fname" id="lname" placeholder="First Name" /></td>
        </tr>
        
        <tr>
        <td><input type="text" name="lname" id="lname" placeholder="Last Name" /></td>
        </tr>
        
        <tr>
        <td><input type="text" name="email" id="email" placeholder="Your Mail" /></td>
        </tr>
        
        <tr>
        <td><input type="text" name="phno" id="phno" placeholder="Contact No" /></td>
        </tr>
        
        <tr>
        <td><hr /></td>
        </tr>
        
        <tr>
        <td align="center"><button type="submit">Register</button></td>
        </tr>
        </table>
        </form>
    </div>
</div>

</body>

</html>