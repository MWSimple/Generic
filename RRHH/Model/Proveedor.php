<?php

namespace MWSimple\RRHH\Model;

abstract class Proveedor extends Persona {

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $empresa;

    
    public function __toString() {
        return $this->getEmpresa();
    }

    /**
     * Set email
     *
     * @return string
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set empresa
     *
     * @return string
     */
    public function setEmpresa($empresa) {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string 
     */
    public function getEmpresa() {
        return $this->empresa;
    }
}
