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
			alert("�������� ����������� �� ����� �����, ������!");
		}
	else { alert("������������ �������� �� ����� ����� ��� ������!")}
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
			var testresults
	function checkemail(){
			var str=document.validation.emailcheck.value
			var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
	if (filter.test(str))
			{testresults=true
			alert("�������� ������ ��������� email!")}
	else{
			alert("�������� �������� ��� ������ ��������� ������������ ������������!")
			testresults=false}
	return (testresults)}
</script>


<html>
<style>
ul#menu li{ display:inline;}
</style>

 <link rel="stylesheet" type="text/css" href="style1.css"/>
 
 
	<header>
		<ul id="menu">
			<li><a href="ergasia_eksaminou.php">�������� ������</a></li>
			<li><a href="aksiotheata.php">���������</a></li>
			<li><a href="estiatoria.php">����������</a></li>
			<li><a href="mouseia.php">�������</a></li>
			<li><a href="istoria.php">�������</a></li>
			<li><a href="topoi_diaskedasis.php">����� �����������</a></li>
			<li><a href="metakinisi.php">����������		</a></li>
			<li><a href="epikoinwnia.php">	�����������	</a></li>
			<li><a href="kratiseis.php">���������</a></li>
		</ul>
	</header>
	
	</br></br></br></br></br></br></br>
	


		
	<div id="forms">
<!- ��� ��������� � ������� ��� �� ����� ������������.-->
<!- ����� ������������ -->
	<h3>����� ������������</h3>
		<form name="validation" onSubmit="return checkbae()" >
			����� ������: </br><type="text" name="username">
			<input type="text" size=18 name="username"></br>
			Email:</br> <type="text" name="email">
			<input type="text" size=18 name="emailcheck"></br>
			������:</br> <type="text" name="message">
			<textarea id="message"></textarea></br>
			<input type="Submit" value="��������"
			onClick="CheckVoid(form.username.value,form.message.value)"/>
		</form></br></br>
		
		
</div>

</br></br></br></br></br></br></br>
<a href="ergasia_eksaminou.php">������� ��� ��� ��������� ��� �������� ������.</a>

 <footer>
Posted by: Konstantinos Chatzikokolakis
<p>Contact iformation:
<img src="http://www.bobskaradio.com/images/stories/email.png" alt="Email icon" height="16"px  width="16" />
 <a href ="mailto:
konstantinos_chatz@hotmail.com">konstantinos_chatz@hotmail.com</a>.</p>
</footer>
</html>
