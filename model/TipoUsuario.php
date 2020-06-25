<?php
    class TipoUsuario //Inicio clase
    {
        private $pdo; //para la bd
        //atributos
        public $idtipousuario;
        public $nombre;
        public $descripcion;

        //Constructor
        public function __CONSTRUCT()
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
        public function ListarTipoUsuarios()
        {
            try
            {
                
                $stm = $this->pdo->prepare("SELECT * FROM tipousuario");

                $stm->execute();

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }

        //Buscar un registro por ID
        public function ObtenerTipoUsuario($id)
        {
            try
            {
                $stm = $this->pdo->prepare("SELECT * FROM tipousuario WHERE idtipousuario = ?");

                $stm->execute(array($id));

                return $stm->fetch(PDO::FETCH_OBJ);
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }
    }  //Fin de la clase
?>