<!DOCTYPE html>
<html>
	<head>
		<meta charset="iso-8859-7">
	<meta name="description" content="Εργασία εξαμήνου">
	<meta name="keywords" content="HTML-PHP">
	<meta name="author" content="Konstantinos Chatzikokolakis">
	<meta http-equiv="refresh" content="30">
	<!- αφορά την εισαγωγή εξωτερικού αρχείου css -->
<style>
ul#menu li{ display:inline;}
</style>

 <link rel="stylesheet" type="text/css" href="style1.css"/>
 
 
		<title>Κρατήσεις</title> 
		 <script>
			function validateForm() {
			var prcPERind=0;
			var monoklfee=5;
			var diklfee=10;
			var triklfee=15;
			var finalprice=0;
			var y = document.forms["Book"]["hotel"].value;
				if (y==1 || y==2 || y==5){
					prcPERind=40;
				}else if (y==3 || y==6 || y==7){
					prcPERind=30;
				}else{
					prcPERind=50;
				}
			var z = document.forms["Book"]["indv"].value;
			var a = document.forms["Book"]["monokl"].value;
			var b = document.forms["Book"]["dikl"].value;
			var c = document.forms["Book"]["trikl"].value;
			var z1 = parseInt("z")
			var a1 = parseInt("a")
			var b1 = parseInt ("b")
			var c1 = parseInt("c")
			var yearbe = document.forms["Book"]["yfrom"].value;
			var mobe =	document.forms["Book"]["mfrom"].value;
			var daybe = document.forms["Book"]["dfrom"].value;
			var yearaf = document.forms["Book"]["yto"].value;
			var moaf = document.forms["Book"]["mto"].value;
			var dayaf = document.forms["Book"]["dto"].value;
			if (yearaf<yearbe || (yearaf==yearbe && moaf<mobe) || (yearaf==yearbe && moaf==mobe && dayaf<daybe)){
				alert("Δείτε ξανά τις ημερομηνίες");
				return false;
			}
			if (z1 =! a1+b1*2+c1*3 ){
				alert("Τα δωμάτια με τα άτομα δεν συμπίπτουν");
				return false;
			
			}
			var oneDay = 24*60*60*1000; // hours*minutes*seconds*milliseconds
			var firstDate = new Date(yearbe,mobe,daybe);
			var secondDate = new Date(yearto,moaf,dayaf);
			var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));
			var x = document.forms["Book"]["credit"].value;
				if (isNaN(x) == true ||( x > "9999999999999999" && x < "1000000000000000")) {
					alert("Δεν πληκτρολογήσατε σωστά τον αριθμό της πιστωτικής σας");
					return false;
				}
			}
			finalprice = ((prcPERind*z)+(a*monoklfee)+(b*diklfee)+(c*triklfee))*diffDays;
		</script>
		
	</head>
	<body>
		
	<header>
		<ul id="menu">
			<li><a href="ergasia_eksaminou.php">Κεντρική σελίδα</a></li>
			<li><a href="aksiotheata.php">Αξιοθέατα</a></li>
			<li><a href="estiatoria.php">Εστιατόρια</a></li>
			<li><a href="mouseia.php">Μουσεία</a></li>
			<li><a href="istoria.php">Ιστορία</a></li>
			<li><a href="topoi_diaskedasis.php">Διασκέδαση</a></li>
			<li><a href="metakinisi.php">Μετακίνηση		</a></li>
			<li><a href="epikoinwnia.php">	Επικοινωνία	</a></li>
			<li><a href="kratiseis.php">Κρατήσεις</a></li>
		</ul>
	</header>
	
		<main>
			<form name="Book" onsubmit="return validateForm()" method="post/get" action="arxeio12.php">
			<label for="hotel">Ξενοδοχείο</label><br>
				<select id="hotel" name="hotel">
				<option value="1">Anamar Pilio Resort</option>
				<option value="2">Tasia Boutique Hotel</option>
				<option value="3">Ξενοδοχείο Μάνθος</option>
				<option value="4">Ξενοδοχείο Χάνι Ζήση</option>
				<option value="5">Ξενοδοχείο Πλειάδες</option>
				<option value="6">Το Χάνι του Κοκκίνη</option>
				<option value="7">Porto Veneziano Hotel</option>
				<option value="8">Kydon Hotel</option>
				</select><br>
			<br>
			<label for="indv">Άτομα</label><br>
			<input type="text" name="indv" value="0" required><br>
			<br>
			<label for="monokl">Μονόκλινα</label>  
			<input type="text" name="monokl" value="0" required>
			<label for="dikl">Δίκλινα</label>  
			<input type="text" name="dikl" value="0" required>
			<label for="trikl">Τρίκλινα</label>  
			<input type="text" name="trikl" value="0" required><br>
			<br>
			<label for="from">Από(Χ/M/H):</label>
				<select id="yearf" name="yfrom">
				<option value="1">2016</option>
				<option value="2">2017</option>
				<option value="3">2018</option>
				<option value="4">2019</option>
				<option value="5">2020</option>
				</select>
				 
				<select id="monthf" name="mfrom">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>
				 
				<select id="dayf" name="dfrom">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select>
				>>> 
				<label for="to">Μέχρι(Χ/M/H):</label>
				<select id="yeart" name="yto">
				<option value="1">2016</option>
				<option value="2">2017</option>
				<option value="3">2018</option>
				<option value="4">2019</option>
				<option value="5">2020</option>
				</select>
				 
				<select id="montht" name="mto">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				</select>
				 
				<select id="dayt" name="dto">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				</select><br>
				<br>
				<label for="payment">Τρόπος Πληρωμής</label>
				<select id="payment" name="payment">
				<option value="1">Πληρωμή κατά την άφιξη</option>
				<option value="2">Πληρωμή online</option>
				</select>
				<label for="credit">Αριθμός Πιστωτικής</label>  
				<input type="text" name="credit"><br>
				<input type="submit" value="Κράτηση">
				<input type="reset" value="Ακύρωση">
			</form>
		</main>
		
	</body>
</html>