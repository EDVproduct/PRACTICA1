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
            if(isset($_POST['registre'])){
                //COMPROVAR LA EXISTENCIA DEL MAIL
                $data=$conn->prepare('SELECT mail FROM usuaris WHERE mail=:mail');
                $data->execute(array(':mail'=>$_POST['mail']));
                $rows2=$data->rowCount();
                if($rows2>=1){
                    echo "L'usuari ja existeix<br>";
                }
                else{
                    //COMPROVAR SI ELS PASSWORDS SON IGUALS
                    if($_POST['password1']!=$_POST['password2']){
                        echo "El password no coincideix!!<br>";
                    }
                    else{
                    //ENCRIPTACIO DEL PASSWORD
                    $opcions = ['cost' => 12,];
                    $hash=password_hash($_POST['password1'], PASSWORD_BCRYPT, $opcions);

                    $stmt=$conn->prepare('INSERT INTO usuaris (mail,password) VALUES (:mail,:password)');
                    $rows=$stmt->execute(array(':mail'=>$_POST['mail'],':password'=>$hash));
                    if($rows==1){
                        echo "alta ok!!";
                    }
                    else{
                        echo "error en el alta";
                    }
                }
            }
        }
            else{
        ?>
        <form action="" method="POST">
            <div class="md-form">
                <i class="fa fa-envelope prefix"></i>
                <input type="text" id="form1" class="form-control" name="mail">
                <label for="form1">Introdueix el teu email</label>
            </div>
            <div class="md-form">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="form2" class="form-control" name="password1">
                <label for="form2">Introdueix el password</label>
            </div>

            <div class="md-form">
                <i class="fa fa-lock prefix"></i>
                <input type="password" id="form3" class="form-control" name="password2">
                <label for="form3">Torna a introduir el password</label>
            </div>
            <div class="text-center">
                <button class="btn btn-blue-grey" name="registre">Registrar-se</button>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <div class="options">
                    <p>He oblidat la <a href="#">contrasenya</a>.</p>
                </div>
            </div>
        </form>
        <?php } ?>
</div>
</div>
</div>
</div>
</div>
<!--/Form without header-->

