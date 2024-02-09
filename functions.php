<?php
$conn = mysqli_connect('localhost', 'root', '', 'kalender');
function tampil($select)
{
    global $conn;
    $query = mysqli_query($conn, $select);
    $wadah = [];
    while ($isi = mysqli_fetch_assoc($query)) {
        $wadah[] = $isi;
    }
    return $wadah;
}

function tampil2($select2)
{
    global $conn;
    $query = mysqli_query($conn, $select2);
    $wadah2 = [];
    while ($isi2 = mysqli_fetch_assoc($query)) {
        $wadah2[] = $isi2;
    }
    return $wadah2;
}

//hapus
function hapus($delete)
{
    global $conn;
    $query = mysqli_query($conn, $delete);
    return $query;
}
function hapus2($delete2)
{
    global $conn;
    $query2 = mysqli_query($conn, $delete2);
    return $query2;
}
