@extends('./Layout/app')

@section('page-content')

<div class="card mt-2">
    <div class="card-body">
        @if(session()->has('succes'))

        <div class = "alert alert-info"> {{session() ->get('succes')}} </div>

       

        @endif
        <form action="/articles" method="POST" class="form-product">
            @method('POST')
            @csrf
            <h4>Enregistrer un Article</h4>
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" placeholder="Titre de l'article" name="titre" value="{{ old('titre') }}">
                @error('titre')
                    <div class="text text-danger">{{ $message }}</div>
                @enderror

                <textarea name="description" class="form-control mt-1" placeholder="entrez la description"></textarea>

                @error('description')
                    <div class="text text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Ajouter</button>
        </form>
    </div>
</div>

<ul class="list-group mt-2">

   
   @forelse ($articles as $article)
    <li class="list-group-item disabled"> 
    <h4>Articles disponible</h4>
    <a href="{{ route('articles.show', ['id' => $article->id]) }}" class="title">{{$article->titre}}</a>

    <div class="description">{{$article->description}}</div>
    </li>

   @empty
   <p class="text text-info">Aucun article n'a été trouvé</p>
   @endforelse


</ul>
@endsection