<?php
require_once 'data.php';
include_once 'staff.php';
$id = 1;
//if (!empty($_GET['id'])) {
//    $id = intval($_GET['id']);
//}
foreach ($data as $staff) {
    echo new Staff($staff);
    echo '<br/>';
    echo '<br/>';
}

?>
