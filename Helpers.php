<?php

function formatarValor(?float $valor = null): string
{
  return number_format(($valor?:0),2,',','.');
}

function formatarNumero(?string $numero): string
{
  return number_format($numero?:0,0,'.','.');
}


function saudacao()
{
  $hora = date('H');
  
  if($hora >= 0 AND $hora <= 5)
  {
    $saudacao = "Boa madrugada";
  } else if($hora >= 6 AND $hora <= 12)
  {
    $saudacao = "Bom dia";
  } else if($hora >= 12 AND $hora <= 18)
  {
    $saudacao = "Boa tarde";
  } else 
  {
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
function resumirTexto(string $texto, int $limite, string $continue = "..."): string
{
    $textoLimpo = trim(strip_tags($texto));

    if (mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }

    // Pegamos um trecho com o tamanho limite
    $parte = mb_substr($textoLimpo, 0, $limite);

    // Procuramos o último espaço dentro desse trecho
    $posicaoEspaco = mb_strrpos($parte, ' ');

    // Se encontrou espaço, corta até ele; senão, usa o trecho bruto
    $resumido = $posicaoEspaco !== false ? mb_substr($parte, 0, $posicaoEspaco) : $parte;

    return $resumido . $continue;
}
function contarTempo(string $data): string
{
  $agora = strtotime(date('Y-m-d H:i:s'));
  $data = strtotime($data);
  $diferenca = $agora - $data;
  
  $segundos = $diferenca;
  $minutos = round($diferenca / 60);
  $horas = round($diferenca / 3600);
  $dias = round($diferenca / 86400);
  $semanas = round($diferenca / 604800);
  $meses = round($diferenca / 2419200);
  $anos = round($diferenca / 29030400);
  
  if($segundos < 60)
  {
    return 'agora';
  }elseif($minutos < 60)
  {
    return ($minutos == 1 ? "há 1 minuto" : "há $minutos minutos");
  }elseif($horas < 24)
  {
    return ($horas == 1 ? "há 1 hora" : "há $horas horas");
  }elseif($minutos < 60)
  {
    return ($hora == 1 ? "há 1 minuto" : "há $minutos minutos");
  }elseif($minutos < 60)
  {
    return ($minutos == 1 ? "há 1 minuto" : "há $minutos minutos");
  }elseif($minutos < 60)
  {
    return ($minutos == 1 ? "há 1 minuto" : "há $minutos minutos");
  }elseif($minutos < 60)
  {
    return ($minutos == 1 ? "há 1 minuto" : "há $minutos minutos");
  }
}