<?php

require_once 'Identitas.php';

$identitas = new Identitas("John Doe", "Jl. Raya", 25, "Laki-laki", "081234567890", "john.doe@example.com");

$identitas->tampilkanIdentitas();

?>
