<template>
    <div class="col-md-6 mx-auto">
        <form @submit.prevent="submit">
            <div class="form-group">
                <label for="firstname"></label>
                <input
                    type="text"
                    class="form-control"
                    name="firstname"
                    id="firstname"
                    aria-describedby="helpId"
                    placeholder="Insert firstname"
                    v-model="contact.firstname"
                />
                <small id="helpId" class="form-text text-muted"
                    >Help text</small
                >
            </div>
            <div class="form-group">
                <label for="lastname"></label>
                <input
                    type="text"
                    class="form-control"
                    name="lastname"
                    id="lastname"
                    aria-describedby="helpId"
                    placeholder="Insert lastname"
                    v-model="contact.lastname"
                />
                <small id="helpId" class="form-text text-muted"
                    >Help text</small
                >
            </div>
            <div class="form-group">
                <label for="age"></label>
                <input
                    type="number"
                    class="form-control"
                    name="age"
                    id="age"
                    aria-describedby="helpId"
                    placeholder="Insert age"
                    v-model="contact.age"
                />
                <small id="helpId" class="form-text text-muted"
                    >Help text</small
                >
            </div>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="exampleRadios1"
                    value="male"
                    checked
                    v-model="contact.gender"
                />
                <label class="form-check-label" for="exampleRadios1">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="radio"
                    name="gender"
                    id="exampleRadios1"
                    value="female"
                    checked
                    v-model="contact.gender"
                />
                <label class="form-check-label" for="exampleRadios1">
                    Female
                </label>
            </div>
            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            contact: {
                firstname: "",
                lastname: "",
                age: null,
                gender: ""
            }
        };
    },
    methods: {
        reset() {
            this.contact = {
                firstname: "",
                lastname: "",
                age: null,
                gender: ""
            };
        },
        submit() {
            this.$inertia.post("/admin/contacts", this.contact);
            this.reset();
        }
    }
};
</script>
