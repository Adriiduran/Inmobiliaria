<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inmueble>
 */
class InmuebleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker->randomElement(['Pedanías Norte. Esta singular propiedad está ubicada cerca del núcleo urbano de Utrera, a 30 minutos en coche de Sevilla capital y a 34 minutos del aeropuerto.La casa principal de dos plantas (509 m²), está rodeada de un cuidado jardín donde hay más de 70 palmeras, una piscina, baño, y una caseta para la barbacoa.', 'Espectacular casa de 1174 m²de superficie, catalogado con grado de protección B según el plan especial de protección y conjunto histórico de Utrera, con una parcela de 954 m²de parcela, provincia de Sevilla. Ojo inversores, espectacular casa palacio, en el mismo casco histórico del centro de Utrera', 'Se vende piso (2ª planta) de 90 metros construidos distribuidos en: un recibidor, un salón-comedor, terraza, una cocina amueblada, tres habitaciones y dos baños.. La vivienda dispone de plaza de garaje subterránea y ascensor.. Se ubica en zona residencial, tranquila y familiar.. . El precio de venta no incluye: impuestos (el Impuesto de Transmisiones Patrimoniales, I.V.A. o A.J.D., en su caso), otros gastos de la compraventa (gastos de registro de la Propiedad, Notaría, gestoría, ni de posible financiación).']),
            'direccion' => $this->faker->randomElement(['C/Las Mujeres', 'C/Alvarez Hazañas', 'Av. Maria Auxiliadora']),
            'reserva' => "no",
            'poblacion'=> $this->faker->randomElement(['Utrera','Montellano','Sevilla','Los Palacios']),
            'precio'=> $this->faker->numberBetween(100000,1000000),
            'metrosCuadrados'=> $this->faker->numberBetween(50,300),
            'imagen' => $this->faker->randomElement(['imagenes/pruebacasa1.jpg','imagenes/pruebacasa2.jpg','imagenes/pruebacasa3.jpg','imagenes/pruebacasa4.jpg','imagenes/pruebacasa5.jpg','imagenes/pruebacasa6.jpg',]),
        ];
    }
}
