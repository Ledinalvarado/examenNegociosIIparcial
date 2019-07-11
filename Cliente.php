<?php
require_once 'Conexion.php';

class Cliente
{
    public $nombre_completo;
    public $email;


    public static function llenar(array $arreglo){

        foreach ($arreglo as $dato){
            echo $dato;
        }
//        echo $arreglo;
//        print_r($arreglo);

    }

    public static function guardar(PDO $pdo){



    }

    /**
     * @return mixed
     */
    public function getNombreCompleto()
    {
        return $this->nombre_completo;
    }

    /**
     * @param mixed $nombre_completo
     */
    public function setNombreCompleto($nombre_completo)
    {
        $this->nombre_completo = $nombre_completo;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}