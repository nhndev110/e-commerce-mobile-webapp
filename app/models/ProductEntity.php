<?php

namespace App\Models;

class ProductEntity
{
  private int $id;
  private string $name;
  private string $photo;
  private float $price;
  private string $description;
  private int $manufacturer_id;

  public function __construct($id, $name, $photo, $price, $description, $manufacturer_id)
  {
    $this->id              = $id;
    $this->name            = $name;
    $this->photo           = $photo;
    $this->price           = $price;
    $this->description     = $description;
    $this->manufacturer_id = $manufacturer_id;
  }

  /**
   * Get the value of id
   */ 
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id): object
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of name
   */ 
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Set the value of name
   *
   * @return  self
   */ 
  public function setName($name): object
  {
    $this->name = $name;

    return $this;
  }

  /**
   * Get the value of photo
   */ 
  public function getPhoto(): string
  {
    return $this->photo;
  }

  /**
   * Set the value of photo
   *
   * @return  self
   */ 
  public function setPhoto($photo): object
  {
    $this->photo = $photo;

    return $this;
  }

  /**
   * Get the value of price
   */ 
  public function getPrice(): float
  {
    return $this->price;
  }

  /**
   * Set the value of price
   *
   * @return  self
   */ 
  public function setPrice($price): object
  {
    $this->price = $price;

    return $this;
  }

  /**
   * Get the value of description
   */ 
  public function getDescription(): string
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */ 
  public function setDescription($description): object
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of manufacturer_id
   */ 
  public function getManufacturer_id(): int
  {
    return $this->manufacturer_id;
  }

  /**
   * Set the value of manufacturer_id
   *
   * @return  self
   */ 
  public function setManufacturer_id($manufacturer_id): object
  {
    $this->manufacturer_id = $manufacturer_id;

    return $this;
  }
}