<?php
header('content-type: application/json');
$conn = mysqli_connect("localhost", "root", "", "ultra");
$select = mysqli_query($conn, "select * from sensor");

if (mysqli_num_rows($select) > 0) {
    $rows = [];
    while ($row = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo json_encode([]);
}
?>
