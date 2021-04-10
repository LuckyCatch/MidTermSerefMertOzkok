<?php
class Automobile {
  // Properties
  public $LicencePlate;
  public $Brand;
  public $Model;
  public $ModelYear;
  public $Color;
  
  // Methods
  function __construct($LicencePlate,$Brand,$Model,$ModelYear,$Color) {
    $this->LicencePlate = $LicencePlate;
    $this->Brand = $Brand;
    $this->Model = $Model;
    $this->ModelYear = $ModelYear;
    $this->Color = $Color;
  }
  
  public function __toString()
  {
    return $this->LicencePlate;
  }
  
  
