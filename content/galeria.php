<div class="container">
<div class="divider-new">
    <h2 class="h2-responsive wow fadeIn">Galeria fotogràfica</h2>
</div>

<p>Sel·leccionar la galeria per veure les imatges</p>
<section id="gallery-sel">
<form action="" method="post">
<div class="row">
<select class="form-control col-lg-10" id="galsel" name="galeria">
<?php
$data = $conn->prepare('SELECT * FROM galeria ORDER BY nom ASC');
$data->execute();
while($row = $data->fetch()){
    echo "<option value=\"".$row['id']."\">".$row['nom']."</option>";
}
?>
</select>
<button type="submit" class="btn btn-default col-lg-1" name="mostrar"><i class="fa fa-camera-retro" aria-hidden="true"></i></button>
</div>
</form>
</section>
<!--Section: Best features-->
<section id="best-features">
    <div class="grid">
<?php 
    if(isset($_POST['mostrar'])){
        $data2 = $conn->prepare('SELECT id_media FROM media_galeria WHERE id_galeria=:id_galeria');
        $data2->execute(array(':id_galeria'=>$_POST['galeria']));
        while($rows = $data2->fetch()){
            $data3 = $conn->prepare('SELECT imatge FROM media WHERE id=:id_media');
            $data3->execute(array(':id_media'=>$rows['id_media']));
            $rows2 = $data3->fetch();
            echo "<a class=\"example-image-link\" href=\"media/".$rows2['imatge']."\" data-lightbox=\"example-1\">";
            echo "<img class=\"example-image img-fluid\" src=\"media/".$rows2['imatge']."\" alt=\"image-1\">";
            echo "</a>";
        }
    }
?>
</div>
</section>
<!--/Section: Best features-->
</div>