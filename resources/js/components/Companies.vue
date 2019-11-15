<template>
  <div class="card">
    <div class="card-content">
      <table class="table is-narrow" id="companies-data">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th></th>
          </tr>
        </thead>

        <tbody></tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    dataTable: function() {
      var table = $("#companies-data").DataTable({
        processing: true,
        serverSide: true,
        ajax: "/companies",
        columns: [
          { data: "id", name: "id" },
          { data: "name", name: "name" },
          { data: "email", name: "email" },
          { data: "created_at", name: "created_at" },

          {
            data: "action",
            name: "action",
            orderable: false,
            searchable: false
          }
        ]
      });
    }
  },
  mounted: function() {
    var self = this;
    this.$nextTick(function() {
      self.dataTable();
    });
  }
};
</script>
