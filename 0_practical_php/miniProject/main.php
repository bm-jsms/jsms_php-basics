<?php

$words = array("moon", "sky", "sun");
$messyWords = array();

for ($i = 0; $i < count($words); $i++) {
    $messyWords[$i] = str_shuffle($words[$i]);
}

print_r($messyWords);

echo "
<form action='test.php'>
    <input type='text' name='word1'' />
    <input type='text' name='word2'' />
    <input type='text' name='word3'' />
    <button type='submit'>Submit</button>
</form>
"

?>