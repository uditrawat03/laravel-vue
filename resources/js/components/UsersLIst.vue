<template>
  <div class="card">
    <div class="card-content">
      <table class="table is-narrow">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th></th>
          </tr>
        </thead>

        <tbody>
            <tr v-for="user in users" v-bind:key="user">
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.created_at}}</td>
                <td></td>
            </tr>
        </tbody>
      </table>
      <nav aria-label="Page navigation example" class="pagination" role="navigation" >
            <ul class="pagination-list">
                <li class="pagination-previous" @click="getUserList(pagination.prev_page_url)"><a class="page-link" href="#">Previous</a></li>
                <li class="pagination-link"><a class="page-link" href="#">{{pagination.current_page + ' of ' + pagination.last_page}}</a></li>
                <li class="pagination-next" @click="getUserList(pagination.next_page_url)"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
  </div>
</template>

<script>
export default {
  data() {
      return {
          users: [],
          user_id: '',
          pagination: []
      }
  },
  created: function () {

      this.getUserList();
  },
  methods: {
      getUserList(page_url){
          page_url = page_url ? page_url : '/users';
          window.axios.get(page_url)
            .then(res => {
                console.log(res.data.data);
                this.users = res.data.data;
                this.pagination = {
                    prev_page_url: res.data.prev_page_url,
                    next_page_url:res.data.next_page_url,
                    last_page: res.data.last_page,
                    current_page: res.data.current_page
                };


            }).catch(error => console.log(error));
      }
  }
};
</script>
