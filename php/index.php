<?php
  ini_set('display_error', 5);
  error_reporting(E_ALL);
  $age = 15;
  $name = "Griet";
  $country = "Belgie";
  $kids = 3;

  $year = 2018;
  $birthyear = 2001;

  $age = 40;
  $maxage = 75;

  $language = "FR";
  $message = "";

  $single = "appel";
  $quant = 3;
?>
<html>

   <head>
      <title>Hello World</title>
   </head>

   <body>
     <?php
        echo "U bent ", $age, " jaar en woont in ", $country, " en bent met " , $name , " en heeft ",$kids," kinderen.";
        echo '<br>';
        echo "U bent ", ($year-$birthyear) , " jaar";
        echo '<br>';
        echo "U heeft nog ", ($maxage-$age) , " jaar voordat je de leeftijd van ", $maxage , " jaar bereikt heeft";
        echo '<br>';
        echo "uitkomst oefening 4 = 11";
        echo '<br>';

        switch($language)
        {
          case "EN" :
            $message = "Hello World";
            break;
          case "FR" :
            $message = "Bonjour tout le monde";
            break;
          default:
            $message = "Hallo iedereen";
            break;
        }
        echo $message;
        echo '<br>';
        echo "ik heb ",$quant," ",$single;
        if ($quant > 1) {

          echo "s";
        }

    ?>
    <address>
      <br><br>
      Copyright &copy; <?php print date('Y');?> Winbooks &reg; <br>
      Alle rechten voorbehouden. All rights reserved.
    </address>
 </body>


</html>
