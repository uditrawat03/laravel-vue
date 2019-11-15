<template>
  <form v-on:submit="createCompany" :action="routeUrl" method="POST">
    <input type="hidden" name="_token" :value="csrfToken" />
    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="name" class="label">Name</label>
          <p class="control">
            <input type="text" class="input" name="name" id="name" v-model="name" />
          </p>
        </div>

        <div class="field">
          <label for="name" class="label">Email</label>
          <p class="control">
            <input type="text" class="input" name="email" id="email" v-model="email" />
          </p>
        </div>

        <div class="field">
          <label for="type" class="label">type</label>
          <p class="control select">
            <select name="type" id="type" v-model="type">
              <option value>-- Select Type --</option>
              <option :value="type.id" v-for="type in types" v-bind:key="type.id">{{type.name}}</option>
            </select>
          </p>
        </div>

        <div class="field">
          <label for="status" class="label">Status</label>
          <p class="control select">
            <select name="status" id="status" v-model="status">
              <option value>-- Select Status --</option>
              <option :value="type.id" v-for="type in statuses" v-bind:key="type.id">{{type.name}}</option>
            </select>
          </p>
        </div>
      </div>
    </div>
    <!-- end of .columns for forms -->
    <div class="columns">
      <div class="column">
        <hr />
        <button class="button is-primary is-pulled-right" style="width: 250px;">Create New Company</button>
      </div>
    </div>
  </form>
</template>

<script>
export default {
  props: ["routeUrl", "csrfToken", "_token"],
  data() {
    return {
      name: "",
      email: "",
      type: "",
      status: "",
      types: [],
      statuses: []
    };
  },
  ready: function() {
    this.getCompanyType();
  },
  methods: {
    createCompany: function(e) {
      e.preventDefault();
      window.axios
        .post(this.routeUrl, {
          name: this.name,
          email: this.email,
          type: this.type,
          status: this.status
          //  _token:this.csrfToken
        })
        .then(res => function(params) {})
        .catch(error => console.log(error));
    },

    getCompanyType: function() {
      let that = this;
      window.axios
        .get("/api/companies/getTypes?api_token=" + this._token)
        .then(function(response) {
          that.types = response.data;
        })
        .catch(error => console.log(error));
    },

    getCompanyStatus: function() {
      let that = this;
      window.axios
        .get("/api/companies/getStatus?api_token=" + this._token)
        .then(function(response) {
          that.statuses = response.data;
        })
        .catch(error => console.log(error));
    }
  },

  mounted() {
    // Do something useful with the data in the template
  }
};
</script>

