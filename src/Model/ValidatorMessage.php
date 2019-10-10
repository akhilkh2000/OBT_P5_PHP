<?php

namespace App\Model;

use App\Controllers\AbstractController;

class ValidatorMessage extends AbstractController
{

    /**
     * @var string[]
     */
    private $error = [];

    /**
     * @var
     */
    private $params;

    /**
     * @var array
     */
    private $generalRules = [
        'lenghMin',
        'lenghMax',
        'validMail'
    ];

    /**
     * @var array
     *
     */
    private $messages = [
        'lenghMin' => "Le champ %s requière %d caractères minimum.",
        'lenghMax' => "Le champ %s requière %d caractères maximum.",
        'validMail' => "Le champ %s doit être une adresse email valide.",
    ];

    /** Private methods  */

    /**
     * @param $field
     * @return bool
     */
    private function has($field)
    {
        return array_key_exists ($field, $this -> params);
    }


    private function addError($rule, $field, $option = null)
    {
        $this -> error[$field][] = sprintf ($this -> messages[$rule], $field, $option);
    }

    /** Public method */
    /**
     * Validator constructor.
     * @param $params
     */
    public function __construct($params)
    {
        $this -> params = ($params);

    }

    /**
     * @param string $field
     * @param int $min
     * @return ValidatorMessage
     */
    private function lenghMin(string $field, int $min = 6)
    {
        if ($this -> has ($field)) {
            if (mb_strlen ($this -> params[$field]) < $min) {
                $this -> addError ('lenghMin', $field, $min);
            }
        }
        return $this;
    }

    /**
     * @param string $field
     * @param int $max
     * @return ValidatorMessage
     */
    private function lenghMax(string $field, int $max = 20)
    {
        if ($this -> has ($field)) {
            if (mb_strlen ($this -> params[$field]) > $max) {
                $this -> addError ('lenghMax', $field, $max);
            }
        }
        return $this;
    }


    /**
     * valid the correspondence between the emails
     * @param $field
     * @return bool|string
     */
    private function validMail($field)
    {
        if ($this -> has ($field)) {
            if (!filter_var ($this -> params[$field], FILTER_VALIDATE_EMAIL)) {
                $this -> addError ('validMail', 'E-' . $field);
            }
        }
    }

    /**
     * @param $generalRules
     */
    public function check($generalRules)
    {
        foreach ($generalRules as $fields => $rules) {
            if ($this -> has ($fields)) {
                $this -> valid ([
                    'fields' => $fields,
                    'rules' => $rules,
                    'value' => $this -> params[$fields]
                ]);
            }
        }
    }

    /**
     * @param $items
     */
    private function valid($items)
    {

        foreach ($items ['rules'] as $rules => $parameters) {
            if (in_array ($rules, $this -> generalRules)) {
                $this -> $rules($items['fields'], $parameters);
            }
        }
    }

    public function getError()
    {
        return $this -> error;
    }

}
