<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Http\Requests;

class FrontController extends Controller
{
    public function blog() {
        return view('blog', [
            'posts' => Post::all(),
            'categories' => Category::all()
        ]);
    }

    public function blog_search(Request $request) {
        $search = $request->search;
        return view('blog', [
            'posts' => Post::Title($search)->get(),
            'categories' => Category::all()
        ]);
    }

    public function blog_category($categorySlug) {
        $cat = Category::where('slug', $categorySlug)->first();
        return view('blog', [
            'posts' => Post::where('category_id', $cat->id)->get(),
            'categories' => Category::all()
        ]);
    }

    public function nota($title) {
        return view('nota', [
            'post' => Post::where('title', $title)->first(),
            'related' => Post::all()->shuffle()->take(3)
        ]);
    }
    public function index() { return view('welcome'); }
    public function contacto() { return view('contacto'); }
    public function gracias() { return view('gracias'); }
    
    public function enfermedades_bazo() { return view('padecimientos_clinicos.enfermedades_bazo'); }
    public function enfermedades_colonicas() { return view('padecimientos_clinicos.enfermedades_colonicas'); }
    public function enfermedades_esofagicas() { return view('padecimientos_clinicos.enfermedades_esofagicas'); }
    public function enfermedades_gastricas() { return view('padecimientos_clinicos.enfermedades_gastricas'); }
    public function enfermedades_higado() { return view('padecimientos_clinicos.enfermedades_higado'); }
    public function enfermedades_intestino_delgado() { return view('padecimientos_clinicos.enfermedades_intestino_delgado'); }
    public function enfermedades_pancreaticas() { return view('padecimientos_clinicos.enfermedades_pancreaticas'); }
    public function enfermedades_vesicula_vias_biliares() { return view('padecimientos_clinicos.enfermedades_vesicula_vias_biliares'); }
    public function enfermedades_intestino_irritable() { return view('padecimientos_clinicos.enfermedades_intestino_irritable'); }
    
    public function amputaciones() { return view('cirugia_general.amputaciones'); }
    public function apendicetomia() { return view('cirugia_general.apendicetomia'); }
    public function cirugia_acalasia() { return view('cirugia_general.cirugia_acalasia'); }
    public function cirugia_glandula_tiroides() { return view('cirugia_general.cirugia_glandula_tiroides'); }
    public function colecistectomia() { return view('cirugia_general.colecistectomia'); }
    public function deteccion_oportuna() { return view('cirugia_general.deteccion_oportuna'); }
    public function drenaje_tratamiento_infecciones() { return view('cirugia_general.drenaje_tratamiento_infecciones'); }
    public function exploracion_vias_biliares() { return view('cirugia_general.exploracion_vias_biliares'); }
    public function extraccion_bazo() { return view('cirugia_general.extraccion_bazo'); }
    public function extraccion_lipomas() { return view('cirugia_general.extraccion_lipomas'); }
    public function heridas_cronicas() { return view('cirugia_general.heridas_cronicas'); }
    public function hernias_abdominales() { return view('cirugia_general.hernias_abdominales'); }
    public function padecimientos_anorectales() { return view('cirugia_general.padecimientos_anorectales'); }
    public function pie_diabetico() { return view('cirugia_general.pie_diabetico'); }
    public function reconexiones_intestinales() { return view('cirugia_general.reconexiones_intestinales'); }
    public function resecciones_colonicas() { return view('cirugia_general.resecciones_colonicas'); }
    public function tratamiento_ulceras() { return view('cirugia_general.tratamiento_ulceras'); }
    public function trauma_abdominal() { return view('cirugia_general.trauma_abdominal'); }


}
