<template>
    <div class="row">
        Статус
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
                    id: 'status',
                    title: 'Status'
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