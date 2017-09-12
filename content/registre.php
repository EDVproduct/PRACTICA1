<div class="divider-new">
    <h2 class="h2-responsive wow FadeIn">Registre</h2>
</div>
<div class="container">
    	<div class="col-lg-12">
<!--Form without header-->
<div class="card">
    <div class="card-block">
    <!--Body-->
        <div class="form-header purple darken-4">
            <h3><i class="fa fa-lock"></i> Registre d'usuari</h3>
        </div>
        <?php
            $error=0;
            if(isset($_POST['registre'])){
                //COMPROVAR LA EXISTENCIA DEL MAIL
                $data=$conn->prepare('SELECT mail FROM usuaris WHERE mail=:mail');
                $data->execute(array(':mail'=>$_POST['mail']));
                $rows2=$data->rowCount();
                if($rows2>=1){
                    $error=1;
                }
                //COMPROVAR SI ELS PASSWORDS SON IGUALS
                if($_POST['password1']!=$_POST['password2']){
                    $error=2;
                }
                    if($error==0){
                    //ENCRIPTACIO DEL PASSWORD
                    $opcions = ['cost' => 12,];
                    $hash=password_hash($_POST['password1'], PASSWORD_BCRYPT, $opcions);

                    $stmt=$conn->prepare('INSERT INTO usuaris (mail,password) VALUES (:mail,:password)');
                    $rows=$stmt->execute(array(':mail'=>$_POST['mail'],':password'=>$hash));
                    if($rows==1){
                        $error=0;
                    }
                    else{
                        $error=3;
                    }
            }
        }
        if(!isset($_POST['registre']) || $error!=0){
        ?>
        <form action="" method="POST">
            <?php if(isset($_POST['registre']) && $error==1){?>
                <div class="md-form">
                    <i class="fa fa-envelope prefix" style="color:red;"></i>
                    <input type="email" id="form1" class="form-control" name="mail" style="color:red;border-color:red;">
                    <label for="form1" style="color:red;">Usuari existent</label>
                </div>
            <?php } 
            else{?>
                <div class="md-form">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="email" id="form1" class="form-control" name="mail"
                    <?php 
                        if(isset($_POST['registre'])){
                            echo " value=\"".$_POST['mail']."\"";
                        } ?>
                    >
                    <label for="form1">Introdueix el teu email</label>
                </div>
            <?php } ?>
            <?php if(isset($_POST['registre']) && $error==2){ ?>
                <div class="md-form">
                    <i class="fa fa-lock prefix" style="color:red;"></i>
                    <input type="password" id="form2" class="form-control" name="password1" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" style="color:red;border-color:red;">
                    <label for="form2" style="color:red;">Els passwords no coincideixen *</label>
                </div>
                <div class="md-form">
                    <i class="fa fa-lock prefix" style="color:red;"></i>
                    <input type="password" id="form3" class="form-control" name="password2" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" style="color:red;border-color:red;">
                    <label for="form3" style="color:red;">Els passwords no coincideixen *</label>
                </div>
            <?php } 
                else{ ?>
                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form2" class="form-control" name="password1" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                        <label for="form2">Entrar el password *</label>
                    </div>
                    <div class="md-form">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form3" class="form-control" name="password2" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
                        <label for="form3">Tornar a entrar el password *</label>
                    </div>
            <?php } ?>
            <div class="text-center">
                <button class="btn btn-blue-grey" name="registre">Registrar-se</button>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <div class="options">
                <p>* El password ha de contenir mínim 8 caràcters: 1 lletra majúscula, 1 lletra minúscula, números i dígits alfanumèrics (OBLIGATORIAMENT).</p>
                </div>
                <div class="options">
                    <p>He oblidat la <a href="#">contrasenya</a>.</p>
                </div>
            </div>
        </form>
        <?php } 
        else{
            echo "<div class=\"card card-success text-center z-depth-2\">";
            echo "<div class=\"card-block\">";
            echo "<p class=\"white-text\">Alta realitzada correctament.</p>";
            echo "</div>";
            echo "</div>";
            echo "<br>";
            echo "<p><a href=\"admin/index.php\">Anar a la pàgina de login</a></p>";
            echo "<p><a href=\"index.php\"> Retornar a la pàgina inicial</a></p>"; 
        }
        ?>
</div>
</div>
</div>
</div>
</div>
<!--/Form without header-->

