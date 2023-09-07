@extends('./../Layout/app')

@section('page-content')
    <div class="card mt-3">
        <div class="card-body">
            <a href="/accueil">retour</a>
            <div class="title"> {{$article->titre}}</div>
            <p>
                {{$article->description}}
            </p>

            <div class="card-footer"></div>
            <button class="btn btn-info">Editer</button>
            <button class="btn btn-danger">Supprimer</button>
        </div>
    </div>
@endsection