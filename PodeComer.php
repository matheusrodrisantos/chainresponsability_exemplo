<?php

include_once("RegrasBase.php");

class PodeComer extends RegrasBase
{
    protected function podeProcessar($string): bool
    {
        return $string == "comer";
    }

    public function processar(string $regras): ?string
    {
        echo "passei por aqui " . __METHOD__ . " <br>";
        if ($this->podeProcessar($regras)) {
            return 'hhhhhhhhuuuuuuuuuuuuuuuummmmmmmmmm';
        }

        return parent::processar($regras);
    }
}
