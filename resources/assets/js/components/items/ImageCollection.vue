<template>
    <div class="row">
        <ul class="list-group">
            <li class="list-group-item" v-for="post in posts">
                <input type="radio" id="one" v-bind:value="post.id" v-model="selected" v-on:change="select(post)"> <label>{{post.name}}</label>
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
                post: null
            }
        },

        created()
        {
            this.fetchPosts();
        },

        methods: {
            fetchPosts()
            {
                axios.get('/admin/api/image/collection').then(response => {
                    this.posts = response.data
                }).catch(function (errors) {
                    
                });
            },

            select(post) {
                this.post = post;
            },

            save()
            {
                this.$emit('saved', this.post);
            }
        }

    }

</script>