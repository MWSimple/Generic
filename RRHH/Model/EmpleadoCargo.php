<?php

namespace MWSimple\RRHH\Model;


abstract class EmpleadoCargo
{
    protected $id;

    /**
     * @var string
     */
    protected $cargo;

    /**
     * @var string
     */
    protected $sueldoMensual;

    /**
     * @var string
     */
    protected $costoHora;

    public function __toString()
    {
        return $this->getCargo();
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
     * Set cargo
     *
     * @return string
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set sueldoMensual
     *
     * @return string
     */
    public function setSueldoMensual($sueldoMensual)
    {
        $this->sueldoMensual = $sueldoMensual;

        return $this;
    }

    /**
     * Get sueldoMensual
     *
     * @return string
     */
    public function getSueldoMensual()
    {
        return $this->sueldoMensual;
    }

    /**
     * Set costoHora
     *
     * @return string
     */
    public function setCostoHora($costoHora)
    {
        $this->costoHora = $costoHora;

        return $this;
    }

    /**
     * Get costoHora
     *
     * @return string
     */
    public function getCostoHora()
    {
        return $this->costoHora;
    }

}
