<?php
  $text =  <<< Label
  zsl - Zespół
  Szkół
  Łączności<br>
Label;

  echo$text;
  echo nl2br($text);

  $name ='JaNUsZ';
  //zamiana na małe litery
  echo strtolower($name);

  echo strtoupper($name);
// zmiana pierwszej litery z zdaniu
  $text ='janusz nowak Mieszka w poznaniu';
  echo ucfirst($text);
//wszystjue pierwsze litery
  $text ='janusz nowak Mieszka w poznaniu';
  echo ucwords($text);

  $lorem = <<< LOREM
   ipsum dolor sit amet, consectetur adipisicing elit,
   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;

echo $lorem;
$col = wordwrap($lorem, 40, '<br>');
echo $col;
$col = wordwrap($lorem, 40, '<hr>');
echo $col;
//czyszczenie zawartosci buffora
ob_clean();

//czyszczenie białych znakow
$name = 'Anna';
$name1 = 'Anna';

echo 'Długość $name:' ,strlen($name);
echo '<br>Długość $name1:' ,strlen($name1);

echo strlen(ltrim($name1));
echo strlen(rltrim($name1));
echo strlen(trim($name1));
$name1 = trim($name1);

 ?>
