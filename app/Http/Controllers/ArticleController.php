<?php

namespace App\Http\Controllers;

use App\AbArticle;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $articles = $this->getArticles($request);
        return view('articles', ['articles' => $articles]);
    }

    /**
     * Returns all $articles with or without query string
     */
    public function getArticles(Request $request){
        $name = $request->query('search');
        if($name){
            $articles = DB::table('ab_article')
                ->whereRaw("UPPER(ab_name) LIKE UPPER('%$name%')")
                ->get();

        }else{

            $articles = AbArticle::all();
        }
        return $articles;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $error = "";
        if(isset($_POST['aname'])) {
            $name = $_POST['aname'];
        }
        else {
            $error .= "Name fehlt".EOF;
        }
        if(isset($_POST['apreis'])) {
            $preis = $_POST['apreis'];
            if ($preis <= 0) {
                $error .= "Preisfehler".EOF;
            }
        }
        if(isset($_POST['adescription'])) {
            $name = $_POST['adescription'];
        }
        else {
            $error .= "Beschreibung fehlt".EOF;
        }

        if($error) {
            echo($error);
        }

            AbArticle::create([
                'id' => "503",
                'ab_name' => $name,
                'ab_price' => $preis,
                'ab_description' => $_POST['adescription'],
                'ab_creator_id' => "1",
                'ab_createdate' => "01.05.2020 13:00:00",
            ]);
            echo("Das hat gelappt");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AbArticle  $abArticle
     * @return \Illuminate\Http\Response
     */
    public function show(AbArticle $abArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AbArticle  $abArticle
     * @return \Illuminate\Http\Response
     */
    public function edit(AbArticle $abArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AbArticle  $abArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AbArticle $abArticle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AbArticle  $abArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(AbArticle $abArticle)
    {
        //
    }
}
