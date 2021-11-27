<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumnentController extends Controller
{
    public function show(Document $document)
    {
        return view('show')->withDocument($document);
    }
}
