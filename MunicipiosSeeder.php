<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('municipios')->delete();

        DB::table('municipios')->insert([
            ['id' => '1', 'municipio' => 'Aguadulce', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '2', 'municipio' => 'Alanís', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '3', 'municipio' => 'Albaida del Aljarafe', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '4', 'municipio' => 'Alcalá de Guadaíra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '5', 'municipio' => 'Alcalá del Río', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '6', 'municipio' => 'Alcolea del Río', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '7', 'municipio' => 'Algaba, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '8', 'municipio' => 'Algámitas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '9', 'municipio' => 'Almadén de la Plata', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '10', 'municipio' => 'Almensilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '11', 'municipio' => 'Arahal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '12', 'municipio' => 'Aznalcázar', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '13', 'municipio' => 'Aznalcóllar', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '14', 'municipio' => 'Badolatosa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '15', 'municipio' => 'Benacazón', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '16', 'municipio' => 'Bollullos de la Mitación', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '17', 'municipio' => 'Bormujos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '18', 'municipio' => 'Brenes', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '19', 'municipio' => 'Burguillos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '20', 'municipio' => 'Cabezas de San Juan, Las', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '21', 'municipio' => 'Camas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '22', 'municipio' => 'Campana, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '23', 'municipio' => 'Cantillana', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '24', 'municipio' => 'Cañada Rosal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '25', 'municipio' => 'Carmona', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '26', 'municipio' => 'Carrión de los Céspedes', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '27', 'municipio' => 'Casariche', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '28', 'municipio' => 'Castilblanco de los Arroyos', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '29', 'municipio' => 'Castilleja de Guzmán', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '30', 'municipio' => 'Castilleja de la Cuesta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '31', 'municipio' => 'Castilleja del Campo', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '32', 'municipio' => 'Castillo de las Guardas, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '33', 'municipio' => 'Cazalla de la Sierra', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '34', 'municipio' => 'Constantina', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '35', 'municipio' => 'Coria del Río', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '36', 'municipio' => 'Coripe', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '37', 'municipio' => 'Coronil, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '38', 'municipio' => 'Corrales, Los', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '39', 'municipio' => 'Cuervo de Sevilla, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '40', 'municipio' => 'Dos Hermanas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '41', 'municipio' => 'Écija', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '42', 'municipio' => 'Espartinas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '43', 'municipio' => 'Estepa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '44', 'municipio' => 'Fuentes de Andalucía', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '45', 'municipio' => 'Garrobo, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '46', 'municipio' => 'Gelves', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '47', 'municipio' => 'Gerena', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '48', 'municipio' => 'Gilena', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '49', 'municipio' => 'Gines', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '50', 'municipio' => 'Guadalcanal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '51', 'municipio' => 'Guillena', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '52', 'municipio' => 'Herrera', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '53', 'municipio' => 'Huévar del Aljarafe', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '54', 'municipio' => 'Isla Mayor', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '55', 'municipio' => 'Lantejuela', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '56', 'municipio' => 'Lebrija', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '57', 'municipio' => 'Lora de Estepa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '58', 'municipio' => 'Lora del Río', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '59', 'municipio' => 'Luisiana, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '60', 'municipio' => 'Madroño, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '61', 'municipio' => 'Mairena del Alcor', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '62', 'municipio' => 'Mairena del Aljarafe', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '63', 'municipio' => 'Marchena', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '64', 'municipio' => 'Marinaleda', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '65', 'municipio' => 'Martín de la Jara', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '66', 'municipio' => 'Molares, Los', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '67', 'municipio' => 'Montellano', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '68', 'municipio' => 'Morón de la Frontera', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '69', 'municipio' => 'Navas de la Concepción, Las', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '70', 'municipio' => 'Olivares', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '71', 'municipio' => 'Osuna', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '72', 'municipio' => 'Palacios y Villafranca, Los', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '73', 'municipio' => 'Palmar de Troya, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '74', 'municipio' => 'Palomares del Río', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '75', 'municipio' => 'Paradas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '76', 'municipio' => 'Pedrera', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '77', 'municipio' => 'Pedroso, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '78', 'municipio' => 'Peñaflor', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '79', 'municipio' => 'Pilas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '80', 'municipio' => 'Pruna', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '81', 'municipio' => 'Puebla de Cazalla, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '82', 'municipio' => 'Puebla de los Infantes, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '83', 'municipio' => 'Puebla del Río, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '84', 'municipio' => 'Real de la Jara, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '85', 'municipio' => 'Rinconada, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '86', 'municipio' => 'Roda de Andalucía, La', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '87', 'municipio' => 'Ronquillo, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '88', 'municipio' => 'Rubio, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '89', 'municipio' => 'Salteras', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '90', 'municipio' => 'San Juan de Aznalfarache', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '91', 'municipio' => 'San Nicolás del Puerto', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '92', 'municipio' => 'Sanlúcar la Mayor', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '93', 'municipio' => 'Santiponce', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '94', 'municipio' => 'Saucejo, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '95', 'municipio' => 'Sevilla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '96', 'municipio' => 'Tocina', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '97', 'municipio' => 'Tomares', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '98', 'municipio' => 'Umbrete', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '99', 'municipio' => 'Utrera', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '100', 'municipio' => 'Valencina de la Concepción', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '101', 'municipio' => 'Villamanrique de la Condesa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '102', 'municipio' => 'Villanueva de San Juan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '103', 'municipio' => 'Villanueva del Ariscal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '104', 'municipio' => 'Villanueva del Río y Minas', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '105', 'municipio' => 'Villaverde del Río', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => '106', 'municipio' => 'Viso del Alcor, El', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ]);
    }
}
