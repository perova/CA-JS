cb_veg = document.getElementById('cb_veg');

cb_sriubos = document.getElementById('sriubos');

div_sriubos = document.getElementById('div_sriubos');

cb_salotos = document.getElementById('salotos');

div_salotos = document.getElementById('div_salotos');
var sriubu_sarasas = document.getElementById('sriubu_sarasas').options;
var salotu_sarasas = document.getElementById('salotu_sarasas').options;


cb_veg.addEventListener("change",function(){

if (cb_veg.checked) {
	//rodyti

	for(var i=0; i < sriubu_sarasas.length; i++){
			
			if(sriubu_sarasas[i].getAttribute("veg") == "false"){


				if(sriubu_sarasas.selectedIndex == i){

	alert("turite nevegetarisku patiekalu");

}

				sriubu_sarasas[i].style.display = 'none';
			}else{ 
				var selected = false;
				if(!selected){ 
				sriubu_sarasas[i].setAttribute("selected","true");
				selected=true;}

	}
}
	
} else{
	//nerodyti
	for(var i=0; i < sriubu_sarasas.length; i++){
			
				sriubu_sarasas[i].style.display = 'block';

	}

	
}


})






cb_sriubos.addEventListener("change",function(){

if (cb_sriubos.checked) {
	//rodyti
	div_sriubos.style.display = 'block';
} else{
	//nerodyti
	div_sriubos.style.display = 'none';
}



})



cb_veg.addEventListener("change",function(){

if (cb_veg.checked) {
	//rodyti

	for(var i=0; i < salotu_sarasas.length; i++){
			
			if(salotu_sarasas[i].getAttribute("veg") == "false"){


				if(salotu_sarasas.selectedIndex == i){

	alert("turite nevegetarisku patiekalu");

}

				salotu_sarasas[i].style.display = 'none';
			}else{ 
				var selected = false;
				if(!selected){ 
				salotu_sarasas[i].setAttribute("selected","true");
				selected=true;}

	}
}
	
} else{
	//nerodyti
	for(var i=0; i < salotu_sarasas.length; i++){
			
				salotu_sarasas[i].style.display = 'block';

	}

	
}


})








cb_salotos.addEventListener("change",function(){

if (cb_salotos.checked) {
	//rodyti
	div_salotos.style.display = 'block';
} else{
	//nerodyti
	div_salotos.style.display = 'none';
}



})
