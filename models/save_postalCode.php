<?php

$registration = array(
    'postal_regCode' => "'" . $_POST['inp_region'] . "'",
    'postal_provCode' => "'" . $_POST['inp_province'] . "'",
    'postal_citymunCode' => "'" . $_POST['inp_citymun'] . "'",
    'postal_Code' => "'" . $_POST['inp_postal_Code'] . "'",
);

save($registration);

function save($data)
{
    include ('../config/database.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));

    $postal_id = $_POST['inp_postal_Code'];
    $validate = "SELECT COUNT(*) AS i FROM ph_postalcode WHERE postal_Code LIKE '$postal_id'";

    $rs = $conn->query($validate);
    $count = $rs->fetch_assoc();

    if ($count['i'] == 0) {
        $query = "INSERT INTO ph_postalcode ($attributes) VALUES ($values)";
        $conn->query($query);
        header('location: /resources/postalCode.php?success');
    } else {
        header('location: /resources/postalCode.php?invalid');
    }

    $conn->close();
}