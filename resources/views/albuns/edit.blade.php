<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tião Carreiro e Pardinho - Editar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>

        <div class="bg-dark py-3">
            <h3 class="text-white text-center">Tião Carreiro e Pardinho</h3>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-md-10 d-flex justify-content-end">
                    <a href="{{ route('albuns.index') }}" class="btn btn-dark">Voltar</a>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card borde-0 shadow-lg my-4">
                        <div class="card-header bg-dark">
                            <h3 class="text-white">Editar Álbum</h3>
                        </div>
                        <form enctype="multipart/form-data" action="{{ route('albuns.update', $album->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Título</label>
                                    <input value="{{ old('nome', $album->nome) }}" type="text" class="@error('nome') is-invalid @enderror form-control form-control-lg" placeholder="Título" name="nome">
                                    @error('nome')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Gravadora</label>
                                    <input value="{{ old('gravadora', $album->gravadora) }}" type="text" class="@error('gravadora') is-invalid @enderror form-control form-control-lg" placeholder="Gravadora" name="gravadora">
                                    @error('gravadora')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Ano de Lançamento</label>
                                    <input value="{{ old('ano', $album->ano) }}" type="text" class="@error('ano') is-invalid @enderror form-control form-control-lg" placeholder="Ano" name="ano">
                                    @error('ano')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Gênero</label>
                                    <input value="{{ old('genero', $album->genero) }}" type="text" class="@error('genero') is-invalid @enderror form-control form-control-lg" placeholder="Gênero" name="genero">
                                    @error('genero')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Quantidade de Faixas</label>
                                    <input value="{{ old('faixas', $album->faixas) }}" type="text" class="@error('faixas') is-invalid @enderror form-control form-control-lg" placeholder="Faixas" name="faixas">
                                    @error('faixas')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label h5">Duração</label>
                                    <input value="{{ old('duracao', $album->duracao) }}" type="text" class="@error('duracao') is-invalid @enderror form-control form-control-lg" placeholder="MM:SS" name="duracao">
                                    @error('duracao')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="" class="form-label h5">Capa</label>
                                    <input type="file" class="form-control form-control-lg" placeholder="Image" name="image">

                                    @if ($album->image != "")
                                        <img class="w-50 my-3" src="{{ asset('uploads/albuns/'.$album->image) }}" alt="Capa">
                                    @endif
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-lg btn-primary">Atualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
