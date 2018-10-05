<?php


class Fechas{
 
    /**
     * Compara dos fechas en formato Y-m-d
     * @param String $fecha1 Fecha 1
     * @param String $fecha2 Fecha 2
     * @return Int
     *      0: Las fechas son iguales
     *      1: La fecha 1 es mayor
     *      2: La fecha 1 es menor
    **/
    public function compararFechas($fecha1, $fecha2){
        if($this->_getUnix($fecha1) == $this->_getUnix($fecha1)) return 0;
        if($this->_getUnix($fecha1) > $this->_getUnix($fecha1)) return 1;
        if($this->_getUnix($fecha1) < $this->_getUnix($fecha1)) return 2;
    }
 
    /**
     * Retorna una fecha en formato Unix
    **/
    private function _getUnix($fecha){
        //separamos los valores de la fecha
        list($dia,$mes,$año) = explode('/',$fecha);
        //redefinimos la variable $fecha y le almacenamos el valor unix
        return $fecha = mktime(0,0,0,$mes,$dia,$año);
    }
}


?>