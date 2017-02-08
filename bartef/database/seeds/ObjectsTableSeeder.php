<?php

use Illuminate\Database\Seeder;

class ObjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('objects')->delete();

      $objects = array(
        ['name' => 'Impermeable para moto', 'value' => 10, 'category_id' => 10, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'BattleShip', 'value' => 20, 'category_id' => 12, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Llavero Batman', 'value' => 42, 'category_id' => 13, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Mouse Inalambrico', 'value' => 60, 'category_id' => 2, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Uncharted 3 Drake Deception', 'value' => 100, 'category_id' => 1, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Gafas de sol', 'value' => 150, 'category_id' => 6, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Guayos Adidas ', 'value' => 150, 'category_id' => 14, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Nintendo64', 'value' => 300, 'category_id' => 1, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Placa Poster Decorativo Metal Cocacola', 'value' => 15, 'category_id' => 13, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Vestido juvenil', 'value' => 50, 'category_id' => 5, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Billetera Amphora', 'value' => 100, 'category_id' => 6, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Señor de los anillos', 'value' => 100, 'category_id' => 12, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Microondas Electrolux', 'value' => 209, 'category_id' => 4, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Asador a carbon', 'value' => 380, 'category_id' => 4, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Anillo Compromiso Diamante', 'value' => 1500, 'category_id' => 6, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Akt NKD 125', 'value' => 7400, 'category_id' => 10, 'user_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Rummi', 'value' => 52, 'category_id' => 12, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Brevísima Historia Del Tiempo', 'value' => 109, 'category_id' => 8, 'user_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Jumanji', 'value' => 100, 'category_id' => 12, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Trilogia - Los Juegos Del Hambre', 'value' => 250, 'category_id' => 8, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Dron Skyhawkey', 'value' => 450, 'category_id' => 15, 'user_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Reloj Azul Tommy Hilfiger', 'value' => 1000, 'category_id' => 6, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Nevera Abba', 'value' => 740, 'category_id' => 4, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Libro Harry Potter autografiado por J. K. Rowling', 'value' => 10000, 'category_id' => 6, 'user_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Uno', 'value' => 28, 'category_id' => 12, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Soporte magnetico para auto', 'value' => 50, 'category_id' => 3, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Introduction to algorithms 3rd Edition', 'value' => 110, 'category_id' => 8, 'user_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Pantalon Drill Hombre Adidas', 'value' => 155, 'category_id' => 5, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Sensor de reversa', 'value' => 220, 'category_id' => 11, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Parlante Portable Bluetooth Samsung', 'value' => 400, 'category_id' => 2, 'user_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'PlayStation3', 'value' => 1000, 'category_id' => 1, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Pulsar RS 200', 'value' => 12000, 'category_id' => 10, 'user_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Mi nombre es Skywalker', 'value' => 35, 'category_id' => 8, 'user_id' => 3, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Cargador Portatil Power Bank 10000', 'value' => 65, 'category_id' => 3, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Lampara luces 3600 Ojo de Angel', 'value' => 110, 'category_id' => 9, 'user_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Licuadora Clásica De 3 Velocidades Oster', 'value' => 164, 'category_id' => 4, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Cafetera Kitchenaid', 'value' => 300, 'category_id' => 4, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Estatuas coleccionables Star Wars - Darth Vader', 'value' => 400, 'category_id' => 13, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Xbox360', 'value' => 1000, 'category_id' => 1, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Chevrolet Spark GT', 'value' => 25000, 'category_id' => 11, 'user_id' => 9, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Camiseta Aeropostale Polo', 'value' => 40, 'category_id' => 5, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Funda De Ordenador Portátil De Acolchado', 'value' => 69, 'category_id' => 5, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Teclado Inalámbrico Logitech Touch K400 Plus', 'value' => 120, 'category_id' => 5, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Call Of Duty', 'value' => 108, 'category_id' => 1, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Gafas realidad virtual', 'value' => 370, 'category_id' => 3, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Bicicleta Estática Magnetica Sport Fitness', 'value' => 530, 'category_id' => 9, 'user_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Portatil Asus X456UA', 'value' => 1400, 'category_id' => 2, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Balon Fútbol Adidas Autografiado James', 'value' => 10000, 'category_id' => 7, 'user_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Balón Nike', 'value' => 40, 'category_id' => 14, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Selfie Stick', 'value' => 80, 'category_id' => 3, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Monopolio', 'value' => 130, 'category_id' => 12, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Audífonos Sony Bluetooth, Recargables Via Usb', 'value' => 181, 'category_id' => 3, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Cuadro De Postal Antiguo De Charles Chaplin', 'value' => 200, 'category_id' => 13, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Bicicleta Urbana Hombre Rin 26 Shimano', 'value' => 545, 'category_id' => 9, 'user_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => '26 Bicicleta De Tándem 21 Velocidades', 'value' => 2650, 'category_id' => 9, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Camiseta seleccion colombia autografiada por Falcao Garcia', 'value' => 10000, 'category_id' => 7, 'user_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Chaqueta bomber', 'value' => 90, 'category_id' => 5, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Aspiradora manual', 'value' => 150, 'category_id' => 4, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Espejo con camara', 'value' => 190, 'category_id' => 11, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Audifonos Beats', 'value' => 340, 'category_id' => 2, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'SmartWatch Gear', 'value' => 560, 'category_id' => 3, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Camara Canon Reflex', 'value' => 3800, 'category_id' => 15, 'user_id' => 6, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Yamaha BWS X', 'value' => 5580, 'category_id' => 10, 'user_id' => 8, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Mazda 3 Touring', 'value' => 30000, 'category_id' => 11, 'user_id' => 9, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Fifa', 'value' => 100, 'category_id' => 1, 'user_id' => 4, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Casco bicicleta Mountain Bike', 'value' => 90, 'category_id' => 9, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Tenis Reebok', 'value' => 150, 'category_id' => 5, 'user_id' => 2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Guantes Egotiko', 'value' => 190, 'category_id' => 14, 'user_id' => 5, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Kit iluminacion estudio', 'value' => 350, 'category_id' => 15, 'user_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Lente ojo de pez esferico', 'value' => 600, 'category_id' => 15, 'user_id' => 7, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Paramore All We Know Is Falling Firmado por Paramore', 'value' => 150, 'category_id' => 7, 'user_id' => 1, 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ['name' => 'Bmw Serie 3 325i', 'value' => 35000, 'category_id' => 11, 'user_id' => 9, 'created_at' => new DateTime, 'updated_at' => new DateTime],
      );

      DB::table('objects')->insert($objects);
    }
}
