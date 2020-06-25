<?php
    class PreguntaSecreta //Inicio de la clase
    {
        private $pdo; //Para la base de datos
        //atributos
        public $idpreguntasecreta;
        public $nombre;

        //Constructor
        public function __construct()
        {
            try
            {
                $this->pdo = Conexion::Conectar();
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }

        //Generar lista de datos
        public function ListarPreguntasSecretas()
        {
            try
            {

                $stm = $this->pdo->prepare("SELECT * FROM preguntasecreta");

                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }

        //Buscar registro por ID
        public function ObtenerPreguntaSecreta($id)
        {
            try
            {

                $stm = $this->pdo->prepare("SELECT * FROM preguntasecreta WHERE idpreguntasecreta = ?");

                $stm->execute(array($id));

                return $stm->fetch(PDO::FETCH_OBJ);
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }    
        }
    }//Fin de la clase
?>