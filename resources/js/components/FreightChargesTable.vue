<template>
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Weight</th>
                    <th scope="col">Freight charges</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item of $v.vars.$each.$iter">
                    <td>{{item.$model.weight}}</td>
                    <td>
                        <input
                            v-model="item.freight_charges.$model"
                            @blur="item.freight_charges.$touch()"
                            :class="{ 'is-invalid': item.freight_charges.$error }"
                            type="text" class="form-control" placeholder="Enter value"
                        >
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="2">
                        <p class="text-right">
                            <button
                                @click="saveVars($event)"
                                class="btn btn-primary" type="submit"
                            >Save</button>
                        </p>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</template>

<script>
    import Vuelidate from 'vuelidate'
    import { required,decimal } from 'vuelidate/lib/validators'
    import axios from "axios"

    Vue.use(Vuelidate)

    export default {
        props: ['vars'],
        data() {
            return {
                showSuccess: false
            }
        },
        methods: {
            async saveVars(event){
                event.preventDefault()
                this.$v.$touch()
                if (this.$v.$error) {
                    return
                } else {
                    const str = this.vars;
                    await axios.post('/manage/freight-charges', str)
                        .then((response) => {
                            alert('Success!')
                        })
                        .catch((error) => {
                            console.log(error);
                        });
                }
            }
        },
        validations () {
            return {
                vars: {
                    $each: {
                        freight_charges: {
                            required,
                            decimal
                        }
                    }
                }
            }
        }
    }
</script>
<style>
    .table {
        max-width: 500px;
        margin: 10px;
    }
    .table tr, .table thead {
        border-left: 1px solid #dee2e6;
        border-right: 1px solid #dee2e6;
    }
    .table tfoot tr {
        border-left: 0;
        border-right: 0;
    }
</style>
