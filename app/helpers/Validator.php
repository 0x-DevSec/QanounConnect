<?php

class Validator
{
    private array $errors = [];

    public function required(string $field, $value): void
    {
        if (empty($value)) {
            $this->errors[$field][] = 'Ce champ est obligatoire';
        }
    }

    public function email(string $field, string $value): void
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = 'Email invalide';
        }
    }

    public function min(string $field, int $value, int $min): void
    {
        if ($value < $min) {
            $this->errors[$field][] = "Minimum {$min}";
        }
    }

    public function errors(): array
    {
        return $this->errors;
    }

    public function fails(): bool
    {
        return !empty($this->errors);
    }
}
