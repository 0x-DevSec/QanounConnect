<?php

require_once __DIR__ . '/../Helpers/Database.php';

abstract class Professional
{
    protected int $id;
    protected string $nom;
    protected string $email;
    protected ?int $ville_id;
    protected int $years_of_experience;

    public function __construct(
        string $nom,
        string $email,
        ?int $ville_id,
        int $years_of_experience,
        int $id = 0
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->email = $email;
        $this->ville_id = $ville_id;
        $this->years_of_experience = $years_of_experience;
    }

    /* ===== GETTERS ===== */

    public function getId(): int { return $this->id; }
    public function getNom(): string { return $this->nom; }
    public function getEmail(): string { return $this->email; }
    public function getVilleId(): ?int { return $this->ville_id; }
    public function getYearsOfExperience(): int { return $this->years_of_experience; }

    /* ===== SETTERS ===== */

    public function setNom(string $nom): void { $this->nom = $nom; }
    public function setEmail(string $email): void { $this->email = $email; }
    public function setVilleId(?int $ville_id): void { $this->ville_id = $ville_id; }
    public function setYearsOfExperience(int $years): void { $this->years_of_experience = $years; }

    /* ===== ABSTRACT METHODS ===== */

    abstract public function save(): void;
    abstract public function update(): void;
    abstract public function delete(): void;
}
