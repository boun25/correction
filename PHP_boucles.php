   <?php 
   
      $dep = 77000;
while ($dep < 78000){
    echo $dep. '  ';
    $dep++;
}//

	?>




	2
    <?php
        $chiffre = 5;
            echo "Table de multiplication du chiffre $chiffre :<br><br>";
        for($i=0; $i<=10; $i++){
            $result = $chiffre * $i;
            echo "$chiffre x $i = $result<br>";
        }
        echo "<br>";
        echo "<br>";
    ?>
	
	3
	<?php
	for($i = 1 ; $i <=5; $i++){
		for ($k =1; $k<= $i ; $k++ ){
			echo $i 
		}
		echo '<br/>';
	}
	?>
	
	4
	<?php
	$v = 0;
	while($v<=20){
		if ($v ==10 ){
			echo '<strong>'. $v. '</strong>';
		}else{
			echo '<br>'; echo "<br>";
		}
		
	
	
	?>