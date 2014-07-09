<?php
namespace Franbella\Bundle\SiteBundle\Entity;
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Almir Junior
 */
class Conexao {
    
    private $host;
    private $user;
    private $pass;
    private $bd;
    public function getHost() {
        return $this->host;
    }

    public function setHost($host) {
        $this->host = $host;
    }

    public function getUser() {
        return $this->user;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function getPass() {
        return $this->pass;
    }

    public function setPass($pass) {
        $this->pass = $pass;
    }

    public function getBd() {
        return $this->bd;
    }

    public function setBd($bd) {
        $this->bd = $bd;
    }
    
    function conecta(){
        $servidor = 'localhost';
//        echo $servidor;
        $conexao = mysql_connect('localhost', "root", "");
        if($conexao){
            mysql_select_db("franbella");
            mysql_query("SET ANSI_NULLS ON", $conexao);
            mysql_query("SET ANSI_WARNINGS ON", $conexao);
        } else{
            die ("Erro: ".mysql_get_last_message());
        }
//        mysql_query("SET NAMES 'utf8'");
//        mysql_query('SET character_set_connection=utf8');
//        mysql_query('SET character_set_client=utf8');
//        mysql_query('SET character_set_results=utf8');
        return $conexao;
    }
    
    function desconecta($conexao){
        mysql_close($conexao);
    }
}

?>
