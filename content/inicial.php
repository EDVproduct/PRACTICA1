<!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
        <ul class="animated fadeInUp">
            <li>
                <h1 class="h1-responsive">Benvinguts!</h1></li>
            <li>
                <p>Cases rurals de Girona</p>
            </li>
            <li>
                <a href="index.php?seccio=registre" class="btn btn-primary btn-lg" rel="nofollow">registra't!</a>
                <a href="admin/index.php" class="btn btn-default btn-lg" rel="nofollow">entra!</a>
            </li>
        </ul>
    </div>
</div>

<div class="container">

<!--Section: Best features-->
<section id="best-features">

    <div class="row">

        <!--First columnn-->
        <div class="col-lg-4">
            <!--Card-->
            <div class="card wow fadeIn">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(25).jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Title-->
                    <h4 class="card-title">360 Advertising</h4>
                    <hr>
                    <!--Text-->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->

        <!--Second columnn-->
        <div class="col-lg-4">
            <!--Card-->
            <div class="card wow fadeIn" data-wow-delay="0.2s">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(14).jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Title-->
                    <h4 class="card-title">Top-class Team</h4>
                    <hr>
                    <!--Text-->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
        <!--Second columnn-->

        <!--Third columnn-->
        <div class="col-lg-4">
            <!--Card-->
            <div class="card wow fadeIn" data-wow-delay="0.4s">

                <!--Card image-->
                <div class="view overlay hm-white-slight">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(21).jpg" class="img-fluid" alt="">
                    <a>
                        <div class="mask"></div>
                    </a>
                </div>
                <!--/.Card image-->

                <!--Card content-->
                <div class="card-block text-center">
                    <!--Title-->
                    <h4 class="card-title">Newest Technolgies</h4>
                    <hr>
                    <!--Text-->
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fuga animi architecto dolores dicta cum quo velit.</p>
                </div>
                <!--/.Card content-->

            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->
    </div>

</section>
<!--/Section: Best features-->
<div id="contacta">
<div class="divider-new">
    <h2 class="h2-responsive wow fadeIn">Contacta amb nosaltres</h2>
</div>
<!--Section: Contact v.1-->
<section class="section mb-4">

    <div class="row">

        <!--First column-->
        <div class="col-md-5">
        
            <!--Form with header-->
            <div class="card">

                <div class="card-block">
                    <form action="" method="post">
                    <!--Header-->

                    <div class="form-header mdb-color">
                        <h3><i class="fa fa-envelope"></i> Escriu-nos!!</h3>
                    </div>
                    <!--Body-->
                    <?php 
                        if(isset($_POST['enviar'])){
                            $stmt = $conn->prepare('INSERT INTO missatges (tema,contingut,mail,nom,data_enviament,hora_enviament,llegit,contestat) VALUES (:tema,:contingut,:mail,:nom,:data_enviament,:hora_enviament,:llegit,:contestat)');
                            $rows=$stmt->execute(array(':tema'=>$_POST['tema'],':contingut'=>$_POST['contingut'],':mail'=>$_POST['mail'],':nom'=>$_POST['nom'],':data_enviament'=>date("Y-m-d"),':hora_enviament'=>date("h:i:s"),':llegit'=>0,':contestat'=>0));
                            if($rows==1){
                                echo "missatge enviat correctament a les ".date("h:i:s");
                            }
                            else{
                                echo "s'ha produit un error a l'enviament del missatge";
                            }
                        }
                    ?>
                    <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="form3" class="form-control" name="nom">
                        <label for="form3">nom i cognoms</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form2" class="form-control" name="mail">
                        <label for="form2">correu electrònic</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-tag prefix"></i>
                        <input type="text" id="form32" class="form-control" name="tema">
                        <label for="form32">tema</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="form8" class="md-textarea" name="contingut"></textarea>
                        <label for="form8">missatge</label>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-primary btn-lg waves-effect waves-light" type="submit" name="enviar">enviar</button>
                    </div>
                    </form>
                </div>

            </div>
            <!--/Form with header-->

        </div>
        <!--/First column-->

        <!--Second column-->
        <div class="col-md-7">

            <!--Google map-->
            <div id="map-container" class="z-depth-1-half map-container" style="height: 400px"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94916.38245380363!2d2.748269358203125!3d41.9758693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bae7212c91a965%3A0xdd85870e80bf177!2sADAMS!5e0!3m2!1ses!2ses!4v1498044541379" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>

            <br>
            <!--Buttons-->
            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fa fa-map-marker fa-2x"></i>
                    <p>Francesc Massanes, Foixà</p>
                    <p>Girona, 17462</p>
                </div>

                <div class="col-md-4">
                    <i class="fa fa-phone fa-2x"></i>
                    <p>+034 972 567 895</p>
                    <p>Dill - Diu, obert 24h</p>
                </div>

                <div class="col-md-4">
                    <i class="fa fa-envelope fa-2x"></i>
                    <p>info@casarural.com</p>
                </div>
            </div>

        </div>
        <!--/Second column-->

    </div>

</section>
<!--/Section: Contact v.1-->
</div>
</div>