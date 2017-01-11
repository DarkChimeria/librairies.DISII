 <?php

// Mélange un mot
function melange( $m )
{
  $s = $m[0];
  $n = strlen($s);

  // Moins de 4 lettres : pas de mélange à faire
  if( $n < 4 )
    return $s;
// Ne prends pas en compte : 1ère lettre et la dernière
  return $s[0] . str_shuffle( substr($s, 1, $n-2) ) . $s[$n-1];
}

$txtIn  = stripslashes( @$_REQUEST['texte'] );
$txtOut = preg_replace_callback('/\p{L}+/', 'melange', $txtIn );

?> 
