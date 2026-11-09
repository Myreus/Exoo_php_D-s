<?php

class Partie {
    //ATTRIBUTS
    private Joueur $joueur1;
    private Joueur $joueur2;
    private int $nbrTour;
    private int $scoreJ1;
    private int $scoreJ2;

    //CONSTRUCTEUR
    public function __construct(){
    }

    /**
     * Get the value of joueur1
     *
     * @return Joueur
     */
    public function getJoueur1(): Joueur {
        return $this->joueur1;
    }

    /**
     * Set the value of joueur1
     *
     * @param Joueur $joueur1
     *
     * @return self
     */
    public function setJoueur1(Joueur $joueur1): self {
        $this->joueur1 = $joueur1;
        return $this;
    }

    /**
     * Get the value of joueur2
     *
     * @return Joueur
     */
    public function getJoueur2(): Joueur {
        return $this->joueur2;
    }

    /**
     * Set the value of joueur2
     *
     * @param Joueur $joueur2
     *
     * @return self
     */
    public function setJoueur2(Joueur $joueur2): self {
        $this->joueur2 = $joueur2;
        return $this;
    }

    /**
     * Get the value of nbrTour
     *
     * @return int
     */
    public function getNbrTour(): int {
        return $this->nbrTour;
    }

    /**
     * Set the value of nbrTour
     *
     * @param int $nbrTour
     *
     * @return self
     */
    public function setNbrTour(int $nbrTour): self {
        $this->nbrTour = $nbrTour;
        return $this;
    }

    /**
     * Get the value of scoreJ1
     *
     * @return int
     */
    public function getScoreJ1(): int {
        return $this->scoreJ1;
    }

    /**
     * Set the value of scoreJ1
     *
     * @param int $scoreJ1
     *
     * @return self
     */
    public function setScoreJ1(int $scoreJ1): self {
        $this->scoreJ1 = $scoreJ1;
        return $this;
    }

    /**
     * Get the value of scoreJ2
     *
     * @return int
     */
    public function getScoreJ2(): int {
        return $this->scoreJ2;
    }

    /**
     * Set the value of scoreJ2
     *
     * @param int $scoreJ2
     *
     * @return self
     */
    public function setScoreJ2(int $scoreJ2): self {
        $this->scoreJ2 = $scoreJ2;
        return $this;
    }
}