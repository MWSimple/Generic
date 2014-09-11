<?php

namespace MWSimple\RRHH\Model;


abstract class Domicilio
{
    
    protected $id;

    /**
     * @var string
     */
    protected $localidad;

    /**
     * @var string
     */
    protected $calle;

    /**
     * @var string
     */
    protected $numero;

    /**
     * @var string
     */
    protected $departamento;

    /**
     * @var string
     */
    protected $edificio;

    /**
     * @var string
     */
    protected $manzana;

    /**
     * @var string
     */
    protected $entreCalles;

    /**
     * @var string
     */
    protected $tira;

    /**
     * @var string
     */
    protected $parcela;

    public function __toString()
    {
        return $this->getCalle().' '.$this->getNumero().' - '.$this->getLocalidad();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set localidad
     *
     * @return string
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;

        return $this;
    }

    /**
     * Get localidad
     *
     * @return string
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set calle
     *
     * @return string
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @return string
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set departamento
     *
     * @return string
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set edificio
     *
     * @return string
     */
    public function setEdificio($edificio)
    {
        $this->edificio = $edificio;

        return $this;
    }

    /**
     * Get edificio
     *
     * @return string
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * Set manzana
     *
     * @return string
     */
    public function setManzana($manzana)
    {
        $this->manzana = $manzana;

        return $this;
    }

    /**
     * Get manzana
     *
     * @return string
     */
    public function getManzana()
    {
        return $this->manzana;
    }

    /**
     * Set entreCalles
     *
     * @return string
     */
    public function setEntreCalles($entreCalles)
    {
        $this->entreCalles = $entreCalles;

        return $this;
    }

    /**
     * Get entreCalles
     *
     * @return string
     */
    public function getEntreCalles()
    {
        return $this->entreCalles;
    }

    /**
     * Set tira
     *
     * @return string
     */
    public function setTira($tira)
    {
        $this->tira = $tira;

        return $this;
    }

    /**
     * Get tira
     *
     * @return string
     */
    public function getTira()
    {
        return $this->tira;
    }

    /**
     * Set parcela
     *
     * @return string
     */
    public function setParcela($parcela)
    {
        $this->parcela = $parcela;

        return $this;
    }

    /**
     * Get parcela
     *
     * @return string
     */
    public function getParcela()
    {
        return $this->parcela;
    }

}
