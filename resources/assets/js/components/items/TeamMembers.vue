<template>
    <div class="row">
        Ажилтанууд
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
                    id: 'team-members',
                    title: 'Team members'
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