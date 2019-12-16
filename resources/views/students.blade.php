<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Web Project</title>
    </head>
    <body>
    <div class="container" id="app">
        <h2  class="text-center text-info">Gazdasági informatika</h2>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
          <a class="navbar-brand" href="#">GI</a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home"> Kezdőlap</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="students"> Névsor</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="schedule"> Órarend</a>
              </li>
            </ul>
            <div>
              <b-img style="max-width: 15%; float: right;" src="../resources/assets/images/logo0.png"></b-img>
            </div>
          </div>
        </nav>
        <div class="row">
            <div class="col-md-12 text-center">
              <b-table striped hover :fields="fields" :items="students">
              <template v-slot:cell(actions)="row">
                <b-button size="lm" @click="edit_student(row.item.id)" v-b-toggle.newstudent variant="info">
                    Edit
                </b-button>
                <!--<b-button size="lm" @click="delete($event.target)" variant="danger">
                    Törlés
                </b-button>-->
                <b-button size="lm" @click="delete_student(row.item.id,row.index)" variant="danger">
                  Törlés
                </b-button>
              </template>
            </b-table>
            </div>
                <b-modal :id="deleteModal.id" title="Biztos, hogy törülni akarja ezt a hallgatót?">
                    <template v-slot:modal-footer="{ ok, cancel }">
                        <b-button size="sm" variant="danger" @click="ok()">
                            Törlés
                        </b-button>
                        <b-button size="sm" variant="warning" @click="cancel()">
                            Mégse
                        </b-button>
                    </template>
                </b-modal>
            <hr/>
            <div class="col-md-12 text-center">
                <b-button v-b-toggle.newstudent variant="primary">Új hallgató hozzáadása</b-button>
                <b-collapse id="newstudent" class="mt-2">
                    <b-card>
                        <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Hallgató vezetékneve</label>
                            <input type="hidden" name="id" v-model="student.id">
                            <input v-model="student.first_name" type="text" class="form-control" name="first_name" 
                            id="first_name" placeholder="Enter First Name">
                            <span class="alert-danger" v-if="errors.first_name">@{{ errors.first_name }}</span>
                        </div>
                        <div class="form-group">
                            <label for="name">Hallgató keresztneve</label>
                            <input v-model="student.last_name" type="text" class="form-control" name="last_name" id="last_name" placeholder="Enter Last">
                            <span class="alert-danger" v-if="errors.last_name">@{{ errors.last_name }}</span>
                        </div>
                        <div class="form-group">
                            <label for="name">Hallgató e-mail címe</label>
                            <input v-model="student.email" type="text" class="form-control" name="email" id="email" placeholder="Enter Student's email">
                            <span class="alert-danger" v-if="errors.email">@{{ errors.email }}</span>
                        </div>
                        <button @click.prevent = "add_student()" type="submit" class="btn btn-primary" v-b-toggle.newstudent v-if="edit_true">Hallgató hozzáadása</button>
                        <button  @click.prevent = "update_student()" type="submit" class="btn btn-primary" v-b-toggle.newstudent v-else>Hallgató frissítése</button>
                        </form>
                    </b-card>
                </b-collapse>
            </div>
        </div>
    </div>
    <script src="{{asset('/js/app.js')}}"></script>
    </body>
</html>