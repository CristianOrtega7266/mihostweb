<?php
namespace App\Http\Controllers;

use App\Models\mascotas1;
use Illuminate\Routing\Controller; 
class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = mascotas1::all(); // Obtiene todos los registros de la tabla mascotas1s

        return view('mascotas.index', compact('mascotas')); // Pasa los datos a la vista
    }
}
