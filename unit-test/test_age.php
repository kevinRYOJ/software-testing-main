<?php
//file: test_age.php
require_once "validator.php";

//Test case 1: umur valid 
try {
    $result = validateAge(25);
    echo "PASS: umur 25 diterima\n";
    
} catch (Exception $e) {
    echo "FAIL: umur 25 tidak diterima. Error: " . $e->getMessage() . "\n";
}

//test case nama valid
try {
    $result = validateName("Kevin");
    echo "PASS: nama 'Kevin' diterima\n";
} catch (Exception $e) {
    echo "FAIL: nama 'Kevin' tidak diterima. Error: " . $e->getMessage() . "\n";
}

//test case nama kosong 
try {
    $result = validateName("   ");
    echo "FAIL: nama kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: nama kosong ditolak. Pesan: " . $e->getMessage() . "\n";
}
