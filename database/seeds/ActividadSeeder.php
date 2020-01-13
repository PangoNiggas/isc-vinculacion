<?php

use Illuminate\Database\Seeder;
use App\Models\Fase;
use App\Models\Actividad;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Fase1 = Fase::where('NombreFase','Resumen Ejecutivo')->value('id');
        $Fase2 = Fase::where('NombreFase','Mercado')->value('id');
        $Fase3 = Fase::where('NombreFase','Tecnico')->value('id');
        $Fase4 = Fase::where('NombreFase','Diseño Organizacinal, Marco Legal y Fiscal')->value('id');
        $Fase5 = Fase::where('NombreFase','Estudio Financiero')->value('id');
      
        Actividad::create([

            'Nombre' => 'Nombre del proyecto',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);

        Actividad::create([

            'Nombre' => 'Logotipo y Slogan',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);
        Actividad::create([

            'Nombre' => 'Razon social y Giro',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);
        Actividad::create([

            'Nombre' => 'Descripción de la Empresa',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);
        Actividad::create([

            'Nombre' => 'Objetivo General',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);
        Actividad::create([

            'Nombre' => 'Objetivos Especificos sobre el producto',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);
        Actividad::create([

            'Nombre' => 'Mision',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);
        Actividad::create([

            'Nombre' => 'Vision',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);
        Actividad::create([

            'Nombre' => 'Valores',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);
        Actividad::create([

            'Nombre' => 'Estructura Organizacional',
            'Descripcion' => '',
            'fase_id' => $Fase1,
        ]);

        Actividad::create([

            'Nombre' => 'Caracteristicas del Producto y Mercado',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);
        
        Actividad::create([

            'Nombre' => 'Caracteristicas del Mercado',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);
        
        Actividad::create([

            'Nombre' => 'Segmento de Mercado',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);
        
        Actividad::create([

            'Nombre' => 'Analisis de la Demanda',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);
        
        Actividad::create([

            'Nombre' => 'Analisis de la Oferta',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);
        
        Actividad::create([

            'Nombre' => 'Identificacion de la Competencia',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);
        
        Actividad::create([

            'Nombre' => 'Analisis Foda',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);
        
        Actividad::create([

            'Nombre' => 'Analisis de la Comercializacion',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);
        
        Actividad::create([

            'Nombre' => 'Promoción del Producto o Servicio',
            'Descripcion' => '',
            'fase_id' => $Fase2,
        ]);

        Actividad::create([

            'Nombre' => 'Cronograma de Actividades del Proyecto',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);

        Actividad::create([

            'Nombre' => 'Ficha Técnica',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);

        Actividad::create([

            'Nombre' => 'Descripción del Proceso de Producción y de Ventas',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);

        Actividad::create([

            'Nombre' => 'Diagrama de Proceso de Producción',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);
        Actividad::create([

            'Nombre' => 'Proceso de Ventas',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);
        Actividad::create([

            'Nombre' => 'Mano de Obra',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);
        Actividad::create([

            'Nombre' => 'Capacidad Instalada',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);
        Actividad::create([

            'Nombre' => 'Manejo de Inventarios',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);

        Actividad::create([

            'Nombre' => 'Sueldos y Salarios',
            'Descripcion' => '',
            'fase_id' => $Fase3,
        ]);

        Actividad::create([

            'Nombre' => 'Identificacion de Empleos Generados',
            'Descripcion' => '',
            'fase_id' => $Fase4,
        ]);
        
        Actividad::create([

            'Nombre' => 'Descripcion de Puestos',
            'Descripcion' => '',
            'fase_id' => $Fase4,
        ]);
        
        Actividad::create([

            'Nombre' => 'Marco Legal',
            'Descripcion' => '',
            'fase_id' => $Fase4,
        ]);
        
        Actividad::create([

            'Nombre' => 'Regimen Fiscal',
            'Descripcion' => '',
            'fase_id' => $Fase4,
        ]);
        
        Actividad::create([

            'Nombre' => 'Registro de Marcas y Patentes',
            'Descripcion' => '',
            'fase_id' => $Fase4,
        ]);
        
        Actividad::create([

            'Nombre' => 'Imagen Corporativa',
            'Descripcion' => '',
            'fase_id' => $Fase4,
        ]);
        
        Actividad::create([

            'Nombre' => 'Ventajas y Distingos de la Empresa',
            'Descripcion' => '',
            'fase_id' => $Fase4,
        ]);
        
        Actividad::create([

            'Nombre' => 'Contribución Social del Proyecto',
            'Descripcion' => '',
            'fase_id' => $Fase4,
        ]);

        Actividad::create([

            'Nombre' => 'Presupuestos de Producción',
            'Descripcion' => '',
            'fase_id' => $Fase5,
        ]);
        Actividad::create([

            'Nombre' => 'Estados Financieros',
            'Descripcion' => '',
            'fase_id' => $Fase5,
        ]);
        Actividad::create([

            'Nombre' => 'Evaluación Economica',
            'Descripcion' => '',
            'fase_id' => $Fase5,
        ]);
        Actividad::create([

            'Nombre' => 'Analisis de Sensibilidad',
            'Descripcion' => '',
            'fase_id' => $Fase5,
        ]);
        Actividad::create([

            'Nombre' => 'Punto de Equilibrio',
            'Descripcion' => '',
            'fase_id' => $Fase5,
        ]);
    }
}
