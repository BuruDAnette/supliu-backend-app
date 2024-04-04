<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AlbumController extends Controller
{
    public function index() {
        $albuns = Album::orderBy('id', 'desc')->get();
        return view('albuns.list',[
            'albuns' => $albuns
        ]);
    }

    public function create() {
        return view('albuns.create');
    }

    public function store (Request $request) {
        $rules = [
            'nome' => 'required|min:5',
            'gravadora' => 'required|min:3',
            'ano' => 'required|numeric',
            'genero' => 'required|min:3',
            'faixas' => 'required|numeric',
            'duracao' => 'required|min:3'
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->route('albuns.create')->withInput()->withErrors($validator);
        }

        $album = new Album();
        $album->nome = $request->nome;
        $album->gravadora = $request->gravadora;
        $album->ano = $request->ano;
        $album->genero = $request->genero;
        $album->faixas = $request->faixas;
        $album->duracao = $request->duracao;
        $album->save();

        if ($request->image != "") {
            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            $image->move(public_path('uploads/albuns'),$imageName);

            $album->image = $imageName;
            $album->save();
        }

        return redirect()->route('albuns.index')->with('success','Álbum criado com sucesso');

    }
    public function edit($id) {
        $album = Album::findOrFail($id);
        return view('albuns.edit', [
            'album' => $album
        ]);
    }
    public function update($id, Request $request) {
        $album = Album::findOrFail($id);

        $rules = [
            'nome' => 'required|min:5',
            'gravadora' => 'required|min:3',
            'ano' => 'required|numeric',
            'genero' => 'required|min:3',
            'faixas' => 'required|numeric',
            'duracao' => 'required|min:3'
        ];

        if ($request->image != "") {
            $rules['image'] = 'image';
        }

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
            return redirect()->route('albuns.edit',$album->id)->withInput()->withErrors($validator);
        }

        $album->nome = $request->nome;
        $album->gravadora = $request->gravadora;
        $album->ano = $request->ano;
        $album->genero = $request->genero;
        $album->faixas = $request->faixas;
        $album->duracao = $request->duracao;
        $album->save();

        if ($request->image != "") {
            File::delete(public_path('uploads/albuns/'.$album->image));

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
            $imageName = time().'.'.$ext;

            $image->move(public_path('uploads/albuns'),$imageName);

            $album->image = $imageName;
            $album->save();

        }

        return redirect()->route('albuns.index')->with('success','Álbum atualizado com sucesso');

    }

    public function destroy($id) {
        $album = Album::findOrFail($id);

        File::delete(public_path('uploads/albuns/'.$album->image));

        $album->delete();

        return redirect()->route('albuns.index')->with('success','Álbum excluído com sucesso');
    }
}
