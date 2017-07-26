<template>
    <div class="calculator">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="#home" aria-controls="home" role="tab" data-toggle="tab" style="text-align: center">
                    <div class="icon-tab icon-tab-car"></div>
                    <label style="font-weight: 300; text-transform: uppercase; font-size: 12px">Авто машин</label>
                </a>
            </li>
            <li role="presentation">
                <a href="#profile" aria-controls="home" role="tab" data-toggle="tab" style="text-align: center">
                    <div class="icon-tab icon-tab-home"></div>
                    <label style="font-weight: 300; text-transform: uppercase; font-size: 12px">Үл хөдлөх</label>
                </a>
            </li>
            <li role="presentation">
                <a href="#messages" aria-controls="home" role="tab" data-toggle="tab" style="text-align: center">
                    <div class="icon-tab icon-tab-building"></div>
                    <label style="font-weight: 300; text-transform: uppercase; font-size: 12px">Мөнхада</label>
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <car></car>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                <building></building>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
                <munkhada></munkhada>
            </div>
        </div>
    </div>
</template>

<script>

    import Car from './../../components/calculate/Car.vue'
    import Building from './../../components/calculate/Building.vue'
    import Munkhada from './../../components/calculate/Munkhada.vue'

    export default {

        components: {
            'car': Car,
            'building': Building,
            'munkhada': Munkhada
        },

        mounted() {
            console.log('Component mounted.')
        }
    }

</script>