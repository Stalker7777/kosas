<?php

include('collection.php');

$collection = new Collection();

$a = [1, 34, 3, 98, 9, 76, 45, 4];

$result1 = $collection->arrangeBiggestNumber($a);

$a = [0, 1, 2, 3, 4, 5, 6, 10, 11, 12, 13, 25, 26, 27, 28, 30, 40, 41, 42, 50, 51];

$result2 = $collection->summaryRanges($a);

//$s = 'abcdeef';
//$s = 'jabjcdel';
$s = 'surhvyworualprmchd';

$result3 = $collection->longestLength($s);

?>

<div>

    <div>Составление наибольшего числа</div>

    <div><?= $result1; ?></div>

</div>

<div>
    
    <div>Список диапазонов</div>
    
    <div>
        <?php foreach($result2 as $item) { ?>
            <div><?= $item; ?></div>
        <?php } ?>
    </div>
    
</div>

<div>
    
    <div>Самая длинная подстрока</div>
    
    <div><?= $result3; ?></div>

</div>
