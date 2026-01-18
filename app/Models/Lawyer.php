<?php

require_once __DIR__ . '/Professional.php';

class Lawyer extends Professional
{
    private string $specialite;
    private bool $consultation_en_ligne;

    public function __construct(
        string $nom,
        string $email,
        ?int $ville_id,
        int $years_of_experience,
        string $specialite,
        bool $consultation_en_ligne,
        int $id = 0
    ) {
        parent::__construct($nom, $email, $ville_id, $years_of_experience, $id);
        $this->specialite = $specialite;
        $this->consultation_en_ligne = $consultation_en_ligne;
    }

    public function getSpecialite(): string { return $this->specialite; }
    public function isConsultationEnLigne(): bool { return $this->consultation_en_ligne; }

    public function setSpecialite(string $specialite): void { $this->specialite = $specialite; }
    public function setConsultationEnLigne(bool $value): void { $this->consultation_en_ligne = $value; }

    public function save(): void
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            INSERT INTO avocat 
            (nom, email, ville_id, years_of_experience, specialite, consoltation_en_ligne)
            VALUES (?, ?, ?, ?, ?, ?)
        ");
        $stmt->execute([
            $this->nom,
            $this->email,
            $this->ville_id,
            $this->years_of_experience,
            $this->specialite,
            $this->consultation_en_ligne
        ]);
    }

    public function update(): void
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            UPDATE avocat SET
                nom=?, email=?, ville_id=?, years_of_experience=?,
                specialite=?, consoltation_en_ligne=?
            WHERE id=?
        ");
        $stmt->execute([
            $this->nom,
            $this->email,
            $this->ville_id,
            $this->years_of_experience,
            $this->specialite,
            $this->consultation_en_ligne,
            $this->id
        ]);
    }

    public function delete(): void
    {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM avocat WHERE id=?");
        $stmt->execute([$this->id]);
    }
}
