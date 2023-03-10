<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SeguimientoReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seguimiento_reportes')->insert([
            [
                'id' => 1,
                'fecha' => Carbon::now(),
                'estatus' => 'en Progreso',
                'mensaje' => 'Ya nos encontramos atendiendo tu reporte',
                'reporte_id' => 1,
                'notificado' => false
            ],
            [
                'id' => 2,
                'fecha' => Carbon::now(),
                'estatus' => 'atendido',
                'mensaje' => 'Tu reporte fue atendido',
                'reporte_id' => 1,
                'notificado' => false
            ],
            [
                'id' => 3,
                'fecha' => Carbon::now(),
                'estatus' => 'cancelado',
                'mensaje' => 'La información enviada no es lo suficientemente clara',
                'reporte_id' => 2,
                'notificado' => true
            ]
        ]);
    }
}
