//Formulaire - Radio

<h3>Formulaire - Radio</h3>
                <form action="formulaire_radio.php" method="post" >

                    De quel sexe êtes-vous ?<br>

                    <label><input type="radio" name="sexe" value="M" /> Masculin <br></label>
                    <label><input type="radio" name="sexe" value="F" /> Féminin <br></label>
                    <label><input type="radio" name="sexe" value="?" checked="checked" /> Inconnu! <br></label>
                    <input type="submit" name="alors" value="Alors ?" />

                </form>
                <?php
                if (isset($_POST['alors'])) {
                    $msg4 = $_POST['sexe'];
                    echo "Valeur : $msg4";
                }
                ?>