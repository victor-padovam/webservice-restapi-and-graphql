<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno as Aluno;
use App\Http\Resources\Aluno as AlunoResource;


class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::paginate(50);

        return AlunoResource::collection($alunos);
    }

    public function showUnique($id){
        $alunos = Aluno::findOrFail( $id );

        return new AlunoResource( $alunos );
    }

    public function create(Request $request){
        $aluno = new Aluno;
        $aluno->nome = $request->input('nome');
        $aluno->curso = $request->input('curso');
        $aluno->semestre = $request->input('semestre');
        $aluno->ra = $request->input('ra');
        $aluno->cpf = $request->input('cpf');
        $aluno->cidade = $request->input('cidade');

        if ( $aluno->save() ) {

            return new AlunoResource( $aluno );
        }
    }

    public function update(Request $request){
        $aluno = Aluno::findOrFail( $request->id );
        $aluno->nome = $request->input('nome');
        $aluno->curso = $request->input('curso');
        $aluno->semestre = $request->input('semestre');
        $aluno->ra = $request->input('ra');
        $aluno->cpf = $request->input('cpf');
        $aluno->cidade = $request->input('cidade');

        if ( $aluno->save() ) {

            return new AlunoResource( $aluno );
        }
    }

    public function destroy($id){
        $aluno = Aluno::findOrFail( $id );
        if ( $aluno->delete() ) {

            return json_encode(array('Excluido com exito.'));;
        }
    }

}
