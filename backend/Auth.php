<?php

namespace Backend\CarRent;

use Bag\Collection;

class Auth
{
    private string $name = 'auth_session';

    public static function getInstance()
    {
        return new self();
    }

    public  function check(): bool
    {
        return isset($_SESSION[$this->name]);
    }

    public function user(): Collection
    {
        return new Collection($_SESSION[$this->name] ?? []);
    }

    public function attempt(string $email, string $password): bool
    {
        $user = \Backend\CarRent\Models\Pengguna::findByEmail($email);
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION[$this->name] = $user;
            return true;
        }
        return false;
    }

    public function logout(): void
    {
        unset($_SESSION[$this->name]);
    }

    public function isAdmin(): bool
    {
        $user = $this->user();
        return ($user['role'] ?? '') === 'admin';
    }

    public function isPengguna(): bool
    {
        $user = $this->user();
        return ($user['role'] ?? '') === 'pengguna';
    }
}