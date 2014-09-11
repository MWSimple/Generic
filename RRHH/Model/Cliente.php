<?php

namespace MWSimple\RRHH\Model;

abstract class Cliente extends Persona {

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $empresa;

    
    public function __toString() {
        if (is_null($this->getEmpresa())) {
            $toString = $this->getApellido() . ' ' . $this->getNombre();
        } elseif (!is_null($this->getApellido()) || !is_null($this->getNombre())) {
            $toString = $this->getApellido() . ' ' . $this->getNombre() . ' - ' . $this->getEmpresa();
        } else {
            $toString = $this->getEmpresa();
        }
        if (!is_null($this->getDni())) {
            $toString = $toString . ' | ' . $this->getDni();
        }

        return $toString;
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
