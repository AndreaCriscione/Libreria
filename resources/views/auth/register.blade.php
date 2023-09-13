<x-layout>


    <form action="{{route('register')}}" method="POST">
        @csrf
        @method('POST')

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Nome</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{old('name')}}" aria-describedby="emailHelp">    @error('name') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{old('email')}}">  @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">     @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">   @error('password_confirmation') <span class="small text-danger">{{ $message }}</span> @enderror
          </div>

        <button type="submit" class="btn btn-primary">Registrati</button>
      </form>

</x-layout>