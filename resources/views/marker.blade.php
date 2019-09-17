<?php
header('Content-Type: application/json');

/* data uit database terug naar vorig form */
$marker = array(
['lat'=>1.7788481178788205,'lng'=>51.60656920854833],
['lat'=>3.7788481178788205,'lng'=>51.60656920854833],
['lat'=>2.7788481178788205,'lng'=>51.60656920854833]
);



/*data vanaf het formulier, dus update user table data */
//$lat = $_GET['lat'];
//$lon = $_GET['lng'];

echo json_encode($marker);