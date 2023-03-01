

<form class="Select-User" action="" method="post">
<label for="Classes-Select">Selection D'utilisateur</label>
<select name="Classes" id="Classes-Select">
<option value="">--Choisir Une Classe--</option>


<?php // Prend toute les classes dans la base SQL 
include ('../Controleur/Log_BDO.php');
$get_Classe = 'SELECT * FROM Classe';

foreach ($connexion->query($get_Classe) as $ligne) {
    
    echo "<option value=\"".$ligne[1]."\">".$ligne[0]."</option>";
}
?>


</select>
<input type="submit" name="submit" value="Valider">
</form>
<?php
include ('../Controleur/Eleve.php');
?>
