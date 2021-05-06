<template>
  <div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-center">Administrar Usuarios</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
      <div class="container-fluid">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">Usuarios</div>
            <div class="card-body table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">nombre</th>
                    <th scope="col">email</th>
                    <th scope="col">acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="user in users" :key=user.id>
                    <th scope="row">{{ user.id }}</th>
                    <td>{{ user.name }}</td>
                    <td>{{ user.email }}</td>
                    <td>botones</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
</template>

<script>
export default {
  name: "users",

  data() {
      return {
          users: []
      }
  },

  methods: {
      async listar(){
          const res = await axios.get('/usuarios');
          this.users = res.data;

      }

  },
  created() {
      this.listar();
      /* async listar(){
          const res = await axios.get('users');
          this.data = res.data;
          console.log(this.users);
      } */
  }

};
</script>
