<?php
// Valor da variável precototal
$precototal = $_GET['precototal'];

// VARIAVEL DE ACORDO COM A QUANTIDADE DE UM PASSAGEIRO
$redirecionamentos = array(
    138 => 'https://pay.pag-pass.site/BNjzgP4Az4egM78',
    286 => 'https://pay.pag-pass.site/N1nVZpK4DnL3lM6',
    640 => 'https://pay.pag-pass.site/lDW0Zax7A0r3N7E',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE DOIS PASSAGEIROS
	
    276 => 'https://pay.pag-pass.site/DPXw3XYnWq9Zzmp',
    572 => 'https://pay.pag-pass.site/n1NLgwkLa2YgMxE',
    1280 => 'https://pay.pag-pass.site/yOeXZKQx6lxgAQa',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE TRES PASSAGEIROS 
	
    414 => 'https://pay.pag-pass.site/7vJOGYeYa2pGKXd',
    858 => 'https://pay.pag-pass.site/5pjw3RVmj6m32lQ',
    1920 => 'https://pay.pag-pass.site/JqoR32Am5LdgVj5',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE QUATRO PASSAGEIROS
	
    552 => 'https://pay.pag-pass.site/4KovG1MA5pVGyDE',
    1144 => 'https://pay.pag-pass.site/YEwR3AQ06Mp3dKy',
    2560 => 'https://pay.pag-pass.site/rn4RgQWArknZwBV',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE CINCO PASSAGEIROS 

    69 => 'https://pay.pag-pass.site/v7R0gl1dmnz3Vr9',
    138 => 'https://pay.pag-pass.site/lqv1301LnzWZxbj',
    207 => 'https://pay.pag-pass.site/q510ZOdvLxJGE9D',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE TRES PASSAGEIROS

    143 => 'https://pay.pag-pass.site/xQBPZv0omOagmVq',
    286 => 'https://pay.pag-pass.site/6YQPgj5keOLGpxz',
    429=> 'https://pay.pag-pass.site/YL9jZD2vLNLgp4q',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE TRES PASSAGEIROS

    572 => 'https://pay.pag-pass.site/nOzxZo1YmONgJ07',
    320 => 'https://pay.pag-pass.site/v7R0gl1dm9z3Vr9',
    640 => 'https://pay.pag-pass.site/lqv1301LneWZxbj',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE TRES PASSAGEIROS

    960 => 'https://pay.pag-pass.site/4KovG1MoNXdGyDE',
    1280 => 'https://pay.pag-pass.site/YEwR3AQeLOP3dKy',
    // VARIAVEL DE ACORDO COM A QUANTIDADE DE TRES PASSAGEIROS
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
