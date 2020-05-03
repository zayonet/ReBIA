<template>
     <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{this.form.name}}</h3>

                            <p class="text-muted text-center">{{this.form.type}}</p>

                            <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Followers</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Following</b> <a class="float-right">543</a>
                            </li>
                            <li class="list-group-item">
                                <b>Friends</b> <a class="float-right">13,287</a>
                            </li>
                            </ul>

                            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>

                            <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">Malibu, California</p>

                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                            <p class="text-muted">
                            <span class="tag tag-danger">UI Design</span>
                            <span class="tag tag-success">Coding</span>
                            <span class="tag tag-info">Javascript</span>
                            <span class="tag tag-warning">PHP</span>
                            <span class="tag tag-primary">Node.js</span>
                            </p>

                            <hr>

                            <strong><i class="fa fa-file-alt mr-1"></i> Notes</strong>

                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <div class="ui large breadcrumb">
                                <router-link  to="/profile" class="section active">Perfil</router-link>
                                <div class="divider"> / </div>
                                <router-link  to="/" class="section">Infomações pessoais</router-link>
                                <div class="divider"> / </div>
                                <router-link to="/education" class="section">Educação</router-link>
                                <div class="divider"> / </div>
                                <router-link to="/experience" class="section" >Experiências</router-link>
                                <div class="divider"> / </div>
                                <router-link to="/profissional" class="section" >Formação Profissional</router-link>
                                <div class="divider"> / </div>
                                <router-link to="/biograph" class="section">Biografia</router-link>
                                <div class="divider"> / </div>
                            </div>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="">
                                <form class="form-horizontal" @submit.prevent="createUser()" @keydown="form.onKeydown($event)">
                                    <h4 class="ui dividing header">Dados Pessoais</h4>
                                        <div class="ui grid">
                                            <div class="three column row">
                                                <div class="column">
                                                    <div class="required field">
                                                        <label>Nome</label>
                                                        <input type="text" v-model="form.name" class="form-control" id="inputName" placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }">
                                                        <has-error :form="form" field="name"></has-error>
                                                    </div>
                                                </div>
                                                <input type="hidden" v-model="form.user_id">
                                                <div class="column">
                                                    <div class="required field ">
                                                        <label>Sobrenome</label>
                                                        <input type="text" v-model="form.surname" class="form-control" id="inputSurname" placeholder="Sobrenome" :class="{ 'is-invalid': form.errors.has('surname') }">
                                                        <has-error :form="form" field="surname"></has-error>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                     <div class="required field"  data-tooltip="Escreva o B.I no formato 0000000AA000" data-position="bottom right">
                                                        <label>Nº. B.I</label>
                                                        <input type="text" v-model="form.identity" class="form-control" id="identity" placeholder="Sua identidade" :class="{ 'is-invalid': form.errors.has('identity') }">
                                                        <has-error :form="form" field="identity"></has-error>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="ui grid">
                                            <div class="three column row">
                                                <div class="column">
                                                    <div class="required  field">
                                                        <label>Nascido em</label>
                                                        <div class="ui calendar" id="date_calendar">
                                                            <div class="ui input left icon">
                                                                <i class="calendar icon"></i>          
                                                                <input type="text" v-model="form.birthday" class="form-control" id="birthday" placeholder="Sua identidade" :class="{ 'is-invalid': form.errors.has('birthday') }">
                                                                <has-error :form="form" field="birthday"></has-error>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                    <div class="field">
                                                    <div class="ui form">
                                                    <div class="required field">
                                                        <label>País</label>
                                                        <select class="ui search dropdown" v-model="form.country" id="country" name="country"  :class="{ 'is-invalid': form.errors.has('country')}">
                                                            <option value="">Select User Role</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Brasil">Brasil</option>
                                                            <option value="USA">USA</option>
                                                            <option value="UK">UK</option>
                                                        </select>
                                                        <has-error :form="form" field="country"></has-error>
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                    <div class="field">
                                                    <div class="ui form">
                                                    <div class="required  field">
                                                        <label>Província</label>
                                                        <select class="ui search dropdown" v-model="form.province" id="province" name="province"  :class="{ 'is-invalid': form.errors.has('province')}">
                                                            <option value="">Select User Role</option>
                                                            <option value="Cabinda">Cabinda</option>
                                                            <option value="Luanda">Luanda</option>
                                                            <option value="Zaire">Zaire</option>
                                                            <option value="Bengo">Bengo</option>
                                                        </select>
                                                        <has-error :form="form" field="province"></has-error>
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="ui grid">
                                            <div class="three column row">
                                                <div class="column">
                                                    <div class="required field  @error('telemovel') error @enderror">
                                                        <label>Telemovel</label>
                                                        <input type="text" v-model="form.telemovel" class="form-control" id="telemovel" placeholder="telemovel" :class="{ 'is-invalid': form.errors.has('telemovel') }">
                                                        <has-error :form="form" field="telemovel"></has-error>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                    <div class="required field  @error('county') error @enderror">
                                                        <label>Município</label>
                                                        <input type="text" v-model="form.county" class="form-control" id="county" placeholder="county" :class="{ 'is-invalid': form.errors.has('county') }">
                                                        <has-error :form="form" field="county"></has-error>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                    <div class="required field  @error('address') error @enderror">
                                                        <label>Endereço</label>
                                                        <input type="text" v-model="form.address" class="form-control" id="address" placeholder="address" :class="{ 'is-invalid': form.errors.has('address') }">
                                                        <has-error :form="form" field="address"></has-error>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="ui horizontal divider header">
                                                <i class="tag icon"></i> Redes sociais
                                        </h4>
                                        <div class="ui grid">
                                            <div class="three column row">
                                                <div class="column">
                                                    <div class=" field">
                                                        <label>Facebook</label>
                                                        <input type="text" v-model="form.facebook" class="form-control" id="facebook" placeholder="facebook" :class="{ 'is-invalid': form.errors.has('facebook') }">
                                                        <has-error :form="form" field="facebook"></has-error>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                    <div class=" field">
                                                        <label>Tweet</label>
                                                        <input type="text" v-model="form.tweet" class="form-control" id="tweet" placeholder="tweet" :class="{ 'is-invalid': form.errors.has('tweet') }">
                                                        <has-error :form="form" field="tweet"></has-error>
                                                    </div>
                                                </div>
                                                <div class="column">
                                                    <div class=" field">
                                                        <label>LinkedIn</label>
                                                        <input type="text" v-model="form.linkedin" class="form-control" id="linkedin" placeholder="linkedin" :class="{ 'is-invalid': form.errors.has('linkedin') }">
                                                        <has-error :form="form" field="linkedin"></has-error>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="form-group row mt-4">
                                        <div class="offset-sm-8 col-sm-4">
                                        <button type="submit" class="btn btn-danger btn-block">Guardar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</template>

<script>
    export default {
        data(){
            return{
                form: new Form({
                    id: '', // Este id eh para editar o user 
                    user_id: '',
                    name: '', 
                    surname: '', 
                    identity: '', 
                    birthday: '', 
                    country: '',
                    province: '',  
                    county: '', 
                    telemovel: '', 
                    address: '', 
                    facebook: '', 
                    tweet:'', 
                    linkedin: '',
                }) 
            }
        },
        methods:{    
            loadUsers(){
                axios.get("api/personal").then(({ data }) => (this.form.fill(data)));
            },
            createUser(){
                this.form.post('api/personal')
            },
        },
        created(){
            this.loadUsers();
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
