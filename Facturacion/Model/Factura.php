<?php

namespace MWSimple\Facturacion\Model;

abstract class Factura {

   
    protected $id;

    /**
     * @var string
     */
    protected $formaPago;
    
    /**
     * @var string
     */
    protected $iva;
    
    /**
     * @var boolean $estado
     */
    protected $estado;
    
    
    /**
     * @var \DateTime
     */
    protected $fecha;
    
    /**
     * @var float
     */
    protected $descuento;
    
    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
    
     /**
     * Set formaPago
     *
     * @return string
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;

        return $this;
    }

    /**
     * Get formaPago
     *
     * @return string
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }
    
    /**
     * Set estado
     *
     * @return boolean
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }

 /**
     * Set fecha
     *
     * @return \DateTime
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    
    /**
     * Set descuento
     *
     * @return float
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return float
     */
    public function getDescuento()
    {
        return $this->descuento;
    }
    
    /**
     * Set iva
     *
     * @return float
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return float
     */
    public function getIva()
    {
        return $this->iva;
    }
}