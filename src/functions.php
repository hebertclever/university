<?php
function generateDNI() {
    $randomDigits = rand(100000, 999999);  
    $dni = "070" . $randomDigits; 
    return $dni;
}
