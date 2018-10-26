<?php
//aprendedo a usar o include chamando a função do exempo01
//include "exemplo01.php";// tem mais recursos do que o require e permite a execução da função até certo ponto caso o codigo aprendete erros 

// include te dar acesso ao include pahf u(pasta que vc pode mapear no So) e fazer repositorio de arquivo  e includes dinamicos

//require_once ou include_once evita  um laço de chamar  a funçãoa Cidentalmete mais de uma vez, 
require_once "exemplo01.php";// tem menos recurso e não roda se o codigo todo não estiver funcionando corretamente e tras um erro fatal 
require_once "exemplo01.php";
$resultado = somar(10,20);
echo $resultado;



?>