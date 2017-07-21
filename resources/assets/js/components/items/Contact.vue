<template>
    <div class="row">
        Холбоо барих
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
                    id: 'contact-form',
                    title: 'Contact Form'
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