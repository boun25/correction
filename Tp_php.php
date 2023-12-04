1)
$a, $_a, $a_a, $1a, et $a1,$AAA; $a1, 

2) Modifier le code ci-dessous pour calculer la moyenne des notes.
<?php 
   $note_maths = 15;  $note_francais = 12; $note_histoire_geo = 9;
   
   $carculdeNote =( $note_maths + $note_francais + $note_histoire_geo) /3 ;
      echo 'La moyenne est de '. $carculdeNote.' / 20.'; 
  ?>

3) 3. Calculer le prix TTC du produit.      
<?php 
   $prix_ht = 50; 
   $tva = 20; 
   $prix_tva =$prix_ht *   $tva /100 ; 
$resultat = $prix_tva +  $prix_ht ;
      echo 'Le prix TTC du produit est de '. $resultat.' €.'; 
?>


4) exo 4.

<?php
// il fallait rentre une chaleur chaine de caractere pour que la fonction var_dum puisse l'interprete comme un string

  $test = '42';
    var_dump($test )
	
 $test1 = 42;
 $test1 = strval($test1);
 var_dump($test1 );

?>
5) exo
<?php
echo "<u> exo5</u>";
echo <"br">
$sexe = 'femme';
if ($sexe == 'femme')
	echo '<br>bonjour mde';
elseif($sexe== 'homme')
echo '<br> bonjour monsieu';
else
echo	'<br>';

?>

6) exo 
<?php
echo"<u> exo 7</u>  ";
echo '<br>';
$budget = 1553.89
$achats = 1554.79
if($budget> = $achats)
echo "le budget  $budget € permet de payer tous les achats de $achats €";
else
	echo "le budget  $ budget € ne permet de payer tous les achats de $achats € ";
echo'<br>';
echo'<br>';
echo $budget >= $achats ? "<br> C'est ok " : "<br>c'est non";
echo'<br>';echo'<br>';

//allternative
echo $budget>=$achats ? "C'est Ok":"C'est NON!";

?>

Déclarer une variable $age qui contient la valeur de type  de votre choix. Réaliser une condition pour
afficher si la personne est mineure ou majeure.

    <?php
    echo "<br>";
    echo "<br>";
        $age = 25;
        if($age >= 18)
            echo "Vous êtes majeure";
        else
            echo "Vous êtes mineure";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

Déclarer une variable $heure qui contient la valeur de type  de votre choix comprise entre 0 et 24.
Créer une condition qui affiche un message si l'heure est le matin, l'après-midi ou la nuit.
    <?php
    echo "<br>";
    echo "<br>";
        $heure = 15;
        if($heure >= 6 && $heure < 12)
            echo "C'est le matin";
        elseif($heure >= 12 && $heure < 20)
            echo "C'est l'après-midi";
        else
            echo "C'est la nuit";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

    </div>