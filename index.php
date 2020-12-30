<?php

function greet($name, $color) {
    echo "<p>Hi my name is $name and my color is $color.</p>";
}
greet('John', 'blue');
greet('Jane', 'green');

?>

<h1><?php bloginfo("name"); ?></h1>
<h1><?php bloginfo("description"); ?></h1>