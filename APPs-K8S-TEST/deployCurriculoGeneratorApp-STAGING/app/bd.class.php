<?php

class bd {
    private $host = "10.1.203.25";
    private $user = "curriculo-dev";
    private $password = "h4ck3rSA@181915";
    private $database = "curriculo_dev";

    public function conn_db(){
        $link = mysqli_connect($this->host, $this->user, $this->password, $this->database) or die("Erro ao conectar ao banco de dados: " . mysqli_error());
        $link->set_charset("utf8");
        return $link;
    }
}
?>
