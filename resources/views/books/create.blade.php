<x-layout>


    <x-slot name="title"> Contatti </x-slot>
    <main>


        <article class="artcontenitore mt-5 pt-5">

            <div class="container py-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input class="form-control" value="{{ old('title') }}" name="title" type="text"
                            placeholder="Nome" />
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <!--  -->
                    <div class="mb-3">
                        <label class="form-label">Pagine</label>
                        <input class="form-control" value="{{ old('pages') }}" name="pages" type="text"
                            placeholder="Numero Pagine" />
                        @error('text')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    @foreach ($categories as $category)
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="{{ $category->id }}"
                                    name="categories[]" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{ $category->name }}
                                </label>
                            </div>
                        </div>
                    @endforeach



                    <div class="mb-3">
                        <label class="form-label">Copertina</label>
                        <input class="form-control" value="{{ old('image') }}" name="image" type="file"
                            placeholder="Numero Pagine" />
                        @error('image')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-control">
                        <select name="author_id">

                            @foreach ($authors as $author)
                                <option value="{{ $author->id }}">{{ $author->name . ' ' . $author->surname }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary btn-lg" type="submit">Salva</button>
                    </div>
                    <hr>
                    <a href="{{ route('books.index') }}">Torna Indietro</a>
                </form>

            </div>
        </article>
    </main>
</x-layout>
