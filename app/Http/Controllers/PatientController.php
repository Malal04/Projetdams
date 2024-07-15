<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Affiche la liste des patients
  public function index()
  {
      $patients = Patient::all();
      return view('patients.index', compact('patients'));
  }

  // Affiche le formulaire pour créer un nouveau patient
  public function create()
  {
      return view('patients.create');
  }

  // Enregistre un nouveau patient dans la base de données
  public function store(Request $request)
  {
      // Validation des données
      $request->validate([
          'nom' => 'required',
          'prenom' => 'required',
          'adresse' => 'required',
          'age' => 'required|integer',
          'telephone' => 'required',
          'email' => 'required|email|unique:patients'
      ]);

      // Création du patient
      Patient::create($request->all());

      return redirect()->route('patients.index')
                       ->with('success', 'Patient ajouté avec succès.');
  }

  // Affiche les détails d'un patient spécifique
  public function show(Patient $patient)
  {
      return view('patients.show', compact('patient'));
  }

  // Affiche le formulaire pour modifier un patient spécifique
  public function edit(Patient $patient)
  {
      return view('patients.edit', compact('patient'));
  }

  // Met à jour les informations d'un patient spécifique
  public function update(Request $request, Patient $patient)
  {
      // Validation des données
      $request->validate([
          'nom' => 'required',
          'prenom' => 'required',
          'adresse' => 'required',
          'age' => 'required|integer',
          'telephone' => 'required',
          'email' => 'required|email|unique:patients,email,' . $patient->id
      ]);

      // Mise à jour des données du patient
      $patient->update($request->all());

      return redirect()->route('patients.index')
                       ->with('success', 'Patient mis à jour avec succès.');
  }

  // Supprime un patient spécifique
  public function destroy(Patient $patient)
  {
      $patient->delete();

      return redirect()->route('patients.index')
                       ->with('success', 'Patient supprimé avec succès.');
  }
}
