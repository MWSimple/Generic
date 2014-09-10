<?php

namespace MWSimple\FacturacionBundle\Model;

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