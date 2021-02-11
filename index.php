<?php
$array = ['nome' => 'Pedro Luiz', 'endereco' => 'Av Taquara', 'telefone' => '(51) 5151-51511'];

function validaInt($v) {
    if($v === 198) {
        return 'Variavel ok';
    }

    return 'Variavel incorreta';
}

function validaArray($array) {
    if(is_array($array) && in_array('endereco', array_keys($array))) {
        return 'Array ok';
    }

    return 'Array incorreta';
}

function validaString($string) {
    if($string === 'Romarinho') {
        return 'String ok';
    }

    return 'String incorreta';
}

echo validaInt(198).'<br/>';
echo validaArray($array).'<br/>';
echo validaString('Romarinho');

// Não entendi quais tipos de verificação eram pra ser feitos na array, se puderem explicar melhor vou ficar grato de refazer o teste