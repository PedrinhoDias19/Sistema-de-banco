<?php 

include_once 'funcoes.php';


$valorSaque = 6000;




$contasCorrentes = ['1282749-01' =>[
    'titular' => "Pedro",
    'saldo' => 100000
],

'12826738-02' => [

    'titular' => 'Sergio',
    'saldo' => 10000
],

  '1029201-03'=> [

    'titular' => 'Patricia',
    'saldo' => 4000
      
]
  ];

  



  


 foreach($contasCorrentes as $cpf => $conta) {

  list('titular' => $titular, 'saldo' => $saldo) = $conta;
    
(pulaLinha() . $titular . ' , seu saldo atual é de:  ' . 'R$' .  $saldo );
depositar($conta, 2000);
sacar($conta, $valorSaque);
echo pulaLinha();

}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1> Contas Correntes</h1>

  <dl>
    <?php foreach($contasCorrentes as $conta) { ?>
<dt><h2><?php echo $conta['titular']?></h2></dt>
<dd><?php echo $conta['saldo'] ?></dd>
<?php } ?>
  </dl>
</body>
</html>
