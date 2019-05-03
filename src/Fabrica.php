<?php

namespace Preetender\Cnab;

abstract class Fabrica
{

    /**
     * @var array
     */
    protected $regras = [];

    /**
     * @var array
     */
    protected $parametros = [];

    /**
     * Definir valor para variável
     *
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $regra = array_key_exists($name, $this->regras);

        if (!$regra) {
            throw new \InvalidArgumentException("Não foi possivel indentificar o argumento $name.");
        }

        // obtem configurações do atributo.
        $regras = $this->extrair($this->regras[$name]);

        if (strlen($value) > $regras->caracteres) {
            throw new \InvalidArgumentException("O atributo {$name} requer no máximo {$regras->caracteres} caracteres.");
        }
        //
        $this->parametros[$name] = $this->setParametro($name, $value, $regras->caracteres, $regras->tipo);
    }

    /**
     * Adicionar parametro na lista.
     *
     * @param $name
     * @param $value
     * @param $caracteres
     * @param string $tipo
     * @return string
     */
    protected function setParametro($name, $value, $caracteres, $tipo = 'string')
    {
        if ($tipo === 'number') {
            return str_pad($value, $caracteres, 0, STR_PAD_LEFT);
        }
        //
        return str_pad(substr_chars($value), $caracteres, ' ', STR_PAD_RIGHT);
        // return str_repeat("&nbsp;", $caracteres);
    }

    /**
     * Formatar preço
     *
     * @param string $value
     * @return string
     */
    public function setValor($value)
    {
        list($valor, $decimal) = explode('.', (string) $value);
        //
        return "00{$valor}{$decimal}";
    }

    /**
     * Extrair parametros de acordo com a regra.
     *
     * @return object
     */
    protected function extrair($rule): object
    {
        $rules = explode('|', $rule);

        list($tipo, $caracteres, $default) = $rules;

        return (object) [
            'tipo' => $tipo === 'X' ? 'string' : 'number',
            'caracteres' => (int) $caracteres,
            'default' => $default ?? null,
        ];
    }

    /**
     * Transforma array em string.
     *
     * @return string
     */
    public function getBuffer(): string
    {
        $parametros = count($this->parametros);
        $regras = count($this->regras);
        $clone = [];
        if ($parametros !== $regras) {
            foreach ($this->regras as $key => $regra) {
                if (isset($this->parametros[$key])) {
                    // copiar
                    $clone[$key] = $this->parametros[$key];
                } else {
                    // obtem configurações do atributo.
                    $regras = $this->extrair($this->regras[$key]);
                    // armazenar valor padrao
                    $clone[$key] = $this->setParametro($key, $regras->default, $regras->caracteres, $regras->tipo);
                }
            }
        }
        //
        return implode('', $clone);
    }
}
