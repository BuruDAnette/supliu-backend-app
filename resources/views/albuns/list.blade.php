<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tião Carreiro e Pardinho - Discografia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>

        <div class="bg-dark py-3">
            <h3 class="text-white text-center">Tião Carreiro e Pardinho</h3>
        </div>

        <div class="container">
            <div class="row justify-content-center mt-4">
                <div class="col-md-10 d-flex justify-content-end">
                    <a href="{{ route('albuns.create') }}" class="btn btn-dark my-4">Criar</a>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                @if (Session::has('success'))
                <div class="col-md-10">
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                </div>
                @endif
                <div class="col-md-10">
                    <div class="card borde-0 shadow-lg my-4">
                        <div class="card-header bg-dark ">
                            <h3 class="text-white">Álbuns</h3>
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>ID</th>
                                    <th></th>
                                    <th>Nome</th>
                                    <th>Gravadora</th>
                                    <th>Ano</th>
                                    <th>Gênero</th>
                                    <th>Faixas</th>
                                    <th>Duração</th>
                                    <th>Ações</th>
                                </tr>
                                @if ($albuns->isNotEmpty())
                                @foreach ($albuns as $album)
                                    <tr>
                                        <td>{{ $album->id }}</td>
                                        <td>
                                            @if ($album->image != "")
                                                <img width="50" src="{{ asset('uploads/albuns/'.$album->image) }}" alt="Capa">
                                            @endif
                                        </td>
                                        <td>{{ $album->nome }}</td>
                                        <td>{{ $album->gravadora }}</td>
                                        <td>{{ $album->ano }}</td>
                                        <td>{{ $album->genero }}</td>
                                        <td>{{ $album->faixas }}</td>
                                        <td>{{ $album->duracao }}</td>
                                        <td>
                                            <a href="{{ route('albuns.edit', $album->id) }}" class="btn btn-dark">Editar</a>
                                            <a href="#" onclick="deleteProduct({{ $album->id }});" class="btn btn-danger">Excluir</a>
                                            <form id="delete-product-from-{{ $album->id }}" action="{{ route('albuns.destroy', $album->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    function deleteProduct(id) {
        if (confirm('Tem certeza que deseja excluir este álbum?')) {
            document.getElementById('delete-product-from-'+id).submit();
        }
    }
</script>
