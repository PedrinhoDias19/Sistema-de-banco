<?php



include_once 'banco.php';



function sacar(array &$conta, float $valorASacar) {
    
    if($valorASacar >$conta['saldo']) {



        ("Não foi possível concluir a transação, seu saldo é insuficiente, saldo atual: " . $conta['saldo'] );
   }

   else {

    ( $conta['titular'] . ", após o saque efetuado de: " . 'R$' .  $valorASacar . ", seu saldo atual é: " . 'R$' . $conta['saldo']  -= $valorASacar) ;
   
}
}

function depositar(array &$conta, float $valorDeposito) {

    
    if($valorDeposito > 0){
        ( $conta['titular'] . ', você recebeu um depósito no valor de: ' . 'R$' .  $valorDeposito .'!' . pulaLinha().  ' Seu saldo atual é de: ' .  'R$' . $conta['saldo'] += $valorDeposito);
    echo pulaLinha();

    }

    else {

        exibeMensagem("Opa! Esse valor é inválido para depósito!");
    }
}

function exibeMensagem($mensagem) {

    echo $mensagem . '<br>';
}

function pulaLinha() {

    echo '<br>';
}