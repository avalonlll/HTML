<script>
function validatedate(inputText)  
  {  
  var dateformat = /^(0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])[\/\-]\d{4}$/;  
  // Match the date format through regular expression  
  if(inputText.value.match(dateformat))  
  {  
  document.form1.text1.focus();  
  //Test which seperator is used '/' or '-'  
  var opera1 = inputText.value.split('/');  
  var opera2 = inputText.value.split('-');  
  lopera1 = opera1.length;  
  lopera2 = opera2.length;  
  // Extract the string into month, date and year  
  if (lopera1>1)  
  {  
  var pdate = inputText.value.split('/');  
  }  
  else if (lopera2>1)  
  {  
  var pdate = inputText.value.split('-');  
  }  
  var mm  = parseInt(pdate[0]);  
  var dd = parseInt(pdate[1]);  
  var yy = parseInt(pdate[2]);  
  // Create list of days of a month [assume there is no leap year by default]  
  var ListofDays = [31,28,31,30,31,30,31,31,30,31,30,31];  
  if (mm==1 || mm>2)  
  {  
  if (dd>ListofDays[mm-1])  
  {  
  alert('Invalid date format!');  
  return false;  
  }  
  }  
  if (mm==2)  
  {  
  var lyear = false;  
  if ( (!(yy % 4) && yy % 100) || !(yy % 400))   
  {  
  lyear = true;  
  }  
  if ((lyear==false) && (dd>=29))  
  {  
  alert('Invalid date format!');  
  return false;  
  }  
  if ((lyear==true) && (dd>29))  
  {  
  alert('Invalid date format!');  
  return false;  
  }  
  }  
  }  
  else  
  {  
  alert("Invalid date format!");  
  document.form1.text1.focus();  
  return false;  
  }  
  }  
</script>



<script>
function checkbae(){
	if (document.layers||document.getElementById||document.all)
		return checkemail()
	else
		return true}
</script>


<script>
function CheckVoid(username,message)
{	if (!username || !message )
		{
			alert("Παρακαλώ συμπληρώστε όλα τα πεδία!");
		}
	else { alert("Συμπληρώσατε επιτυχώς όλα τα πεδία, η κράτηση σας εγκρίθηκε!")}
}

</script>

<script>
function checkbae(){
	if (document.layers||document.getElementById||document.all)
		return checkemail()
	else
		return true}
</script>




<html>
<style>
ul#menu li{ display:inline;}
</style>

 <link rel="stylesheet" type="text/css" href="style1.css"/>
 
 
 <header>
		<ul id="menu">
			<li><a href="ergasia_eksaminou.php">Κεντρική σελίδα</a></li>
			<li><a href="aksiotheata.php">Αξιοθέατα</a></li>
			<li><a href="estiatoria.php">Εστιατόρια</a></li>
			<li><a href="mouseia.php">Μουσεία</a></li>
			<li><a href="istoria.php">Ιστορία</a></li>
			<li><a href="topoi_diaskedasis.php">Τόποι διασκέδασης</a></li>
			<li><a href="metakinisi.php">Μετακίνηση		</a></li>
			<li><a href="epikoinwnia.php">	Επικοινωνία	</a></li>
			<li><a href="kratiseis.php">Κρατήσεις</a></li>
		</ul>
	</header>
	
	
	
<div id="forms">
<!- φόρμα κρατήσεων -->
	<h3>Φόρμα κρατήσεων.</h3>
	
	<form name="form1" method="post" onSubmit="return checkbae()" >
	
	Ονοματεπώνυμο:
 <type="text" name="username">
<input type="text" size=18 name="username"></br>
Εισάγετε Εστιατόριο-Ξενοδοχείο:
		<select name="Εστιατόρια-Ξενοδοχεία">
			<option value="pallas" selected="selected" >Παλλάς</option>
			<option value="glossitses">Γλωσσίτσες</option>
			<option value="ksiloskalo">Ξυλόσκαλο</option>
			<option value="steki">Το Στέκι</option>
		</select>
</br>
Εισάγετε αριθμό ατόμων:<textarea name="textarea1" cols="2" rows="2"></textarea>
</br>
Εισάγετε αριθμό δωματίων:<textarea name="textarea2" cols="2" rows="2"></textarea>
</br>


</br>

Ημερομηνίες άφιξης και αναχώρισης:
 <type="text" name="message">
<textarea id="hmer1"></textarea>
<textarea id="hmer2"></textarea>
</br>
			Εισάγετε τρόπο πληρωμής:
				<select name="form2" method"post" >
					<option value="metrita">Μετρητά</option>
					<option value="Πιστωτική">Πιστωτική</option>
					<input type="Submit" value="Αποστολή"
					onClick="CheckVoid(form.username.value,form.message.value, form.textarea1.value, form.textarea2.value)"/>
					</form></br></br>
<input type="reset" value="Ακύρωση">
</div>


</br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<form name="form1" action="#">  
<ul>  
<li><input type='text' name='text1'/></li>  
<li>&nbsp;</li>  
<li class="submit"><input type="submit" name="submit" value="Submit" onclick="validatedate(document.form1.text1)"/></li>  
<li>&nbsp;</li>  
</ul>  
</form> 
<script src="mmddyyyy-validation.js"></script>  





	
<div id="forma_kratisis">
<p>
Για οποιαδήποτε απορία στείλτε email 
<a href="mailto:konstantinos_chatz@hotmail.com?Subject=Ερώτηση-κρατήσεις" target="_top">εδώ</a>
</p>

<a href="ergasia_eksaminou.php">Πατήστε εδώ για επιστροφή στη κεντρική σελίδα.</a>

</html>
