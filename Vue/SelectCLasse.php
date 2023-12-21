
<form class="Select-User" action="" method="post">
    <label for="Classes-Select">Selection D'une classe</label>
    <select name="Classes" id="Classes-Select">
        <option value="0">--Choisir Une Classe--</option>
        <?php  // crée un objet eleves, ce qui permet de prendre les Classes dans la db via la méthode getclasse().
        
        $get_Eleve = new Eleve();
        $resultats =  $get_Eleve->getClasse();
        foreach ($resultats as $ligne) {
            echo "<option value=\"" . $ligne["ID_Classe"] . "\">" . $ligne["NOM"] . "</option>";
        }
        ?>
    </select>
    <input type="submit" name="submit" value="Valider">
</form>

