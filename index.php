<!doctype html>
<html lang="en">
	<head>
    	<meta charset="UTF-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    	<title>Activity: PHP Forms</title>
    	<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
    	/>
	</head>
	
	<body class="bg-light">
    	<div class="container">
    		<div class="row center p-5 h-100">
        		<form action="profile.php" method="POST">
        			<div class="mb-3">
            			<label for="username" class="form-label">Username</label>
            			<input type="text" name="username" required/>
    				<div class="mb-3">
            			<label for="jobTitle" class="form-label">Job Title</label>
            			<input type="text" name="jobTitle" required/>
        			</div>
					<div class="mb-3">
            			<label for="favProgLang" class="form-label">Favorite Programming Language</label>
            			<input type="text" name="favProgLang" required/>
        			<div class="mb-3">
        				<button class="btn btn-primary" type="submit">
            			Submit
    					</button>
        			</div>
        		</form>
    		</div>
    	</div>
	</body>
</html>
