<html>
<body>
<?php
class Training{
	function getStates(){
		return array("Selangor", "Johor", "Kedah", "Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang", "Sabah", "Sarawak", "Terengganu");
	}
	function getibus(){
		return array("Shah Alam", "Johor Bahru", "Alor Setar", "Kota Bahru", "Bandar Melaka", "Seremban", "Kuantan", "Ipoh", "Kangar", "Georgetown", "Kota Kinabalu", "Kuching", "Kuala Terengganu");
	}
	function getshorts(){
		return array("SGR", "JHR", "KDH", "KTN", "MLK", "NSN", "PHG", "PRK", "PLS", "PNG", "SBH", "SWK", "TRG");
   	}
}?>

<style>
.textbold{
	font-weight: bold}
}
</style>

<ul><strong>Malaysia States</strong>
<table border = "3" cellspacing="0" cellpadding="0">
<tr>
	<TH>State Name</TH>
	<TH>Ibu Negeri</TH>
	<TH>Short Name</TH>
</tr>

<?php 
$num = 0;
$states = new Training;
	foreach ($states->getStates() as $state) {
	if($states->getshorts()[$num]=="JHR"){
		$bold = "class='textbold'";
	}else{
		$bold = '';
	}
?>

<tr <?php echo $bold;?>> 
	<td><?php echo $state;?></td>
	<td><?php echo $states->getibus()[$num];?></td>
	<td><?php echo $states->getshorts()[$num];?></td>
</tr>
<?php 
$num++;
}?>
</table></ul>
<hr/>
<ul>*<b>Bold </b> state is the state you're living in.</ul>
</body>
</html> 