//Formulaire

<form method="POST" action="sFormulaire.php">

                    <p>Votre nom : <input type="text" name="ztext" value=""/>
                        <input type="submit" name="bvalider" value="VALIDER"/>

                </form>
                <br>
                

          <?php
                $msg="";
                if (isset($_POST['bvalider'])){
                    $msg = $_POST['ztext'];
                    echo "Voici votre message : $msg";
                }
           ?>
