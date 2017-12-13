<pre><?php
//Define o nome da classe a ser criada, no nosso caso Conexao
class Conexao{
    //Abaixo as respectivas variaveis para cada atributo de nossa classe
    protected $hostname;
    protected $banco;
    protected $usuario;
    protected $senha;
    //Dois atributos extras, um para guardar o comando sql e outro para guardar o link conexao
    protected $conn;
    protected static $link = "";

    function __construct($servidor, $usuario, $senha, $banco) {
        $this->hostname = $servidor;
        $this->usuario = $usuario;
        $this->senha = $senha;
        $this->banco = $banco;
    }

    public function conectar()
    {
        try
        {
            parent::__construct($this->hostname, $this->usuario, $this->senha, $this->banco);
            if(mysqli_connect_errno() != 0)
            {
                throw new Exception('Erro ao conectar!');
            }
        }
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }
}


$db = new Conexao(CON_HOST, CON_USER, CON_PWD, CON_DB);
$db->conectar();

/*    function __construct(){
        $this->hostname = "localhost";
        $this->banco    = "id3322788_cadastro";
        $this->usuario  = "id3322788_root";
        $this->senha    = 12345678;
        $this->conn = mysqli_connect($this->hostname,$this->usuario,$this->senha) or die (mysqli_error());
        //Seleciona o banco a ser usado no mysqli
        mysqli_select_db($this->conn, $this->banco) or die (mysqli_error());
        //print_r($this);
    //}

    public function setConectar()
    {
        //Faz a conexao com ao banco e armazena na variavel this->link
        $link = mysqli_connect($this->hostname,$this->usuario,$this->senha) or die (mysqli_error());
        /* checa conexao */
        //if ( mysqli_connect_errno ()) {
            //printf ( "Conexao Falhou: %s\n" , mysqli_connect_error ());
           // exit();
       // }
        //Seleciona o banco a ser usado no mysqli
       //  mysqli_select_db($link,"id3322788_cadastro") or die (mysqli_error());
   // }

    /**
     * @return mysqli
     */
    //public function getConectar()
   // {
    //    return $this->link;
   // }*/
}
?>