<div class="divider-new">
    <h2 class="h2-responsive wow fadeIn">Notícies i actualitat</h2>
</div>
<div class="container">
<?php 
	$i=0;
	$stmt=$conn->prepare('SELECT * FROM noticies ORDER BY data_publicacio DESC');
    $stmt->execute();
    while($rows=$stmt->fetch()){
    	$my2date = date('d/m/Y',strtotime($rows['data_publicacio']));
    	if($i%2==0){
    		echo "<div class=\"row\">";
    	}
    	echo "<div class=\"col-lg-6\">";
		echo "<div class=\"card\">";
    	echo "<div class=\"view overlay hm-white-slight\">";
        echo "<img src=\"media/".$rows['imatge']."\">";
        echo "<a>";
        echo "<div class=\"mask waves-effect waves-light\"></div>";
        echo "</a>";
    	echo "</div>";
		echo "<div class=\"card-block\">";
		echo "<h4 class=\"card-title\"><a href=\"index.php?seccio=actualitat&sub=detall&id=".$rows['id']."\">".$rows['titol']."</a></h4>";
		echo "<hr>";
		echo "<p class=\"card-text\">".substr($rows['descripcio'],0,120)."...</p>";
		echo "</div>";
		echo "<div class=\"card-data\">";
		echo "<ul>";
		echo "<li><i class=\"fa fa-clock-o\"></i>".$my2date." - ".$rows['hora_publicacio']."</li>";
		echo "</ul>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
		if($i%2!=0){
    		echo "</div>";
    		echo "<br>";
    	}
		$i++;
	}
    ?>
    </div>