<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">	
	
	<title>Order Form</title>
</head>
<body>
	<style type="text/css">
		#company {
			display: none;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Order Form</h1>
				<button onclick="pri()">Private</button>
				<button onclick="com()">Company</button>
		</div>
	</div>
		<div class="row" id="private">
			<div  class="col-md-6">
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">Name</label>
					<div class="col-10">
						<input class="form-control" type="text"  id="name">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-email-input" class="col-2 col-form-label">Email</label>
					<div class="col-10">
						<input class="form-control" type="email"  id="email">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">Address</label>
					<div class="col-10">
						<input class="form-control" type="text"  id="address">
					</div>
				</div>
			</div>

			<div  class="col-md-6">
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">Lastname</label>
					<div class="col-10">
						<input class="form-control" type="text"  id="lastname">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
					<div class="col-10">
						<input class="form-control" type="tel"  id="tel">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-number-input" class="col-2 col-form-label">Zip</label>
					<div class="col-10">
						<input class="form-control" type="text" id="zip">
					</div>
				</div>
			</div>
		</div>
		<div class="row" id="company">
			<div  class="col-md-6">
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">Name</label>
					<div class="col-10">
						<input class="form-control" type="text"  id="name">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">Company</label>
					<div class="col-10">
						<input class="form-control" type="text"  id="company1">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-email-input" class="col-2 col-form-label">Email</label>
					<div class="col-10">
						<input class="form-control" type="email"  id="email">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">Address</label>
					<div class="col-10">
						<input class="form-control" type="text"  id="address">
					</div>
				</div>
			</div>

			<div  class="col-md-6">
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">Lastname</label>
					<div class="col-10">
						<input class="form-control" type="text"  id="lastname">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-number-input" class="col-2 col-form-label">VAT</label>
					<div class="col-10">
						<input class="form-control" type="text"  id="vat">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
					<div class="col-10">
						<input class="form-control" type="tel"  id="tel">
					</div>
				</div>
				<div class="form-group row">
					<label for="example-number-input" class="col-2 col-form-label">Zip</label>
					<div class="col-10">
						<input class="form-control" type="number"  id="zip">
					</div>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>


	<script src="script.js"></script>
</body>
</html>

