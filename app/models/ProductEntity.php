<?php

namespace app\models;

class ProductEntity
{
  private int $id;
  private string $name;
  private string $image;
  private float $price;
  private string $description;
  private int $manufacturer_id;

  public function __construct(int $id, string $name, string $image, float $price, string $description, int $manufacturer_id)
  {
    $this->id              = $id;
    $this->name            = $name;
    $this->image           = $image;
    $this->price           = $price;
    $this->description     = $description;
    $this->manufacturer_id = $manufacturer_id;
  }

  /**
   * Get the value of id
   * @return int
   */
  public function getId(): int
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return $this
   */
  public function setId(int $id): object
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
   * @return $this
   */
  public function setName(string $name): object
  {
    $this->name = $name;

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
   * @return  $this
   */
  public function setPrice(float $price): object
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
   * @return  $this
   */
  public function setDescription(string $description): object
  {
    $this->description = $description;

    return $this;
  }

  /**
   * Get the value of manufacturer_id
   */
  public function getManufacturerId(): int
  {
    return $this->manufacturer_id;
  }

  /**
   * Set the value of manufacturer_id
   *
   * @return  $this
   */
  public function setManufacturerId(int $manufacturer_id): object
  {
    $this->manufacturer_id = $manufacturer_id;

    return $this;
  }

  /**
   * Get the value of image
   */
  public function getImage()
  {
    return $this->image;
  }

  /**
   * Set the value of image
   *
   * @return  self
   */
  public function setImage($image)
  {
    $this->image = $image;

    return $this;
  }
}
