<?php

declare(strict_types=1);

class SuperHero {

    // Usamos ell constructor para crearlo con todo directamente
    // Promoted Properties
    public function __construct(
        private string $name, 
        public array $powers, 
        public string $planet)
    {
    }
    public function attack(){
        return "¡$this->name ataca con sus poderes!";
    }

    public function description(){
        // implode para convertir el array en string
        $powers = implode(", ", $this->powers);

        return "$this->name es un superhéroe que viene de $this->planet y tiene los siguientes poderes: $powers";
    }

//Para elegir objeto aleatorio. Se puede llamar sin hacer una instancia
public static function random(){
    $names = ["Thor", "Spiderman", "Wolverine", "Ironman", "Hulk"];
    $powers = [ 
        ["Superfuerza", "Volar", "Rayos láser"],
        ["Superfuerza", "Super agilidad", "Telarañas"],
        ["Regeneración", "Superfuerza", "Garras de adamantiium"],
        ["Superfuerza", "Volar", "Rayos láser"],
        ["Superfuerza", "Super agilidad", "Cambio de tamaño"],
    ];
    $planets = ["Asgard", "HulkWorld", "Krypton", "Tierra"];

    $name = $names[array_rand($names)];
    $power = $powers[array_rand($powers)];
    $planet = $planets[array_rand($planets)];

    return new self($name, $power, $planet);
}

}

// Accedemos al método estático. Sin instanciar
SuperHero::random();

// Estático
$hero = SuperHero::random(); // Método estático
echo $hero ->description();

