<?php

class cursos {
    private $_conexion;
    
    public function __construct(){
        $this->_conexion = new conexion();
    }
    
    public function verCurso ($idCurso) {
        $this->getCurso($idCurso);
        return $this->retornar_SELECT();
    }
    
    public function retornar_SELECT(){
		return $this->_conexion->retornar_array();
	}
    
    public function getCurso($idCurso){
        $sql = "SELECT * FROM cursos WHERE idCurso='".$idCurso."' ";
        $this->_conexion->ejecutar_sentencia($sql);
    }
    
    public function url($idCurso){
        $curso = $this->verCurso($idCurso);
        return $curso["url"];
    }
    public function nombreCurso($idCurso){
        $curso = $this->verCurso($idCurso);
        return $curso["nombreCurso"];
    }
    
}

?>