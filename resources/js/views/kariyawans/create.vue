<template>
    <div class="col py-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">New Kariyawan</div>
                    <div class="card-body">
                        <form >
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input
                                    type="text"
                                    v-model="form.name"
                                    id="name"
                                    class="form-control"
                                />
                                <div class="form-group"></div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select
                                        v-model="form.jabatan"
                                        id="jabatan"
                                        class="form-select"
                                    >
                                        <option
                                            v-for="jabatan in jabatans"
                                            :key="jabatan.id"
                                            :value="jabatan.id"
                                        >
                                            {{ jabatan.jabatan }}
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="gajih">Gajih</label>
                                    <input
                                        type="text"
                                        id="gajih"
                                        v-model="form.gajih"
                                        class="form-control"
                                    />
                                </div>
                            </div>
                            <button type="submit" @click.prevent="store"  class="btn btn-danger">
                                Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                name : '',
                jabatan: '',
                gajih : '',
            },

            jabatans: [],
        };
    },

    mounted() {
        this.getSubjects();
        let base_url = window;

        console.log({ base_url});
    },

    methods: {
        async getSubjects() {
            let response = await axios.get("/api/jabatans");
            if (response.status === 200) {
                this.jabatans = response.data
            }
        },

        async store() {
            let base_url = window.config.base_url;
            console.log({ base_url })
            let response = await axios.post(base_url + '/api/kariyawans/create-new-kariyawan',this.form);
            if(response.status == 200){
                this.form.name = "",
                this.form.jabatan = "",
                this.form.gajih = ""
            }

        },
    },

};
</script>

<style></style>
