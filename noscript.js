function func(){
		window.location = "?mkr=" +this.value;
		
}

function setHandlers(){
		//dopo selezione marca ricarica la pagina 
		//mette la marca nell'url per generare sel modelli corretto
		document.getElementById("sel").onchange = func;
}