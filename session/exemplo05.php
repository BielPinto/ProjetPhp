<?php


require_once ("config.php");
//  session_save_path mostra onde esta salvando a sessão 
echo session_save_path()."<br>";
// mostra  ou 0 = _DISABLED OU 1 = NONE HABILITADA MAS NUNHUMA EXISTE OU 2 = ACTIVE ATIVADA E EXISTE SESSÃO
var_dump(session_status());

switch(session_status()) {

	case PHP_SESSION_DISABLED:
		echo "as sessões estiverem desabilitadas ";
		break;
	
	case  PHP_SESSION_NONE:
		echo "as sessões estiverem habilitadas, mas nenhuma existe ";
		break;
	case  PHP_SESSION_ACTIVE:
		echo "as sessões estiverem habilitadas, uma sessão existe";
		break;
}

?>