<?php
    class conexao {
        public function pegarConexao() {
            $conexao = new PDO('mysql:host=localhost;dbname=portal_noticia_php', 'root', '');
            return $conexao;
        }
    }
?>