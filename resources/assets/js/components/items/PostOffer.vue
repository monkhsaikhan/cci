<template>
    <div class="row">
        <ul class="list-group">
            <li class="list-group-item" v-for="post in posts">
                <input type="checkbox" v-bind:value="post.id" v-model="checked" /> {{ post.title }}
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
                posts: [],
                post: {
                    id: 'post-offer',
                    title: 'Post offer',
                    posts: []
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
                axios.get('/admin/api/posts').then(response => {
                    this.posts = response.data
                }).catch(function (errors) {

                });
            },

            save()
            {
                this.post.posts = this.checked;
                this.$emit('saved', this.post);
            }
        }
    }
</script>