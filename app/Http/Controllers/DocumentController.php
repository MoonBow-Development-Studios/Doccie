<?php

namespace App\Http\Controllers;

use App\Events\DocumentSaveEvent;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function WSDocumentSave() {
        event(new DocumentSaveEvent);
    }
}
