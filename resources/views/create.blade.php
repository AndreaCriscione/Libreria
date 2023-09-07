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
        <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('POST')
          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input class="form-control" value ="{{old('title')}}" name="title" type="text" placeholder="Nome" />
            @error('name')
            <span class="text-danger"> {{$message}} </span>
            @enderror
          </div>
      
          <!--  -->
          <div class="mb-3">
            <label class="form-label">Pagine</label>
            <input class="form-control" value ="{{old('text')}}" name="pages"  type="text" placeholder="Numero Pagine" />
            @error('text')
            <span class="text-danger"> {{$message}}  </span>
            @enderror
          </div>

          <div class="mb-3">
            <label class="form-label">Copertina</label>
            <input class="form-control" value ="{{old('image')}}" name="image"  type="file" placeholder="Numero Pagine" />
            @error('image')
            <span class="text-danger"> {{$message}}  </span>
            @enderror
          </div>

          <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit" >Salva</button>
          </div>
      
        </form>
      
      </div>
    </article>
    </main>
</x-layout>