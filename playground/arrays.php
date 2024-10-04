<?php

$list = array("id"=>4, 0, 10, "limit"=>24, 50);
$countries = ["Argentina", "Brazil", "Canada", "Denmark"];

echo count($list);

// for ($i = 0; $i < count($countries); $i += 1) {

// }

// foreach ($countries as $country) {
//     echo $country."\n";
// }

// foreach ($countries as $i=>$country) {
//     echo "$i: $country\n";
// }

foreach ($countries as $i => $country): ?>
    <li>
        <article>
            <h1> <?php echo $i ?>: <?php echo $country ?> </h1>
        </article>
    </li>
<?php
endforeach;

// echo $list["id"];
// echo $countries[2];

echo "\n";
