<template>
    <form action="/calculate/car" method="post">

        <div style="float: left; padding: 15px 15px 0px 15px; width: 100%">
            <div class="form-group">
                <label for="car-input-total"></label>
                <input type="text" class="form-control" @change="calculate" v-money="total" v-model="total" style="border-radius: 0px;" id="car-input-total" placeholder="Үнийн дүн (₮)">
            </div>

            <div class="form-group">
                <label style="font-weight: 300; font-size: 12px"><i class="fa fa-warning" style="color: #FF0000"></i> Хугацаа (сараар)</label>
                <br />
                <div style="margin-left: 8px; margin-right: 8px">
                    <b-form-slider v-model="month" :min="1" :max="100" @slideStop="changeMonth"></b-form-slider>
                </div>
            </div>
            <hr />
            <div class="form-group" style="margin-bottom: 20px; float: left">
                <div style="font-weight: 300; font-size: 12px; float: left; padding-top: 10px;">
                    <i class="fa fa-warning" style="color: #FF0000"></i> Зээлийн хүү
                </div>
                <div style="font-size: 26px; float: left; margin-left: 30px">
                    <input type="text" class="form-control" v-model="rate" @change="calculate" placeholder="Max: 9%" style="border-radius: 0px" />
                </div>
            </div>
            <div class="form-group">
                <label for="car-input-mounth"></label>
                <input type="text" class="form-control" readonly="readonly" v-money="total_of_month" v-model="total_of_month" style="border-radius: 0px;" id="car-input-mounth" placeholder="Сард төлөх дүн (₮)">
            </div>
            <div class="form-group">
                Sed semper dolor et vehicula pulvinar quis finibus nuncecenas ac mattis velitras convallis tristique enim et dignissim aecenas
            </div>
        </div>
        <input type="hidden" v-model="month" name="month" />
        <input type="hidden" v-model="total" name="total" />
        <input type="hidden" v-model="rate" name="rate" />
        <input type="hidden" name="_token" v-model="token" />
        <button type="submit" style="width: 100%; background: #F55549; border: none; color: #FFF; font-size: 20px; padding-top: 15px; padding-bottom: 15px">Тооцоолох</button>
    </form>
</template>

<script>

    Vue.directive('money', {
        twoWay: true,
        bind: function(el, binding, vnode) {
            $(el).on('blur', function(e) {
                $(el).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: 2 });
            }).keyup(function(e) {
                var e = window.event || e;
                var keyUnicode = e.charCode || e.keyCode;
                if (e !== undefined) {
                    switch (keyUnicode) {
                        case 16: break; // Shift
                        case 17: break; // Ctrl
                        case 18: break; // Alt
                        case 27: this.value = ''; break; // Esc: clear entry
                        case 35: break; // End
                        case 36: break; // Home
                        case 37: break; // cursor left
                        case 38: break; // cursor up
                        case 39: break; // cursor right
                        case 40: break; // cursor down
                        case 78: break; // N (Opera 9.63+ maps the "." from the number key section to the "N" key too!) (See: http://unixpapa.com/js/key.html search for ". Del")
                        case 110: break; // . number block (Opera 9.63+ maps the "." from the number block to the "N" key (78) !!!)
                        case 190: break; // .
                        default: $(this).formatCurrency({ colorize: true, negativeFormat: '-%s%n', roundToDecimalPlace: -1, eventOnDecimalsEntered: true });
                    }
                }
            });
        }
    })

    import bFormSlider from 'vue-bootstrap-slider';

    Vue.use(bFormSlider);

    export default {

        data()
        {
            return {
                month: 1,
                total_of_month: null,
                rate: null,
                total: null,
                token: null
            }
        },

        created() {
            this.token = $('meta[name="csrf-token"]').attr('content');
        },

        methods: {
            changeMonth()
            {
                this.calculate()
            },
            calculate()
            {

                if(this.rate === null)
                {
                    return;
                }

                if(this.total === null)
                {
                    return;
                }

                var p = ((30 * this.rate)/100) / 30;
                var l = p * Math.pow(1 + p, this.month);
                var regex = new RegExp(',', 'g');
                var t = parseInt(this.total.replace(regex, ''));

                this.total_of_month = parseInt(t / (1/p - 1/l))
            }
        }

    }

</script>