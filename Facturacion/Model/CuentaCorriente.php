<?php

namespace MWSimple\Facturacion\Model;

abstract class CuentaCorriente {

   
    protected $id;


    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

}