
<?php

$Name = array('Nikita', 'Dima', 'Alex', 'Sergey', 'Vlad', 'Andrey', 'Artem', 'Ivan', 'Anton', 'Maxim', 'Oleg',
    'Roman','Sam','Shui','Dayzi');
$SurName = array('Melnyk', 'Shevchenko', 'Boyko', 'Kovalenko', 'Bondarenko', 'Tkachenko', 'Kovalchuk',
    'Kravchenko', 'Oliynyk', 'Shevchuk', 'Polishchuk','Lysenko','Fogot','Fabregas','Dragomirov');

for ($i = 0; $i <= 29; $i++)
{
    $osName = array_rand($Name);
    $osSurName = array_rand($SurName);
    $osAge = rand(18,60);
    $vplayer[$i] = array("name"=>$Name[$osName], "surname"=>$SurName[$osSurName],
        "age"=>rand(18,60));
}
echo "Игра на выбывание &copy;<br>";
echo "<pre>";
print_r ($vplayer);
$i = 1;
while ($i <= 29)
{
    $osName = rand(0,count($vplayer)-1);
    echo "Выбыл: день $i - ".implode(" ", $vplayer[$osName])."<br>";
    array_splice($vplayer, $osName, 1);
    $i++;
}
echo "Победитель: ".implode(" ",$vplayer[0])."<br>";
?>