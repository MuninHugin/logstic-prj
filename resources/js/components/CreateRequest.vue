<template>
    <div style="grid-column: 1/15;">
        <header class="header">
            <img v-if="!checkPage" class="header__banner" :src="urldata.bannerSrc.banner_src_request" :srcset="urldata.bannerSrc.banner_src_request">
            <img v-if="checkPage" class="header__banner" :src="urldata.bannerSrc.banner_src_check" :srcset="urldata.bannerSrc.banner_src_check">
            <div class="grid header__topmenu">
                <a
                    class="header__logo"
                    :href="urldata.home"
                    :style="{'backgroundImage': 'url('+ urldata.logo + ')', 'backgroundRepeat': 'no-repeat', 'backgroundSize': 'contain'}"></a>
                <nav class="header__topmenu-list">
                    <ul>
                        <li v-for="menuItem of urldata.menuList.menu"><a class="header__topmenu-list_link" :href="menuItem.link">{{menuItem.title}}</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header__content request-header-content">
                <p class="header__content-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum, de quibus
                    loquor praecepta dantur.
                </p>
                <p class="header__content-title">
                    Reliable Amazon FBA
                </p>
                <p class="header__content-subtitle">
                    Freight Forwarding
                </p>
            </div>

        </header>
        <main class=" grid main request">
            <section v-show="!clicked">
                <section class="main__people-blocks padding-both-vertical" id="section_top">
                    <p class="h2">Create Your Request</p>
                    <ul>
                        <li v-for="item of urldata.menu">{{item.title}}</li>
                    </ul>
                    <div class="grid">

                        <form class="request__blocks" action="#" id="">
                            <div class="request-single-block">
                                <label class="h3" for="name">Let's Get Acquainted?</label>
                                <input
                                    v-model.trim="requestObject.customerName"
                                    @blur="$v.requestObject.customerName.$touch()"
                                    :class="{ 'is-invalid': $v.requestObject.customerName.$error }"
                                    class="request-input-text form-control" type="text" id="name" placeholder="Your name..."
                                >
                                <label class="h3" for="incoterm">Incoterm?</label>
                                <input
                                    v-model.trim="requestObject.incoterm"
                                    @blur="$v.requestObject.incoterm.$touch()"
                                    @input="inputOnlyDatatList($event, requestObject.incotermArr, 'incoterm')"
                                    :class="{ 'is-invalid': $v.requestObject.incoterm.$error || incotermValid == false }"
                                    class="request-input-text form-control" type="text" value="" name="" id="incoterm" placeholder="EXW" list="incoterm_list"
                                >
                                <datalist id="incoterm_list">
                                    <option v-for="item in requestObject.incotermArr" :value="item"></option>
                                </datalist>
                            </div>
                            <div class="request-single-block">
                                <label class="h3" for="transport">Means of Transport?</label>
                                <input
                                    v-model.trim="requestObject.transport"
                                    @blur="$v.requestObject.transport.$touch()"
                                    @input="inputOnlyDatatList($event, requestObject.transportsArr, 'transport')"
                                    :class="{ 'is-invalid': $v.requestObject.transport.$error || transportValid == false }"
                                    id="transport" class="request-input-text form-control" type="text" placeholder="No matter" list="transport_list"
                                >
                                <datalist id="transport_list">
                                    <option v-for="item in requestObject.transportsArr" :value="item"></option>
                                </datalist>
                                <label v-if="requestObject.incoterm.toLowerCase() == 'exw'" class="h3" for="adress">Manufacturer Address?</label>
                                <input
                                    v-if="requestObject.incoterm.toLowerCase() == 'exw'"
                                    v-model.trim="requestObject.address"
                                    class="request-input-text" type="text" id="adress" placeholder="Adress"
                                >
                            </div>
                            <textarea
                                v-model.trim="requestObject.information"
                                @blur="$v.requestObject.information.$touch()"
                                :class="{ 'is-invalid': $v.requestObject.information.$error }"
                                class="request-input-text input-big form-control" id="info" placeholder="Associated location..."
                            ></textarea>
                        </form>

                    </div>
                </section>

                <!--    Product Section        -->
                <section class="main__description-gray-block padding-both-vertical"  >
                    <div class="grid" id="section_center">
                        <div class="request__product-forms" >
                            <p v-if="!this.requestObject.products.length">Add a product!</p>
                            <form
                                v-for="(value,index) in $v.requestObject.products.$each.$iter"
                                :id="'form'+(parseInt(index) + 1)"
                                class="products-form"
                            >
                                <p class="h2 row-between2">Product #{{(parseInt(index) + 1)}} <span @click="change(2, $event, index)" class="del_product" :id="'product' + (parseInt(index) + 1)">x</span></p>
                                <label class="h3" :for="'cartons' + (parseInt(index) + 1)">1) No. OF Cartons</label><br>
                                <input
                                    v-model.trim="value.numCartons.$model"
                                    :id="'cartons' + (parseInt(index) + 1)"
                                    :list="'carton' + (parseInt(index) + 1) + '_list'"
                                    @blur="value.numCartons.$touch()"
                                    :class="{ 'is-invalid': value.numCartons.$error }"
                                    class="request-input-text form-control" type="text" placeholder="01" min="1"
                                >
                                <datalist :id="'carton' + (parseInt(index) + 1) + '_list'">
                                    <option v-for="item of 7" :value="item"></option>
                                </datalist>
                                <p class="h3">2)
                                    <input
                                        v-model.trim="value.volumeCheck.$model"
                                        :id="'size' + (parseInt(index) + 1) + '_1'"
                                        @change="changeVolumeFlag(value.$model, 'volume')"
                                        class="radio" type="radio" value="singleVolume"
                                    >
                                    <label :for="'size' + (parseInt(index) + 1) + '_1'">Single Carton Dimensions</label>
                                    <input
                                        v-model.trim="value.volumeCheck.$model"
                                        :id="'size' + (parseInt(index) + 1) + '_2'"
                                        @change="changeVolumeFlag(value.$model, 'volume')"
                                        class="radio" type="radio" value="totalVolume"
                                    >
                                    <label :for="'size' + (parseInt(index) + 1) + '_2'">Total Volume</label>
                                    <span v-if="value.volumeCheck.$model == 'totalVolume'">
                                    <input
                                        v-model.trim="value.totalVolume.$model"
                                        @blur="value.totalVolume.$touch()"
                                        :class="{ 'is-invalid': value.totalVolume.$error }"
                                        :id="'s' + (parseInt(index) + 1) + '_3'"
                                        class="request-little-input-text form-control" type="number" min="1"
                                    >
                                    <label :for="'s' + (parseInt(index) + 1) + '_3'"> M<sup>3</sup></label>
                                </span>
                                    <span v-if="value.volumeCheck.$model == 'singleVolume'">
                                    <input
                                        v-model.trim="value.singleCartonDimensions.size1.$model"
                                        @blur="value.singleCartonDimensions.size1.$touch()"
                                        :id="'s' + (parseInt(index) + 1) + '_1'"
                                        :class="{ 'is-invalid': value.singleCartonDimensions.size1.$error }"
                                        class="request-little-input-text form-control" type="number" min="1"
                                    >
                                    <label :for="'s' + (parseInt(index) + 1) + '_1'"> CM</label>
                                    <input
                                        v-model.trim="value.singleCartonDimensions.size2.$model"
                                        @blur="value.singleCartonDimensions.size2.$touch()"
                                        :id="'s' + (parseInt(index) + 1) + '_2'"
                                        :class="{ 'is-invalid': value.singleCartonDimensions.size2.$error }"
                                        class="request-little-input-text form-control" type="number" min="1"
                                    >
                                    <label :for="'s' + (parseInt(index) + 1) + '_2'"> CM</label>
                                    <input
                                        v-model.trim="value.singleCartonDimensions.size3.$model"
                                        @blur="value.singleCartonDimensions.size3.$touch()"
                                        :id="'s' + (parseInt(index) + 1) + '_3'"
                                        :class="{ 'is-invalid': value.singleCartonDimensions.size3.$error }"
                                        class="request-little-input-text form-control" type="number" min="1"
                                    >
                                    <label :for="'s' + (parseInt(index) + 1) + '_3'"> CM</label>
                                </span>
                                </p>
                                <p class="h3">3)
                                    <input
                                        v-model.trim="value.weightCheck.$model"
                                        :id="'carton_weight' + (parseInt(index) + 1)"
                                        @change="changeVolumeFlag(value.$model, 'weight')"
                                        class="radio" type="radio" value="cartonWeight"
                                    >
                                    <label :for="'carton_weight' + (parseInt(index) + 1)">Carton weight</label>
                                    <input
                                        v-model.trim="value.weightCheck.$model"
                                        :id="'total_weight' + (parseInt(index) + 1)"
                                        @change="changeVolumeFlag(value.$model, 'weight')"
                                        class="radio" type="radio" value="totalWeight"
                                    >
                                    <label :for="'total_weight' + (parseInt(index) + 1)">Total weight</label>
                                    <span v-if="value.weightCheck.$model == 'cartonWeight'">
                                    <input
                                        v-model.trim="value.cartonWeight.$model"
                                        :id="'tw' + (parseInt(index) + 1)"
                                        :class="{ 'is-invalid': value.cartonWeight.$error }"
                                        class="request-little-input-text weightInput form-control" type="number" min="1"
                                    >
                                    <label :for="'tw' + (parseInt(index) + 1)"> KG</label>
                                    </span>
                                    <span v-if="value.weightCheck.$model == 'totalWeight'">
                                        <input
                                            v-model.trim="value.totalWeight.$model"
                                            :id="'tw' + (parseInt(index) + 1)"
                                            :class="{ 'is-invalid': value.totalWeight.$error }"
                                            class="request-little-input-text weightInput form-control" type="number" min="1"
                                        >
                                        <label :for="'tw' + (parseInt(index) + 1)"> T</label>
                                    </span>
                                </p>
                            </form>
                            <p class="h2 blue" id="add_product" @click="change(1,$event)">+ Add another product</p>
                        </div>
                    </div>
                </section>

                <!-- Destination Section -->
                <section class="main__description-white-block padding-both-vertical" >
                    <div class="grid"  id="section_bottom">
                        <form class="request__destination">
                            <div class="destination-form">
                                <label class="h3" for="destination">Destination</label>
                                <input
                                    v-model.trim="requestObject.destination"
                                    @blur="$v.requestObject.destination.$touch()"
                                    @input="inputOnlyDatatList($event, requestObject.destinationArr, 'destination')"
                                    :class="{ 'is-invalid': $v.requestObject.destination.$error || destinationValid == false }"
                                    class="request-input-text form-control" type="text" id="destination" placeholder="on DHL or UPS Immediately to Amazon" list="destination_list"
                                >
                                <datalist id="destination_list">
                                    <option v-for="item in requestObject.destinationArr" :value="item"></option>
                                </datalist>
                            </div>
                            <div class="destination-form">
                                <label class="h3" for="value">Value of Goods</label>
                                <input
                                    v-model.trim="requestObject.valueOfGoods"
                                    @blur="$v.requestObject.valueOfGoods.$touch()"
                                    :class="{ 'is-invalid': $v.requestObject.valueOfGoods.$error }"
                                    class="request-input-text form-control" type="text" id="value"
                                >
                            </div>
                            <div class="destination-form">
                                <label class="h3" for="value">Your email</label>
                                <input
                                    v-model.trim="requestObject.customerEmail"
                                    @blur="$v.requestObject.customerEmail.$touch()"
                                    :class="{ 'is-invalid': $v.requestObject.customerEmail.$error }"
                                    class="request-input-text form-control" type="email" id="email"
                                >
                            </div>
                        </form>
                    </div>
                </section>
            </section>

            <check-component
                :requestObject="requestObject"
            ></check-component>
            <!--        <check-component-two></check-component-two>-->
            <accept-component
                :reqNumber="reqNumber"
            ></accept-component>

            <section class="main main__care" style="margin-top:0;">
                <div class="grid">
                    <div class="main__care-area">
                        <p class="h2" style="z-index: 1;">Let us take care about your goods shipments!</p>
                        <a
                            v-if="!clicked"
                            @click="check($event)"
                            class="button-link margin-top" href="#"
                        >Calculate costs</a>
                        <img class="big-logo" src="/img/header/LogoE3PL.png" srcset="/img/header/LogoE3PL@2x.png">
                    </div>
                </div>
            </section>
        </main>
    </div>
