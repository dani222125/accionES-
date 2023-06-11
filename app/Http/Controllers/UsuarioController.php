<?php

namespace App\Http\Controllers;


use app\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //Funcion para mostrar una vista llamada inicio
    public function index()
    {
        //Listar los Usuario
        $usuario = Usuario::select(
        "usuario.condigo",
        "usuario.nombre",
        "usuario.apellido",
        "beneficiarios.nombre as beneficiarios "
    )->join("beneficiarios","beneficiarios.codigo", "=", "usuario.beneficiarios")->get();

    return view('/products/show')->with(['usuario' => $usuario]);
}

/** 
 * Show the form for creating a new resources.
 * 
 * @return \Iluminate\Http\Response
 */
 public function create()
 { 
    //  Traer blogs
    $blogs = Usuario::all();

    //retornar vista del create (formulario)
    return view('/products/create')->with(['beneficiarios' => $beneficiarios]);
 }

 /** 
  * Store a newly created resource in storage.
  *
  *@param \Illuminate\Http\Request 
  *@return \Illuminate\Http\Response
  */
  public function store(Request $request)
{
    //dd($request->post());

    //Validar los campos
    $data = request()->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'edad'    => 'required'
    ]);

    //Insertar la informacion
    Usuario::create($data);

    //Redireccionnar
    return redirect('products/show');
}

/** 
 * Display the specified resource
 * 
 * @param int $id
 * @return \Illuminate\Http\response
 */
public function show($id)
{
    // 
}

/**
 * Show the form for editing the specified resource
 * 
 * @param int $id
 * @return \Illuminate\Http\Responce
 */
public function edit(Usuario $usuario)
{
    //Traer blogs
    $blogs = blogs::all();

    //Mostrar la vista
    return view('products/update')->with(['blogs' => $blogs, 'usuario' => $Usuario]);

} 

/**
 * Update the specified resource in storage.
 * 
 * @param \Illuminate\Http\Request $request
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, Usuario $Usuario)
{
    //Validaf los campos
    $data = request()->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'edad' => 'required'
    ]);

    //Reemplaza datos viejitos con los nuevos
    $Usuario->nombre = $data['nombre'];
    $Usuario->apellido = $data['apellido'];
    $Usuario->edad = $data['edad'];
    $Usuario->update_at = now();

    //Guardar actualizacion
    $Usuario->save();

    //Redireccionar
    return redirect('/products/show');
}

/**
 * Remove the specified resource from storage
 * 
 * @param int $id
 * @return \Illuminate\Http\Response
 *
 */
public function destroy($id)
{
    //Eliminar usuario con id que recibimos
    Usuario::destroy($id);

    //Retornar una repueta json
    return reponse()->json(array('res' => true));
 }
}