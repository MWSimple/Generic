<?php

namespace MWSimple\Facturacion\Model;

abstract class DetalleFactura {

   
    protected $id;

    /**
     * @var integer
     */
    protected $cantidad;
    
    /**
     * @var float
     */
    protected $precio;
    
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
     * Set precio
     *
     * @return float
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    
    /**
     * Set cantidad
     *
     * @return integer
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }
    
    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }
    
     
}