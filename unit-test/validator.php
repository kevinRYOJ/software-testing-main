<?php
// file: validator.php

function validateAge($age)
{
    // harus angka
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka.");
    }

    // tidak boleh negatif
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif.");
    }

    return true;
}

function validateName($name)
{
    // harus string
    if (!is_string($name)) {
        throw new InvalidArgumentException("Nama harus berupa teks.");
    }

    // tidak boleh kosong
    if (trim($name) === '') {
        throw new InvalidArgumentException("Nama tidak boleh kosong.");
    }

    return true;
}
