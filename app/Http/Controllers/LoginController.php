<?php

namespace App\Http\Controllers;

use App\Models\CatUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    //funcion para loguear al usuario
    public function login(Request $request)
    {
        if($request->password == null || $request->correo == null){
            return response()->json([
                'code' => 400,
                'message' => 'No se ha podido iniciar sesión, por favor verifique sus credenciales'
            ], 400);
        }else{
            $usuario = CatUsuario::where('correo', $request->correo)->first();
            if($usuario){
                $token = $usuario->createToken('token');
                if($password=Crypt::decrypt($usuario->password) == $request->password){
                    return response()->json([
                        'code' => 200,
                        'message' => 'Bienvenido',
                        'user' => $usuario,
                        'token' => $token->plainTextToken
                    ], 200);
                }else{
                    return response()->json([
                        'code' => 400,
                        'message' => 'Contraseña incorrecta'
                    ], 400);
                }
            }else{
                return response()->json([
                    'code' => 404,
                    'message' => 'El usuario no existe'
                ], 404);
            }
            }
        }


    //funcion para cerrar sesion
    public function logout(Request $request){
        $usuario = CatUsuario::where('id', $request->id)->first();
        if($usuario){
            $usuario->tokens()->where('id', $request->token)->delete();
            return response()->json([
                'code' => 200,
                'message' => 'Sesión cerrada correctamente'
            ], 200);
        }else{
            return response()->json([
                'code' => 404,
                'message' => 'El usuario no existe'
            ], 404);
        }
      }
    }



