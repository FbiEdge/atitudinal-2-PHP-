<?php
 // Exercicio 1

$produto_dados = [
        "produto" => "Camisa DnD - Tamanho M",
        "data_pagamento" => "01/02/2024",        
        "pago" => false
        ];
        
function produtos($dados_produtos){
    
    if($dados_produtos["pago"]){
        echo "pagou";
    }else{
        echo "não pagou";
    }
    
};

produtos($produto_dados);

 // Exercicio 2
 
$aluno = [
            "nome" => "João",
            "notas" => [
            "prova1" => 8,
            "prova2" => 7,
            "prova3" => 6,
            "prova4" => 9]
        ];
        
function media($calculo){
    
    $calcularamedia = 
    ($calculo["notas"]["prova1"] +
    $calculo["notas"]["prova2"] +
    $calculo["notas"]["prova3"] +
    $calculo["notas"]["prova4"])/4;
    
    echo"\n{$calcularamedia}\n";
    
};

media($aluno);


// exercicio 3

$a =  [
        [
            "nome" => "João",
            "idade" => 20
        ],
        [
            "nome" => "Maria",
            "idade" => 22
        ],
        [
            "nome" => "José",
            "idade" => 21
        ]
    ];
   
function mostrar($a) {
    echo $a[0]['nome'] . " " . $a[0]['idade'] . "\n" .
         $a[1]['nome'] . " " . $a[1]['idade'] . "\n" .
         $a[2]['nome'] . " " . $a[2]['idade'] . "\n";
}

   
    mostrar($a);

// exercicio 4
function verificarUsuario($novoUsuario, $usuarios) {

    if (strlen($novoUsuario["nome"]) <= 3) {
        echo "Erro: Nome deve ter mais de 3 caracteres.\n";
        return null;
    }
    

    if ($novoUsuario["idade"] <= 18) {
        echo "Erro: Idade deve ser maior que 18.\n";
        return null;
    }
    

    if (strlen($novoUsuario["email"]) <= 10) {
        echo "Erro: Email deve ter mais de 10 caracteres.\n";
        return null;
    }
    

   if (strlen($novoUsuario["senha"]) <= 8) {
        echo "Erro: Senha deve ter mais de 8 caracteres.\n";
        return null;
    }
    
    
    foreach ($usuarios as $usuario) {
        if ($usuario["email"] === $novoUsuario["email"]) {
            echo "Erro: Usuário já cadastrado.\n";
            return null;
        }
    }
    
    $usuarios[] = $novoUsuario;
    echo "Usuário cadastrado com sucesso.\n";
    return $novoUsuario;  
}

$usuarios = [
    [
        "nome" => "João",
        "idade" => 20,
        "email" => "email@email.com",
        "senha" => "12345678"
    ]
];

$novoUsuario = [
    "nome" => "Guilherme",
    "idade" => 19,
    "email" => "meu.email@email.com",
    "senha" => "abc12312312"
];

$novoUsuarioCadastrado = verificarUsuario($novoUsuario, $usuarios);



//if ($novoUsuarioCadastrado) {
    //echo "Novo usuário cadastrado com sucesso:\n";
  //  print_r($novoUsuarioCadastrado);
//} else {
  //  echo "Não foi possível cadastrar o novo usuário.\n";
    
//}
if ($novoUsuarioCadastrado) {
    echo "Login feito com sussesso:\n";
    print_r($usuarios);
} else {
    echo "não foi possivel logar.\n";
    
}

?>
