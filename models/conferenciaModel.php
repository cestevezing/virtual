<?php

require 'models/entity/conferencia.php';

class ConferenciaModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function agregar($datos)
    {
        try {
            $query = $this->db->connect()->prepare('INSERT INTO tb_conferencia(co_nombre, co_descripcion, co_gestores, co_url) VALUES (:nombre,:descripcion,:gestores,:urlV)');
            $query->execute([
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'gestores' => $datos['gestores'],
                'urlV' => $datos['url']
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
            $sql = "SELECT * FROM tb_conferencia WHERE co_nombre LIKE " . "'%" . $datos['nombre'] . "%' LIMIT " . $datos['limPagina'] . ",12";
            $query = $this->db->connect()->prepare($sql);
            $query->execute();
            while ($row = $query->fetch()) {
                $item = new Conferencia();
                $item->id = $row['co_id'];
                $item->nombre = $row['co_nombre'];
                $item->descripcion = $row['co_descripcion'];
                $item->gestores = $row['co_gestores'];
                $item->url = $row['co_url'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function numPaginasConferencias()
    {
        try {
            $query = $this->db->connect()->prepare('SELECT COUNT(*) FROM tb_conferencia');
            $query->execute([]);

            $numero = 0;
            while ($row = $query->fetch()) {
                $numero = $row[0];
            }
            if ($numero != 0) {
                $numero = $numero / 12;
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
            $query = $this->db->connect()->prepare('SELECT * FROM tb_conferencia WHERE co_id=:id');
            $query->execute([
                'id' => $id
            ]);
            $item = new Conferencia();
            while ($row = $query->fetch()) {
                $item->id = $row['co_id'];
                $item->nombre = $row['co_nombre'];
                $item->descripcion = $row['co_descripcion'];
                $item->gestores = $row['co_gestores'];
                $item->url = $row['co_url'];
            }
            return $item;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function editar($datos)
    {
        try {
            $query = $this->db->connect()->prepare('UPDATE tb_conferencia SET co_nombre=:nombre,co_descripcion=:descripcion,co_gestores=:gestores,co_url=:urlV WHERE co_id=:id');
            $query->execute([
                'id' => $datos['id'],
                'nombre' => $datos['nombre'],
                'descripcion' => $datos['descripcion'],
                'gestores' => $datos['gestores'],                
                'urlV' => $datos['url']                
            ]);
            return true;
        } catch (PDOException $e) {
            echo "error con el servidor";
        }
    }

    function eliminar($id)
    {
        try {
            $query = $this->db->connect()->prepare('DELETE FROM tb_conferencia WHERE co_id =:id');
            $query->execute([
                'id' => $id
            ]);
            return true;
        } catch (PDOException $e) {
            echo "error con el servidor";
        }
    }
}
