<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
///////////

require_once("../Supermarket/db.php");
require_once("../Supermarket/conectar.php");

class Config extends Conectar{
    private $id;
    private $nombre;
    private $descripcion;
    private $imagen;
    

    public function __construct($id = 0, $nombre ="", $descripcion ="", $imagen ="", $dbCnx=""){

        
        $this-> id = $id;
        $this-> nombre = $nombre;
        $this-> descripcion = $descripcion;
        $this-> imagen = $imagen;
        
        parent::__construct($dbCnx="");
    }

    public function setId($id){
        $this-> id = $id;
    }
    public function getId(){
        return $this-> id;
    }


    public function setNombre($nombre){
        $this-> nombre = $nombre;
    }
    public function getNombre(){
        return $this-> nombre;
    }


    public function setDescripcion($descripcion){
        $this-> descripcion = $descripcion;
    }
    public function getDescripcion(){
        return $this-> descripcion;
    }


    public function setImagen($imagen){
        $this-> imagen = $imagen;
    }
    public function getImagen(){
        return $this-> imagen;
    }



    public function insertData(){
        try {
            $stm = $this -> dbCnx-> prepare("INSERT INTO categorias(nombre, descripcion, imagen) values(?,?,?)");
            $stm -> execute ([$this->nombre, $this->descripcion, $this->imagen]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function obtainAll(){
        try {
            $stm= $this->dbCnx->prepare("SELECT * from categorias");
            $stm-> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
// DELETE
    public function delete(){
        try {
            $stm= $this-> dbCnx->prepare("DELETE FROM categorias WHERE id=?");
            $stm->execute([$this->id]);
            return $stm-> fetchAll();
            echo "<script>alert('registro eliminado');.document.location='categorias.php'</script>";
        } catch (Exception  $e) {
           return  $e->getMessage();
        }
    }

    public function selectOne(){
        try {
            $stm= $this->dbCnx->prepare("SELECT * FROM categorias WHERE id=?");
            $stm -> execute([$this->id]);
            return $stm-> fetchAll();
        } catch (Exception  $e) {
            return  $e->getMessage();
         }
    }

    public function update(){
        try {
            $stm= $this->dbCnx-> prepare("UPDATE categorias SET nombre = ?, descripcion = ?, imagen = ? WHERE id = ?");
            $stm->execute([$this->nombre, $this->descripcion, $this->imagen, $this->id ]);
        } catch (Exception  $e) {
            return  $e->getMessage();
         }
    }
}



//CLIENTES CONFIG

  
/* class Cliente extends Conectar{
    private $id;
    private $celular;
    private $compañia; */
    /* protected $dbCnx; */

    /* public function __construct($id = 0, $celular ="", $compañia ="", ){

        parent::__construct($dbCnx="");
        $this-> id = $id;
        $this-> celular = $celular;
        $this-> compañia = $compañia; */
        /* $this-> dbCnx = new PDO (DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]); */
    /* } */

   /*  public function setId($id){
        $this-> id = $id;
    }
    public function getId(){
        return $this-> id;
    }


    public function setCelular($celular){
        $this-> celular = $celular;
    }
    public function getCelular(){
        return $this-> celular;
    }


    public function setCompañia($compañia){
        $this-> compañia = $compañia;
    }
    public function getCompañia(){
        return $this-> compañia;
    }




    public function insertData(){
        try {
            $stm = $this -> dbCnx-> prepare("INSERT INTO clientes(celular, compañia ) values(?,?)");
            $stm -> execute ([$this->celular, $this->compañia ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function obtainAll(){
        try {
            $stm= $this->dbCnx->prepare("SELECT * from clientes");
            $stm-> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
// DELETE
    public function delete(){
        try {
            $stm= $this-> dbCnx->prepare("DELETE FROM clientes WHERE id=?");
            $stm->execute([$this->id]);
            return $stm-> fetchAll();
            echo "<script>alert('registro eliminado');.document.location='clientes.php'</script>";
        } catch (Exception  $e) {
           return  $e->getMessage();
        }
    }

    public function selectOne(){
        try {
            $stm= $this->dbCnx->prepare("SELECT * FROM clientes WHERE id=?");
            $stm -> execute([$this->id]);
            return $stm-> fetchAll();
        } catch (Exception  $e) {
            return  $e->getMessage();
         }
    }

    public function update(){
        try {
            $stm= $this->dbCnx-> prepare("UPDATE clientes SET celular = ?, compañia = ? WHERE id = ?");
            $stm->execute([$this->celular, $this->compañia, $this->id ]);
        } catch (Exception  $e) {
            return  $e->getMessage();
         }
    }
} */

//EMPLEADOS CONFIG
  
/* class Cliente{
    private $id;
    private $celular;
    private $compañia; */
    /* protected $dbCnx; */

    /* public function __construct($id = 0, $celular ="", $compañia ="", ){
        $this-> id = $id;
        $this-> celular = $celular;
        $this-> compañia = $compañia; */
        /* $this-> dbCnx = new PDO (DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]); */
   /*  } */

    /* public function setId($id){
        $this-> id = $id;
    }
    public function getId(){
        return $this-> id;
    }


    public function setCelular($celular){
        $this-> celular = $celular;
    }
    public function getCelular(){
        return $this-> celular;
    }


    public function setCompañia($compañia){
        $this-> compañia = $compañia;
    }
    public function getCompañia(){
        return $this-> compañia;
    }




    public function insertData(){
        try {
            $stm = $this -> dbCnx-> prepare("INSERT INTO clientes(celular, compañia ) values(?,?)");
            $stm -> execute ([$this->celular, $this->compañia ]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
        
    }

    public function obtainAll(){
        try {
            $stm= $this->dbCnx->prepare("SELECT * from clientes");
            $stm-> execute();
            return $stm -> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(){
        try {
            $stm= $this-> dbCnx->prepare("DELETE FROM clientes WHERE id=?");
            $stm->execute([$this->id]);
            return $stm-> fetchAll();
            echo "<script>alert('registro eliminado');.document.location='clientes.php'</script>";
        } catch (Exception  $e) {
           return  $e->getMessage();
        }
    }

    public function selectOne(){
        try {
            $stm= $this->dbCnx->prepare("SELECT * FROM clientes WHERE id=?");
            $stm -> execute([$this->id]);
            return $stm-> fetchAll();
        } catch (Exception  $e) {
            return  $e->getMessage();
         }
    }

    public function update(){
        try {
            $stm= $this->dbCnx-> prepare("UPDATE clientes SET celular = ?, compañia = ? WHERE id = ?");
            $stm->execute([$this->celular, $this->compañia, $this->id ]);
        } catch (Exception  $e) {
            return  $e->getMessage();
         }
    }
} */


?>