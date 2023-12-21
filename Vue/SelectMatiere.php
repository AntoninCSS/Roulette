<form class="Select-Matiere" action="" method="post">
    <label for="Matiere-Select">Selection D'une Matière</label>
    <select name="Matiere" id="Matiere-Select">
        <option value="0">--Choisir Une Matière--</option>
        <?php  // crée un objet eleves, ce qui permet de prendre les Matière dans la db via la méthode getMatiere().
        
        $get_mat = new Matiere();
        $resultatsMat =  $get_mat->getMatiere();
        var_dump($resultatsMat);
        foreach ($resultatsMat as $ligne2) {
            echo "<option value=\"" . $ligne2["ID_MATIERE"] . "\">" . $ligne2["Nom_Matiere"] . "</option>";
        }
        ?>
    </select>
    <input type="submit" name="submitMatiere" value="Valider">
</form>