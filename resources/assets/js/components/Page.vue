<template>
    <div class="row">

        <div class="col-lg-3">
            <page-item-types v-on:added="addItem"></page-item-types>
        </div>

        <div class="col-lg-5">

            <div class="box">

                <div class="box-body">

                    <div class="box-body">

                        <post v-if="showType == 'post'" v-on:saved="saveItem"></post>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-lg-4">
            <div class="box">

                <div class="box-body">

                    <div class="box-header">

                        <input type="text" class="form-control" placeholder="Page title" />

                    </div>

                    <div class="box-body">

                        <ul class="list-group">
                            <li class="list-group-item" v-for="item in items">
                                {{item.view.title}} <a class="btn btn-success btn-xs pull-right"><i class="fa fa-plus-circle"></i></a>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </div>
</template>

<script>

    import PageItemType from './../components/PageItemTypes.vue'
    import Post from './../components/items/Post.vue'

    export default {

        data() {
            return {
                content: null,
                showType: 'post',
                items: []
            }
        },

        components: {
            'page-item-types': PageItemType,
            'post': Post
        },

        methods: {
            addItem(key) {
               this.showType = key;
            },
            saveItem(data)
            {
                var item = {
                    type: this.showType,
                    view: null
                }

                if(this.showType == 'post')
                {
                    item.view = this.addPost(data);
                }
                this.items.push(item);
            },
            addPost(data)
            {
                return {
                    title: data.title,
                    id: data.id,
                }
            }
        },

        mounted() {

        }
    }
</script>