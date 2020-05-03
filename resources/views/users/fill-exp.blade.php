@extends('users.fill-menu')

@section('fill-user')

    <div class="ui segment">
        @if(!$exp)
            <form class="ui form" method="POST" action="{{route('user.exp.save')}}" enctype="multipart/form-data">
                @csrf
               
               
                <!--ATUAL OCUPATION!-->
                <h4 class="ui dividing header">Ocupação Atual   </h4>
                
                <div class="ui form">
                    <div class="five fields">
                        <div class="required field  @error('companyNow') error @enderror">
                            <label>Empresa</label>
                            <input type="text" name="companyNow" placeholder="Nome da empresa" value="{{old('companyNow')}}">
                            @error('companyNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('positionNow') error @enderror">
                            <label>Ocupação</label>
                            <div class="ui left icon input">
                                <input type="text"  name="positionNow" id="positionNow" placeholder="Ocupação na empresa" value="{{old('positionNow')}}">
                                <i class="user circle icon"></i>
                            </div>
                            @error('positionNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('phoneNow') error @enderror">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phoneNow" id="phoneNow" placeholder="Telefone da empresa" value="{{old('phoneNow')}}">
                                <i class="phone icon"></i>
                            </div>
                            @error('phoneNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('addressNow') error @enderror">
                            <label>Endereço</label>
                            <input type="text"  name="addressNow" placeholder="Endereço da empresa" value="{{old('addressNow')}}">
                              @error('addressNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('provinceNow') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="provinceNow" id="provinceNow" value="{{old('provinceNow')}}">
                                    <option>Selecione a província</option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('provinceNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="ui form mt-2">
                    <div class="four fields">
                        <div class="field">
                             <div class="required field  @error('start_dateNow') error @enderror">
                                <label>Quando começou?</label>
                                <div class="ui calendar" id="start_dateNow">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" name="start_dateNow" placeholder="Quando começou a trabalhar?" autocomplete="off"  value="{{old('start_dateNow')}}">
                                    </div>
                                </div>
                                @error('start_dateNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                        </div>
                        <div class="field {{--  @error('email') error @enderror --}}">
                            <label>Email da Empresa</label>
                            <input type="email" name="emailNow" placeholder="Email da empresa" value="{{old('emailNow')}}">
                             {{-- @error('emailNow')<p style="color:#9f3a38">{{$message}}</p>@enderror --}}
                        </div>
                        <div class="field">
                            <label>Rede social da Empresa</label>
                            <input type="text" name="social_mideaNow" placeholder="Rede sócial da empresa" value="{{old('social_mideaNow')}}">
                        </div>
                        <div class="field">
                            <label>Site da Empresa</label>
                            <input type="text" name="webNow" placeholder="Site da empresa" value="{{old('webNow')}}">
                        </div>
                    </div>
                </div>
                 <!--ENSINO PRIMARIO!-->
                <h4 class="ui dividing header">Experiência</h4>
                
                <div class="ui form">
                    <div class="five fields">
                        <div class="required field  @error('company') error @enderror">
                            <label>Empresa</label>
                            <input type="text" name="company" placeholder="Nome da empresa" value="{{old('company')}}">
                            @error('company')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('position') error @enderror">
                            <label>Ocupação</label>
                            <div class="ui left icon input">
                                <input type="text"  name="position" id="position" placeholder="Ocupação na empresa" value="{{old('position')}}">
                                <i class="user circle icon"></i>
                            </div>
                            @error('position')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('phone') error @enderror">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phone" id="phone" placeholder="Telefone da empresa" value="{{old('phone')}}">
                                <i class="phone icon"></i>
                            </div>
                            @error('phone')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                        <div class="required field  @error('address') error @enderror">
                            <label>Endereço</label>
                            <input type="text"  name="address" placeholder="Endereço da empresa" value="{{old('address')}}">
                              @error('address')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('province') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province" id="province" value="{{old('province')}}">
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
                <div class="ui form mt-2">
                    <div class="four fields">
                        <div class="required field @error('start_date') error @enderror">
                            <label>Data de início</label>
                            <div class="ui calendar" id="rangestart">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Começou em" name="start_date" value="{{old('start_date')}}">
                                </div>
                                        @error('start_date')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                        </div>
                        <div class="required field @error('end_date') error @enderror">
                            <label>Data final</label>
                            <div class="ui calendar" id="rangeend">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Terminou em" name="end_date" value="{{old('end_date')}}">
                                </div>
                                @error('end_date')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                        </div>
                        <div class="field {{--  @error('email') error @enderror --}}">
                            <label>Email da Empresa</label>
                            <input type="text" name="email" placeholder="Email da empresa" value="{{old('email')}}">
                             {{-- @error('email')<p style="color:#9f3a38">{{$message}}</p>@enderror --}}
                        </div>
                        <div class="field">
                            <label>Rede social da Empresa</label>
                            <input type="text" name="social_midea" placeholder="Rede sócial da empresa" value="{{old('social_midea')}}">
                        </div>
                        <div class="field">
                            <label>Site da Empresa</label>
                            <input type="text" name="web" placeholder="Site da empresa" value="{{old('web')}}">
                        </div>
                    </div>
                </div>
                <!--ADICIONAR CAMPOS!-->
                <div class="ui horizontal divider">
                     <a class="mini ui blue button" id="addFields"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <!-- EXPERIENCE 1!-->  
                <span class="fields1 d-none">            
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company1" placeholder="Nome da empresa" value="{{old('company1')}}">
                               
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position1" id="position1" placeholder="Ocupação na empresa" value="{{old('position1')}}">
                                    <i class="user circle icon"></i>
                                </div>
                              
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone1" id="phone1" placeholder="Telefone da empresa" value="{{old('phone1')}}">
                                    <i class="phone icon"></i>
                                </div>
                                
                            </div>
                            <div class="required field ">
                                <label>Endereço</label>
                                <input type="text"  name="address1" placeholder="Endereço da empresa" value="{{old('address1')}}">
                                
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province1" id="province1" value="{{old('province1')}}">
                                        <option>Selecione a província</option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date1">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date1" value="{{old('start_date1')}}">
                                    </div>
                                            @error('start_date1')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="required field">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date1">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date1" value="{{old('end_date1')}}">
                                    </div>
                                    @error('end_date1')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email1" placeholder="Email da empresa" value="{{old('email1')}}">
                               
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea1" placeholder="Rede sócial da empresa" value="{{old('social_midea1')}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web1" placeholder="Site da empresa" value="{{old('web1')}}">
                            </div>
                        </div>
                    </div>
                </span> 
                <!--ADICIONAR CAMPOS 1!-->
                <div class="ui horizontal divider">
                    <a class="mini ui blue button d-none" id="addFields1"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <!-- EXPERIENCE 2!-->  
                <span class="fields2 d-none">            
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company2" placeholder="Nome da empresa" value="{{old('company2')}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position2" id="position2" placeholder="Ocupação na empresa" value="{{old('position2')}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone2" id="phone2" placeholder="Telefone da empresa" value="{{old('phone2')}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address2" placeholder="Endereço da empresa" value="{{old('address2')}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province2" id="province2" value="{{old('province2')}}">
                                        <option>Selecione a província</option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date2">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date2" value="{{old('start_date2')}}">
                                    </div>
                                           
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date2">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date2" value="{{old('end_date2')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email2" placeholder="Email da empresa" value="{{old('email2')}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea2" placeholder="Rede sócial da empresa" value="{{old('social_midea2')}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web2" placeholder="Site da empresa" value="{{old('web2')}}">
                            </div>
                        </div>
                    </div>
                </span>

                <!--ADICIONAR CAMPOS 2!-->
                <div class="ui horizontal divider">
                    <a class="mini ui blue button d-none" id="addFields2"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <!-- EXPERIENCE 3!-->  
                <span class="fields3 d-none">            
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company3" placeholder="Nome da empresa" value="{{old('company3')}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position3" id="position3" placeholder="Ocupação na empresa" value="{{old('position3')}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone3" id="phone3" placeholder="Telefone da empresa" value="{{old('phone3')}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address3" placeholder="Endereço da empresa" value="{{old('address3')}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province3" id="province3" value="{{old('province3')}}">
                                        <option>Selecione a província</option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date3">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date3" value="{{old('start_date3')}}">
                                    </div>
                                           
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date3">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date3" value="{{old('end_date3')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email3" placeholder="Email da empresa" value="{{old('email3')}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea3" placeholder="Rede sócial da empresa" value="{{old('social_midea3')}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web3" placeholder="Site da empresa" value="{{old('web3')}}">
                            </div>
                        </div>
                    </div>
                </span>
                <!--ADICIONAR CAMPOS 2!-->
                <div class="ui horizontal divider">
                    <a class="mini ui blue button d-none" id="addFields3"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <!-- EXPERIENCE 4!-->  
                <span class="fields4 d-none">            
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company4" placeholder="Nome da empresa" value="{{old('company4')}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position4" id="position4" placeholder="Ocupação na empresa" value="{{old('position4')}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone4" id="phone4" placeholder="Telefone da empresa" value="{{old('phone4')}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address4" placeholder="Endereço da empresa" value="{{old('address4')}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province4" id="province4" value="{{old('province4')}}">
                                        <option>Selecione a província</option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date4">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date4" value="{{old('start_date4')}}">
                                    </div>
                                           
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date4">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date4" value="{{old('end_date4')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email4" placeholder="Email da empresa" value="{{old('email4')}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea4" placeholder="Rede sócial da empresa" value="{{old('social_midea4')}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web4" placeholder="Site da empresa" value="{{old('web4')}}">
                            </div>
                        </div>
                    </div>
                </span>

                <!--ADICIONAR CAMPOS 3!-->
                <div class="ui horizontal divider">
                    <a class="mini ui blue button d-none" id="addFields4"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <!-- EXPERIENCE 5!-->  
                <span class="fields5 d-none">            
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company5" placeholder="Nome da empresa" value="{{old('company5')}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position5" id="position5" placeholder="Ocupação na empresa" value="{{old('position5')}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone5" id="phone5" placeholder="Telefone da empresa" value="{{old('phone5')}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address5" placeholder="Endereço da empresa" value="{{old('address5')}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province5" id="province5" value="{{old('province5')}}">
                                        <option>Selecione a província</option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date5">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date5" value="{{old('start_date5')}}">
                                    </div>
                                           
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date5">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date5" value="{{old('end_date5')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email5" placeholder="Email da empresa" value="{{old('email5')}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea5" placeholder="Rede sócial da empresa" value="{{old('social_midea5')}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web5" placeholder="Site da empresa" value="{{old('web5')}}">
                            </div>
                        </div>
                    </div>
                </span>

                <!--ADICIONAR CAMPOS 4!-->
                <div class="ui horizontal divider">
                    <a class="mini ui blue button d-none" id="addFields5"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <!-- EXPERIENCE 6!-->  
                <span class="fields6 d-none">            
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company6" placeholder="Nome da empresa" value="{{old('company6')}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position6" id="position6" placeholder="Ocupação na empresa" value="{{old('position6')}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone6" id="phone6" placeholder="Telefone da empresa" value="{{old('phone6')}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address6" placeholder="Endereço da empresa" value="{{old('address6')}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province6" id="province6" value="{{old('province6')}}">
                                        <option>Selecione a província</option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date6">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date6" value="{{old('start_date6')}}">
                                    </div>
                                           
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date6">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date6" value="{{old('end_date6')}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email6" placeholder="Email da empresa" value="{{old('email6')}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea6" placeholder="Rede sócial da empresa" value="{{old('social_midea6')}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web6" placeholder="Site da empresa" value="{{old('web6')}}">
                            </div>
                        </div>
                    </div>
                </span>

                 <!--ADICIONAR CAMPOS 4!-->
                <div class="ui horizontal divider">
                     <a class="ui mini red button d-none" id="addFieldsEdit6">Você excedeu o máximo de campos que podem ser criados. Caso tenha mais experiêcias adicione no campo sobre!</a>
                </div>

                <!--CAMPO SOBRE!-->
                <div class="ui form mb-2">
                    <div class="ui two column very relaxed grid">
                        <div class="column">
                            <div class="ui form">
                                <div class="required field  @error('about') error @enderror">
                                    <label>Sobre as sua Experiência Profissional</label>
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
            
            <form class="ui form" method="POST" action="{{route('user.exp.update', ['exp' => $exp->id])}}" enctype="multipart/form-data">
                @csrf
                 <!--ATUAL OCUPATION!-->
                <h4 class="ui dividing header">Ocupação atual  - (<small class="text-blue">Caso não tenha nenhuma ocupação, preencha com os seus dados pessoais</small>). </h4>
                
                <div class="ui form">
                    <div class="five fields">
                        <div class="required field  @error('companyNow') error @enderror">
                            <label>Empresa</label>
                            <input type="text" name="companyNow" placeholder="Nome da empresa" value="{{$exp->companyNow}}">
                            @error('companyNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('positionNow') error @enderror">
                            <label>Ocupação</label>
                            <div class="ui left icon input">
                                <input type="text"  name="positionNow" id="positionNow" placeholder="Ocupação na empresa" value="{{$exp->positionNow}}">
                                <i class="user circle icon"></i>
                            </div>
                            @error('positionNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('phoneNow') error @enderror">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phoneNow" id="phoneNow" placeholder="Telefone da empresa" value="{{$exp->phoneNow}}">
                                <i class="phone icon"></i>
                            </div>
                            @error('phoneNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('addressNow') error @enderror">
                            <label>Endereço</label>
                            <input type="text"  name="addressNow" placeholder="Endereço da empresa" value="{{$exp->addressNow}}">
                              @error('addressNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('provinceNow') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="provinceNow" id="provinceNow">
                                   <option>
                                        @php if($exp->provinceNow == 'Null'){ echo 'não selecionou nenhuma província'; } else{  echo $exp->provinceNow;}  @endphp
                                    </option>
                                    @foreach($provinces as $province)
                                            <option value="{{$province->name}}">{{$province->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('provinceNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="ui form mt-2">
                    <div class="four fields">
                        <div class="field">
                             <div class="required field  @error('start_dateNow') error @enderror">
                                <label>Quando começou?</label>
                                <div class="ui calendar" id="start_dateNow">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" name="start_dateNow" placeholder="Quando começou a trabalhar?" autocomplete="off"  value="{{ $exp->start_dateNow}}">
                                    </div>
                                </div>
                                @error('start_dateNow')<p style="color:#9f3a38">{{$message}}</p>@enderror
                            </div>
                        </div>
                        <div class="field {{--  @error('email') error @enderror --}}">
                            <label>Email da Empresa</label>
                            <input type="email" name="emailNow" placeholder="Email da empresa" value="{{ $exp->emailNow}}">
                             {{-- @error('emailNow')<p style="color:#9f3a38">{{$message}}</p>@enderror --}}
                        </div>
                        <div class="field">
                            <label>Rede social da Empresa</label>
                            <input type="text" name="social_mideaNow" placeholder="Rede sócial da empresa" value="{{ $exp->social_mideaNow}}">
                        </div>
                        <div class="field">
                            <label>Site da Empresa</label>
                            <input type="text" name="webNow" placeholder="Site da empresa" value="{{ $exp->webNow}}">
                        </div>
                    </div>
                </div>

                <!--ENSINO PRIMARIO!-->
                <h4 class="ui dividing header">Experiência - (<small class="text-blue text-uppercase">{{$exp->company}}</small>)</h4>
                <div class="ui form">
                    <div class="five fields">
                        <div class="required field  @error('company') error @enderror"">
                            <label>Empresa</label>
                            <input type="text" name="company" placeholder="Nome da empresa" value="{{$exp->company}}">
                            @error('company')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('position') error @enderror">
                            <label>Ocupação</label>
                            <div class="ui left icon input">
                                <input type="text"  name="position" placeholder="Telefone da empresa" value="{{$exp->position}}">
                                <i class="user circle icon"></i>
                            </div>
                            @error('position')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('phone') error @enderror">
                            <label>Telefone</label>
                            <div class="ui left icon input">
                                <input type="text"  name="phone" id="phone" placeholder="Telefone da empresa" value="{{$exp->phone}}">
                                <i class="phone icon"></i>
                            </div>
                            @error('phone')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <input type="hidden"  name="user_id" value="{{auth()->user()->id}}">
                        <div class="required field  @error('address') error @enderror">
                            <label>Endereço</label>
                            <input type="text"  name="address" placeholder="Endereço da empresa" value="{{$exp->address}}">
                              @error('address')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <div class="ui form">
                                <div class="required field  @error('province') error @enderror">
                                    <label>Província</label>
                                    <select class="ui search dropdown" name="province" id="province">
                                    <option>                                        
                                        @php if($exp->province == 'Null' || $exp->province == 'Selecione a província'){ echo 'não selecionou nenhuma província'; } else{  echo $exp->province;}  @endphp
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
                <div class="ui form mt-2">
                    <div class="four fields">
                        <div class="field">
                            <div class="ui form">
                                <div class="two fields">
                                    <div class="required field @error('start_date') error @enderror">
                                        <label>Data de início</label>
                                        <div class="ui calendar" id="rangestart">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Começou em" name="start_date" value="{{$exp->start_date}}">
                                            </div>
                                                 @error('start_date')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                    <div class="required field @error('end_date') error @enderror">
                                        <label>Data final</label>
                                        <div class="ui calendar" id="rangeend">
                                            <div class="ui input left icon">
                                                <i class="calendar icon"></i>
                                                <input type="text" placeholder="Terminou em" name="end_date" value="{{$exp->end_date}}">
                                            </div>
                                            @error('end_date')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="required field  @error('email') error @enderror">
                            <label>Email da Empresa</label>
                            <input type="text" name="email" placeholder="Email da empresa" value="{{$exp->email}}">
                             @error('email')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="field">
                            <label>Rede social da Empresa</label>
                            <input type="text" name="social_midea" placeholder="Rede sócial da empresa" value="{{$exp->social_midea}}">
                        </div>
                        <div class="field">
                            <label>Site da Empresa</label>
                            <input type="text" name="web" placeholder="Site da empresa" value="{{$exp->web}}">
                        </div>
                    </div>
                </div>
                <!--ENSINO EXPERIENCE 1!-->
                @if($exp->company1)
                    <h4 class="ui dividing header">Experiência  - (<small class="text-blue text-uppercase">{{$exp->company1}}</small>)</h4>
                    <!-- EXPERIENCE 1!-->             
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company1" placeholder="Nome da empresa" value="{{$exp->company1}}">
                                
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position1" id="position1" placeholder="Ocupação na empresa" value="{{$exp->position1}}">
                                    <i class="user circle icon"></i>
                                </div>
                                
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone1" id="phone1" placeholder="Telefone da empresa" value="{{$exp->phone1}}">
                                    <i class="phone icon"></i>
                                </div>
                                
                            </div>
                            <div class="required field ">
                                <label>Endereço</label>
                                <input type="text"  name="address1" placeholder="Endereço da empresa" value="{{$exp->address1}}">
                                
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province1" id="province1" value="{{$exp->province1}}">
                                        <option>
                                            @php if($exp->province1 == 'Null'){ echo 'não selecionou nenhuma província'; } else{  echo $exp->province1;}  @endphp
                                        </option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date1">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date1" value="{{$exp->start_date1}}">
                                    </div>
                                            @error('start_date1')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="required field">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date1">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date1" value="{{$exp->end_date1}}">
                                    </div>
                                    @error('end_date1')<p style="color:#9f3a38">{{$message}}</p>@enderror
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email1" placeholder="Email da empresa" value="{{$exp->email1}}">
                                
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea1" placeholder="Rede sócial da empresa" value="{{$exp->social_midea1}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web1" placeholder="Site da empresa" value="{{$exp->web1}}">
                            </div>
                        </div>
                    </div>
                    <!--ADICIONAR CAMPOS  EDIT 2-2!-->
                    @if(!$exp->company2) 
                        <div class="ui horizontal divider">
                            <a class="mini ui blue button" id="addFieldsEdit2-2"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                        </div>
                    @endif
                @else 
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button" id="addFieldsEdit1"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>

                    <span class="fieldsEdit1 d-none">            
                        <div class="ui form">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Empresa</label>
                                    <input type="text" name="company1" placeholder="Nome da empresa" value="{{old('company1')}}">
                                </div>
                                <div class="required field">
                                    <label>Ocupação</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="position1" id="position1" placeholder="Ocupação na empresa" value="{{old('position1')}}">
                                        <i class="user circle icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Telefone</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="phone1" id="phone1" placeholder="Telefone da empresa" value="{{old('phone1')}}">
                                        <i class="phone icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Endereço</label>
                                    <input type="text"  name="address1" placeholder="Endereço da empresa" value="{{old('address1')}}">
                                </div>
                                <div class="field">
                                    <div class="ui form">
                                        <div class="required field">
                                            <label>Província</label>
                                            <select class="ui search dropdown" name="province1" id="province1" value="{{old('province1')}}">
                                            <option>Selecione a província</option>
                                            @foreach($provinces as $province)
                                                    <option value="{{$province->name}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="ui form mt-2">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date1">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date1" value="{{old('start_date1')}}">
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="required field ">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date1">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date1" value="{{old('end_date1')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="field {{--  @error('email') error @enderror --}}">
                                    <label>Email da Empresa</label>
                                    <input type="email" name="email1" placeholder="Email da empresa" value="{{old('email1')}}">
                                </div>
                                <div class="field">
                                    <label>Rede social da Empresa</label>
                                    <input type="text" name="social_midea1" placeholder="Rede sócial da empresa" value="{{old('social_midea1')}}">
                                </div>
                                <div class="field">
                                    <label>Site da Empresa</label>
                                    <input type="text" name="web1" placeholder="Site da empresa" value="{{old('web1')}}">
                                </div>
                            </div>
                        </div>
                    </span>

                @endif
                <!-- EXPERIENCE 2!--> 
                @if($exp->company2) 
                    <h4 class="ui dividing header">Experiência  - (<small class="text-blue text-uppercase">{{$exp->company2}}</small>)</h4>            
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company2" placeholder="Nome da empresa" value="{{$exp->company2}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position2" placeholder="Ocupação na empresa" value="{{$exp->position2}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone2" id="phone2" placeholder="Telefone da empresa" value="{{$exp->phone2}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address2" placeholder="Endereço da empresa" value="{{$exp->address2}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province2" id="province2" value="{{$exp->province2}}">
                                        <option>Selecione a província</option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date2">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date2" value="{{$exp->start_date2}}">
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date2">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date2" value="{{$exp->end_date2}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email2" placeholder="Email da empresa" value="{{$exp->email2}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea2" placeholder="Rede sócial da empresa" value="{{$exp->social_midea2}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web2" placeholder="Site da empresa" value="{{$exp->web2}}">
                            </div>
                        </div>
                    </div>
                    
                     <!--ADICIONAR CAMPOS  EDIT 3-3!-->
                    @if(!$exp->company3) 
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button" id="addFieldsEdit3-3"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>
                    @endif
                @else 
                    <span class="fieldsEdit2 d-none">            
                        <div class="ui form">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Empresa</label>
                                    <input type="text" name="company2" placeholder="Nome da empresa" value="{{old('company2')}}">
                                </div>
                                <div class="required field">
                                    <label>Ocupação</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="position2" id="position2" placeholder="Ocupação na empresa" value="{{old('position2')}}">
                                        <i class="user circle icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Telefone</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="phone2" id="phone2" placeholder="Telefone da empresa" value="{{old('phone2')}}">
                                        <i class="phone icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Endereço</label>
                                    <input type="text"  name="address2" placeholder="Endereço da empresa" value="{{old('address2')}}">
                                </div>
                                <div class="field">
                                    <div class="ui form">
                                        <div class="required field">
                                            <label>Província</label>
                                            <select class="ui search dropdown" name="province2" id="province2" value="{{old('province2')}}">
                                            <option>Selecione a província</option>
                                            @foreach($provinces as $province)
                                                    <option value="{{$province->name}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="ui form mt-2">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date2">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date2" value="{{old('start_date2')}}">
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="required field ">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date2">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date2" value="{{old('end_date2')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="field {{--  @error('email') error @enderror --}}">
                                    <label>Email da Empresa</label>
                                    <input type="email" name="email2" placeholder="Email da empresa" value="{{old('email2')}}">
                                </div>
                                <div class="field">
                                    <label>Rede social da Empresa</label>
                                    <input type="text" name="social_midea2" placeholder="Rede sócial da empresa" value="{{old('social_midea2')}}">
                                </div>
                                <div class="field">
                                    <label>Site da Empresa</label>
                                    <input type="text" name="web2" placeholder="Site da empresa" value="{{old('web2')}}">
                                </div>
                            </div>
                        </div>
                    </span>
                    
                    <!--ADICIONAR CAMPOS 2!-->
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button d-none" id="addFieldsEdit2"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>
                @endif

                <!-- EXPERIENCE 3!--> 
                @if($exp->company3) 
                    <h4 class="ui dividing header">Experiência  - (<small class="text-blue text-uppercase">{{$exp->company3}}</small>)</h4>           
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company3" placeholder="Nome da empresa" value="{{$exp->company3}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position3" id="position3" placeholder="Ocupação na empresa" value="{{$exp->position3}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone3" id="phone3" placeholder="Telefone da empresa" value="{{$exp->phone3}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address3" placeholder="Endereço da empresa" value="{{$exp->address3}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province3" id="province3">
                                        <option>
                                            @php if($exp->province3 == 'Null'){ echo 'não selecionou nenhuma província'; } else{  echo $exp->province3;}  @endphp
                                        </option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date3">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date3" value="{{$exp->start_date3}}">
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date3">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date3" value="{{$exp->end_date3}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email3" placeholder="Email da empresa" value="{{$exp->email3}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea3" placeholder="Rede sócial da empresa" value="{{$exp->social_midea3}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web3" placeholder="Site da empresa" value="{{$exp->web3}}">
                            </div>
                        </div>
                    </div>
                     <!--ADICIONAR CAMPOS  EDIT 4-4!-->
                    @if(!$exp->company4) 
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button" id="addFieldsEdit4-4"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>
                    @endif
                @else                    
                    <!-- EXPERIENCE 3!-->  
                    <span class="fieldsEdit3 d-none">            
                        <div class="ui form">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Empresa</label>
                                    <input type="text" name="company3" placeholder="Nome da empresa" value="{{old('company3')}}">
                                </div>
                                <div class="required field">
                                    <label>Ocupação</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="position3" id="position3" placeholder="Ocupação na empresa" value="{{old('position3')}}">
                                        <i class="user circle icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Telefone</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="phone3" id="phone3" placeholder="Telefone da empresa" value="{{old('phone3')}}">
                                        <i class="phone icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Endereço</label>
                                    <input type="text"  name="address3" placeholder="Endereço da empresa" value="{{old('address3')}}">
                                </div>
                                <div class="field">
                                    <div class="ui form">
                                        <div class="required field">
                                            <label>Província</label>
                                            <select class="ui search dropdown" name="province3" id="province3" value="{{old('province3')}}">
                                            <option>Selecione a província</option>
                                            @foreach($provinces as $province)
                                                    <option value="{{$province->name}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="ui form mt-2">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date3">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date3" value="{{old('start_date3')}}">
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="required field ">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date3">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date3" value="{{old('end_date3')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="field {{--  @error('email') error @enderror --}}">
                                    <label>Email da Empresa</label>
                                    <input type="email" name="email3" placeholder="Email da empresa" value="{{old('email3')}}">
                                </div>
                                <div class="field">
                                    <label>Rede social da Empresa</label>
                                    <input type="text" name="social_midea3" placeholder="Rede sócial da empresa" value="{{old('social_midea3')}}">
                                </div>
                                <div class="field">
                                    <label>Site da Empresa</label>
                                    <input type="text" name="web3" placeholder="Site da empresa" value="{{old('web3')}}">
                                </div>
                            </div>
                        </div>
                    </span>
                    <!--ADICIONAR CAMPOS 3!-->
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button d-none" id="addFieldsEdit3"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>
                @endif
                <!-- EXPERIENCE 4!-->
                @if($exp->company4)
                    <h4 class="ui dividing header">Experiência  - (<small class="text-blue text-uppercase">{{$exp->company4}}</small>)</h4>             
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company4" placeholder="Nome da empresa" value="{{$exp->company4}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position4" id="position4" placeholder="Ocupação na empresa" value="{{$exp->position4}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone4" id="phone4" placeholder="Telefone da empresa" value="{{$exp->phone4}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address4" placeholder="Endereço da empresa" value="{{$exp->address4}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province4" id="province4" value="{{$exp->province4}}">
                                        <option>
                                            @php if($exp->province4 == 'Null'){ echo 'não selecionou nenhuma província'; } else{  echo $exp->province4;}  @endphp
                                        </option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date4">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date4" value="{{$exp->start_date4}}">
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date4">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date4" value="{{$exp->end_date4}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email4" placeholder="Email da empresa" value="{{$exp->email4}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea4" placeholder="Rede sócial da empresa" value="{{$exp->social_midea4}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web4" placeholder="Site da empresa" value="{{$exp->web4}}">
                            </div>
                        </div>
                    </div>
                     <!--ADICIONAR CAMPOS  EDIT 5-5!-->
                    @if(!$exp->company5) 
                        <div class="ui horizontal divider">
                            <a class="mini ui blue button" id="addFieldsEdit5-5"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                        </div>
                    @endif
                @else
                    <!-- EXPERIENCE 4!-->  
                    <span class="fieldsEdit4 d-none">            
                        <div class="ui form">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Empresa</label>
                                    <input type="text" name="company4" placeholder="Nome da empresa" value="{{old('company4')}}">
                                </div>
                                <div class="required field">
                                    <label>Ocupação</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="position4" id="position4" placeholder="Ocupação na empresa" value="{{old('position4')}}">
                                        <i class="user circle icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Telefone</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="phone4" id="phone4" placeholder="Telefone da empresa" value="{{old('phone4')}}">
                                        <i class="phone icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Endereço</label>
                                    <input type="text"  name="address4" placeholder="Endereço da empresa" value="{{old('address4')}}">
                                </div>
                                <div class="field">
                                    <div class="ui form">
                                        <div class="required field">
                                            <label>Província</label>
                                            <select class="ui search dropdown" name="province4" id="province4" value="{{old('province4')}}">
                                            <option>Selecione a província</option>
                                            @foreach($provinces as $province)
                                                    <option value="{{$province->name}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="ui form mt-2">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date4">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date4" value="{{old('start_date4')}}">
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="required field ">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date4">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date4" value="{{old('end_date4')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="field {{--  @error('email') error @enderror --}}">
                                    <label>Email da Empresa</label>
                                    <input type="email" name="email4" placeholder="Email da empresa" value="{{old('email4')}}">
                                </div>
                                <div class="field">
                                    <label>Rede social da Empresa</label>
                                    <input type="text" name="social_midea4" placeholder="Rede sócial da empresa" value="{{old('social_midea4')}}">
                                </div>
                                <div class="field">
                                    <label>Site da Empresa</label>
                                    <input type="text" name="web4" placeholder="Site da empresa" value="{{old('web4')}}">
                                </div>
                            </div>
                        </div>
                    </span>

                    <!--ADICIONAR CAMPOS 4!-->
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button d-none" id="addFieldsEdit4"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>
                @endif

                <!-- EXPERIENCE 5!--> 
                @if($exp->company5) 
                    <h4 class="ui dividing header">Experiência  - (<small class="text-blue text-uppercase">{{$exp->company5}}</small>)</h4>           
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company5" placeholder="Nome da empresa" value="{{$exp->company5}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position5" id="position5" placeholder="Ocupação na empresa" value="{{$exp->position5}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone5" id="phone5" placeholder="Telefone da empresa" value="{{$exp->phone5}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address5" placeholder="Endereço da empresa" value="{{$exp->address5}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province5" id="province5" value="{{$exp->province5}}">
                                        <option>
                                            @php if($exp->province5 == 'Null'){ echo 'não selecionou nenhuma província'; } else{  echo $exp->province5;}  @endphp
                                        </option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date5">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date5" value="{{$exp->start_date5}}">
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date5">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date5" value="{{$exp->end_date5}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email5" placeholder="Email da empresa" value="{{$exp->email5}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea5" placeholder="Rede sócial da empresa" value="{{$exp->social_midea5}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web5" placeholder="Site da empresa" value="{{$exp->web5}}">
                            </div>
                        </div>
                    </div>
                     <!--ADICIONAR CAMPOS  EDIT 6-6!-->
                    @if(!$exp->company6) 
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button" id="addFieldsEdit6-6"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>
                    @endif
                @else
                    <!-- EXPERIENCE 5!-->  
                    <span class="fieldsEdit5 d-none">            
                        <div class="ui form">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Empresa</label>
                                    <input type="text" name="company5" placeholder="Nome da empresa" value="{{old('company5')}}">
                                </div>
                                <div class="required field">
                                    <label>Ocupação</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="position5" id="position5" placeholder="Ocupação na empresa" value="{{old('position5')}}">
                                        <i class="user circle icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Telefone</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="phone5" id="phone5" placeholder="Telefone da empresa" value="{{old('phone5')}}">
                                        <i class="phone icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Endereço</label>
                                    <input type="text"  name="address5" placeholder="Endereço da empresa" value="{{old('address5')}}">
                                </div>
                                <div class="field">
                                    <div class="ui form">
                                        <div class="required field">
                                            <label>Província</label>
                                            <select class="ui search dropdown" name="province5" id="province5" value="{{old('province5')}}">
                                            <option>Selecione a província</option>
                                            @foreach($provinces as $province)
                                                    <option value="{{$province->name}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="ui form mt-2">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date5">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date5" value="{{old('start_date5')}}">
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="required field ">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date5">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date5" value="{{old('end_date5')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="field {{--  @error('email') error @enderror --}}">
                                    <label>Email da Empresa</label>
                                    <input type="email" name="email5" placeholder="Email da empresa" value="{{old('email5')}}">
                                </div>
                                <div class="field">
                                    <label>Rede social da Empresa</label>
                                    <input type="text" name="social_midea5" placeholder="Rede sócial da empresa" value="{{old('social_midea5')}}">
                                </div>
                                <div class="field">
                                    <label>Site da Empresa</label>
                                    <input type="text" name="web5" placeholder="Site da empresa" value="{{old('web5')}}">
                                </div>
                            </div>
                        </div>
                    </span>


                    <!--ADICIONAR CAMPOS 5!-->
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button d-none" id="addFieldsEdit5"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>

                @endif

                @if($exp->company6)
                <!-- EXPERIENCE 6!-->  
                    <h4 class="ui dividing header">Experiência  - (<small class="text-blue text-uppercase">{{$exp->company6}}</small>)</h4>           
                    <div class="ui form">
                        <div class="five fields">
                            <div class="required field">
                                <label>Empresa</label>
                                <input type="text" name="company6" placeholder="Nome da empresa" value="{{$exp->company6}}">
                            </div>
                            <div class="required field">
                                <label>Ocupação</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="position6" id="position6" placeholder="Ocupação na empresa" value="{{$exp->position6}}">
                                    <i class="user circle icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Telefone</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="phone6" id="phone6" placeholder="Telefone da empresa" value="{{$exp->phone6}}">
                                    <i class="phone icon"></i>
                                </div>
                            </div>
                            <div class="required field">
                                <label>Endereço</label>
                                <input type="text"  name="address6" placeholder="Endereço da empresa" value="{{$exp->address6}}">
                            </div>
                            <div class="field">
                                <div class="ui form">
                                    <div class="required field">
                                        <label>Província</label>
                                        <select class="ui search dropdown" name="province6" id="province6" value="{{$exp->province6}}">
                                        <option>
                                            @php if($exp->province6 == 'Null'){ echo 'não selecionou nenhuma província'; } else{  echo $exp->province6;}  @endphp
                                        </option>
                                        @foreach($provinces as $province)
                                                <option value="{{$province->name}}">{{$province->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="ui form mt-2">
                        <div class="five fields">
                            <div class="required field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date6">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date6" value="{{$exp->start_date6}}">
                                    </div>
                                            
                                </div>
                            </div>
                            <div class="required field ">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date6">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date6" value="{{$exp->end_date6}}">
                                    </div>
                                </div>
                            </div>
                            <div class="field {{--  @error('email') error @enderror --}}">
                                <label>Email da Empresa</label>
                                <input type="email" name="email6" placeholder="Email da empresa" value="{{$exp->email6}}">
                            </div>
                            <div class="field">
                                <label>Rede social da Empresa</label>
                                <input type="text" name="social_midea6" placeholder="Rede sócial da empresa" value="{{$exp->social_midea6}}">
                            </div>
                            <div class="field">
                                <label>Site da Empresa</label>
                                <input type="text" name="web6" placeholder="Site da empresa" value="{{$exp->web6}}">
                            </div>
                        </div>
                    </div>
                    <!--ADICIONAR CAMPOS 4!-->
                    <div class="ui horizontal divider">
                    <a class="ui mini red button">Você excedeu o máximo de campos que podem ser criados. Caso tenha mais experiêcias adicione no campo sobre!</a>
                    </div>
                @else
                    <span class="fieldsEdit6 d-none">            
                        <div class="ui form">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Empresa</label>
                                    <input type="text" name="company6" placeholder="Nome da empresa" value="{{old('company6')}}">
                                </div>
                                <div class="required field">
                                    <label>Ocupação</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="position6" id="position6" placeholder="Ocupação na empresa" value="{{old('position6')}}">
                                        <i class="user circle icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Telefone</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="phone6" id="phone6" placeholder="Telefone da empresa" value="{{old('phone6')}}">
                                        <i class="phone icon"></i>
                                    </div>
                                </div>
                                <div class="required field">
                                    <label>Endereço</label>
                                    <input type="text"  name="address6" placeholder="Endereço da empresa" value="{{old('address6')}}">
                                </div>
                                <div class="field">
                                    <div class="ui form">
                                        <div class="required field">
                                            <label>Província</label>
                                            <select class="ui search dropdown" name="province6" id="province6" value="{{old('province6')}}">
                                            <option>Selecione a província</option>
                                            @foreach($provinces as $province)
                                                    <option value="{{$province->name}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="ui form mt-2">
                            <div class="five fields">
                                <div class="required field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date6">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date6" value="{{old('start_date6')}}">
                                        </div>
                                            
                                    </div>
                                </div>
                                <div class="required field ">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date6">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date6" value="{{old('end_date6')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="field {{--  @error('email') error @enderror --}}">
                                    <label>Email da Empresa</label>
                                    <input type="email" name="email6" placeholder="Email da empresa" value="{{old('email6')}}">
                                </div>
                                <div class="field">
                                    <label>Rede social da Empresa</label>
                                    <input type="text" name="social_midea6" placeholder="Rede sócial da empresa" value="{{old('social_midea6')}}">
                                </div>
                                <div class="field">
                                    <label>Site da Empresa</label>
                                    <input type="text" name="web6" placeholder="Site da empresa" value="{{old('web6')}}">
                                </div>
                            </div>
                        </div>
                    </span>

                     <!--ADICIONAR CAMPOS 6!-->
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button d-none" id="addFieldsEdit6"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>


                @endif

                    <!--ADICIONAR CAMPOS 7  !-->
                    <div class="ui red horizontal divider">
                    <a class="ui mini red button d-none" id="addFieldsEdit7">Você excedeu o máximo de campos que podem ser criados. Caso tenha mais experiêcias adicione no campo sobre!</a>
                    </div>


                <div class="ui form mb-2">
                    <div class="ui two column very relaxed grid">
                        <div class="column">
                            <div class="ui form" data-content="Hello. This is a wide pop-up which allows for lots of content with additional space. You can fit a lot of words here and the paragraphs will be pretty wide." data-variation="wide">
                                <div class="required field  @error('about') error @enderror">
                                    <label>Sobre as sua Experiência profissional</label>
                                    <textarea name="about">{{$exp->about}}</textarea>
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
                                                    @forelse($exp->photos as $key => $photo)
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
                                    @foreach($exp->photos as $key => $photo)
                                        <a  class="" data-toggle="modal" data-target="#modal-default">
                                            
                                            <img src="{{asset('storage/' . $photo->image)}}" class="ui fluid image" style="width:30px; height:30px"> 
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="fluid ui button">Atualizar Experiências</button>
            </form>

            <!-- /.MODAL ver todas as fotos do Info -->  
                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="row">
                                    @forelse($exp->photos as $key => $photo)
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


        $('#start_dateNow').calendar({
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
        });

        
        $('#start_date1').calendar({
            type: 'date',
            endCalendar: $('#end_date1'),
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
        $('#end_date1').calendar({
            type: 'date',
            startCalendar: $('#start_date1'),
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

        
        $('#start_date2').calendar({
            type: 'date',
            endCalendar: $('#end_date2'),
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
        $('#end_date2').calendar({
            type: 'date',
            startCalendar: $('#start_date2'),
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

        

        $('#start_date3').calendar({
            type: 'date',
            endCalendar: $('#end_date3'),
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
        $('#end_date3').calendar({
            type: 'date',
            startCalendar: $('#start_date3'),
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


        $('#start_date4').calendar({
            type: 'date',
            endCalendar: $('#end_date4'),
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
        $('#end_date4').calendar({
            type: 'date',
            startCalendar: $('#start_date4'),
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


        $('#start_date5').calendar({
            type: 'date',
            endCalendar: $('#end_date5'),
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
        $('#end_date5').calendar({
            type: 'date',
            startCalendar: $('#start_date5'),
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

        
        $('#start_date6').calendar({
            type: 'date',
            endCalendar: $('#end_date6'),
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
        $('#end_date6').calendar({
            type: 'date',
            startCalendar: $('#start_date6'),
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



        $('#provinceNow').dropdown();
        $('#province').dropdown();
        $('#province1').dropdown();
        $('#province2').dropdown();
        $('#province3').dropdown();
        $('#province4').dropdown();
        $('#province5').dropdown();
        $('#province6').dropdown();
    </script>

    
    <script>
        let PhoneCompany = new Inputmask('(999) 999-999');
        PhoneCompany.mask(document.getElementById('phone'));
        let PhoneNow = new Inputmask('(999) 999-999');
        PhoneNow.mask(document.getElementById('phoneNow'));
        let PhoneCompany1 = new Inputmask('(999) 999-999');
        PhoneCompany1.mask(document.getElementById('phone1'));
        let PhoneCompany2 = new Inputmask('(999) 999-999');
        PhoneCompany2.mask(document.getElementById('phone2'));
        let PhoneCompany3 = new Inputmask('(999) 999-999');
        PhoneCompany3.mask(document.getElementById('phone3'));
        let PhoneCompany4 = new Inputmask('(999) 999-999');
        PhoneCompany4.mask(document.getElementById('phone4'));
        let PhoneCompany5 = new Inputmask('(999) 999-999');
        PhoneCompany5.mask(document.getElementById('phone5'));
        let PhoneCompany6 = new Inputmask('(999) 999-999');
        PhoneCompany6.mask(document.getElementById('phone6'));
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
        $('#addFields').click(function (e) {

            e.preventDefault();
            $('.fields1').removeClass('d-none');
            $('#addFields1').removeClass('d-none');
            $('#addFields').addClass('d-none');            
        });
        $('#addFields1').click(function (e) {

            e.preventDefault();
            $('.fields2').removeClass('d-none');
            $('#addFields2').removeClass('d-none');
            $('#addFields1').addClass('d-none');            
        });
        
        $('#addFields2').click(function (e) {

            e.preventDefault();
            $('.fields3').removeClass('d-none');
            $('#addFields3').removeClass('d-none');
            $('#addFields2').addClass('d-none');            
        });
        $('#addFields3').click(function (e) {

            e.preventDefault();
            $('.fields4').removeClass('d-none');
            $('#addFields4').removeClass('d-none');
            $('#addFields3').addClass('d-none');            
        });
        $('#addFields4').click(function (e) {

            e.preventDefault();
            $('.fields5').removeClass('d-none');
            $('#addFields5').removeClass('d-none');
            $('#addFields4').addClass('d-none');            
        });
        $('#addFields5').click(function (e) {

            e.preventDefault();
            $('.fields6').removeClass('d-none');
            $('#addFields6').removeClass('d-none');
            $('#addFields5').addClass('d-none');            
        });




        /* EDIT FIELDS */
        $('#addFieldsEdit1').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit1').removeClass('d-none');
            $('#addFieldsEdit2').removeClass('d-none');
            $('#addFieldsEdit1').addClass('d-none');            
        });

        $('#addFieldsEdit2').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit2').removeClass('d-none');
            $('#addFieldsEdit3').removeClass('d-none');
            $('#addFieldsEdit2').addClass('d-none');            
        });


        $('#addFieldsEdit3').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit3').removeClass('d-none');
            $('#addFieldsEdit4').removeClass('d-none');
            $('#addFieldsEdit3').addClass('d-none');            
        });

        
        $('#addFieldsEdit4').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit4').removeClass('d-none');
            $('#addFieldsEdit5').removeClass('d-none');
            $('#addFieldsEdit4').addClass('d-none');            
        });

        $('#addFieldsEdit5').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit5').removeClass('d-none');
            $('#addFieldsEdit6').removeClass('d-none');
            $('#addFieldsEdit5').addClass('d-none');            
        });

        $('#addFieldsEdit6').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit6').removeClass('d-none');
            $('#addFieldsEdit7').removeClass('d-none');
            $('#addFieldsEdit6').addClass('d-none');            
        });






        $('#addFieldsEdit2-2').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit2').removeClass('d-none');
            $('#addFieldsEdit3').removeClass('d-none');
            $('#addFieldsEdit2-2').addClass('d-none');            
        });

        $('#addFieldsEdit3-3').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit3').removeClass('d-none');
            $('#addFieldsEdit4').removeClass('d-none');
            $('#addFieldsEdit3-3').addClass('d-none');            
        });


        $('#addFieldsEdit4-4').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit4').removeClass('d-none');
            $('#addFieldsEdit5').removeClass('d-none');
            $('#addFieldsEdit4-4').addClass('d-none');            
        });
        
        $('#addFieldsEdit5-5').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit5').removeClass('d-none');
            $('#addFieldsEdit6').removeClass('d-none');
            $('#addFieldsEdit5-5').addClass('d-none');            
        });

        $('#addFieldsEdit6-6').click(function (e) {

            e.preventDefault();
            $('.fieldsEdit6').removeClass('d-none');
            $('#addFieldsEdit7').removeClass('d-none');
            $('#addFieldsEdit6-6').addClass('d-none');            
        });

    </script>
@endsection
