<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\PR_CLIENTE;

class PR_CLIENTEController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = DB::table('PR_CLIENTE')
            ->join('PR_TIPOCLIENTE', 'PR_CLIENTE.CONS_TIPOCLIENTE', '=', 'PR_TIPOCLIENTE.CONS_TIPOCLIENTE')
            ->select('PR_CLIENTE.*', 'PR_TIPOCLIENTE.DESCRIPCION')
            ->get();

        return $users;
        //return PR_CLIENTE::all();
     
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
        //Instancia de clase
        $PR_CLIENTE = new PR_CLIENTE;

        //obtener request
        $PR_CLIENTE->NOMBRE=$request->NOMBRE;
        $PR_CLIENTE->CONS_TIPOCLIENTE=$request->CONS_TIPOCLIENTE;

        //Salvar cambio
        $PR_CLIENTE->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($CONS_CLIENTE)
    {
        //
        return PR_CLIENTE::where('CONS_CLIENTE', $CONS_CLIENTE)->get();
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
        $PR_CLIENTE = new PR_CLIENTE;
        $PR_CLIENTE = PR_CLIENTE::find($id);

        //obtener request
        $PR_CLIENTE->NOMBRE=$request->NOMBRE;
        $PR_CLIENTE->CONS_TIPOCLIENTE=$request->CONS_TIPOCLIENTE;

        $PR_CLIENTE->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $PR_CLIENTE = new PR_CLIENTE;
        $PR_CLIENTE = PR_CLIENTE::find($id)->delete(); 
    }
}
