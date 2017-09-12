<div class="divider-new">
    <h2 class="h2-responsive wow fadeIn">Resultat de la cerca</h2>
</div>
<div class="container">
<?php 
	if(isset($_GET['enviar'])){
		echo "<h2>".$_GET['paraules']."</h2>";
		$stmt = $conn->prepare('SELECT * FROM noticies WHERE titol LIKE :titol OR descripcio LIKE :contingut');
		$stmt->execute(array(':titol'=>'%'.$_GET['paraules'].'%',':contingut'=>'%'.$_GET['paraules'].'%'));
		while($rows=$stmt->fetch()){
			echo "<p><a href=\"index.php?seccio=actualitat&sub=detall&id=".$rows['id']."\">".$rows['titol']."</a></p>";
		}
	}
?>
</div>