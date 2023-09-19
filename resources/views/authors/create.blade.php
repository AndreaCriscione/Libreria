<x-layout>


    <x-slot name="title"> Contatti </x-slot>
    <main>
      
    
    <article class="artcontenitore mt-5 pt-5" >
    
      <div class="container py-4">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li> {{ $error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form action="{{route('authors.store')}}" method="POST">
          @csrf
          @method('POST')
          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control" value ="{{old('name')}}" name="name" type="text" placeholder="Nome Autore" />
            @error('name')
            <span class="text-danger"> {{$message}} </span>
            @enderror
          </div>
      
          <!--  -->
          <div class="mb-3">
            <label class="form-label">Cognome</label>
            <input class="form-control" value ="{{old('surname')}}" name="surname"  type="text" placeholder="Cognome Autore" />
            @error('surname')
            <span class="text-danger"> {{$message}}  </span>
            @enderror
          </div>
          


          <div class="mb-3">
            <label class="form-label">Compleanno</label>
            <input class="form-control" value ="{{old('birthday')}}" name="birthday"  type="date" placeholder="Anno Di Nascita" />
            @error('birthday')
            <span class="text-danger"> {{$message}}  </span>
            @enderror
          </div>

          <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit" >Salva</button>
          </div>
          <hr>
          <a href="{{route('books.index')}}">Torna Indietro</a>
        </form>
      
      </div>
    </article>
    </main>
</x-layout>