<?php

require_once __DIR__ . '/Professional.php';

class Bailiff extends Professional
{
    private string $types_actes;

    public function __construct(
        string $nom,
        string $email,
        ?int $ville_id,
        int $years_of_experience,
        string $types_actes,
        int $id = 0
    ) {
        parent::__construct($nom, $email, $ville_id, $years_of_experience, $id);
        $this->types_actes = $types_actes;
    }

    public function getTypesActes(): string { return $this->types_actes; }
    public function setTypesActes(string $types): void { $this->types_actes = $types; }

    public function save(): void
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            INSERT INTO huissier 
            (nom, email, ville_id, years_of_experience, types_actes)
            VALUES (?, ?, ?, ?, ?)
        ");
        $stmt->execute([
            $this->nom,
            $this->email,
            $this->ville_id,
            $this->years_of_experience,
            $this->types_actes
        ]);
    }

    public function update(): void
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            UPDATE huissier SET
                nom=?, email=?, ville_id=?, years_of_experience=?, types_actes=?
            WHERE id=?
        ");
        $stmt->execute([
            $this->nom,
            $this->email,
            $this->ville_id,
            $this->years_of_experience,
            $this->types_actes,
            $this->id
        ]);
    }

    public function delete(): void
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM huissier WHERE id=?");
        $stmt->execute([$this->id]);
    }
}
