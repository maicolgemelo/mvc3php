<?php

    class Tblproductos_model{

        private $bd;
        private $tblproductos;

        public function __construct(){
            $this->bd = Conexion::getConexion();
            $this->tblproductos = array();
        }

        public function insertarProductos($dato){
           $idcategoria= $dato['idcategoria'] ;
           $nombre = $dato['nombreproducto'] ;
           $precio = $dato['precio'];
           $consulta = "INSERT INTO tblproductos (idcategoria,nombre,precio) values ($idcategoria,'$nombre',$precio)";
           mysqli_query($this->bd,$consulta) or die ("Error al insertar el producto");
        }

        public function consultarProductos(){
            $consulta = $this->bd->query("select p.id,c.nombre as 'categoria',p.nombre,p.precio from tblproductos p inner join tblcategorias c on p.idcategoria = c.id;");

            while($fila=$consulta->fetch_assoc()){
                $this->tblproductos[] = $fila;
            }

            return $this->tblproductos;
        }
    }

?>