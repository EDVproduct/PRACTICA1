<?php
	$stmt=$conn->prepare('SELECT * FROM noticies WHERE id=:id');
    $stmt->execute(array(':id'=>$_GET['id']));
    while($rows=$stmt->fetch()){
    	echo "<div class=\"divider-new\">";
    	echo "<h2 class=\"h2-responsive wow fadeIn\">".$rows['titol']."</h2>"; 
    	echo "</div>";
		echo "<div class=\"container\">";
		echo "<div class=\"card\">";
		echo "<div class=\"row\">";
		echo "<div class=\"col-lg-12\">";
		echo "<div class=\"card-block\">";
		echo "<h4 class=\"card-title\">".$rows['titol']."</h4></div></div></div>";
		echo "<div class=\"row\">";
		echo "<div class=\"col-lg-12\">";
		echo "<div class=\"card-block\">";
		echo "<ul>";
		echo "<li>";
		echo "<i class=\"fa fa-clock-o\">";
		echo "</i> ".$rows['data_publicacio']."</li>";
		echo "</ul></div></div></div>";
		echo "<div class=\"row\">";
		echo "<div class=\"col-lg-4\">";
		echo "<img class=\"img-fluid\" src=\"media/".$rows['imatge']."\" alt=\"Card image cap\">";
		echo "</div>";
		echo "<div class=\"col-lg-8\">";
		echo "<div class=\"card-block\">";
		echo "<p class=\"card-text\">".$rows['descripcio']."</p></div></div></div></div></div>";
    }
?>
