  <!-- CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Ícones do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<?php
require_once "sistema/configuracao.php";
include_once "sistema/Nucleo/Helpers.php";
include "./sistema/Nucleo/Mensagem.php";

use sistema\Nucleo\Mensagem as msg;

echo "<h1>Hello word</h1>";
echo "<h2>Classes</h2>";
echo "<br>";

echo (new msg)->sucesso("Mensagem de sucesso");

//echo $msg->sucesso("Mensagem de Sucesso")->renderizar();
//echo $msg->erro("Mensagem de Erro")->renderizar();
//echo $msg->alerta("Mensagem de Alerta")->renderizar();
//echo $msg->info("Mensagem de Informação")->renderizar();

echo "<hr>";

//var_dump($msg);

echo "<hr>";

echo dataCompletaTemplate();

echo "<hr>";

echo url("/Helpers");

echo "<hr>";

echo NOME_SITE;

echo "<hr>";
echo var_dump(localhost());

echo "<hr>";

//echo contarTempo('2025-04-24 18:35:00');

if (validarEmail("teste@gmail.com")) {
  echo "E-mail é válido";
} else {
  echo "E-mail é inválido";
}
echo "<hr>";
if (validarUrl("http://globo.com")) {
  echo "Url é válida";
} else {
  echo "Url é inválida";
}
?>    
