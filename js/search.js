/*$(document).ready(function(){


	$('#interest').click(function(){

		

	});

});
*/


function interest()
{

	var user_from = "<?php echo $_SESSION['username'] ?>";
	var user_to = "<?php echo $result['username'] ?>";
	var date = "<?php echo date('m-d-y') ?>";

	alert(user_from);
	  /*var req = new XMLHttpRequest();
	  req.open("GET","http://localhost/Vivah.com/interestSend.php?user_from="+user_from & "user_to="+user_to & "date=" +date,true);
	  req.send();
	  req.onreadystatechange=function()
	  	{
		   if(req.status==200 && req.readyState==4)
		   {
			    if((req.responseText)=="interest send")
				{
				 	alert("interest send!!");
				}
				else 
				{
				 	 alert("interest can't be send!!");
				}
		   
		  }
	 	}*/
}

