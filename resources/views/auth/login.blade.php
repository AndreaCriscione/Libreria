<x-layout>
    
    <form action="{{route('login')}}" method="POST">
        @csrf
        @method('POST')

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" name="email">  @error('email') <span class="small text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">  @error('password') <span class="small text-danger">{{ $message }}</span> @enderror
          </div>


        <button type="submit" class="btn btn-primary">Entra</button>
      </form>

</x-layout>