<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        echo view('templates/header');
        echo view('templates/menu');
        echo view('startseite');
        echo view('templates/footer');
    }

    // NEU: Methode für die Spalten-Tabelle
    public function spalten()
    {
        echo view('templates/header');
        echo view('templates/menu');
        echo view('spalten');
        echo view('templates/footer');
    }
    // ... (bestehende index() und spalten() Methoden)

    public function spalten_erstellen()
    {
        echo view('templates/header');
        echo view('templates/menu');
        echo view('spalten_erstellen'); // Die neue View
        echo view('templates/footer');
    }
}