</template>

<script>
    import CheckComponent from "./CheckComponent";
    import AcceptComponent from "./AcceptComponent";
    import Vuelidate from 'vuelidate'
    import { required,requiredIf,email, numeric } from 'vuelidate/lib/validators'
    import  axios from 'axios'

    Vue.use(Vuelidate)

    export default {
        props: [
            'urldata'
        ],
        data() {
            return {
                transportValid: true,
                incotermValid: true,
                destinationValid: true,
                requestObject: {
                    transportsArr: ['Ship','Train','Plane','Truck','Any'],
                    incotermArr: ['EXW','FOB','FCA','CIF','CFR'],
                    destinationArr: [
                        "by DHL or UPS immediately to Amazon",
                        "on pallet immediately to Amazon",
                        "to our warehouse for temporary storage",
                        "immediately to an individual address",
                        "Split"
                    ],
                    customerName: '',
                    incoterm: '',
                    transport: '',
                    address: '',
                    information: '',
                    products: [
                        {
                            numCartons: null,
                            volumeCheck: 'singleVolume',
                            weightCheck: 'cartonWeight',
                            totalVolume: null,
                            singleCartonDimensions: {
                                singleDimension: true,
                                size1: null,
                                size2: null,
                                size3: null
                            },
                            cartonWeight: null,
                            totalWeight: null
                        }
                    ],
                    destination: '',
                    valueOfGoods: null,
                    customerEmail: ''
                },
                reqNumber: 12758927
            }
        },
        methods: {
            change(s1, event, pos=0){
                if(s1 == 1) {
                    let productsItem = {
                        numCartons: null,
                            volumeCheck: 'singleVolume',
                            weightCheck: 'cartonWeight',
                            totalVolume: null,
                            singleCartonDimensions: {
                            singleDimension: true,
                                size1: null,
                                size2: null,
                                size3: null
                        },
                        cartonWeight: null,
                            totalWeight: null
                    }
                    this.requestObject.products.push(productsItem);
                }
                else {
                    this.requestObject.products.splice(pos,1);
                }
            },
            check(event){
                // to Accept action later
                const str = this.requestObject;
                axios.post('/request', str)
                    .then((response) => {
                        console.log(response)
                    })
                    .catch((error) => {
                        console.log('In check function: ',error);
                    });
                // ----to Accept action later

                event.preventDefault()
                this.$v.$touch()
                if (this.$v.$error
                    || !this.requestObject.products.length
                    || this.transportValid == false
                    || this.incotermValid == false
                    || this.destinationValid == false
                ) {
                    return
                } else {
                    this.$store.state.clicked = true
                    this.$store.state.checkPage = !this.$store.state.checkPage
                }
            },
            changeVolumeFlag(val, flag) {
                val.singleCartonDimensions.singleDimension = !val.singleCartonDimensions.singleDimension
                if(flag === 'volume') {
                    val.volumeCheck === 'totalVolume' ? val.weightCheck = 'totalWeight' : val.weightCheck = 'cartonWeight'
                } else {
                    val.weightCheck === 'totalWeight' ? val.volumeCheck = 'totalVolume' : val.volumeCheck = 'singleVolume'
                }
            },
            inputOnlyDatatList(event, listVals, param){
                let res = listVals.find(item => item.toLowerCase() == event.target.value.toLowerCase())
                if(param == 'transport') {
                    res != undefined ? this.transportValid = true : this.transportValid = false
                }
                if(param == 'incoterm') {
                    res != undefined ? this.incotermValid = true : this.incotermValid = false
                }
                if(param == 'destination') {
                    res != undefined ? this.destinationValid = true : this.destinationValid = false
                }
                return res
            }
        },
        validations () {
            return {
                requestObject: {
                    customerName: { required },
                    incoterm: { required },
                    information: { required },
                    transport: { required },
                    destination: { required },
                    valueOfGoods: { required, numeric },
                    products: {
                        $each: {
                            numCartons: { required, numeric },
                            volumeCheck: {},
                            totalVolume: {
                                required: requiredIf(function totalVolumeRequired(nestedModel){
                                    return nestedModel.volumeCheck === 'totalVolume'
                                }) },
                            singleCartonDimensions: {
                                singleDimension: {},
                                size1: {
                                    required: requiredIf(function(nestedModel){
                                        return nestedModel.singleDimension
                                    })
                                },
                                size2: {
                                    required: requiredIf(function(nestedModel){
                                        return nestedModel.singleDimension
                                    })
                                },
                                size3: {
                                    required: requiredIf(function(nestedModel){
                                        return nestedModel.singleDimension
                                    })
                                }
                            },
                            weightCheck: {},
                            cartonWeight: {
                                required: requiredIf(function(nestedModel){
                                    return nestedModel.weightCheck === 'cartonWeight'
                                })
                            },
                            totalWeight: {
                                required: requiredIf(function(nestedModel){
                                    return nestedModel.weightCheck === 'totalWeight'
                                })
                            }
                        }
                    },
                    customerEmail: { required, email }
                }
            }
        },
        computed: {
            clicked(){
                return this.$store.state.clicked
            },
            checkPage(){
                return this.$store.state.checkPage
            }
        },
        components: {
            checkComponent: CheckComponent,
            AcceptComponent: AcceptComponent,
        }
    }
</script>
