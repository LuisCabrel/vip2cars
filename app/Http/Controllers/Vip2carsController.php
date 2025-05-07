<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\Vip2carsModel;
use Illuminate\Support\Facades\Hash;

class Vip2carsController extends Controller
{
    

    public function index()
    {
        $cars = Vip2carsModel::all();
        return view('vip2cars.index', compact('cars'));
    }

    public function create()
    {
        return view('vip2cars.create');
    }

    public function store(Request $request)
    {
        Vip2carsModel::create($request->all());
        return redirect()->route('vip2cars.index')->with('success', 'Vehículo creado correctamente');
    }


    public function edit($id)
    {
        $vip2cars = Vip2carsModel::findOrFail($id);
        return view('vip2cars.edit', compact('vip2cars'));
    }

    public function update(Request $request, $id)
    {
        $vip2cars = Vip2carsModel::findOrFail($id);
        $vip2cars->update($request->all());

        return redirect()->route('vip2cars.index')->with('success', 'Vehículo actualizado correctamente.');
    }

    public function destroy($id)
    {
        $car = Vip2carsModel::findOrFail($id);
        $car->delete();

        return redirect()->route('vip2cars.index')->with('success', 'Vehículo eliminado correctamente.');
    }
}