<template>
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users Management Table</h3>
              <div class="card-tools">
                <button class="btn btn-danger" data-toggle="modal" data-target="#addUser"><i class="fas fa-user-plus"></i> Add User</button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Type</th>
                  <th>Modify</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>Roman</td>
                  <td>Ruman@gmail.com</td>
                  <td>Admin</td>
                  <td>
                      <a href="#">
                          <i class="purple fas fa-edit"></i>
                      </a>
                      <a href="#" id="space">
                          <i class="red fas fa-trash"></i>
                      </a>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          </div>
          <!-- Modal -->
          <!-- Modal -->
            <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <!-- Form of modal-body -->
                   <form @submit.prevent="login">
                    
                    <div class="form-group">
                    <input v-model="form.name" type="text" name="name" placeholder="User Name"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
                    <has-error :form="form" field="name"></has-error>
                    </div>

                    <div class="form-group">
                    <input v-model="form.email" type="email" name="email" placeholder="Email"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('email') }">
                    <has-error :form="form" field="email"></has-error>
                    </div>
                
                    <div class="form-group">
                    <label>Password</label>
                    <input v-model="form.password" type="password" name="password"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                    <has-error :form="form" field="password"></has-error>
                    </div>

                    <div class="form-group">
                    <input v-model="form.type" type="text" name="type" placeholder="type"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('type') }">
                    <has-error :form="form" field="type"></has-error>
                    </div>

                    <div class="form-group">
                    <input v-model="form.bio" type="text-box" name="bio" placeholder="Bio"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('bio') }">
                    <has-error :form="form" field="bio"></has-error>
                    </div>

                    <div class="form-group">
                    <input v-model="form.photo" type="text" name="photo" placeholder="Photo"
                        class="form-control" :class="{ 'is-invalid': form.errors.has('photo') }">
                    <has-error :form="form" field="photo"></has-error>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button :disabled="form.busy" type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
            </div>
    </div>
</template>

<script>
import Vue from 'vue'
import { Form, HasError, AlertError } from 'vform'
import axios from 'axios'
 
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)
    export default {
       
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                form: new Form({
                    name: '',
                    email: '',
                    password: '',
                    type: '',
                    bio: '',
                    photo: ''
                })
            }
        },
        methods: {

            login: function(){
                 console.log(this.form);
            }

        }
    }

</script>
<style scoped>
    thead{
        color: aliceblue;
        background-color: brown; 
    }
    #space{
        margin-left: 10px;
    }
</style>
