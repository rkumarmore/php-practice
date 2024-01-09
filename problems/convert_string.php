<?php
$s = str_split('#A#B#B#', 1);
$t = str_split('A###B#B', 1);


array_walk($s, function ($s) {
}, $t);
