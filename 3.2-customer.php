<?php

class Customer {
    private $id;
    private $name;
    private $surname;
    private $email;
    private static $lastId = 0;

    public function __construct(
         $id,
        string $name,
        string $surname,
        string $email
    ) {
        if ($id == null) {
            $this->id = ++self::$lastId;  // self:: -> para metodos static
        } else {
            $this->id = $id;
            if ($id > self::$lastId) {
                self::$lastId = $id;
            }
        }
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
    }

    public function getId() {
        return $this->id;
    }
    public function getFirstname(): string {
        return $this->firstname;
    }
    public function getSurname(): string {
        return $this->surname;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function setEmail(string $email) {
        $this->email = $email;
    }
    public static function getLastId(): int {
        return self::$lastId;
    }
}


