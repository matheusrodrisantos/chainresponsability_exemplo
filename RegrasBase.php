<?php
include_once("./Regras.php");

abstract class RegrasBase implements Regras
{
    public Regras $regras;

    public function proximo(Regras $regras): Regras
    {
        $this->regras = $regras;
        return $regras;
    }
    abstract protected function podeProcessar(string $texto):bool;

    public function processar(string $texto){
        if ($this->regras) {
            return $this->regras->processar($texto);
        }

        return null;
    }
}
