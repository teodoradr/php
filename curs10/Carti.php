<?php

class Carti{
    public $titlu = 'Demo';
    public $autor = 'Mihai';
    public $editura;
    public $an_aparitie;
    public $nr_pagini;
    public $pret;
    public static $format='A4';
    
    public function info (){
        echo 'Aceasta carte se numeste '.$this->titlu;
    }

    public function stopCitit(){
        echo "nu mai citesc.";
        echo '<br>';
        $this->info($this->an_aparitie);
    }

    /**
     * Get the value of titlu
     */ 
    public function getTitlu()
    {
        return $this->titlu;
    }

    /**
     * Set the value of titlu
     *
     * @return  self
     */ 
    public function setTitlu($titlu)
    {
        $this->titlu = $titlu;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of editura
     */ 
    public function getEditura()
    {
        return $this->editura;
    }

    /**
     * Set the value of editura
     *
     * @return  self
     */ 
    public function setEditura($editura)
    {
        $this->editura = $editura;

        return $this;
    }

    /**
     * Get the value of an_aparitie
     */ 
    public function getAn_aparitie()
    {
        return $this->an_aparitie;
    }

    /**
     * Set the value of an_aparitie
     *
     * @return  self
     */ 
    public function setAn_aparitie($an_aparitie)
    {
        $this->an_aparitie = $an_aparitie;

        return $this;
    }

    /**
     * Get the value of nr_pagini
     */ 
    public function getNr_pagini()
    {
        return $this->nr_pagini;
    }

    /**
     * Set the value of nr_pagini
     *
     * @return  self
     */ 
    public function setNr_pagini($nr_pagini)
    {
        $this->nr_pagini = $nr_pagini;

        return $this;
    }

    /**
     * Get the value of pret
     */ 
    public function getPret()
    {
        return $this->pret;
    }

    /**
     * Set the value of pret
     *
     * @return  self
     */ 
    public function setPret($pret)
    {
        $this->pret = $pret;

        return $this;
    }

    /**
     * Set the value of format
     *
     * @return  self
     */ 
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }
}