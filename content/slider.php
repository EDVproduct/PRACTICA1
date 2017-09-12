<?php 
    $stmt2 = $conn->prepare('SELECT COUNT(id) FROM slider_img');
    $stmt2->execute();
    $nrows2 = $stmt2->fetchColumn();

    $stmt=$conn->prepare('SELECT * FROM slider_img');
    $stmt->execute();
?>
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
    <?php 
        $j=0;
        while($j<$nrows2){ ?>
        <li data-target="#carousel-example-1z" data-slide-to="<?php echo $j;?>" <?php if($j==0){echo "class=\"active\"";} ?>></li>
        <?php $j++; } ?>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <?php 
        $i=0;
        while($rows=$stmt->fetch()){ ?>
        <!--Second slide-->
        <div class="carousel-item <?php if($i==0){echo "active"; } ?>">
            <img src="slider/<?php echo $rows['imatge']; ?>" alt="">
        </div>
        <!--/Second slide-->
        <?php $i++; } ?>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->