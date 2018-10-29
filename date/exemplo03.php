<?php

// O LC_ALL MUDA TODA A CONFIGURAÇÃO DE LOCALIZAÇÃO PARA O IDIOMA ESCOLHIDO
setlocale(LC_ALL, "pr_BR", "pt_BR.utf-8", "portuguese");

echo ucwords( strftime("%A %B"));

?>