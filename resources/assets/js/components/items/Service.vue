<template>
    <div class="row">
        Үйлчилгээ
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
                    id: 'service',
                    title: 'Service'
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