<?php
    class Conexao
    {
        public static function conectar()
        {
        //informações do banco de dados
        $servidor="localhost";
        $banco="filmeOn";
        $usuario="root";
        $senha="";

        // $conexao = new PDO("TIPO_BANCO:host=SERVIDOR;dbname=NOME_BANCO", "USUARIO", "SENHA"); 
        $conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha); 
                
        //se acontecer alguma coisa de errado no banco conseguimo ver melhoro erro
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            
        return $conexao;
        }
    }

?>