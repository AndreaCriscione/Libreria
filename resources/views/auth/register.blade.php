<x-layout>
  <div class="d-flex justify-content-center">
  <h1>
    Registrazione
  </h1>
</div>


    <form action="{{route('register')}}" method="POST">
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
          <label for="exampleInputEmail1" class="form-label">Nome</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{old('name')}}" aria-describedby="emailHelp">    
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{old('email')}}">  
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">     
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">   
          </div>

        <button type="submit" class="btn btn-primary">Registrati</button>
      </form>
  

</x-layout>