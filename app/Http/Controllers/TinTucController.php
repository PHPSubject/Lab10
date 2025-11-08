<?php

namespace App\Http\Controllers;

use App\Models\TinTuc;
use Illuminate\Http\Request;

class TinTucController extends Controller
{
    public function index()
    {
        $dsTin = TinTuc::query()
            ->orderByDesc('ngaydang')
            ->orderByDesc('id')
            ->paginate(9)
            ->withQueryString();
        return view('tintuc.index', compact('dsTin'));
    }
    public function show($id)
    {
        $tin = TinTuc::findOrFail($id);
        return view('tintuc.chitiet', compact('tin'));
    }
}
