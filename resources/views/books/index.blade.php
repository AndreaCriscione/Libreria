<x-layout>
    @if (session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill" />
      </svg>
      <div>
        {{session('success')}}
      </div>
    </div>
    @endif

    <section class="py-5">
        <div class="container px-5 my-5">
          <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
              <div class="text-center">
                <h2 class="fw-bolder">Libri caricati</h2>

                <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur
                  adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                  <a class="text-decoration-none btn btn-success" href="{{route('books.create')}}" >Crea Libro</a>
                  <hr>
              </div>
            </div>
          </div>
          <div class="row gx-5">

            @foreach ($books as $book)
            
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src={{Storage::url($book->image)}} alt="..." />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">News</div>
                        <h5 class="card-title mb-3">{{$book->title}}</h5>
                        <p class="card-text mb-0">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                            <div class="d-flex align-items-center">
                                
                                <div class="small">
                                    <div class="fw-bold">Pagine: {{$book->pages}}</div>
                                    <div class="text-muted">March 12, 2023 &middot; 6 min read</div>

                                    <hr>
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-outline-info me-md-2" href="{{route('books.show', ['book'=>$book->id])}}">Visualizza</a>
                                    @auth
                                    <div class="d-flex justify-content-center">
                                        <a class="btn btn-outline-warning me-md-2" href="{{route('books.edit', ['book'=> $book])}}">Modifica</a>
                 
                                        <form action="{{route('books.destroy', $book)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-decoration-none btn btn-outline-danger " type="submit" >Elimina</button>
                                        </form>
                                    </div>
                                    @endauth
                                </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
            @endforeach

           

        <!-- Call to action-->
        <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">New products, delivered to you.</div>
                    <div class="text-white-50">Sign up for our newsletter for the latest updates.</div>
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Email address..." aria-label="Email address..." aria-describedby="button-newsletter" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="button">Sign up</button>
                    </div>
                    <div class="small text-white-50">We care about privacy, and will never share your data.</div>
                </div>
            </div>
        </aside>
    </div>
</section>
</x-layout>