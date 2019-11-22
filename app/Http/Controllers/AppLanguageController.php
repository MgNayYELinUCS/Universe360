<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\AppService;
use App\Service\LanguageService;
use App\Service\AppLanguageService;

class AppLanguageController extends Controller
{
    function __construct()
    {
        $this->AppService = new AppService();
        $this->LanguageService = new LanguageService();
        $this->AppLanguageService = new AppLanguageService();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data["language_get_all"] = $this->LanguageService->get_all();
        $data["app_language_get_all"] = $this->AppLanguageService->get_app_language($id);
        $data["app_language_key_get_all"] = $this->AppLanguageService->get_app_language_key($id);
        dd($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
