<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of User
 *
 * @author wadmin
 */
class User  {

    private ?string $id=null;
    private string $name;
    private string $country;
    private string $state;

    public function getId(): string {
        return $this->id;
    }

    public function setId(string $id): void {
        $this->id = $id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function getState(): string {
        return $this->state;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setCountry(string $country): void {
        $this->country = $country;
    }

    public function setState(string $state): void {
        $this->state = $state;
    }

    public function toArray(): array {
        //Especificamos qué propiedades no públicas queremos que pasen a formar parte del array
        $array= array(
          
            'name' => $this->name,
            'state' => $this->state,
            'country' => $this->country
        );
        //Solo incluimos el id si es distinto de null
        if($this->id!=null){
            $array["_id"] = $this->id;
        }
        return $array;
    }

}
