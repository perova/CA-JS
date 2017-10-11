<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">	
<link rel="stylesheet" type="text/css" href="style.css">	
	<title>Order Form</title>
</head>
<body>
	<div class="container">
		<h1>JS Order</h1>
		
		<hr>
		<div class="form-check">
			<label class="form-check-label">
				<input  id="cb_veg" class="form-check-input" type="checkbox"> Rodyti tik vegetariskus
			</label>
		</div>
		<hr> 
		   
		<div class="row">
			<h1>Pirmi patiekalai</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="form-check">
				      <label class="form-check-label">
				        <input checked id="sriubos" class="form-check-input" type="checkbox"> Sriubos
				      </label>
				    </div>
				</div>
				<div class="row" id="div_sriubos">
				     <select class="form-control" id="sriubu_sarasas">
				     	<option veg="false">Zuvies</option>
				     	<option veg="true">Darzoviu</option>
				     	<option  veg="false">Jautienos</option>
				     	<option veg="false">Vistienos</option>
				     </select>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="form-check">
				      <label class="form-check-label">
				        <input checked id="salotos" class="form-check-input" type="checkbox"> Salotos
				      </label>
				    </div>
				</div>
				<div class="row" id="div_salotos">
				     <select class="form-control" id="salotu_sarasas">
				     	<option veg="true">Cezario</option>
				     	<option veg="true">Darzoviu</option>
				     	<option  veg="false">Jautienos</option>
				     	<option veg="false">Vistienos</option>
				     </select>
				</div>
			</div>
		</div>
		<div class="row">
			<h1>Antri Patiekalai</h1>
		</div>
		<div class="row">
			<div class="col-md-6">
				<h2>Sarasas</h2>
				<ul class="list-group">
				  <li veg="false" koser="true" halal="true" indian= "false" class="list-group-item">Jautiena</li>
				  <li veg="true" koser="true" halal="true" indian= "true" class="list-group-item">Darzoves</li>
				  <li veg="true" koser="true" halal="true" indian= "true" class="list-group-item">Troskinys</li>
				  <li veg="false" koser="false" halal="false" indian= "true" class="list-group-item">Kepsnys</li>
				  <li veg="false" koser="true" halal="true" indian= "true" class="list-group-item">Vistiena</li>
				  <li veg="false" koser="false" halal="false" indian= "true" class="list-group-item">Kiauliena</li>
				  <li veg="false" koser="true" halal="true" indian= "true" class="list-group-item">Antiena</li>
				  <li veg="false" koser="false" halal="true" indian= "true" class="list-group-item">Triusiena</li>
				</ul>
			</div>
			<div class="col-md-6">
				<h2>Tipai</h2>
				<div class="form-check">
				      <label class="form-check-label">
				        <input id="kosher" class="form-check-input" type="checkbox">Kosher
				        
				      </label>
				      <label class="form-check-label">
				        <input id="halal" class="form-check-input" type="checkbox">Halal
				        
				      </label>
				      <label class="form-check-label">
				        <input id="indian" class="form-check-input" type="checkbox">Indian
				        
				      </label>
				</div>
			</div>
		</div>

	</div>


<script src="script.js"></script>
</body>
</html>
