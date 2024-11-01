<?php 
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "PW_BD"; 

$script = "
    CREATE DATABASE PW_BD;
    USE PW_BD;
    
    CREATE TABLE CATEGORIAS(
        IDCAT INT PRIMARY KEY AUTO_INCREMENT,
        DESCRICAO VARCHAR(120)
        );
        
        INSERT INTO CATEGORIAS       
        (DESCRICAO)VALUES('TECNOLOGIA'),('ELETRODOMESTICO'),('ROUPA E BANHO'),('QUARTO E COZINHA'),('LIMPEZA'),('UTILITARIOS');
    CREATE TABLE PRODUTOS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        DESCRICAO VARCHAR(150) NOT NULL,
        CODIGO_BARRAS VARCHAR(25) NOT NULL,
        VALOR DECIMAL(10,2) NOT NULL,
        IMAGEM VARCHAR(50),
        ATIVO BIT NOT NULL,
        IDCAT INT,
        FOREIGN KEY (IDCAT) REFERENCES CATEGORIAS(IDCAT)
        );  
    INSERT INTO produtos (DESCRICAO, VALOR, CODIGO_BARRAS, ATIVO, IDCAT) VALUES
    ('Camiseta Estampada - 100% Algodão', 49.90, '1234567890123', 1, 3),
    ('Tênis Esportivo - Conforto e Estilo', 299.90, '1234567890124', 1, 3),
    ('Smartphone XPro - 128GB, Câmera 48MP', 1999.00, '1234567890125', 1, 1),
    ('Caderno Universitário - 200 Folhas', 29.90, '1234567890126', 1, 6),
    ('Mochila de Couro - Elegante e Espaçosa', 249.90, '1234567890127', 1, 6),
    ('Fone de Ouvido Bluetooth - Cancelamento de Ruído', 149.90, '1234567890128', 1, 1),
    ('Relógio Digital - À Prova D\'água', 199.90, '1234567890129', 1, 6),
    ('Lavadora de Roupas - 10Kg', 1599.00, '1234567890130', 1, 2),
    ('Batedeira Elétrica - 5 Velocidades', 399.90, '1234567890131', 1, 2),
    ('Kit de Maquiagem - 12 Peças', 89.90, '1234567890132', 1, 6),
    ('Cafeteira Elétrica - 12 Xícaras', 299.90, '1234567890133', 1, 2),
    ('Conjunto de Panelas - Antiaderente', 349.90, '1234567890134', 1, 4),
    ('TV LED 50\" - Full HD', 2499.00, '1234567890135', 1, 1),
    ('Geladeira Inverse - 450 Litros', 3499.00, '1234567890136', 1, 2),
    ('Assento de Carro - Conforto e Segurança', 199.90, '1234567890137', 1, 6),
    ('Conjunto de Facas de Cozinha - 6 Peças', 129.90, '1234567890138', 1, 4),
    ('Roupão de Banho - Microfibra', 89.90, '1234567890139', 1, 3),
    ('Aspirador de Pó - Sem Fio', 599.90, '1234567890140', 1, 2),
    ('Secador de Cabelo - 2200W', 199.90, '1234567890141', 1, 6),
    ('Jogo de Lençóis - 150 Fios', 159.90, '1234567890142', 1, 4);

    
    
";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>