//Formulaire Checkbox

<h3>Formulaire - Checkbox</h3>


                <form action="formulaire_checkbox.php" method="post" >
                    Une zone de type checkbox : Avez-vous faim aujourd'hui ?<br />
                    <input type="checkbox" name="faim[]" value="Entrée" /> Entrée<br />
                    <input type="checkbox" name="faim[]" value="Plat" /> Plat<br />
                    <input type="checkbox" name="faim[]" value="Dessert" /> Dessert <br />
                    <input type="checkbox" name="faim[]" value="Café" /> Café<br />
                    <input type="checkbox" name="faim[]" value="whisky" /> Whisky<br />
                    <input type="submit" name="choisir" value="Choisir"/>
                </form>
                <?php
                if (isset($_POST['choisir'])) {
                    $msg = implode(',', $_POST['faim']);
                    echo "Valeur : $msg";
                }
                ?>