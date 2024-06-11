<?php
// Valor da variável precototal
$precototal = $_GET['precototal'];

// VARIAVEL DE ACORDO COM A QUANTIDADE DE UM PASSAGEIRO
$redirecionamentos = array(
    138 => 'https://pay.ofertpassagem.shop/1VOvGVYkJO9ZD62',
    286 => 'https://pay.ofertpassagem.shop/nWrxGWKkVvoG654',
    640 => 'https://pay.ofertpassagem.shop/lDW0ZaxVr763N7E',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE DOIS PASSAGEIROS
	
    276 => 'https://pay.ofertpassagem.shop/zj6aGnqWDaOZwlK',
    572 => 'https://pay.ofertpassagem.shop/kYL6gea7VlagrKM',
    1280 => 'https://pay.ofertpassagem.shop/eApQgzkeX943Eb7',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE TRES PASSAGEIROS 
	
    414 => 'https://pay.ofertpassagem.shop/YL9jZD2Qvv6gp4q',
    858 => 'https://pay.ofertpassagem.shop/xQBPZv08oDYgmVq',
    1920 => 'https://pay.ofertpassagem.shop/BNjzgP46zBJgM78',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE QUATRO PASSAGEIROS
	
    552 => 'https://pay.ofertpassagem.shop/N1nVZpKEDxe3lM6',
    1144 => 'https://pay.ofertpassagem.shop/DPXw3XYk8KdZzmp',
    2560 => 'https://pay.ofertpassagem.shop/ODAK3LnovMoGE6V',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE CINCO PASSAGEIROS 
);

// Verifica se o valor existe no array e redireciona
if (array_key_exists($precototal, $redirecionamentos)) {
    header('Location: ' . $redirecionamentos[$precototal]);
    exit;
} else {
    // Redirecionamento padrão caso o valor não esteja definido
    header('Location: https://outrosite.com');
    exit;
}
?>
