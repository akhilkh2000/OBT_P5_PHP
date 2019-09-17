<?php


namespace App\Model;


abstract class AbstractModel
{

    public function __construct(
        array $data = []
    )
    {
        if (!empty($data)){
            $this->hydrate($data);
        }
    }

    protected function hydrate(array $data)
    {
        foreach ($data as $property => $value){
            $methode = 'set'.ucfirst($property);
            if (is_callable([$this, $methode])){
                $this->$methode($value);
            }
        }
    }


}