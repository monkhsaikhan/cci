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

                        <c-block v-if="showType == 'c-block'" v-on:saved="saveItem"></c-block>

                        <i-collection v-if="showType == 'i-collection'" v-on:saved="saveItem"></i-collection>

                        <b-s-show v-if="showType == 'b-s-show'" v-on:saved="saveItem"></b-s-show>

                        <c-text v-if="showType == 'c-text'" v-on:saved="saveItem"></c-text>

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
                                {{item.view.title}} <a class="btn btn-danger btn-xs pull-right" @click="remove(item)"><i class="fa fa-trash-o"></i></a>
                            </li>
                        </ul>

                    </div>

                    <div class="box-footer">
                        <a class="btn btn-success btn-sm" @click="savePage()">Хадгалах</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
</template>

<script>

    import PageItemType from './../components/PageItemTypes.vue'
    import Post from './../components/items/Post.vue'
    import ContentBlock from './../components/items/ContentBlock.vue'
    import ImageCollection from './../components/items/ImageCollection.vue'
    import BigSlideShow from './../components/items/BigSlider.vue'
    import CustomText from './../components/items/CustomText.vue'

    export default {

        data() {
            return {
                showType: 'post',
                items: []
            }
        },

        components: {
            'page-item-types': PageItemType,
            'post': Post,
            'c-block': ContentBlock,
            'i-collection': ImageCollection,
            'b-s-show': BigSlideShow,
            'c-text': CustomText
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
                if(this.showType == 'c-block')
                {
                    item.view = this.addPost(data);
                }
                if(this.showType == 'i-collection')
                {
                    item.view = this.addImageCollection(data);
                }
                if(this.showType == 'b-s-show')
                {
                    item.view = this.addBigSlideShow(data);
                }
                if(this.showType == 'c-text')
                {
                    item.view = this.addPost(data);
                }
                this.items.push(item);
            },
            savePage()
            {
                axios.post('/admin/api/page/save', {items : JSON.stringify(this.items)}).then(response => {

                })
            },
            addImageCollection(data)
            {
                return {
                    title: data.name,
                    id: data.id
                }
            },
            addBigSlideShow(data)
            {
                return {
                    title: data.title,
                    id: data.id
                }
            },
            addPost(data)
            {
                return {
                    title: data.title,
                    id: data.id,
                }
            },
            remove(item)
            {
                this.items.splice(this.items.indexOf(item), 1);
            }
        },

        mounted() {

        }
    }
</script>