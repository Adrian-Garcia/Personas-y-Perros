<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Perro;

class PerrosController extends Controller
{
	public function index() {
		$perros = Perro::all();

		return view('welcomePerro', compact('perros'));
	}

	public function store(Request $request) {
		
		$perro = new Perro;

		$perro->nombre = $request->input('nombrePerro');
		$perro->horaSalida = $request->input('horaSalida');
		$perro->horaRegreso = $request->input('horaRegreso');
		$perro->horaFinalDescanso = $request->input('horaFinalDescanso');

		$perro->save();

		return ($perro->id);
	}

	public function show($id) {
		$perro = Perro::find($id);

		return view ('perroid', compact('perro'));
	}

	public function edit () {
		$perros = Perro::all();

		return view('editPerros', compact('perros'));
	}

	public function update(Request $request) {
		$perro = Perro::find($request->input('id'));

		$perro->nombre = $request->input('nombrePerro');
		$perro->horaSalida = $request->input('horaSalida');
		$perro->horaRegreso = $request->input('horaRegreso');
		$perro->horaFinalDescanso = $request->input('horaFinalDescanso');

		$perro->save();

		return response()->json([
			'status' => 'OOOK'
		]);
	}

	public function destroy(Request $request) {
		$perro = Perro::find($request->input('id'));
		$perro->delete();

		return response()->json([
			'status' => 'OOOK'
		]);
	}
}

