<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::insert(['nombre' => 'Antioquia', 'codigo' => 5]);
        Departamento::insert(['nombre' => 'Atlantico', 'codigo' => 8]);
        Departamento::insert(['nombre' => 'D. C. Santa Fe de Bogotá', 'codigo' => 11]);
        Departamento::insert(['nombre' => 'Bolivar', 'codigo' => 13]);
        Departamento::insert(['nombre' => 'Boyaca', 'codigo' => 15]);
        Departamento::insert(['nombre' => 'Caldas', 'codigo' => 17]);
        Departamento::insert(['nombre' => 'Caqueta', 'codigo' => 18]);
        Departamento::insert(['nombre' => 'Cauca', 'codigo' => 19]);
        Departamento::insert(['nombre' => 'Cesar', 'codigo' => 20]);
        Departamento::insert(['nombre' => 'Cordova', 'codigo' => 23]);
        Departamento::insert(['nombre' => 'Cundinamarca', 'codigo' => 25]);
        Departamento::insert(['nombre' => 'Choco', 'codigo' => 27]);
        Departamento::insert(['nombre' => 'Huila', 'codigo' => 41]);
        Departamento::insert(['nombre' => 'La Guajira', 'codigo' => 44]);
        Departamento::insert(['nombre' => 'Magdalena', 'codigo' => 47]);
        Departamento::insert(['nombre' => 'Meta', 'codigo' => 50]);
        Departamento::insert(['nombre' => 'Nariño', 'codigo' => 52]);
        Departamento::insert(['nombre' => 'Norte de Santander', 'codigo' => 54]);
        Departamento::insert(['nombre' => 'Quindio', 'codigo' => 63]);
        Departamento::insert(['nombre' => 'Risaralda', 'codigo' => 66]);
        Departamento::insert(['nombre' => 'Santander', 'codigo' => 68]);
        Departamento::insert(['nombre' => 'Sucre', 'codigo' => 70]);
        Departamento::insert(['nombre' => 'Tolima', 'codigo' => 73]);
        Departamento::insert(['nombre' => 'Valle', 'codigo' => 76]);
        Departamento::insert(['nombre' => 'Arauca', 'codigo' => 81]);
        Departamento::insert(['nombre' => 'Casanare', 'codigo' => 85]);
        Departamento::insert(['nombre' => 'Putumayo', 'codigo' => 86]);
        Departamento::insert(['nombre' => 'San Andres', 'codigo' => 88]);
        Departamento::insert(['nombre' => 'Amazonas', 'codigo' => 91]);
        Departamento::insert(['nombre' => 'Guainia', 'codigo' => 94]);
        Departamento::insert(['nombre' => 'Guaviare', 'codigo' => 95]);
        Departamento::insert(['nombre' => 'Vaupes', 'codigo' => 97]);
        Departamento::insert(['nombre' => 'Vichada', 'codigo' => 99]);
    }
}
