<x-layout>
  <section class="py-5">
      <div class="container px-5">
          <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
              <div class="row gx-5 justify-content-center">
                  <div class="col-lg-8 col-xl-6">
                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif
                      <form action="{{route('categories.update',$category)}}" method="POST">
                          @method('PUT')
                          @csrf
                          <div class="form-floating mb-3">
                              <input class="form-control" id="name" name="name" type="text"
                                  value="{{$category->name}}" placeholder="Inserisci nome categoria">
                              <label for="name">Nome Categoria</label>
                              @error('name')
                              <span class="text-danger">
                                  {{$message}}
                              </span>
                              @enderror
                          </div>

                         


                          <div class="d-grid gap-3">
                              <button class="btn btn-primary btn-lg p-2" type="submit">Aggiorna</button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </section>
</x-layout>