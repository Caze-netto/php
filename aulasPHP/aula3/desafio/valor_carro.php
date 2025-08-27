<?php
    $valor_carro = 0;
    $custo_fabrica = $_REQUEST["custo"];

    if ($custo_fabrica > 39999) {
        $valor_carro = $custo_fabrica + ($custo_fabrica * 0.05) + ($custo_fabrica * 0.1);
    }
    elseif ($custo_fabrica >= 40000 && $custo_fabrica < 69999) {
        $valor_carro = $custo_fabrica + ($custo_fabrica * 0.1 ) + ($custo_fabrica * 0.2);
    }
    else {
        $valor_carro = $custo_fabrica + ($custo_fabrica * 0.2) + ($custo_fabrica * 0.2);
    }

    print"O valor do carro eh: ". $valor_carro ."";