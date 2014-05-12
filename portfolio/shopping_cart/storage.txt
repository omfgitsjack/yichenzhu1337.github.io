var xmlDoc;
var xmlCookies;

function loadXMLDoc(dname){

	if (window.XMLHttpRequest){
		xhttp=new XMLHttpRequest();
	}
	
	else{
		xhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xhttp.open("GET",dname,false);
	xhttp.send();
	return xhttp.responseXML;
}

function getCompany(){

	var companylist = new Array();
	var company;
	var exist;

	xmlDoc=loadXMLDoc("stock.xml");
	var x=xmlDoc.getElementsByTagName("item");
	
	for (i = 0;i < x.length; i++){
	  
	  company = x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue;
	  exist = 0;
	  
	  for (y = 0; y < companylist.length; y++){
		 
		 if (company == companylist[y]){
			exist = 1;
		 }
	}

	if (exist == 0)
		companylist.push(company);
	}
	 
	return companylist.sort();
} 

function getCategory(){

	var categorylist = new Array();
	var category;
	var exist;
	xmlDoc=loadXMLDoc("stock.xml");


	var x=xmlDoc.getElementsByTagName("item");
	for (i=0;i<x.length;i++){
	  
		category = x[i].getElementsByTagName("category")[0].childNodes[0].nodeValue;
		exist = 0;
		
		for (y = 0; y < categorylist.length; y++){
			if (category == categorylist[y]){
				exist = 1;
			}
		}

		if (exist == 0)
			categorylist.push(category);
	}
	
	return categorylist.sort();
}



function displayCompany(){

	var companylist = getCompany();
	document.write("<table border='1'>");

	for (i = 0; i < companylist.length; i++){ 
		document.write("<tr><td>");
		document.write("<a href=main.html?operation=showproduct&company="+escape(companylist[i])+ " >" +companylist[i]+ "</a>");
		document.write("</td></tr>");
	}
	
	document.write("</table>");
}

function displayCategory(){

	var categorylist = getCategory();
	document.write("<table border='1'>");

	for (i = 0; i < categorylist.length; i++){ 
		document.write("<tr><td>");
		document.write("<a href=main.html?operation=showcategoryproduct&category="+escape(categorylist[i])+ " >" +categorylist[i]+ "</a>");
		document.write("</td></tr>");
	}
	
	document.write("</table>");
}


function displayProduct(mycompany){

	var company,product;
	xmlDoc=loadXMLDoc("stock.xml");
	var sale;

	document.write("<table border='1'>");
	var x=xmlDoc.getElementsByTagName("item");
	for (i = 0; i < x.length; i++){ 
  
		if (i == 0)
			document.write("<tr><td align=center><font size=4 color=blue>Product</font></td><td align=center><font size=4 color=blue>Price</font></td><td align=center><font size=4 color=blue>Sale Price</font></td><td></td></tr>");
  
		company = x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue;
		
		if (mycompany == company){
			document.write("<tr><td>");
			product = x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue;
			document.write(product);
			document.write("</td><td align=right>");
			document.write(x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue);
			document.write("</td><td align=right>");
			sale = x[i].getElementsByTagName("ID")[0].getAttribute("onsale");

			if ( sale == "yes" )
				document.write("<font color=red>" +x[i].getElementsByTagName("sale")[0].childNodes[0].nodeValue+"</font>");
			else
				document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
				document.write("</td><td>");
				document.write("<a href=main.html?operation=addcart&company="+escape(company)+"&product="+escape(product)+ ">buy</a>");
				document.write("</td></tr>");
		}

	}
	
	document.write("</table>");
} 

function displayCategoryProduct(mycategory){

	var company,product,category;
	xmlDoc=loadXMLDoc("stock.xml");

	document.write("<table border='1'>");
	var x=xmlDoc.getElementsByTagName("item");
	
	for (i = 0; i < x.length; i++){ 
		if (i == 0)
			document.write("<tr><td align=center><font size=4 color=blue>Company</font></td><td align=center><font size=4 color=blue>Product</font></td><td align=center><font size=4 color=blue>Price</font></td><td align=center><font size=4 color=blue>Sale Price</font></td><td></td></tr>");
		category = x[i].getElementsByTagName("category")[0].childNodes[0].nodeValue;
		
		if (mycategory == category){
			company = x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue;
			document.write("<tr><td>");
			document.write("<font color=brown>" +company + "</font>");
			document.write("</td><td>");
			product = x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue;
			document.write(product);
			document.write("</td><td align=right>");
			document.write(x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue);
			document.write("</td><td align=right>");
			sale = x[i].getElementsByTagName("ID")[0].getAttribute("onsale");

			if ( sale == "yes" )
				document.write("<font color=red>" +x[i].getElementsByTagName("sale")[0].childNodes[0].nodeValue+"</font>");
				
			else
				document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
				
			document.write("</td><td>");
			document.write("<a href=main.html?operation=addcart&company="+escape(company)+"&product="+escape(product)+ ">buy</a>");
			document.write("</td></tr>");
		}

	}
	
	document.write("</table>");
} 

function displayAllProduct(){

	var company,product;
	xmlDoc=loadXMLDoc("stock.xml");
	var companylist = getCompany();
	document.write("<table border='1'>");

	for (y = 0; y < companylist.length; y++){
		if (y == 0)
			document.write("<tr><td align=center><font size=4 color=blue>Company</font></td><td align=center><font size=4 color=blue>Product</font></td><td align=center><font size=4 color=blue>Price</font></td><td align=center><font size=4 color=blue>Sale Price</font></td><td></td></tr>");  
			
		var x=xmlDoc.getElementsByTagName("item");
		
		for (i = 0; i < x.length; i++){
			company = x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue;
			
			if (companylist[y] == company){
				document.write("<tr><td>");
				document.write("<font color=brown>" +company + "</font>");
				document.write("</td><td>");
				product = x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue;
				document.write(product);
				document.write("</td><td align=right>");
				document.write(x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue);
				document.write("</td><td align=right>");
				sale = x[i].getElementsByTagName("ID")[0].getAttribute("onsale");

				if ( sale == "yes" )
					document.write("<font color=red>" +x[i].getElementsByTagName("sale")[0].childNodes[0].nodeValue+"</font>");
					
				else
					document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
		
				document.write("</td><td>");
				document.write("<a href=main.html?operation=addcart&company="+escape(company)+"&product="+escape(product)+ ">buy</a>");
				document.write("</td></tr>");
			}
		}
	}
	
	document.write("</table>");
} 

function displaySale(){

	var company,product;
	xmlDoc=loadXMLDoc("stock.xml");

	var companylist = getCompany();
	document.write("<table border='1'>");

	for (y = 0; y < companylist.length; y++){
		if (y == 0)
			document.write("<tr><td align=center><font size=4 color=blue>Company</font></td><td align=center><font size=4 color=blue>Product</font></td><td align=center><font size=4 color=blue>Price</font></td><td align=center><font size=4 color=blue>Sale Price</font></td><td></td></tr>");  
  
		var x=xmlDoc.getElementsByTagName("item");
		
		for (i = 0; i < x.length; i++){ 
			company = x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue;
			
			if (companylist[y] == company){
				sale = x[i].getElementsByTagName("ID")[0].getAttribute("onsale");
				if ( sale == "yes" ){    
					document.write("<tr><td>");
					document.write("<font color=brown>" +company + "</font>");
					document.write("</td><td>");
					product = x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue;
					document.write(product);
					document.write("</td><td align=right>");
					document.write(x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue);
					document.write("</td><td align=right>");
					document.write("<font color=red>" +x[i].getElementsByTagName("sale")[0].childNodes[0].nodeValue+"</font>");
 
					document.write("</td><td>");
					document.write("<a href=main.html?operation=addcart&company="+escape(company)+"&product="+escape(product)+ ">buy</a>");
					document.write("</td></tr>");
				}
			}
		}
	}
	
	document.write("</table>");
} 

function displaySearch(searchtext){

	var company,product;
	var patt1=new RegExp(searchtext,"i");
	xmlDoc=loadXMLDoc("stock.xml");
	var companylist = getCompany();
	document.write("<table border='1'>");

	for (y = 0; y < companylist.length; y++){
		if (y == 0)
			document.write("<tr><td align=center><font size=4 color=blue>Company</font></td><td align=center><font size=4 color=blue>Product</font></td><td align=center><font size=4 color=blue>Price</font></td><td align=center><font size=4 color=blue>Sale Price</font></td><td></td></tr>");  
		
		var x=xmlDoc.getElementsByTagName("item");
		
		for (i = 0; i < x.length; i++){ 
			company = x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue;
			
			if (companylist[y] == company){
    
				if ( patt1.test(x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue) || patt1.test(x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue)){
					document.write("<tr><td>");
					document.write("<font color=brown>" +company + "</font>");
					document.write("</td><td>");
					product = x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue;
					document.write(product);
					document.write("</td><td align=right>");
					document.write(x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue);
					document.write("</td><td align=right>");
					sale = x[i].getElementsByTagName("ID")[0].getAttribute("onsale");

					if ( sale == "yes" )
					document.write("<font color=red>" +x[i].getElementsByTagName("sale")[0].childNodes[0].nodeValue+"</font>");
        
					else
					document.write("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
        
					document.write("</td><td>");
					document.write("<a href=main.html?operation=addcart&company="+escape(company)+"&product="+escape(product)+ ">buy</a>");
					document.write("</td></tr>");
				}
			}
		}
	}
	
	document.write("</table>");
} 

function showcart(){

	var company,product;
	var flag = 0;
	var i,j,xx,yy,ARRcookies=document.cookie.split(";");
	xmlDoc=loadXMLDoc("stock.xml");

	document.write("<b> Your shopping cart: </b></br><br>");
	document.write("<table border='1'>");
	var x=xmlDoc.getElementsByTagName("item");

	for (j = 0; j < ARRcookies.length; j++){
		xx=ARRcookies[j].substr(0,ARRcookies[j].indexOf("="));
		yy=ARRcookies[j].substr(ARRcookies[j].indexOf("=")+1);
		xx=xx.replace(/^\s+|\s+$/g,"");
		yy=unescape(yy);

		for (i = 0; i < x.length; i++){
			company = x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue;
			product = x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue;
			
			if (xx= company && yy == product ){
				flag = 1;
				document.write("<tr><td>");
				document.write("<font color=brown>" +company + "</font>");
				document.write("</td><td>");
				document.write(product);
				document.write("</td><td align=right>");

				sale = x[i].getElementsByTagName("ID")[0].getAttribute("onsale");

			if ( sale == "yes" )
				document.write("<font color=red>" +x[i].getElementsByTagName("sale")[0].childNodes[0].nodeValue+"</font>");
				
			else	
				document.write(x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue);
				
			document.write("</td><td>");
			document.write("<a href=main.html?operation=delcart&company="+escape(company)+"&product="+escape(product)+ ">remove</a>");
			document.write("</td></tr>");
			}
		}
	}
	
	if  ( flag == 0 )
		document.write("<tr><td><font size=5 color=red >Cart is empty!</font></td></tr>");

	document.write("</table>");
} 

function displaycheckout(){

	var company,product,price;
	var i,j,xx,yy,ARRcookies=document.cookie.split(";");
	xmlDoc=loadXMLDoc("stock.xml");
	var sum = 0;

	document.write("<table border='1'>");
	var x=xmlDoc.getElementsByTagName("item");

	for (j = 0; j < ARRcookies.length; j++){
		xx=ARRcookies[j].substr(0,ARRcookies[j].indexOf("="));
		yy=ARRcookies[j].substr(ARRcookies[j].indexOf("=")+1);
		xx=xx.replace(/^\s+|\s+$/g,"");
		yy=unescape(yy);

		for (i = 0; i < x.length; i++){ 
			company = x[i].getElementsByTagName("company")[0].childNodes[0].nodeValue;
			product = x[i].getElementsByTagName("product")[0].childNodes[0].nodeValue;
		
			if (xx= company && yy == product){
				document.write("<tr><td>");
				document.write("<font color=brown>" +company + "</font>");
				document.write("</td><td>");  
				document.write(product);
				document.write("</td><td align=right>");
				sale = x[i].getElementsByTagName("ID")[0].getAttribute("onsale");

				if ( sale == "yes" )
					price = x[i].getElementsByTagName("sale")[0].childNodes[0].nodeValue;
				
				else
					price = x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue;
					
				document.write(price);
				document.write("</td></tr>");
				sum = sum + +(price.substring(1));
			}
		}
	}
	
	if ( sum != 0 ){
		document.write("<tr></tr>");
		document.write("<tr><td></td><td align=right>");
		document.write("Tax");
		document.write("</td><td align=right>");
		document.write((sum * 0.17).toFixed(2));
		document.write("</td></tr>");
		document.write("<tr></tr>");
		document.write("<tr><td></td><td align=right>");
		document.write("Total");
		document.write("</td><td align=right>");
		document.write((sum * 0.17 + sum).toFixed(2));
		document.write("</td></tr>");
		document.write("</table><br/><br/>");
		
		// Billing Info
		document.write("<form><fieldset>");
		document.write("<legend><b>Fill out below: </b></legend><br/>");
		document.write("<table>");
		document.write("<tr><td>");
		document.write("Name: "); //name field
		document.write("</td><td><input type=text name=name value='first, last'/></td></tr><tr><td>");
		document.write("Address: ");	//address field
		document.write("</td><td><input type=text name=address/></td></tr><tr><td>");
		document.write("Email: ");	//email field
		document.write("</td><td><input type=text name=email/></td></tr><tr><td>");
		document.write("Phone Number: ");	//phone number field
		document.write("</td><td><input type=text name=phone/></td></tr><tr><td>");
		document.write("ZIP/Postal Code: (Ex. A8A 8A8)");	//postal code field
		document.write("</td><td><input type=text name=ZIP/></td></tr><tr><td>");
		document.write("City: ");	//city field
		document.write("</td><td><input type=text name=city/></td></tr><tr><td>");
		document.write("Credit Card Number: ");	//credit card number field
		document.write("</td><td><input type=text name=number/></td></tr><tr><td>");
		document.write("Credit Card Expiry Date: "); //credit card expiry date field
		document.write("</td><td><input type=text name=date value='mm/dd/yyyy'/></td></tr><tr><td></td>");
		document.write("<td align=right><input type=submit name=submit value=Submit onclick=check(name.value, email.value, phone.value, ZIP.value, date.value)/></td");
		document.write("</table><br/>");
		document.write("</fieldset></form>");
	}
	
	else{
		document.write("<tr><td><font size=5 color=red >Cart is empty!</font></td></tr>");
		document.write("</table>");
	}
} 

// Checks format of user's billing info
function check(name, email, phone, ZIP, date){

	var nameTest = /[A-Za-z]\s[A-Za-z]/g;
	var emailTest = /[a-zA-Z0-9][@]hotmail\.com/g;
	var phoneTest = /\d{3}\D\d{3}\D\d{4}/g;
	var zipTest = /\w\d\w\s\d\w\d/g;
	var dateTest = /\d{2}\W\d{2}\W\d{4}/g;

	//Checks name
	if (nameTest.test(name) == false)
		alert("Enter a valid name");
	
	//Checks email
	if (emailTest.test(email) == false)
		alert("Enter a valid email address");
		
	//Checks phone number
	if (phone.length == 12){	
		if (phoneTest.test(phone) == false)
			alert("Enter a valid phone number");
	}
	
	else
		alert("Enter a valid phone number");
	
	//Checks postal code
	if (ZIP.length == 7){
		if (zipTest.test(ZIP) == false)	 
			alert("Enter a valid postal code");
	}
	
	else
		alert("Enter a valid postal code");
	
	//Checks card expiry date
	if (dateTest.test(date) == false)
		alert("Enter a valid date");
}

function deletecookie(company,product){

	var d = new Date();
	var i,x,y,ARRcookies=document.cookie.split(";");

	if ( company != null ){
		document.cookie = company +"="+escape(product)+";expires=" + d.toGMTString() + ";" + ";";
	}
	
	else{
		for (i = 0; i < ARRcookies.length; i++){
			x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
			y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
			x=x.replace(/^\s+|\s+$/g,"");
			document.cookie = x +"="+y+";expires=" + d.toGMTString() + ";" + ";";
		}
	}  
}


function getReqParam(name){

  var regexpstr = "[\\?&]"+escapeRegExp(name)+"=([^&#]*)";
  var arr = new RegExp(regexpstr).exec(window.location.href);
  
  if(arr == null) 
	return null;
	
  return arr[1];
}

function escapeRegExp(value) {
  return value.replace(/\\/g,"\\\\").replace(/\//g,"\\\/").replace(/\./g,"\\\.").replace(/\*/g,"\\\*").replace(/\+/g,"\\\+").replace(/\?/g,"\\\?").replace(/\|/g,"\\\|").replace(/\(/g,"\\\(").replace(/\)/g,"\\\)").replace(/\[/g,"\\\[").replace(/\]/g,"\\\]").replace(/\{/g,"\\\{").replace(/\}/g,"\\\}");
}

function setCookie(company_name,product){
 
	var c_value=escape(product); 
	document.cookie=company_name + "=" + c_value +";";
}

function getCookie(){

	var i,x,y,ARRcookies=document.cookie.split(";");
	if ( ARRcookies.length == 0 )
		document.write("no cookies available");
		
	for (i = 0; i < ARRcookies.length; i++){
		x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
		x=x.replace(/^\s+|\s+$/g,"");
		y=unescape(y);
		document.write(x+"|"+y);
	}
}

function menucontrol(){

	var operation =  getReqParam("operation");

	if ( operation == "showproduct" ){
		document.write("<b>Products from<font size= 5 color=green> " + unescape(getReqParam("company")) + "</font> Company</b></br><br>");
		displayProduct(unescape(getReqParam("company")));  
	}
	else if ( operation == "showcategory" ){
		document.write("<b> List of Categorys </b></br><br>");
		displayCategory();
	}
	
	else if ( operation == "showcategoryproduct" ){
		document.write("<b>Products from<font size= 5 color=green> " + unescape(getReqParam("category")) + "</font> Category</b></br><br>");
		displayCategoryProduct(unescape(getReqParam("category")));   
	}
	
	else if ( operation == "showsale" ){
		document.write("<b> On Sale Products </b></br><br>");
		displaySale();  
	}
	
	else if ( operation == "showallproduct" ){
		document.write("<b> List of All Products </b></br><br>");
		displayAllProduct();   
	}
	
	else if ( operation == "addcart" ){
		setCookie(unescape(getReqParam("company")),unescape(getReqParam("product")));
		showcart();    
	}
	
	else if ( operation == "delcart" ){
		deletecookie(getReqParam("company"),unescape(getReqParam("product")));
		showcart();
	}
	else if ( operation == "showcart" ){
		showcart();
	}

	else if ( operation == "search" ){
		document.write("<b> Product search result: </b></br><br>");
		displaySearch(getReqParam("searchtext").replace(/\+/g," "));
	}

	else if ( operation == "checkout" ){
		document.write("<b> Product checkout</b></br><br>");
		displaycheckout();
	}
	
	else{
		document.write("<b> Company listing:</b></br><br>");
		displayCompany();
	}
}