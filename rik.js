header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');


let http = new XMLHttpRequest();

http.open('get','products.json',true);

http.send();

http.onload = function(){
	if(this.readystate == 4 && this.status == 200){
		let products = JSON.parse(this.responseText);

		let output = "";

		for(let item of products){
			output += ` 
			    <div class="product">
                   <p class="title">${item.title}</p>
                   <p class="description">${item.description}</p>
			    </div>

			`;
			
		}

		document.querySelector(".products").innerHTML = output;
	}
}