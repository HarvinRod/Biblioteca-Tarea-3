<?php
require_once 'BD/ConexionBD.php';

class BDLibreria {
    private $conexion;

    public function __construct() {
        $this->conexion = new ConexionBD();
    }

    public function getTitulos() {
        $conexion = $this->conexion->getConexion();
        $resultado = [];
        try {
            $consulta = "SELECT * FROM titulos";
            $stmt = $conexion->query($consulta);
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener títulos: " . $e->getMessage();
        }
        return $resultado;
    }

    public function getAutores() {
        $conexion = $this->conexion->getConexion();
        $resultado = [];
        try {
            $consulta = "SELECT * FROM autores";
            $stmt = $conexion->query($consulta);
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Error al obtener autores: " . $e->getMessage();
        }
        return $resultado;
    }
}
?>