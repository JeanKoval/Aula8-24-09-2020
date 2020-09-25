<?php

class Button
{
    private $texto;
    private $curvatura;
    private $cor;
    private $fundo;

    public function __construct(String $texto, int $curvatura, String $cor, String $fundo)
    {
        $this->texto = $texto;
        $this->curvatura = $curvatura;
        $this->cor = $cor;
        $this->fundo = $fundo;
        $this->imprime();
    }

    private function leTemplate()
    {
        $arquivo = file_get_contents('Button.html');
        return $arquivo;
    }

    private function atualizaTexto(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#VALOR#', $this->texto, $arquivo);
        return $arquivoAtualizado;
    }

    private function atualizaCurvatura(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#CURVATURA#', $this->curvatura, $arquivo);
        return $arquivoAtualizado;
    }

    private function atualizaCor(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#COR#', $this->cor, $arquivo);
        return $arquivoAtualizado;
    }

    private function atualizaFundo(String $arquivo)
    {
        $arquivoAtualizado = str_replace('#FUNDO#', $this->fundo, $arquivo);
        return $arquivoAtualizado;
    }

    private function imprime()
    {
        $arquivo = $this->leTemplate();
        $arquivo = $this->atualizaTexto($arquivo);
        $arquivo = $this->atualizaCurvatura($arquivo);
        $arquivo = $this->atualizaCor($arquivo);
        $arquivo = $this->atualizaFundo($arquivo);
        echo $arquivo;
    }
}
