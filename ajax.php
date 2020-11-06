<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Bootstrap 4 Example</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
	</head>
	<body>

		<div class="container">
			<form class="p_MyForm">
				<input type="hidden" name="action" value="fullname">
				<div class="form-group">
					<label for="fname">Full name</label>
					<input type="text" name="fname" class="form-control" placeholder="Enter fname" id="fname">
				</div>
				
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>

		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<script>
			jQuery(function($){
				
				$('.p_MyForm').submit(function(e){
					e.preventDefault();
					//console.log(result);
					//alert('ok');
					var d = $(this).serialize();
					
					$.ajax({
						//property:value
						url:'http://localhost/ajax_name/login.php',
						data:d,
						
						//method
						success:function(result,status,xhr){
							//console.log(result);
							result = JSON.parse(result);
							console.log(result);
							//alert(result.msg);
							
							if(result.status == 200){
								alert(result.msg);
							}
						}
					
					});
				});
				
			});
		</script>
	</body>
</html>