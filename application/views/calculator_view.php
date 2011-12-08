<!DOCTYPE html>
<html lang="en">
	<head>	
		<title> Calculator </title>
		<script type="text/javascript" src="http://localhost/kuliah05/jquery.js"> </script>
		<script>
		$(document).ready(function(){
			$("#bAdd").click(function(){
				$.ajax({
					type:"POST",
					url:'calculator/add/' + $('#tA').val() +'/' + //untuk mengambil dari textbox tA
							$('#tB').val() + '/',
					success: function(msg){
						$('#result').html(msg);
					}
				})
			});
		});
		</script>
	</head>
	<body>
		<p> A: <input type="text" id="tA"/></p>
		<p> B: <input type="text" id="tB"/></p>
		<p> <input type="submit" value="Add" id="bAdd"/>
			 <input type="submit" value="Substract" id="bSubstract" /></p>
		<div id="result"></div>

	</body>
</html>