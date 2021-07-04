<template>
    <div class="col-md-6 mx-auto">
        <inertia-link
            class="btn btn-sm btn-primary"
            href="/admin/contacts/create"
        >
            Add New
        </inertia-link>
        <table class="table table-bordered table-condensed">
            <thead>
                <tr>
                    <td>Firstname</td>
                    <td>Lastname</td>
                    <td>Gender</td>
                    <td>Age</td>
                </tr>
            </thead>
            <tr v-for="(row, index) in data" :key="index">
                <td>{{ row.firstname }}</td>
                <td>{{ row.lastname }}</td>
                <td>{{ row.gender }}</td>
                <td>{{ row.age }}</td>

                <td width="130">
                    <inertia-link
                        href="/admin/contacts/edit"
                        class="btn btn-sm btn-primary"
                    >
                        Edit
                    </inertia-link>
                    <inertia-link
                        href="/admin/contacts/delete"
                        @click="deleteRow(row)"
                        class="btn btn-sm btn-danger"
                    >
                        Del
                    </inertia-link>
                </td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {
    props: ["data"]
};
</script>
