<?php

require 'models/entity/usuario.php';

class UsuarioModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function loginPersona($datos)
    {
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM tb_usuario WHERE us_correo = :correo AND us_clave = :clave');
            $query->execute(['correo' => $datos['correo'], 'clave' => $datos['clave']]);
            if ($query->rowCount()) {
                while ($row = $query->fetch()) {
                    $resultado = [
                        'idUsuario' =>  $row['us_id'],
                        'rol' => $row['us_rol'],
                        'nombres' => $row['us_nombres']
                    ];
                    return $resultado;
                }
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "error con el servidor";
        }
    }

    function registrar($datos)
    {
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM tb_usuario WHERE us_correo = :correo ');
            $query->execute([
                'correo' => $datos['correo']
            ]);
            if ($query->rowCount()) {
                return false;
            }
            $query = $this->db->connect()->prepare('INSERT INTO tb_usuario( us_nombres, us_apellidos, us_cedula, us_correo, us_clave, us_telefono, us_direccion, us_municipio, us_departamento, us_rol) VALUES (:nombres,:apellidos,:cedula,:correo,:clave,:telefono,:direccion,:municipio,:departamento,:rol)');
            $query->execute([
                'nombres' => $datos['nombres'],
                'apellidos' => $datos['apellidos'],
                'cedula' => $datos['cedula'],
                'correo' => $datos['correo'],
                'clave' => $datos['clave'],
                'telefono' => $datos['telefono'],
                'direccion' => $datos['direccion'],
                'municipio' => $datos['municipio'],
                'departamento' => $datos['departamento'],
                'rol' => 1
            ]);
            return true;
        } catch (PDOException $e) {
            echo "error con el servidor";
        }
    }

    function listar($datos)
    {
        $items = [];
        try {
            $sql = "SELECT * FROM tb_usuario WHERE us_nombres LIKE " . "'%" . $datos['nombre'] . "%' LIMIT " . $datos['limPagina'] . ",15";
            $query = $this->db->connect()->prepare($sql);
            $query->execute();
            while ($row = $query->fetch()) {
                $item = new Usuario();
                $item->id = $row['us_id'];
                $item->nombres = $row['us_nombres'];
                $item->apellidos = $row['us_apellidos'];
                $item->cedula = $row['us_cedula'];
                $item->correo = $row['us_correo'];
                $item->clave = $row['us_clave'];
                $item->telefono = $row['us_telefono'];
                $item->direccion = $row['us_direccion'];
                $item->municipio = $row['us_municipio'];
                $item->departamento = $row['us_departamento'];
                $item->rol = $row['us_rol'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function numPaginasUsuario()
    {
        try {
            $query = $this->db->connect()->prepare('SELECT COUNT(*) FROM tb_usuario');
            $query->execute([]);

            $numero = 0;
            while ($row = $query->fetch()) {
                $numero = $row[0];
            }
            if ($numero != 0) {
                $numero = $numero / 15;
                $numero = ceil($numero);
                if ($numero > 20) {
                    $numero = 20;
                }
            }
            return $numero;
        } catch (PDOException $e) {
            echo "error con el servidor";
        }
    }

    function obtener($id)
    {
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM tb_usuario WHERE us_id=:id');
            $query->execute([
                'id' => $id
            ]);
            $item = new Usuario();
            while ($row = $query->fetch()) {
                $item->id = $row['us_id'];
                $item->nombres = $row['us_nombres'];
                $item->apellidos = $row['us_apellidos'];
                $item->cedula = $row['us_cedula'];
                $item->correo = $row['us_correo'];
                $item->clave = $row['us_clave'];
                $item->telefono = $row['us_telefono'];
                $item->direccion = $row['us_direccion'];
                $item->municipio = $row['us_municipio'];
                $item->departamento = $row['us_departamento'];
                $item->rol = $row['us_rol'];
            }
            return $item;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function editar($datos)
    {
        try {
            $query = $this->db->connect()->prepare('UPDATE tb_usuario SET us_nombres=:nombres,us_apellidos=:apellidos,us_cedula=:cedula,us_telefono=:telefono,us_direccion=:direccion,us_municipio=:municipio,us_departamento=:departamento WHERE us_id=:id');
            $query->execute([
                'id' => $datos['id'],
                'nombres' => $datos['nombres'],
                'apellidos' => $datos['apellidos'],
                'cedula' => $datos['cedula'],
                'telefono' => $datos['telefono'],
                'direccion' => $datos['direccion'],
                'municipio' => $datos['municipio'],
                'departamento' => $datos['departamento']
            ]);
            return true;
        } catch (PDOException $e) {
            echo "error con el servidor";
        }
    }

    function eliminar($id)
    {
        try {
            $query = $this->db->connect()->prepare('DELETE FROM tb_usuario WHERE us_id =:id');
            $query->execute([
                'id' => $id
            ]);
            return true;
        } catch (PDOException $e) {
            echo "error con el servidor";
        }
    }

    function cambiarContrasena($datos)
    {
        try {
            $query = $this->db->connect()->prepare('UPDATE tb_usuario SET us_clave=:pass WHERE us_correo=:correo');
            $query->execute([
                'correo' => $datos['correo'],
                'pass' => $datos['pass']
            ]);
            return true;
        } catch (PDOException $e) {
            echo "error con el servidor";
        }
    }

}
