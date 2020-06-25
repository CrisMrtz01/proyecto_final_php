<?php
    class TallaCliente //Inicio de la clase
    {
        private $pdo; //para la bd
        //atributos
        private $idtallacliente;
        public $idtalla;
        public $idcliente;
        public $detalle;

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

        public function RegistrarTallaCliente($data)
        {
            try
            {
                $sql = "INSERT INTO tallacliente(idtalla, idcliente, detalle)
                            VALUES(?, ?, ?)";
                
                $this->pdo->prepare($sql)->execute(array(
                        $data->idtalla,
                        $data->idcliente,
                        $data->detalle
                ));
            }
            catch(Throwable $t)
            {
                die($t->getMessage());
            }
        }

        public function ObtenerTallasClientes($id)
        {
            try
            {
                $stm = $this->pdo->prepare("SELECT tc.idtallacliente AS idtallacliente, t.nombre AS talla, tc.detalle AS detalle FROM tallacliente AS tc INNER JOIN talla AS t ON tc.idtalla = idtalla WHERE tc.idcliente = ?");

                $stm->execute(array($id));

                return $stm->fetchAll(PDO::FETCH_OBJ);
            }
            catch(Throwable $t)
            {
                die($t->getMessage());
            }
        }

        public function EliminarTallaCliente($id)
        {
            try
            {
                $sql = "DELETE FROM tallacliente WHERE idtallacliente = ?";

                $this->pdo->prepare($sql)->execute(array($id));

            }
            catch (Throwable $t)
            {
                die($t->getMessage());
            }
        }

    } //Fin de la clase
?>