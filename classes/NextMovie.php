<?php 

declare(strict_types=1);

class NextMovie {
    public function __construct(
        private string $title,
        private int $days_until,
        private string $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview,
        private string $next_poster,
        private int $next_days,
        private string $next_release,
        private string $next_overview
    ) {}
    public function get_until_message (): string {
        $days = $this->days_until;
    return match (true) {
        $days === 0    => "Hoy se estrena 🥳",
        $days === 1    => "Mañana se estrena 🚀",
        $days < 7      => "Esta semana se estrena 😉",
        $days <30      => "Este mes se estrena 🎦",
        default        => "$days días hasta el estreno 📆",
    };
}

     // Función para llamar a la API
    public static function fetch_and_create_movie(string $API_URL): NextMovie 
    {
      // La llamamos con file_get_contents 
      $result = file_get_contents($API_URL);
      // Decodificamos el json para poder acceder a los datos en PHP
      $data = json_decode($result, true);
      return new self(
        $data["title"],
        $data["days_until"],
        $data["following_production"]['title'] ?? "Desconocido",
        $data["release_date"],
        $data["poster_url"],
        $data["overview"],
        $data["following_production"]['poster_url'] ?? null,
        $data["following_production"]['days_until'] ?? null,
        $data["following_production"]['release_date'] ?? null,
        $data["following_production"]['overview'] ?? null
      );
      }

    public function get_data(){
        return get_object_vars($this);
    }

}

