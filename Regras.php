<?php 

interface Regras{
    public function proximo(Regras $regras):Regras;
    public function processar(string $regras):?string;
}