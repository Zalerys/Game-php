<?php

class Personnage
{
    private int $PV = 100;
    private int $Force = 20;
    private int $Def = 10;

    public function getForce(): int
    {
        return $this->Force;
    }

    public function getDef(): int
    {
        return $this->Def;
    }

    public function getPV(): int
    {
        return $this->PV;
    }

    // public function setPV(int $newPV): void
    // {
    //     $test = $this->PV;
    //     return $test = $newPV;
    // }

    // public function attaque(Personnage $personnage): void
    // {
    //     $newPV = $personnage->getPV() - ($this->getForce() - $personnage->getDef());
    //     $personnage->setPV($newPV);
    // }



}






?>