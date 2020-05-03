@extends('users.fill-menu')

@section('fill-user')

    <div class="ui segment">
        @if(!$cls)
            <form class="ui form" method="POST" action="{{route('user.cls.save')}}" enctype="multipart/form-data">
                @csrf

                <img class="ui centered medium circular image" src="{{asset('storage/assets/img/user-default.png')}}">
                
                <div class="input-group my-2  @error('perfil.*') error @enderror">
                    <div class="custom-file ">
                        <input type="file"  name="perfil" class="custom-file-input" id="addPiture">
                        <label class="custom-file-label" for="addPiture">Escolha arquivos</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text btn-flat" id="">Adicionar uma foto para perfil</span>
                    </div>
                </div>
                @error('perfil.*')<p style="color:#9f3a38">{{$message}}</p>@enderror


                <button type="submit" class="fluid ui button">Guardar</button>
            </form>
        @else            
            <form class="ui form" method="POST" action="{{route('user.cls.update', ['cls' => $cls->id])}}" enctype="multipart/form-data">
                @csrf
                <img class="ui centered medium circular image" src="{{asset('storage/'. $cls->perfil)}}">
                <div class="input-group my-2  @error('perfil.*') error @enderror">
                    <div class="custom-file ">
                        <input type="file"  name="perfil" class="custom-file-input" id="addPiture">
                        <label class="custom-file-label" for="addPiture">Escolha arquivos</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text btn-flat" id="">Troca foto do perfil</span>
                    </div>
                </div>
                @error('perfil.*')<p style="color:#9f3a38">{{$message}}</p>@enderror

                <button type="submit" class="fluid ui button">Atualizar a foto do perfil</button>
            </form>


        @endif
    </div>
@endsection
@section('scripts-menu')    
    <script>
      
    </script>
@endsection
