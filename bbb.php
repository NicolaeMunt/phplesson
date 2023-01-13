<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP lessons</title>
</head>
<body>
<script>declare(strict_types=1);</script>
    <?php 
       /*$cars=array("Bentley","Dacia","Lada");
       $arrlenght=count($cars);
       echo "i love ".$cars[1]." and hate ".$cars[0];
       echo "<br>";
       echo count($cars);
       echo "<hr>";
        for($x=0; $x <$arrlenght; $x++) {
            echo $cars[$x];
            echo "<hr>";
            
        }
        echo "<hr>";
        foreach($cars as $value) {
            echo "$value <hr>";
        }
       */
      /*$elevi =array("Nicu"=>'17',"Patricia"=>"17","Mihaela"=>"15",
      "Nikita"=>"14","Ruslana"=>"16");
      echo "<br>";
      echo "Nicu Are ". $elevi["Nicu"] . " ani";
      echo "<br>";
      echo "Patricia Are ". $elevi["Patricia"] . " ani"; 
      foreach($elevi as $x => $x_value) {
        echo "Age=". $x .",Value=". $x_value;
        echo "<br>";
      }
      
      
   $cars = array (
    array("volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
   );
   //echo $cars [3][0];
   for ($row = 0; $row<4; $row++) {
    echo "<p><b>Row number $row</p><b/";
    echo "<ul>";
    for($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
   }
   */
  

   function writeMsg(string $yourMessage) {
    echo "yourMessage <br>";
   }
   writeMsg("Dute-n cur");

    ?>
</body>
</html>