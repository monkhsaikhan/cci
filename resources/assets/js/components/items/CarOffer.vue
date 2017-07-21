<template>
    <div class="row">
        Санал болгох
        <a class="btn btn-success btn-sm" @click="save()">Сонгох</a>
    </div>
</template>

<script>

    export default {

        data(){
            return {
                selected: null,
                posts: [],
                post: {
                    id: 'car-offer',
                    title: 'Car offer'
                }
            }
        },

        methods: {
            save()
            {
                this.$emit('saved', this.post);
            }
        }

    }

</script>