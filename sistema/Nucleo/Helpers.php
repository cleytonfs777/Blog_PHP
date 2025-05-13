<?php
// require_once "sistema/configuracao.php";
function slug(string $texto): string {
    // Remove espaços no início e no fim
    $texto = trim($texto);

    // Converte caracteres acentuados para seus equivalentes sem acento
    $texto = strtr(utf8_decode($texto),
        utf8_decode('ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýýþÿ'),
        'AAAAAAACEEEEIIIIDNOOOOOOUUUUYbsaaaaaaaceeeeiiiionoooooouuuuyyby'
    );

    // Substitui todos os caracteres não alfanuméricos por espaço
    $texto = preg_replace('/[^a-zA-Z0-9\s]/', '', $texto);

    // Substitui qualquer quantidade de espaços por um único hífen
    $texto = preg_replace('/\s+/', '-', $texto);

    // Converte para minúsculas
    return strtolower($texto);
}

function dataCompletaTemplate(): string
{
  $diaMes = date("d");
  $diaSemana = date("w") -1;
  $mes = date("n") - 1;
  $ano = date("Y");

  $totalDiasSemana = [
    "segunda-feira", 
    "terça-feira",
    "quarta-feira",
    "quinta-feira",
    "sexta-feira",
    "sábado",
    "domingo",
  ];
  $totalMesesAno = [
    "janeio",
    "fevereiro",
    "março",
    "abril",
    "maio",
    "junho",
    "julho",
    "agosto",
    "setembro",
    "outubro",
    "novembro",
    "dezembro",
  ];

  $dataCompleta =
    $totalDiasSemana[$diaSemana] .
    ", " .
    $diaMes .
    " de " .
    $totalMesesAno[$mes] .
    " de " .
    $ano;

  return $dataCompleta;
}

function url(string $url): string
{
  $server_validate = $_SERVER["SERVER_NAME"];
  $result =
    $server_validate == "localhost" ? URL_DESENVOLVIMENTO : URL_PRODUCAO;
  return $result . $url;
}
function formatarValor(?float $valor = null): string
{
  return number_format($valor ?: 0, 2, ",", ".");
}

function formatarNumero(?string $numero): string
{
  return number_format($numero ?: 0, 0, ".", ".");
}

function saudacao()
{
  $hora = date("H");

  if ($hora >= 0 and $hora <= 5) {
    $saudacao = "Boa madrugada";
  } elseif ($hora >= 6 and $hora <= 12) {
    $saudacao = "Bom dia";
  } elseif ($hora >= 12 and $hora <= 18) {
    $saudacao = "Boa tarde";
  } else {
    $saudacao = "Boa noite";
  }
  return $saudacao;
}
/**
 * Resume um texto passado por parametro
 *
 * @param string $texto Texto base que sera utilizado para resumirTexto
 * @param int $limite Quantidade limite de caracteres que serao informados sem quebra de palavras
 * @param string $continue optional - O que sera colocado no final do texto $resumido
 * @return string Texto resumido
 */
function resumirTexto(
  string $texto,
  int $limite,
  string $continue = "..."
): string {
  $textoLimpo = trim(strip_tags($texto));

  if (mb_strlen($textoLimpo) <= $limite) {
    return $textoLimpo;
  }

  // Pegamos um trecho com o tamanho limite
  $parte = mb_substr($textoLimpo, 0, $limite);

  // Procuramos o último espaço dentro desse trecho
  $posicaoEspaco = mb_strrpos($parte, " ");

  // Se encontrou espaço, corta até ele; senão, usa o trecho bruto
  $resumido =
    $posicaoEspaco !== false ? mb_substr($parte, 0, $posicaoEspaco) : $parte;

  return $resumido . $continue;
}
function contarTempo(string $data): string
{
  $agora = strtotime(date("Y-m-d H:i:s"));
  $data = strtotime($data);
  $diferenca = $agora - $data;

  $segundos = $diferenca;
  $minutos = round($diferenca / 60);
  $horas = round($diferenca / 3600);
  $dias = round($diferenca / 86400);
  $semanas = round($diferenca / 604800);
  $meses = round($diferenca / 2419200);
  $anos = round($diferenca / 29030400);

  if ($segundos < 60) {
    return "agora";
  } elseif ($minutos < 60) {
    return $minutos == 1 ? "há 1 minuto" : "há $minutos minutos";
  } elseif ($horas < 24) {
    return $horas == 1 ? "há 1 hora" : "há $horas horas";
  } elseif ($semanas < 4) {
    return $semanas == 1 ? "há 1 semana" : "há $semanas semanas";
  } elseif ($dias < 31) {
    return $dias == 1 ? "há 1 dia" : "há $dias dias";
  } elseif ($meses < 12) {
    return $meses == 1 ? "há 1 mês" : "há $meses meses";
  } elseif ($anos < 60) {
    return $anos == 1 ? "há 1 ano" : "há $anos anos";
  }
}

function validarUrl(string $url): bool
{
  if (mb_strlen($url) < 10) {
    return false;
  } elseif (!str_contains($url, ".")) {
    return false;
  } elseif (str_contains($url, "http://") or str_contains($url, "https://")) {
    return true;
  }
  return false;
}
function validarUrlComFiltro(string $url): bool
{
  return filter_var($url, FILTER_VALIDATE_URL);
}
function validarEmail(string $email): bool
{
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function localhost(): bool
{
  $servidor = filter_input(INPUT_SERVER, "SERVER_NAME");

  return $servidor == "localhost";
}
