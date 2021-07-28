<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;
use DataTables;
class ArticleController extends Controller
{
    public function index()
    {
        return view('articles');
    }


    public function getStudents(Request $request)
    {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return Datatables::of($users)->make();
    }

}
