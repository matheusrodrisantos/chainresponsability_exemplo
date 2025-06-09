<?php
include_once("RegrasBase.php");

class PodeBeber extends RegrasBase
{
    protected function podeProcessar($string): bool
    {
        return $string == "beber";
    }

    public function processar(string $regras):?string
    {
        echo "passei por aqui " . __METHOD__ . " <br>";
        if ($this->podeProcessar($regras)) {
            return "I'm going to drink some Water";
        }

        return parent::processar($regras);
    }
}
