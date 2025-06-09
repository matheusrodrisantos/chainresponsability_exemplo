<?php

include_once("RegrasBase.php");
class PodeDancar  extends RegrasBase
{

    protected function podeProcessar($string): bool
    {
        return $string == "dancar";
    }

    public function processar(string $regras):?string
    {
        echo "passei por aqui " . __METHOD__ . " <br>";
        if ($this->podeProcessar($regras)) {
            return "LET'S DANCE DUDE!";
        }

        return parent::processar($regras);
    }
}
