<x-layout>
  <div class="d-flex justify-content-center">
    <h1>
      Login
    </h1>
  </div>
    
    <form action="{{route('login')}}" method="POST">
        @csrf
        @method('POST')
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" name="email">  
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password"> 
          </div>


        <button type="submit" class="btn btn-primary">Entra</button>
      </form>

</x-layout>