<?php
    class ColorFavorito
    {
        private $pdo; //para la BD
        //Aributos
        public $idcolorfavorito;
        public $idcolor;
        public $idcliente;

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

        public function RegistrarColorFavorito($data)
        {
            try
            {
                $sql = "INSERT INTO colorfavorito(idcolor, idcliente)
                        VALUES(?, ?)";

                $this->pdo->prepare($sql)->execute(array(
                    $data->idcolor,
                    $data->idcliente
                )
            );
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }

        public function ObtenerColoresFavoritos($id)
        {
            try
            {
                $stm = $this->pdo->prepare("SELECT cf.idcolorfavorito AS idcolorfavorito, c.nombre AS color FROM colorfavorito AS cf INNER JOIN color AS c ON cf.idcolor = c.idcolor WHERE cf.idcliente = ?");

                $stm->execute(array($id));

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Throwable $t)
            {
                die($t->getMessage());
            }
        }

        public function EliminarColorFavorito($id)
        {
            try
            {
                $sql = "DELETE FROM colorfavorito WHERE idcolorfavorito = ?";

                $this->pdo->prepare($sql)->execute(array($id));
            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }
    
    } //Fin de la clase
?>