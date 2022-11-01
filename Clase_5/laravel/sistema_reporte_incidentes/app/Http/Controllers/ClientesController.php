<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $razonSocial=$request->get('razon_social');
        $cuit=$request->get('cuit');
        //METODO PARA SABER SI UNA KEY ESTA GENREADA SI EXISTE
        //$request->has('cuit');
        //$clientes=DB::select("SELECT * FROM cliente");
        //$clientes=DB::table("cliente")->select("*")->where('razon_social',$razonSocial)->get();
        $clientes=DB::table("cliente")
        ->select("*")
        ->where('razon_social','like','%'.$razonSocial.'%')
        ->where('cuit','like',$cuit.'%')
        ->get();
        $parametros=[
            "arrayClientes"=>$clientes,
            "titulo" => "Esta es la tabla de clientes!"
        ];
        return view("clientes.clientes",$parametros);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parametros=[
            "titulo"=>"Estas en el formulario de Alta de Cliente!"
        ];
        return view("clientes.crear_clientes",$parametros);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $razonSocial=$request->post("razon_social");
        $cuit=$request->post("cuit");
        //$parametros=$request->post();
        //DB::insert("INSERT INTO cliente(razon_social, cuit) VALUES (?,?)",[$razonSocial,$cuit]);
        DB::table("cliente")->insert([
            "razon_social"=>$razonSocial,
            "cuit"=>$cuit
        ]);
        $clientes=DB::table("cliente")
        ->select("*")
        ->get();

        $parametros=[
            "clientes"=>$clientes,
            "titulo"=>"Esta todo bien!"
        ];
        //return(redirect()->route("clientes.index");
        return response()->json($parametros,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "Esto es el show del ClientsController".$id;
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
