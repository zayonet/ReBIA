@extends('users.fill-menu')

@section('fill-user')

    <div class="ui segment">
        @if(!$edu)
            <form class="ui form" method="POST" action="{{route('user.edu.save')}}" enctype="multipart/form-data">
                @csrf
                <!--ENSINO PRIMARIO!-->
                <h4 class="ui dividing header">Ensino Primário
                    {{-- <small><a href="javascript:void(0)" id="NotSuperior">(<span class="texto">não</span> tenho)</a></small></h4> --}} </h4>
                <div class="ui form">
                    <div class="four fields">
                        <div class="required field  @error('primary') error @enderror"">
                            <label>Nome</label>
                            <input type="text" name="primary" placeholder="Nome da escola" value="{{old('primary')}}">
                            @error('primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('phone_primary') error @enderror">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phone_primary" id="phone_primary" placeholder="Telefone da escola" value="{{old('phone_primary')}}">
                                <i class="phone icon"></i>
                            </div>
                            @error('phone_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                        <div class="required field  @error('address_primary') error @enderror">
                            <label>Endereço</label>
                            <input type="text"  name="address_primary" placeholder="Endereço da escola" value="{{old('address_primary')}}">
                              @error('address_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('province_primary') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province_primary" id="province_primary" value="{{old('province_primary')}}">
                                    <option>Selecione a província</option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('province_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui form mt-2">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="required field @error('start_date_primary') error @enderror">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart_primary">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date_primary" value="{{old('start_date_primary')}}">
                                            </div>
                                                 @error('start_date_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="required field @error('end_date_primary') error @enderror">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend_primary">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date_primary" value="{{old('end_date_primary')}}">
                                            </div>
                                            @error('end_date_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="required field  @error('email_primary') error @enderror">
                            <label>Email da Escola</label>
                            <input type="text" name="email_primary" placeholder="Email da escola" value="{{old('email_primary')}}">
                             @error('email_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <label>Rede social da Escola</label>
                            <input type="text" name="social_midea_primary" placeholder="Rede sócial da escola" value="{{old('social_midea_primary')}}">
                        </div>
                        <div class="field">
                            <label>Site da Escola</label>
                            <input type="text" name="web_primary" placeholder="Site da Escola" value="{{old('web_primary')}}">
                        </div>
                    </div>
                </div>
                <!--ENSINO SECUNDARIO!-->
                <h4 class="ui dividing header">Ensino Secundário
                    {{-- <small><a href="javascript:void(0)" id="NotSecondary">(<span class="textoSecondary">não</span> tenho)</a></small></h4> --}} </h4>
                <div class="ui form">
                    <div class="four fields">
                        <div class="required field  @error('secondary') error @enderror">
                            <label>Nome</label>
                            <input type="text" name="secondary" placeholder="Nome da escola" value="{{old('secondary')}}">
                            @error('secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('phone_secondary') error @enderror">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phone_secondary" id="phone_secondary" placeholder="Telefone" value="{{old('phone_secondary')}}">
                                <i class="phone icon"></i>
                            </div>
                             @error('phone_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('address_secondary') error @enderror">
                            <label>Endereço</label>
                            <input type="text"  name="address_secondary" placeholder="Endereço da escola" value="{{old('address_secondary')}}">
                            @error('address_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('province_secondary') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province_secondary" id="province_secondary" value="{{old('province_secondary')}}">
                                    <option>Selecione a província</option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('province_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui form mt-2">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="required field  @error('start_date_secondary') error @enderror">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart_secondary">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date_secondary" value="{{old('start_date_secondary')}}">
                                            </div>
                                            @error('start_date_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="required field  @error('end_date_secondary') error @enderror">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend_secondary">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date_secondary" value="{{old('end_date_secondary')}}">
                                            </div>
                                             @error('end_date_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="required field  @error('email_secondary') error @enderror">
                            <label>Email da Escola</label>
                            <input type="text" name="email_secondary" placeholder="Email da escola" value="{{old('email_secondary')}}">
                            @error('email_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <label>Rede social da Escola</label>
                            <input type="text" name="social_midea_secondary" placeholder="Rede sócial da escola" value="{{old('social_midea_secondary')}}">
                        </div>
                        <div class="field">
                            <label>Site da Escola</label>
                            <input type="text" name="web_secondary" placeholder="Site da Escola" value="{{old('web_secondary')}}">
                        </div>
                    </div>
                </div>
                <!--ENSINO MEDIO!-->
                <h4 class="ui dividing header">Ensino Médio                     
                    <small><a href="javascript:void(0)" id="NotMedium">(<span class="textoMedium">não</span> tenho)</a></small>
                </h4>
                <div class="ui form" id="ClassMedium1">
                    <div class="four fields">
                        <div class="field">
                            <label>Nome</label>
                        <input type="text" name="medium" placeholder="Nome da escola" value="{{old('medium')}}">
                        </div>
                        <div class="field">
                            <label>Telefone</label>
                            
                            <div class="ui left icon input">
                                <input type="text"  name="phone_medium" id="phone_medium" placeholder="Telefone" value="{{old('phone_medium')}}">
                                <i class="phone icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label>Endereço</label>
                            <input type="text"  name="address_medium" placeholder="Endereço da escola" value="{{old('address_medium')}}">
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('province_medium') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province_medium" id="province_medium" value="{{old('province_medium')}}">
                                    <option>Selecione a província</option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('province')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui form mt-2" id="ClassMedium1">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart_medium">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date_medium" value="{{old('start_date_medium')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend_medium">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date_medium"  value="{{old('end_date_medium')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label>Email da Escola</label>
                            <input type="text" name="email_medium" placeholder="Email da escola"  value="{{old('email_medium')}}">
                        </div>
                        <div class="field">
                            <label>Rede social da Escola</label>
                            <input type="text" name="social_midea_medium" placeholder="Rede sócial da escola"  value="{{old('social_midea_medium')}}">
                        </div>
                        <div class="field">
                            <label>Site da Escola</label>
                            <input type="text" name="web_medium" placeholder="Site da Escola"  value="{{old('web_medium')}}">
                        </div>
                    </div>
                </div>
                <!--ENSINO SUPERIOS!-->
                <h4 class="ui dividing header">Ensino Superior 
                    <small><a href="javascript:void(0)" id="NotSuperior">(<span class="texto">não</span> tenho)</a></small>
                </h4>
                <div class="ui form" id="ClassSuperior1">
                    <div class="four fields">
                        <div class="field">
                            <label>Nome</label>
                        <input type="text" name="superior" placeholder="Nome da escola"  value="{{old('superior')}}">
                        </div>
                        <div class="field">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phone_superior" id="phone_superior" placeholder="Telefone"  value="{{old('phone_superior')}}">
                                <i class="phone icon"></i>
                            </div>
                        </div>
                        <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                        <div class="field">
                            <label>Endereço</label>
                            <input type="text"  name="address_superior" placeholder="Endereço da escola" value="{{old('address_superior')}}">
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('province_superior') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province_superior" id="province_superior" value="{{old('province_superior')}}">
                                    <option>Selecione a província</option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('province_superior')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui form mt-2" id="ClassSuperior2">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart_superior">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date_superior" value="{{old('start_date_superior')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend_superior">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date_superior" value="{{old('end_date_superior')}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label>Email da Escola</label>
                            <input type="text" name="email_superior" placeholder="Email da escola ">
                        </div>
                        <div class="field">
                            <label>Rede social da Escola</label>
                            <input type="text" name="social_midea_superior" placeholder="Rede sócial da escola">
                        </div>
                        <div class="field">
                            <label>Site da Escola</label>
                            <input type="text" name="web_superior" placeholder="Site da Escola">
                        </div>
                    </div>
                </div>
                <div class="ui form mb-2">
                    <div class="ui two column very relaxed grid">
                        <div class="column">
                            <div class="ui form" data-content="Hello. This is a wide pop-up which allows for lots of content with additional space. You can fit a lot of words here and the paragraphs will be pretty wide." data-variation="wide">
                                <div class="required field  @error('about') error @enderror">
                                    <label>Sobre as Escolas</label>
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
                        <div class="column mt-4">
                            <div class="ui piled segment">
                                <h4 class="ui header">A header</h4>
                                <p>Te eum doming eirmod, nominati pertinacia argumentum ad his. Ex eam alia facete scriptorem, est autem aliquip detraxit at. Usu ocurreret referrentur at, cu epicurei appellantur vix. Cum ea laoreet recteque electram, eos choro alterum definiebas in. Vim dolorum definiebas an. Mei ex natum rebum iisque.</p>
                                <p>Audiam quaerendum eu sea, pro omittam definiebas ex. Te est latine definitiones. Quot wisi nulla ex duo. Vis sint solet expetenda ne, his te phaedrum referrentur consectetuer.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="fluid ui button">Guardar</button>
            </form>
        @else            
            <form class="ui form" method="POST" action="{{route('user.edu.update', ['edu' => $edu->id])}}" enctype="multipart/form-data">
                @csrf
                <!--ENSINO PRIMARIO!-->
                <h4 class="ui dividing header">Ensino Primário
                    {{-- <small><a href="javascript:void(0)" id="NotSuperior">(<span class="texto">não</span> tenho)</a></small></h4> --}} </h4>
                <div class="ui form">
                    <div class="four fields">
                        <div class="required field  @error('primary') error @enderror"">
                            <label>Nome</label>
                            <input type="text" name="primary" placeholder="Nome da escola" value="{{$edu->primary}}">
                            @error('primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('phone_primary') error @enderror">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phone_primary" id="phone_primary" placeholder="Telefone da escola" value="{{$edu->phone_primary}}">
                                <i class="phone icon"></i>
                            </div>
                            @error('phone_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                        <div class="required field  @error('address_primary') error @enderror">
                            <label>Endereço</label>
                            <input type="text"  name="address_primary" placeholder="Endereço da escola" value="{{$edu->address_primary}}">
                              @error('address_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('province_primary') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province_primary" id="province_primary" value="{{old('province_primary')}}">
                                    <option>{{$edu->province_primary}}</option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('province_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui form mt-2">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="required field @error('start_date_primary') error @enderror">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart_primary">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date_primary" value="{{$edu->start_date_primary}}">
                                            </div>
                                                 @error('start_date_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="required field @error('end_date_primary') error @enderror">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend_primary">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date_primary" value="{{$edu->end_date_primary}}">
                                            </div>
                                            @error('end_date_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="required field  @error('email_primary') error @enderror">
                            <label>Email da Escola</label>
                            <input type="text" name="email_primary" placeholder="Email da escola" value="{{$edu->email_primary}}">
                             @error('email_primary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <label>Rede social da Escola</label>
                            <input type="text" name="social_midea_primary" placeholder="Rede sócial da escola" value="{{$edu->social_midea_primary}}">
                        </div>
                        <div class="field">
                            <label>Site da Escola</label>
                            <input type="text" name="web_primary" placeholder="Site da Escola" value="{{$edu->web_primary}}">
                        </div>
                    </div>
                </div>
                <!--ENSINO SECUNDARIO!-->
                <h4 class="ui dividing header">Ensino Secundário
                    {{-- <small><a href="javascript:void(0)" id="NotSecondary">(<span class="textoSecondary">não</span> tenho)</a></small></h4> --}} </h4>
                <div class="ui form">
                    <div class="four fields">
                        <div class="required field  @error('secondary') error @enderror">
                            <label>Nome</label>
                            <input type="text" name="secondary" placeholder="Nome da escola" value="{{$edu->secondary}}">
                            @error('secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('phone_secondary') error @enderror">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phone_secondary" id="phone_secondary" placeholder="Telefone" value="{{$edu->phone_secondary}}">
                                <i class="phone icon"></i>
                            </div>
                             @error('phone_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('address_secondary') error @enderror">
                            <label>Endereço</label>
                            <input type="text"  name="address_secondary" placeholder="Endereço da escola" value="{{$edu->address_secondary}}">
                            @error('address_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('province_secondary') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province_secondary" id="province_secondary" >
                                    <option>{{$edu->province_secondary}}</option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('province_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui form mt-2">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="required field  @error('start_date_secondary') error @enderror">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart_secondary">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date_secondary" value="{{$edu->start_date_secondary}}">
                                            </div>
                                            @error('start_date_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="required field  @error('end_date_secondary') error @enderror">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend_secondary">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date_secondary" value="{{$edu->end_date_secondary}}">
                                            </div>
                                             @error('end_date_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="required field  @error('email_secondary') error @enderror">
                            <label>Email da Escola</label>
                            <input type="text" name="email_secondary" placeholder="Email da escola" value="{{$edu->email_secondary}}">
                            @error('email_secondary')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <label>Rede social da Escola</label>
                            <input type="text" name="social_midea_secondary" placeholder="Rede sócial da escola" value="{{$edu->social_midea_secondary}}">
                        </div>
                        <div class="field">
                            <label>Site da Escola</label>
                            <input type="text" name="web_secondary" placeholder="Site da Escola" value="{{$edu->web_secondary}}">
                        </div>
                    </div>
                </div>
                <!--ENSINO MEDIO!-->
                <h4 class="ui dividing header">Ensino Médio                     
                    <small><a href="javascript:void(0)" id="NotMedium">(<span class="textoMedium">não</span> tenho)</a></small>
                </h4>
                <div class="ui form" id="ClassMedium1">
                    <div class="four fields">
                        <div class="field">
                            <label>Nome</label>
                        <input type="text" name="medium" placeholder="Nome da escola" value="{{$edu->medium}}">
                        </div>
                        <div class="field">
                            <label>Telefone</label>
                            
                            <div class="ui left icon input">
                                <input type="text"  name="phone_medium" id="phone_medium" placeholder="Telefone" value="{{$edu->phone_medium}}">
                                <i class="phone icon"></i>
                            </div>
                        </div>
                        <div class="field">
                            <label>Endereço</label>
                            <input type="text"  name="address_medium" placeholder="Endereço da escola" value="{{$edu->address_medium}}">
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="field  @error('province_medium') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province_medium" id="province_medium" >
                                    <option>
                                         @php if($edu->province_medium == 'Null'){ echo 'não selecionou nenhuma província'; } else{  echo $edu->province_medium;}  @endphp
                                    </option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('province')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui form mt-2" id="ClassMedium2">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart_medium">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date_medium" value="{{$edu->start_date_medium}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend_medium">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date_medium"  value="{{$edu->end_date_medium}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label>Email da Escola</label>
                            <input type="email" name="email_medium" placeholder="Email da escola"  value="{{$edu->email_medium}}">
                        </div>
                        <div class="field">
                            <label>Rede social da Escola</label>
                            <input type="text" name="social_midea_medium" placeholder="Rede sócial da escola"  value="{{$edu->social_midea_medium}}">
                        </div>
                        <div class="field">
                            <label>Site da Escola</label>
                            <input type="text" name="web_medium" placeholder="Site da Escola"  value="{{$edu->web_medium}}">
                        </div>
                    </div>
                </div>
                <!--ENSINO SUPERIOS!-->
                <h4 class="ui dividing header">Ensino Superior 
                    <small><a href="javascript:void(0)" id="NotSuperior">(<span class="texto">não</span> tenho)</a></small>
                </h4>
                <div class="ui form" id="ClassSuperior1">
                    <div class="four fields">
                        <div class="field">
                            <label>Nome</label>
                        <input type="text" name="superior" placeholder="Nome da escola" value="{{$edu->superior}}">
                        </div>
                        <div class="field">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phone_superior" id="phone_superior" placeholder="Telefone"  value="{{$edu->phone_superior}}">
                                <i class="phone icon"></i>
                            </div>
                        </div>
                        
                        <div class="field">
                            <label>Endereço</label>
                            <input type="text"  name="address_superior" placeholder="Endereço da escola" value="{{$edu->address_superior}}">
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="field  @error('province_superior') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province_superior" id="province_superior">
                                    <option>
                                        @php if($edu->province_superior == 'Null'){ echo 'não selecionou nenhuma província'; } else{  echo $edu->province_superior;}  @endphp
                                    </option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('province_superior')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                               {{--  {{app.user ? app.user.name : 'Account'}} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui form mt-2" id="ClassSuperior2">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="field">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart_superior">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date_superior" value="{{$edu->start_date_superior}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend_superior">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date_superior" value="{{$edu->end_date_superior}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label>Email da Escola</label>
                            <input type="email" name="email_superior" placeholder="Email da escola" value="{{$edu->email_superior}}">
                        </div>
                        <div class="field">
                            <label>Rede social da Escola</label>
                            <input type="text" name="social_midea_superior" placeholder="Rede sócial da escola" value="{{$edu->social_midea_superior}}">
                        </div>
                        <div class="field">
                            <label>Site da Escola</label>
                            <input type="text" name="web_superior" placeholder="Site da Escola" value="{{$edu->web_superior}}">
                        </div>
                    </div>
                </div>
                <div class="ui form mb-2">
                    <div class="ui two column very relaxed grid">
                        <div class="column">
                            <div class="ui form">
                                <div class="required field  @error('about') error @enderror">
                                    <label>Sobre as Escolas</label>
                                    <textarea name="about">{{$edu->about}}</textarea>
                                </div>
                                @error('about')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div> 
                            <div class="input-group mt-2  @error('photos.*') error @enderror">
                                <div class="custom-file ">
                                    <input type="file"  name="photos[]" multiple class="custom-file-input" id="addPiture">
                                    <label class="custom-file-label" for="addPiture">Escolha arquivos</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text btn-flat" id="">Adicionar fotos</span>
                                </div>
                            </div>
                                @error('photos.*')<p style="color:#9f3a38">{{$message}}</p>@enderror
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
                                                    @forelse($edu->photos as $key => $photo)
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
                                    @foreach($edu->photos as $key => $photo)
                                        <a  class="" data-toggle="modal" data-target="#modal-default">
                                            
                                            <img src="{{asset('storage/' . $photo->image)}}" class="ui fluid image" style="width:30px; height:30px"> 
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="fluid ui button">Atualizar Dados</button>
            </form>

             <!-- /.MODAL ver todas as fotos do Info -->  
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    @forelse($edu->photos as $key => $photo)
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
@endsection
@section('scripts-menu')
    <script>
        $('#rangestart_primary').calendar({
            type: 'date',
            endCalendar: $('#rangeend_primary'),
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
        $('#rangeend_primary').calendar({
            type: 'date',
            startCalendar: $('#rangestart_primary'),
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

        
        $('#rangestart_secondary').calendar({
            type: 'date',
            endCalendar: $('#rangeend_secondary'),
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
        $('#rangeend_secondary').calendar({
            type: 'date',
            startCalendar: $('#rangestart_secondary'),
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


        
        $('#rangestart_medium').calendar({
            type: 'date',
            endCalendar: $('#rangeend_medium'),
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
        $('#rangeend_medium').calendar({
            type: 'date',
            startCalendar: $('#rangestart_medium'),
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


        
        $('#rangestart_superior').calendar({
            type: 'date',
            endCalendar: $('#rangeend_superior'),
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
        $('#rangeend_superior').calendar({
            type: 'date',
            startCalendar: $('#rangestart_superior'),
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
        $('#province_primary').dropdown();
        $('#province_secondary').dropdown();
        $('#province_medium').dropdown();
        $('#province_superior').dropdown();
    </script>

    
    <script>
        let PhonePrimary = new Inputmask('(999) 999-999');
        PhonePrimary.mask(document.getElementById('phone_primary'));

        let PhoneSecondary = new Inputmask('(999) 999-999');
        PhoneSecondary.mask(document.getElementById('phone_secondary'));

        let PhoneMedium = new Inputmask('(999) 999-999');
        PhoneMedium.mask(document.getElementById('phone_medium'));

        let PhoneSuperior = new Inputmask('(999) 999-999');
        PhoneSuperior.mask(document.getElementById('phone_superior'));
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

            $('a#NotPrimary').on('click',function(){
                //hide delete button
                //$(this).closest(".ui .form").find(".field div.divHide").hide();.addClass('');
                $('#ClassPrimary1').toggle('d-none');
                $('#ClassPrimary2').toggle('d-none');
                $('.textoPrimary').toggle('d-none');
                
            });

             $('a#NotSocondary').on('click',function(){
                //hide delete button
                //$(this).closest(".ui .form").find(".field div.divHide").hide();.addClass('');
                $('#ClassSecondary1').toggle('d-none');
                $('#ClassSecondary2').toggle('d-none');
                $('.textoSecondary').toggle('d-none');
                
            });

             $('a#NotMedium').on('click',function(){
                //hide delete button
                //$(this).closest(".ui .form").find(".field div.divHide").hide();.addClass('');
                $('#ClassMedium1').toggle('d-none');
                $('#ClassMedium2').toggle('d-none');
                $('.textoMedium').toggle('d-none');
                
            });

             $('a#NotSuperior').on('click',function(){
                //hide delete button
                //$(this).closest(".ui .form").find(".field div.divHide").hide();.addClass('');
                $('#ClassSuperior1').toggle('d-none');
                $('#ClassSuperior2').toggle('d-none');
                $('.texto').toggle('d-none');
                
            });
        });
        $(document).ready(function(){
            if($("#ClassSuperior1").hasClass("d-none")){
                 $('#NotSuperior').append("Appended item");
            };
           /*  $("input").blur(function(){
                $(this).css("background-color", "green");
            }); */
        });
    </script>
@endsection
