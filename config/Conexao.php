<?php
/**
Classe que contem os parametros para conexao e o método
 * que retorna a conexao
 */

class Conexao{
    //credenciais de acesso ao BD
    private $host = 'localhost';
    private $dbname = 'meu_blog';
    private $user = 'meu_blog';
    private $passwd = 'meu_blog';
    //variavel para a conexao
    private $conexao;

    public function getConexao(){
        //estabelecer uma conexao e retornar a variavel com a conexao
        $this->conexao = null;

        try{ //tenta fazer a conexao
            $this->conexao = new PDO('mysql:host='.$this->host.
                ';dbname='.$this->dbname, $this->user, $this->passwd);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo "Erro na conexão: ".$e->getMessage();
        }
        return $this->conexao;
    }
}
