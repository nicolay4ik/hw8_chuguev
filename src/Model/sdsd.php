<?php


namespace App\Model;


class sdsd
{
    private ?int $id;
    private ?string $city;
    private ?string $street;

    /**
     * @return int|null
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @return string|null
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }
}