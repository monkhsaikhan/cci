<template>
    <div class="row">
        <ul class="list-group">
            <li class="list-group-item" v-for="car in cars">
                <input type="checkbox" v-bind:value="car.id" v-model="checked" /> {{ car.name }}
            </li>
        </ul>
        <a class="btn btn-success btn-sm" @click="save()">Сонгох</a>
    </div>
</template>

<script>

    export default {

        data(){
            return {
                checked: [],
                cars: [],
                selected: null,
                posts: [],
                post: {
                    id: 'car-offer',
                    title: 'Car offer',
                    cars: []
                }
            }
        },

        created()
        {
            this.fetchCars();
        },

        methods: {
            fetchCars(){
                axios.get('/admin/api/cars').then(response => {
                    this.cars = response.data;
                })
            },
            save()
            {
                this.post.cars = this.checked;
                this.$emit('saved', this.post);
            }
        }

    }

</script>