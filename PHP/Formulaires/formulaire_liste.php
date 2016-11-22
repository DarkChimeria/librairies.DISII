//Formulaire Liste

<h3>Formulaire - Liste</h3>


                <form action="formulaire_liste.php" method="post" >

                    Liste : Marque de voitures ?<br />
                    <select name="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                    </select>
                    <input type="submit" name="choisir" value="Choisir"/>

                </form>
                <?php
                if (isset($_POST['choisir'])) {
                    $msg = $_POST['cars'];
                    echo "Valeur : $msg";
                }
                ?>