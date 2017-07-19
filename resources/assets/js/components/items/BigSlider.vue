<template>
    <div class="row">
        <ul class="list-group">
            <li class="list-group-item" v-for="post in posts">
                <label>{{post.title}}</label>
            </li>
        </ul>
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
                    id: 'big-slider',
                    title: 'Big Slide Show'
                }
            }
        },

        created()
        {
            this.fetchPosts();
        },

        methods: {
            fetchPosts()
            {
                axios.get('/admin/api/big/slider').then(response => {
                    this.posts = response.data
                }).catch(function (errors) {

                });
            },

            save()
            {
                this.$emit('saved', this.post);
            }
        }

    }

</script>