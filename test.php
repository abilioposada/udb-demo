<?php

$resultado = file_get_contents( "./index.php" ) === '<?= "Hello world" ?>';

if ( !$resultado ) {
    throw new Exception( "Error" );
}

echo "Success";