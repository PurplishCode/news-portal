<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function store(Request $request) {
$validatedData = $request->validate(['name' => 'required']);
$createC = Category::create($validatedData['name']);

if($createC) {
    return to_route('home-admin.view')->withSuccess("Successfully created a category.");
}
    }
}
