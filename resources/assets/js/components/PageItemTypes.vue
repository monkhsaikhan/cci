<template>
    <ul class="list-group">
        <li class="list-group-item" v-for="item in items">
            {{item.title}} <a class="btn btn-success btn-xs pull-right" @click="add(item.key)"><i class="fa fa-plus-circle"></i></a>
        </li>
    </ul>
</template>

<script>
    export default {

        data()
        {
            return {
                items: [
                    {title: 'Post', key: 'post'},
                    {title: 'Content block', key: 'c-block'},
                    {title: 'Big slide show', key: 'b-s-show'},
                    {title: 'Custom text', key: 'c-text'},
                    {title: 'Image collection', key: 'i-collection'},
                    {title: 'Team members', key: 't-member'},
                    {title: 'Photo background', key: 'background'},
                    {title: 'Contact Form', key: 'c-form'},
                    {title: 'Car offer', key: 'c-offer'},
                    {title: 'Status', key: 'status'},
                    {title: 'Service', key: 'service'}
                ]
            }
        },

        methods: {
            add(key) {
                this.$emit('added', key);
            }
        }

    }
</script>