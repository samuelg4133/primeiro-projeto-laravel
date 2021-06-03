<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    private $name;
    private $country;
    private $position;

    public function __construct($name, $country, $position){
        $this->name = $name;
        $this->country = $country;
        $this->position = $position;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setCountry($country){
        $this->country = $country;
    }

    public function getCountry(){
        return $this->country;
    }

    public function setPosition($position){
        $this->position = $position;
    }

    public function getPosition(){
        return $this->position;
    }
}
