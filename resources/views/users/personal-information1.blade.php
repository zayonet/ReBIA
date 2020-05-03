@extends('users.fill-menu')

@section('fill-user')
<style>
.mySlides {display:none; }
.w3-red {background-color:#9f3a38;}
</style>
<div class="container">
    <div id="context">
        

        <!-- /.START PERSONAL-INFORMATION -->
        <div class="ui segment" data-tab="step1">
            @if(!$personal)
                <form class="ui form" method="POST" action="{{route('user.info.save')}}" enctype="multipart/form-data">
                    @csrf
                    <h4 class="ui dividing header">Dados Pessoais</h4>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="required field  @error('bi') error @enderror"  data-tooltip="Escreva o B.I no formato 0000000AA000" data-position="bottom right">
                                <label>Nº. B.I</label>
                            <input type="text" id="bi" name="bi" placeholder="Nº de bilhete de Identidade" autocomplete="off" value="{{old('bi')}}">
                                @error('bi')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="required field  @error('name') error @enderror">
                                <label>Nome</label>
                                <input type="text"  name="name" placeholder="Nome" value="{{auth()->user()->name}}" autocomplete="off" value="{{old('name')}}">
                                @error('name')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                            <div class="required field  @error('surname') error @enderror">
                                <label>Sobrenome</label>
                                <input type="text"  name="surname" placeholder="Sobrenome" autocomplete="off" value="{{old('surname')}}">
                                @error('surname')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="required field  @error('birthday') error @enderror">
                                <label>Nascido em</label>
                                <div class="ui calendar" id="date_calendar">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" name="birthday" placeholder="Data de nascimento" autocomplete="off" value="{{old('birthday')}}">
                                    </div>
                                </div>
                                        @error('birthday')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field  @error('province') error @enderror">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province" id="province" value="{{old('province')}}">
                                        <option>Selecione a província</option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->code}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('province')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Cidade</label>
                                        <select class="ui search dropdown" name="city" id="city">
                                            {{-- @foreach($cities as $city)
                                                <option value="{{$city->name}}">{{$city->name}}</option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="required field  @error('mobile_phone') error @enderror">
                                <label>Celular</label>
                                <input type="text" id="mobile_phone" name="mobile_phone" placeholder="Celular" autocomplete="off" value="{{old('mobile_phone')}}">
                                        @error('mobile_phone')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="field">
                                <label>Telefone</label>
                                <input type="text" id="phone" name="phone" placeholder="Telefone" autocomplete="off">
                            </div>
                            <div class="field">
                                <label>Nº do passporte</label>
                                <input type="text" name="passport" placeholder="Nº do passporte" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="required field  @error('county') error @enderror">
                                <label>Município</label>
                                <input type="text" name="county" placeholder="Município" autocomplete="off" value="{{old('county')}}">
                                        @error('county')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="required field  @error('address') error @enderror">
                                <label>Endereço</label>
                                <input type="text" name="address" placeholder="Endereço" autocomplete="off" value="{{old('address')}}">
                                        @error('address')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="field">
                                <label>Zona</label>
                                <input type="text" name="zip" placeholder="Zona" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="ui form">
                        <div class="ui two column very relaxed grid">
                            <div class="column">
                                <div class="ui form">
                                    <div class="required field  @error('about') error @enderror">
                                        <label>Sobre voce</label>
                                        <textarea name="about"></textarea>
                                    </div>
                                    @error('about')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div> 
                                <div class="input-group mt-2">
                                    <div class="custom-file  @error('photos.*') error @enderror">
                                        <input type="file"  name="photos[]" multiple class="custom-file-input" id="addPiture">
                                        <label class="custom-file-label" for="addPiture">Escolha arquivos</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text btn-flat" id="">Adicionar fotos</span>
                                    </div>
                                    @error('photos.*')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="column">
                                <div class="ui message">
                                    <div class="header">
                                        Exemplo sobre voce
                                    </div>
                                    <ul class="list">
                                        <li>André Tembo,  nascido aos 22 de Abril de 1965, natural de Cuando Cubango, portador de bilhete de identidade nº 00000CC000, residência atual, na província de Luanda, município de Cazenga, Bairro Hoji-Ya-Henda, Casa nº 29.</li>
                                        <li>Did you know it's bee>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500sn a while?</li>
                                        <li>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                        <h4 class="ui horizontal divider header">
                            <i class="tag icon"></i> Redes sociais
                        </h4>
                    <div class="ui form mt-2">
                        <div class="three fields">
                            <div class="field">
                                <label>Facebook</label>
                                <input type="text" name="facebook" placeholder="facebook">
                            </div>
                            <div class="field">
                                <label>Tweet</label>
                                <input type="text" name="tweet" placeholder="tweet">
                            </div>
                            <div class="field">
                                <label>LinkedIn</label>
                                <input type="text" name="linkedin" placeholder="linkedin">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="fluid ui button">Guardar e Seguir</button>
                </form>
            @else
                <form class="ui form" method="POST" action="{{route('user.info.update', ['info' => $user->id])}}" enctype="multipart/form-data">
                    @csrf
                    <h4 class="ui dividing header">Dados Pessoais</h4>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="required field  @error('bi') error @enderror"  data-tooltip="Escreva o B.I no formato 0000000AA000" data-position="bottom right">
                                <label>Nº. B.I</label>
                                <input type="text" name="bi" id="bi" placeholder="Nº de bilhete de Identidade"  value="{{$user->bi}}">
                                @error('bi')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="required field  @error('name') error @enderror">
                                <label>Nome</label>
                                <input type="text"  name="name" placeholder="Nome" value="{{$user->name}}">
                                @error('name')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <input type="hidden"  name="user_id" value="{{$user->id}}">
                            <div class="required field  @error('surname') error @enderror">
                                <label>Sobrenome</label>
                                <input type="text"  name="surname" placeholder="Sobrenome" value="{{$user->surname}}">
                                @error('surname')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="required field  @error('birthday') error @enderror">
                                <label>Nascido em</label>
                                <div class="ui calendar" id="date_calendar">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" name="birthday" placeholder="Data de nascimento" autocomplete="off"  value="{{$user->birthday}}">
                                    </div>
                                </div>
                                @error('birthday')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="required field d-none  @error('province') error @enderror " id="IdProvinces">
                                <label>Província</label>
                                <select class="ui search dropdown" name="province" id="province">
                                    <option>Selecione a província</option>
                                    @foreach($provinces as $province)
                                        <option value="{{$province->code}}">{{$province->name}}</option>
                                    @endforeach
                                </select>                                    
                            </div>
                            <div class="required field  d-none  @error('city') error @enderror" id="IdCities">
                                <label>Cidade</label>
                                <select class="ui search dropdown" name="city" id="city">
                                </select>
                                @error('city')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="required field " id="idProvince">
                                <label>Província</label>
                                    <div class="ui right labeled left icon input"  data-tooltip="Clique no botao para mudar a província" data-position="top left">
                                    <i class="location arrow icon"></i>
                                    @foreach($provinces as $province)
                                        @if($user->province == $province->code)
                                        <input type="text" placeholder="Provincia onde nasceu" value="{{$province->name}}">
                                        @endif
                                        @endforeach
                                    <a class="ui tag label" id="change">
                                        Mudar
                                    </a>
                                </div>
                                
                            </div>
                            <div class="required field" id="idCity" >
                                <label>Cidade</label>
                                <input type="text" placeholder="Cidade onde nasceu" value="{{$user->city}}">
                            </div>
                        </div>
                    </div>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="required field  @error('mobile_phone') error @enderror">
                                <label>Celular</label>
                                <input type="text" name="mobile_phone" id="mobile_phone" placeholder="Celular" value="{{$user->mobile_phone}}">
                                @error('mobile_phone')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="field">
                                <label>Telefone</label>
                                <input type="text" name="phone" id="phone"  placeholder="Telefone" value="{{$user->phone}}">
                            </div>
                            <div class="field">
                                <label>Nº do passporte</label>
                                <input type="text" name="passport" placeholder="Nº do passporte" value="{{$user->passport}}">
                            </div>
                        </div>
                    </div>
                    <div class="ui form">
                        <div class="three fields">
                            <div class="required field  @error('county') error @enderror">
                                <label>Município</label>
                                <input type="text" name="county" placeholder="Município" value="{{$user->county}}">
                                @error('county')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="field">
                                <label>Endereço</label>
                                <input type="text" name="address" placeholder="endereço 1" value="{{$user->address}}">
                                @error('address')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                            <div class="field">
                                <label>Zona</label>
                                <input type="text" name="zip" placeholder="Zona" value="{{$user->zip}}">
                            </div>
                        </div>
                    </div>
                    <div class="ui two column very relaxed grid">
                        <div class="column">
                            <div class="ui form" data-content="Hello. This is a wide pop-up which allows for lots of content with additional space. You can fit a lot of words here and the paragraphs will be pretty wide." data-variation="wide">
                                <div class="required field  @error('about') error @enderror">
                                    <label>Sobre voce</label>
                                    <textarea name="about">{{$user->about}}</textarea>
                                </div>
                            </div> 
                            <div class="input-group mt-2">
                                <div class="custom-file  @error('photos.*') error @enderror" data-tooltip="É necessário adicionar alguma imagem.">
                                    <input type="file"  name="photos[]" multiple class="custom-file-input" id="addPiture">
                                    <label class="custom-file-label" for="addPiture">Escolha arquivos</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text btn-flat" id="">Adicionar fotos</span>
                                </div>
                                    @error('photos.*')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                        </div>
                        <div class="column">
                            <label class="header">
                                Minhas fotos
                            </label>
                            <div class="row">

                                <div class="col-12">
                                    
                                    <div class="card" >
                                        <div class="card-body" style="padding: 0px!important; margin: 0px!important;">

                                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner text-center" style="background:url({{asset('storage/assets/img/05.jpg')}}); background-size: cover">

                                                    @php $total = 0; 
                                                    
                                                    $setActive = 0;

                                                    $sliderHtml = '';
                                                    @endphp
                                                    @forelse($user->photos as $key => $photo)
                                                    @php 
                                                        $id_user =  $photo->id;//PhotoUser
                                                        
                                                        
                                                        $userPhotoURL_img = asset('storage/'.$photo->image);

                                                        $activeClass = "";

                                                        if(!$setActive) {

                                                            $setActive = 1;

                                                            $activeClass = 'active';

                                                        }
                                                    
                                                        $sliderHtml.= "<div class='carousel-item ".$activeClass."'>";

                                                        $sliderHtml.= "<div class='view'><a href='".$userPhotoURL_img."' target='_blank'>";

                                                        $sliderHtml.= "<img src='".$userPhotoURL_img."' class='img-fluid img-thumbnail ' style='width:auto; height:200px;'>";
                                                        
                                                        $sliderHtml.= "<div class='mask rgba-black-light'></div>";

                                                        $sliderHtml.= "</a></div>
                                                                        <div class='carousel-caption'>
                                                            <h3 class='h3-responsive ui blue circular label'>".$key."</h3>
                                                        
                                                        </div>
                                                        </div>";
                                                        @endphp
                                                    @empty
                                                        <div class="ui icon massive orange message">
                                                            <i class="images outline icon"></i>
                                                            <div class="content">
                                                            <div class="header">
                                                                Ooops!
                                                            </div>
                                                            <p>Você não possui nenhuma foto. Por favor adicione fotos!</p>
                                                            </div>
                                                        </div>
                                                    @endforelse
                                                    @php
                                                    echo $sliderHtml;
                                                    @endphp

                                                </div>

                                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>

                                            </div>  	

                                        </div>
                                    </div>
                                </div>
                                <div class="ui tiny images">
                                    @foreach($user->photos as $key => $photo)
                                        <a  class="" data-toggle="modal" data-target="#modal-default">
                                            
                                            <img src="{{asset('storage/' . $photo->image)}}" class="ui fluid image" style="width:30px; height:30px"> 
                                        </a>
                                    @endforeach
                                </div>
                            </div>



                        </div>
                    </div>
                    <h4 class="ui horizontal divider header">
                        <i class="tag icon"></i> Redes sociais
                    </h4>
                    <div class="ui form mt-2">
                        <div class="three fields">
                            <div class="field">
                                <label>Facebook</label>
                                <input type="text" name="facebook" placeholder="facebook" value="{{$user->facebook}}">
                            </div>
                            <div class="field">
                                <label>Tweet</label>
                                <input type="text" name="tweet" placeholder="tweet" value="{{$user->tweet}}">
                            </div>
                            <div class="field">
                                <label>LinkedIn</label>
                                <input type="text" name="linkedin" placeholder="linkedin" value="{{$user->linkedin}}">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="fluid ui button">Atualizar e Seguir</button>
                </form>

            
                <!-- /.MODAL ver todas as fotos do Info -->  
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    @forelse($user->photos as $key => $photo)
                                        <div class="col-3">
                                            <img src="{{asset('storage/' . $photo->image)}}" class="ui fluid image">

                                            <form class="row" action="{{route('user.photo.remove')}}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="photoName" value="{{$photo->image}}">
                                                    <button type="submit" class="btn btn-block btn-outline-secondary btn-xs">Apagar</button>
                                            </form>
                                        </div>   
                                    @empty
                                        <div class="ui icon massive green message">
                                            <i class="inbox icon"></i>
                                            <div class="content">
                                            <div class="header">
                                                Ooops!
                                            </div>
                                            <p>Voce nao possui nenhuma foto. Por favor adicione fotos!</p>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->


            @endif
        </div>
         <!-- /.END PERSONAL-INFORMATION -->
    </div>
</div>
@endsection

@section('scripts')
    <script>
       $('#context .steps .step').tab();
       $('.button').tab();
       $('#date_calendar')
       .calendar(
           {
                type: 'date',
           
                text: {
                    days: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
                    months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outobro', 'Novembro', 'Dezembro'],
                    monthsShort: ['Jan', 'Feb', 'Mar', 'Abr', 'Maio', 'Jun', 'Jul', 'Agos', 'Set', 'Oot', 'Nov', 'Dez'],
                    today: 'Hoje',
                    now: 'Agora',
                    am: 'Manhã',
                    pm: 'Tarde'
                },
                formatter: {
                    date: function (date, settings) {
                        if (!date) return '';
                        var day = date.getDate();
                        var month = date.getMonth() + 1;
                        var year = date.getFullYear();
                        return day + '/' + month + '/' + year;
                    }
                },
                regExp: {
                    dateWords: /[^A-Za-z\u00C0-\u024F]+/g,
                    dateNumbers: /[^\d:]+/g
                },
            }
        );
        
        $('#rangestart').calendar({
            type: 'date',
            endCalendar: $('#rangeend'),
            text: {
                    days: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
                    months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outobro', 'Novembro', 'Dezembro'],
                    monthsShort: ['Jan', 'Feb', 'Mar', 'Abr', 'Maio', 'Jun', 'Jul', 'Agos', 'Set', 'Oot', 'Nov', 'Dez'],
                    today: 'Hoje',
                    now: 'Agora',
                    am: 'Manhã',
                    pm: 'Tarde'
                },
            formatter: {
                date: function (date, settings) {
                    if (!date) return '';
                    var day = date.getDate();
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();
                    return day + '/' + month + '/' + year;
                }
            },
            regExp: {
                dateWords: /[^A-Za-z\u00C0-\u024F]+/g,
                dateNumbers: /[^\d:]+/g
            },
        });
        $('#rangeend').calendar({
            type: 'date',
            startCalendar: $('#rangestart'),
            text: {
                    days: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'],
                    months: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outobro', 'Novembro', 'Dezembro'],
                    monthsShort: ['Jan', 'Feb', 'Mar', 'Abr', 'Maio', 'Jun', 'Jul', 'Agos', 'Set', 'Oot', 'Nov', 'Dez'],
                    today: 'Hoje',
                    now: 'Agora',
                    am: 'Manhã',
                    pm: 'Tarde'
                },
            formatter: {
                date: function (date, settings) {
                    if (!date) return '';
                    var day = date.getDate();
                    var month = date.getMonth() + 1;
                    var year = date.getFullYear();
                    return day + '/' + month + '/' + year;
                }
            },
            regExp: {
                dateWords: /[^A-Za-z\u00C0-\u024F]+/g,
                dateNumbers: /[^\d:]+/g
            },
        });

        $('#city').dropdown();
        $('#province').dropdown();
    </script>

    
    <script>
        let imPhone = new Inputmask('(999) 999-999');
        imPhone.mask(document.getElementById('mobile_phone'));
        let imM_Phone = new Inputmask('(999) 999-999');
        imM_Phone.mask(document.getElementById('phone'));
        let bi = new Inputmask('999999AA999');
        bi.mask(document.getElementById('bi'));
    </script>
    
    <script>
        $('#province').change(function(){
            var token = $('meta[name="csrf-token"]').attr('content');
            var code = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': token
                }
            });
            if(code){
                $.ajax({
                    type:"get",
                    url:"/city/"+code, //Please see the note at the end of the post**
                    _token: token,
                    dataType : 'JSON', 
                    contentType:'application/json',
                    success:function(result)
                    {    //debugger;
                         if(result)
                        {var prov = 0;
                            $("#city").empty();                           
                            for (var i in result) { prov = result[i].province;}

                            $("#city").append('<option value="sem cidade">Em qual cidades da '+prov+' nasceu?</option>');

                            $.each(result,function(key,value){
                                $("#city").append('<option value="'+result[key].name+'">'+result[key].name+'</option>');
                                //console.log('Value of '+ key +' is : ' + value);
                            });
                        }   
                    }
                });
            }
        });

       /*  $('#city').change(function(){
            var token = $('meta[name="csrf-token"]').attr('content');
            var code = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': token
                }
            });
            if(code){
                $.ajax({
                    type:"get",
                    url:"/province/"+code, //Please see the note at the end of the post**
                    _token: token,
                    dataType : 'JSON', 
                    contentType:'application/json',
                    success:function(result)
                    {    //debugger;
                        //alert();
                        var name = JSON.stringify(result)
                        var x;
                        x = result[0].name
                        console.log(x);
                        if(result)
                        {   x = result[0].name
                            $("#province").empty();
                            $("#province").append('<option value="'+result[0].code+'">'+x+'</option>');
                        }
                        /* if(result)
                        {
                            $("#province").empty();
                            $("#province").append('<option>Select province</option>');
                            $.each(result,function(key,value){
                                $("#province").append('<option value="'+key+'">'+value+'</option>');
                                console.log('Value of '+ key +' is : ' + value);
                            });
                        }  */  
                  /*   }
                });
            }
        }); */ 

    </script>
    <script>
        $(document).ready(function(){

            $('a#change').on('click',function(){
                //hide delete button
                //$(this).closest(".ui .form").find(".field div.divHide").hide();.addClass('');
                $('#selectField').removeClass('d-none');
                $('#IdProvinces').removeClass('d-none');
                $('#IdCities').removeClass('d-none');
                $('#idProvince').addClass('d-none');
                $('#idCity').addClass('d-none');
                
            });
        });
        $(document).ready(function(){
            if($("#IdCities").hasClass("error")){
                $('#IdProvinces').removeClass('d-none');
                $('#IdCities').removeClass('d-none');
                $('#idProvince').addClass('d-none');
                $('#idCity').addClass('d-none');
            };
           /*  $("input").blur(function(){
                $(this).css("background-color", "green");
            }); */
        });
    </script>
@endsection
