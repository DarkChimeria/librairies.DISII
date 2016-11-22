//Formulaire - Choix Multiples

<h3>Formulaire 7</h3>


                <form action="formulaire_choix_multiples.php" method="post" >

                    Liste : Marque de voitures ?<br />
                    <select name="cars[]" multiple="multiple" size="4">
                        <option value="">Choisir</option>
                        <option value="saab">Saab</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                        <option value="bmw">BMW</option>
                    </select>
                    <input type="submit" name="choisir" value="Choisir"/>

                </form>
                <?php
                if (isset($_POST['choisir'])) {
                    $msg = implode(',', $_POST['cars']);
                    echo "Valeur : $msg";
                }
                ?>