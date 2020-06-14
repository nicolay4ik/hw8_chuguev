<?php



namespace App\Model;



final class Address extends Model
{
    private ?int $id;
    private ?string $city;
    private ?string $street;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $city
     * @param string|null $street
     */
    public function __construct(?int $id = null, ?string $city = null, ?string $street = null)
    {
        $this->id = $id;
        $this->city = $city;
        $this->street = $street;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|null $street
     */
    public function setStreet(?string $street): void
    {
        $this->street = $street;
    }
    static function getTable(): string
    {
        return 'address';
    }
}