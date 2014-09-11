<?php

namespace MWSimple\RRHH\Model;

abstract class Persona extends MWSgedmo
{
    protected $id;

    /**
     * @var string
     */
    protected $apellido;

    /**
     * @var string
     */
    protected $nombre;

    /**
     * @var string
     */
    protected $dni;

    /**
     * @var string
     */
    protected $cuitcuil;

    /**
     * @var \DateTime
     */
    protected $fechanacimiento;

    /**
     * @var boolean $activo
     */
    protected $activo;

    /**
     * @var integer
     */
    protected $telefonos;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setActivo(true);
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
     * Set apellido
     *
     * @return string
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set nombre
     *
     * @return string
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set dni
     *
     * @return string
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set cuitcuil
     *
     * @return string
     */
    public function setCuitcuil($cuitcuil)
    {
        $this->cuitcuil = $cuitcuil;

        return $this;
    }

    /**
     * Get cuitcuil
     *
     * @return string
     */
    public function getCuitcuil()
    {
        return $this->cuitcuil;
    }

    /**
     * Set fechanacimiento
     *
     * @return \DateTime
     */
    public function setFechanacimiento($fechanacimiento)
    {
        $this->fechanacimiento = $fechanacimiento;

        return $this;
    }

    /**
     * Get fechanacimiento
     *
     * @return \DateTime
     */
    public function getFechanacimiento()
    {
        return $this->fechanacimiento;
    }

    /**
     * Set activo
     *
     * @return boolean
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
