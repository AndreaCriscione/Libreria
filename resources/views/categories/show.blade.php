<x-layout>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <p>Nome Categoria: {{$category->name}} </p>

                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <table class="table border mt-2">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Pagine</th>
                        <th scope="col">Anno</th>

                    </tr>
                </thead>
                <tbody>
                    @forelse ($author->books as $book)
                    <tr>
                        <th scope="row">{{$book->id}}</th>
                        <td>
                            <img class="card-img-top" style="width:3rem"
                                src="{{empty($book->image) ? '/assets/images/default.jpg' : Storage::url($book->image)}}"
                                alt="..." />
                        </td>
                        <td>{{$book['name']}}</td>


                    </tr>
                    @empty
                    <tr colspan="3"> </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>

    </x-layout>