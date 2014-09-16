<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>harjutus-3 - PHP andmetüübid</title>
</head>
  <body>



    <h1>Muutujad</h1>
    <?php 
     $variable = 30;
     echo $variable;
     //Lisan veebilehitsejas parema loetavuse saamiseks reamurdmise elemendi:
     echo "<br>";
    ?>

    <h1>Stringid</h1>
    <?php echo "Hello world!";
    echo "<br>";
    ?>

    <?php echo 'veel stringe'; 
    echo "<br>";?>


    <?php $number = "24";
          $number2 = "26";
       echo "$number.$number2";
       echo "<br>";
    ?>

    <h2>Nimekirja väljastamine muutujate ja stringide abil</h2>
    <?php 
    $student1 = "Aile";
    $student2 = "Risto";
    $student3 = "Keijo";
    $student4 = "Aigar";
    $student5 = "Margit";
    ?>

    <ul>
      <?php
       echo "<li>" . $student1 . "</li>";
       echo "<li>" . $student2 . "</li>";
       echo "<li>" . $student3 . "</li>";
       echo "<li>" . $student4 . "</li>";
       echo "<li>" . $student5 . "</li>";
      ?>
    </ul>

    <?php 
    $firstName = "Maile";
    $lastName = "Rohiväli";
    $fullName = "$firstName $lastName";

    echo "$fullName";
    echo "<br>";
    ?>

    <?php 
    $test = "Test";
    echo "$test, kas interpolatsioon töötab";
    echo "<br>";

    ?>

    <?php
    $age = "15";
    echo "Ma olen {$age}aastane";
    echo "<br>";
    ?>

    <?php
    $source = "see tekst on SUUR";
    $upper = strtoupper($source);
    $lower = strtolower($upper);
    echo "$lower";
    echo "<br>";

    echo ucfirst($source); 
    echo "<br>";
    echo ucwords($source);
    echo "<br>";
    echo strlen($source);
    echo "<br>";
    echo "A" . trim(" B C D E") . "F";
    ?>

    <h2>Täisarvud</h2>
    <?php $nr1 = 5;
    $nr2 = 10;
    echo ($nr1 + $nr2)*3 ; ?> <br>
    <?php echo abs(-300) ?> <br>
     <?php
    // Viis ruudus:
    echo pow(5, 2); ?><br>

    // Seitse kuubis:
    <?php echo pow(7, 3); ?><br>

    // Kolm astmel seitse:
    <?php echo pow(3, 7); ?><br>
    <?php
    // Ruutjuur 25-st:
    echo sqrt(25); ?><br>
    <?php
    // Suvaline number
    echo rand();

    // Lihtsalt reavahetus, et vältida segadust piiranguteta ja piiranguga numbritel vahet tegemisel.
    echo "<br>";

    // Suvaline number vahemikus 7 - 22:
    echo rand(7, 22); ?>



  </body>
</html>