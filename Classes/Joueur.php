<?php

class Joueur {
    //ATTRIBUTS
    private string $nom;
    private int $valeurLance;
    private Dés $des;

    //CONSTRUCTEUR
    public function __construct(string $nom, Dés $des, int $valeurLance=0){
        $this->nom = $nom;
        $this->des = $des;
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get the value of valeurLance
     *
     * @return int
     */
    public function getValeurLance(): int {
        return $this->valeurLance;
    }

    /**
     * Set the value of valeurLance
     *
     * @param int $valeurLance
     *
     * @return self
     */
    public function setValeurLance(int $valeurLance): self {
        $this->valeurLance = $valeurLance;
        return $this;
    }

    /**
     * Get the value of des
     *
     * @return Dés
     */
    public function getDes(): Dés {
        return $this->des;
    }

    /**
     * Set the value of des
     *
     * @param Dés $des
     *
     * @return self
     */
    public function setDes(Dés $des): self {
        $this->des = $des;
        return $this;
    }

    public function lancerDés(){
        
    }
}