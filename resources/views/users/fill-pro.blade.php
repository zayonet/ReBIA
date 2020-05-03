@extends('users.fill-menu')

@section('fill-user')

    <div class="ui segment">
        @if(!$pro)
            <form class="ui form" method="POST" action="{{route('user.pro.save')}}" enctype="multipart/form-data">
                @csrf

                <!--ENSINO PRIMARIO!-->
                <h4 class="ui dividing header">Formação Profissional</h4>
                
                <div class="ui form">
                    <div class="four fields">
                        <div class="required field  @error('name') error @enderror">
                            <label>Curso</label>
                            <input type="text" name="name" placeholder="Nome do curso" value="{{old('name')}}">
                            @error('name')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('local') error @enderror">
                            <label>Instituição de ensino</label>
                            <div class="ui left icon input">
                                <input type="text"  name="local" id="local" placeholder="Onde fez o curso?" value="{{old('local')}}">
                                <i class="location arrow icon"></i>
                            </div>
                            @error('local')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>

                         <div class="field">
                            <label>Data de início</label>
                            <div class="ui calendar" id="rangestart">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Começou em" name="start_date" value="{{old('start_date')}}">
                                </div>                               
                            </div>
                        </div>
                        <div class="field">
                            <label>Data final</label>
                            <div class="ui calendar" id="rangeend">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Terminou em" name="end_date" value="{{old('end_date')}}">
                                </div>
                               
                            </div>
                        </div>

                    </div>
                </div>
                <div class="ui form mb-2">
                    <div class="field">
                        <label>Fala mais do curso</label>
                        <textarea name="description"></textarea>
                    </div>                   
                </div> 

                 <!--DIVISAO!-->
                                
                 <div class="ui horizontal divider">
                    <a class="mini ui blue button" id="addFields"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <!-- FORMACAO 1!-->  
                <span class="fields1 d-none">          
                    
                    <div class="ui form">
                        <div class="four fields">
                            <div class="required field">
                                <label>Curso</label>
                                <input type="text" name="name1" placeholder="Nome do curso" value="{{old('name1')}}">
                            </div>
                            <div class="required field">
                                <label>Instituição de ensino</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="local1" id="local1" placeholder="Onde fez o curso?" value="{{old('local1')}}">
                                    <i class="location arrow icon"></i>
                                </div>
                            </div>

                            <div class="field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date1">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date1" value="{{old('start_date1')}}">
                                    </div>                               
                                </div>
                            </div>
                            <div class="field">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date1">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date1" value="{{old('end_date1')}}">
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ui form mb-2">
                        <div class="field">
                            <label>Fala mais do curso</label>
                            <textarea name="description1"></textarea>
                        </div>                   
                    </div> 
                </span> 
                <!--ADICIONAR CAMPOS 1!-->
                <div class="ui horizontal divider">
                    <a class="mini ui blue button d-none" id="addFields1"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <!-- FORMACAO 2!-->  
                <span class="fields2 d-none">            
                    <div class="ui form">
                        <div class="four fields">
                            <div class="required field">
                                <label>Curso</label>
                                <input type="text" name="name2" placeholder="Nome do curso" value="{{old('name2')}}">
                            </div>
                            <div class="required field">
                                <label>Instituição de ensino</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="local2" id="local2" placeholder="Onde fez o curso?" value="{{old('local2')}}">
                                    <i class="location arrow icon"></i>
                                </div>
                            </div>

                            <div class="field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date2">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date2" value="{{old('start_date2')}}">
                                    </div>                               
                                </div>
                            </div>
                            <div class="field">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date2">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date2" value="{{old('end_date2')}}">
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ui form mb-2">
                        <div class="field">
                            <label>Fala mais do curso</label>
                            <textarea name="description2"></textarea>
                        </div>                   
                    </div> 
                </span>

                <!--ADICIONAR CAMPOS 2!-->
                <div class="ui horizontal divider">
                    <a class="mini ui blue button d-none" id="addFields2"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                </div>

                <span class="fields3 d-none">              
                    <div class="ui form">
                        <div class="four fields">
                            <div class="required field">
                                <label>Curso</label>
                                <input type="text" name="name3" placeholder="Nome do curso" value="{{old('name3')}}">
                            </div>
                            <div class="required field">
                                <label>Instituição de ensino</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="local3" id="local3" placeholder="Onde fez o curso?" value="{{old('local3')}}">
                                    <i class="location arrow icon"></i>
                                </div>
                            </div>

                            <div class="field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date3">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date3" value="{{old('start_date3')}}">
                                    </div>                               
                                </div>
                            </div>
                            <div class="field">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date3">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date3" value="{{old('end_date3')}}">
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ui form mb-2">
                        <div class="field">
                            <label>Fala mais do curso</label>
                            <textarea name="description3"></textarea>
                        </div>                   
                    </div> 
                </span>
                <!--ADICIONAR CAMPOS 2!-->
                <div class="ui horizontal divider">
                     <a class="ui mini red button  d-none" id="addFields3">Você excedeu o máximo de campos que podem ser criados. Caso tenha mais formação profissional adicione no adicional!</a>
                </div>


                <!--CAMPO SOBRE!-->
                <div class="ui form mb-2">
                    <div class="ui two column very relaxed grid">
                        <div class="column">
                            <div class="ui form">
                                <div class="field">
                                    <label>Comentários adicionais</label>
                                    <textarea name="about"></textarea>
                                </div>                                
                            </div> 
                            <div class="input-group mt-2">
                                <div class="custom-file">
                                    <input type="file"  name="photos[]" multiple class="custom-file-input" id="addPiture">
                                    <label class="custom-file-label" for="addPiture">Escolha arquivos</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Adicionar fotos</span>
                                </div>
                            </div>
                                @error('photos.*')<p style="color:#9f3a38">{{$message}}</p>@enderror
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
            <form class="ui form" method="POST" action="{{route('user.pro.update', ['pro' => $pro->id])}}" enctype="multipart/form-data">
                @csrf
               
                <!--ENSINO PRIMARIO!-->
                <h4 class="ui dividing header">Formação Profissional - (<small class="text-blue text-uppercase">{{$pro->name}}</small>)</h4>
                
                <div class="ui form">
                    <div class="four fields">
                        <div class="required field  @error('name') error @enderror">
                            <label>Curso</label>
                            <input type="text" name="name" placeholder="Nome do curso" value="{{$pro->name}}">
                            @error('name')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>
                        <div class="required field  @error('local') error @enderror">
                            <label>Instituição de ensino</label>
                            <div class="ui left icon input">
                                <input type="text"  name="local" id="local" placeholder="Onde fez o curso?" value="{{$pro->local}}">
                                <i class="location arrow icon"></i>
                            </div>
                            @error('local')<p style="color:#9f3a38">{{$message}}</p>@enderror
                        </div>

                         <div class="field">
                            <label>Data de início</label>
                            <div class="ui calendar" id="rangestart">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Começou em" name="start_date" value="{{$pro->start_date}}">
                                </div>                               
                            </div>
                        </div>
                        <div class="field">
                            <label>Data final</label>
                            <div class="ui calendar" id="rangeend">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" placeholder="Terminou em" name="end_date" value="{{$pro->end_date}}">
                                </div>
                               
                            </div>
                        </div>

                    </div>
                </div>
                <div class="ui form mb-2">
                    <div class="field">
                        <label>Fala mais do curso</label>
                        <textarea name="description">{{$pro->description}}</textarea>
                    </div>                   
                </div> 

                 <!--DIVISAO!-->
                                
                 <!--ENSINO EXPERIENCE 1!-->
                @if($pro->name1)

                    <h4 class="ui dividing header">Formação Profissional em  - (<small class="text-blue text-uppercase">{{$pro->name1}}</small>)</h4>
                            
                        
                    <div class="ui form">
                        <div class="four fields">
                            <div class="required field">
                                <label>Curso</label>
                                <input type="text" name="name1" placeholder="Nome do curso" value="{{$pro->name1}}">
                            </div>
                            <div class="required field">
                                <label>Instituição de ensino</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="local1" id="local1" placeholder="Onde fez o curso?" value="{{$pro->local1}}">
                                    <i class="location arrow icon"></i>
                                </div>
                            </div>

                            <div class="field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date1">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date1" value="{{$pro->start_date1}}">
                                    </div>                               
                                </div>
                            </div>
                            <div class="field">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date1">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date1" value="{{$pro->end_date1}}">
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ui form mb-2">
                        <div class="field">
                            <label>Fala mais do curso</label>
                            <textarea name="description1">{{$pro->description1}}</textarea>
                        </div>                   
                    </div> 
                    @if(!$pro->name1) 
                        <div class="ui horizontal divider">
                            <a class="mini ui blue button" id="addFieldsEdit1-1"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                        </div>
                    @endif
                    <!--ADICIONAR CAMPOS 1!-->
                    @if(!$pro->name2)
                        <div class="ui horizontal divider">
                            <a class="mini ui blue button" id="addFieldsEdit2-2"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                        </div>
                    @endif
                @else
                     <!-- FORMACAO 1!-->  
                    <span class="fieldsEdit1 d-none">          
                        
                        <div class="ui form">
                            <div class="four fields">
                                <div class="required field">
                                    <label>Curso</label>
                                    <input type="text" name="name1" placeholder="Nome do curso" value="{{old('name1')}}">
                                </div>
                                <div class="required field">
                                    <label>Instituição de ensino</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="local1" id="local1" placeholder="Onde fez o curso?" value="{{old('local1')}}">
                                        <i class="location arrow icon"></i>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date1">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date1" value="{{old('start_date1')}}">
                                        </div>                               
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date1">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date1" value="{{old('end_date1')}}">
                                        </div>
                                    
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ui form mb-2">
                            <div class="field">
                                <label>Fala mais do curso</label>
                                <textarea name="description1"></textarea>
                            </div>                   
                        </div> 
                    </span> 
                    <!--ADICIONAR CAMPOS 1!-->
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button" id="addFieldsEdit1"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>
                @endif

                <!-- FORMACAO2!--> 
                @if($pro->name2)

                    <h4 class="ui dividing header">Formação Profissional em  - (<small class="text-blue text-uppercase">{{$pro->name2}}</small>)</h4>
 
                               
                    <div class="ui form">
                        <div class="four fields">
                            <div class="required field">
                                <label>Curso</label>
                                <input type="text" name="name2" placeholder="Nome do curso" value="{{$pro->name2}}">
                            </div>
                            <div class="required field">
                                <label>Instituição de ensino</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="local2" id="local2" placeholder="Onde fez o curso?" value="{{$pro->local2}}">
                                    <i class="location arrow icon"></i>
                                </div>
                            </div>

                            <div class="field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date2">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date2" value="{{$pro->start_date2}}">
                                    </div>                               
                                </div>
                            </div>
                            <div class="field">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date2">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date2" value="{{$pro->end_date2}}">
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ui form mb-2">
                        <div class="field">
                            <label>Fala mais do curso</label>
                            <textarea name="description2">{{$pro->description2}}</textarea>
                        </div>                   
                    </div> 

                    <!--ADICIONAR CAMPOS 2!-->
                    @if(!$pro->name3) 
                        <div class="ui horizontal divider">
                            <a class="mini ui blue button" id="addFieldsEdit3-3"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                        </div>
                    @endif
                @else 
                    <!-- FORMACAO 2!-->  
                    <span class="fieldsEdit2 d-none">            
                        <div class="ui form">
                            <div class="four fields">
                                <div class="required field">
                                    <label>Curso</label>
                                    <input type="text" name="name2" placeholder="Nome do curso" value="{{old('name2')}}">
                                </div>
                                <div class="required field">
                                    <label>Instituição de ensino</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="local2" id="local2" placeholder="Onde fez o curso?" value="{{old('local2')}}">
                                        <i class="location arrow icon"></i>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date2">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date2" value="{{old('start_date2')}}">
                                        </div>                               
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date2">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date2" value="{{old('end_date2')}}">
                                        </div>
                                    
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ui form mb-2">
                            <div class="field">
                                <label>Fala mais do curso</label>
                                <textarea name="description2"></textarea>
                            </div>                   
                        </div> 
                    </span>
                    <!--ADICIONAR CAMPOS 2!-->
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button d-none" id="addFieldsEdit2"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>

                @endif

                @if($pro->name3)
                    <h4 class="ui dividing header">Formação Profissional em  - (<small class="text-blue text-uppercase">{{$pro->name3}}</small>)</h4>
                                 
                    <div class="ui form">
                        <div class="four fields">
                            <div class="required field">
                                <label>Curso</label>
                                <input type="text" name="name3" placeholder="Nome do curso" value="{{$pro->name3}}">
                            </div>
                            <div class="required field">
                                <label>Instituição de ensino</label>
                                <div class="ui left icon input">
                                    <input type="text"  name="local3" id="local3" placeholder="Onde fez o curso?" value="{{$pro->local3}}">
                                    <i class="location arrow icon"></i>
                                </div>
                            </div>

                            <div class="field">
                                <label>Data de início</label>
                                <div class="ui calendar" id="start_date3">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Começou em" name="start_date3" value="{{$pro->start_date3}}">
                                    </div>                               
                                </div>
                            </div>
                            <div class="field">
                                <label>Data final</label>
                                <div class="ui calendar" id="end_date3">
                                    <div class="ui input left icon">
                                        <i class="calendar icon"></i>
                                        <input type="text" placeholder="Terminou em" name="end_date3" value="{{$pro->end_date3}}">
                                    </div>
                                
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="ui form mb-2">
                        <div class="field">
                            <label>Fala mais do curso</label>
                            <textarea name="description3">{{$pro->description3}}</textarea>
                        </div>                   
                    </div> 
                        
                    <!--ADICIONAR CAMPOS 2!-->
                    <div class="ui horizontal divider">
                        <a class="ui mini red button" id="addFieldsEdit4">Você excedeu o máximo de campos que podem ser criados. Caso tenha mais formação profissional adicione no adicional!</a>
                    </div>
                @else                     
                    <!-- FORMACAO 3!-->  
                    <span class="fieldsEdit3 d-none">            
                        <div class="ui form">
                            <div class="four fields">
                                <div class="required field">
                                    <label>Curso</label>
                                    <input type="text" name="name3" placeholder="Nome do curso" value="{{old('name3')}}">
                                </div>
                                <div class="required field">
                                    <label>Instituição de ensino</label>
                                    <div class="ui left icon input">
                                        <input type="text"  name="local3" id="local2" placeholder="Onde fez o curso?" value="{{old('local3')}}">
                                        <i class="location arrow icon"></i>
                                    </div>
                                </div>

                                <div class="field">
                                    <label>Data de início</label>
                                    <div class="ui calendar" id="start_date3">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Começou em" name="start_date3" value="{{old('start_date3')}}">
                                        </div>                               
                                    </div>
                                </div>
                                <div class="field">
                                    <label>Data final</label>
                                    <div class="ui calendar" id="end_date3">
                                        <div class="ui input left icon">
                                            <i class="calendar icon"></i>
                                            <input type="text" placeholder="Terminou em" name="end_date3" value="{{old('end_date3')}}">
                                        </div>
                                    
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="ui form mb-2">
                            <div class="field">
                                <label>Fala mais do curso</label>
                                <textarea name="description3"></textarea>
                            </div>                   
                        </div> 
                    </span>

                    <!--ADICIONAR CAMPOS 3!-->
                    <div class="ui horizontal divider">
                        <a class="mini ui blue button d-none" id="addFieldsEdit3"><i class="fa fa-plus"></i> &nbsp;Criar novos campos</a>
                    </div>

                @endif
                <!--ADICIONAR CAMPOS 2!-->
                <div class="ui horizontal divider">
                     <a class="ui mini red button  d-none" id="addFieldsEdit4">Você excedeu o máximo de campos que podem ser criados. Caso tenha mais formação profissional adicione no adicional!</a>
                </div>


                <!--CAMPO SOBRE!-->
                <div class="ui form mb-2">
                    <div class="ui two column very relaxed grid">
                        <div class="column">
                            <div class="ui form">
                                <div class="field">
                                    <label>Comentários adicionais</label>
                                    <textarea name="about"></textarea>
                                </div>                                
                            </div> 
                            <div class="input-group mt-2">
                                <div class="custom-file">
                                    <input type="file"  name="photos[]" multiple class="custom-file-input" id="addPiture">
                                    <label class="custom-file-label" for="addPiture">Escolha arquivos</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Adicionar fotos</span>
                                </div>
                            </div>
                                @error('photos.*')<p style="color:#9f3a38">{{$message}}</p>@enderror
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

                <button type="submit" class="fluid ui button">Atualizar a foto do perfil</button>
            </form>


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

        /*EDIT CAMPOS*/
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


    </script>
@endsection
