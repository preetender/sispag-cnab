<?php

namespace Preetender\Cnab;

use Preetender\Cnab\Interfaces\ICabecalho;
use Preetender\Cnab\Interfaces\ICabecalhoLote;
use Preetender\Cnab\Interfaces\ISegmentoA;

class Remessa
{
    /**
     * @var ICabecalho
     */
    protected $cabecalho;

    /**
     * @var ICabecalhoLote
     */
    protected $lote;

    /**
     * @var ISegmentoA
     */
    protected $segmento;

    /**
     * Construir arquivo de remessa
     *
     * @param ICabecalho $cabecalho
     */
    public function __construct(ICabecalho $cabecalho, ICabecalhoLote $lote, ISegmentoA $segmento)
    {
        // Remessa
        $cabecalho->setArquivoCodigo('1');
        $cabecalho->setDataDeGeracao(date('dmY'));
        $cabecalho->setHoraDaGeracao(date('His'));

        // Cabeçalho
        $this->cabecalho = $cabecalho;

        // Lote do arquivo
        $this->lote = $lote;

        $this->segmento = $segmento;
    }

    /**
     * Gerar arquivo txt.
     *
     * @return void
     */
    public function salvar($nome_arquivo, $flags = 0, $context = null)
    {
        //
        $conteudo = $this->cabecalho->toString() . "\r" . $this->lote->toString() . "\r" . $this->segmento->toString();
        //
        file_put_contents($nome_arquivo, $conteudo, $flags, $context);
    }
}
