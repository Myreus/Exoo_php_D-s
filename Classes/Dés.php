<?php

class Dés {
    //ATTRIBUTS
    private int $nbrFaces;
    private int $score;

    //CONSTRUCTEUR
    public function __construct(int $faces, int $score=0){
        $this->nbrFaces = $faces;
        $this->score = $score;
    }

    

    /**
     * Get the value of nbrFaces
     *
     * @return int
     */
    public function getNbrFaces(): int {
        return $this->nbrFaces;
    }

    /**
     * Set the value of nbrFaces
     *
     * @param int $nbrFaces
     *
     * @return self
     */
    public function setNbrFaces(int $nbrFaces): self {
        $this->nbrFaces = $nbrFaces;
        return $this;
    }

    /**
     * Get the value of score
     *
     * @return int
     */
    public function getScore(): int {
        return $this->score;
    }

    /**
     * Set the value of score
     *
     * @param int $score
     *
     * @return self
     */
    public function setScore(int $score): self {
        $this->score = $score;
        return $this;
    }

    public function lancer(){
        $this->score = random_int(1, $this->nbrFaces);
    }
}