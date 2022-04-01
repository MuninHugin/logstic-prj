<template>
    <section v-if="clicked && !accept">
    <section class="main__people-blocks padding-both-vertical">
        <p class="h2">Ensure That Everything's Correct</p>
        <div class="grid margin-top">

            <div class="check__block_2_column">
                <div>
                    <div class="check_block ">
                        <div class="row-between2">
                            <p class="text">Your Name</p>
                            <p class="text">:</p>
                        </div>
                        <p class="h3">{{requestObject.customerName}}</p>
                    </div>
                    <div class="check_block ">
                        <div class="row-between2">
                            <p class="text">Means of Transport</p>
                            <p class="text">:</p>
                        </div>
                        <p class="h3">{{requestObject.transport}}</p>
                    </div>
                    <div class="check_block ">
                        <div class="row-between2">
                            <p class="text">Incoterm</p>
                            <p class="text">:</p>
                        </div>
                        <p class="h3">{{requestObject.incoterm}}</p>
                    </div>
                    <div class="check_block ">
                        <div class="row-between2">
                            <p class="text">Manufacturer Location</p>
                            <p class="text">:</p>
                        </div>
                        <p class="h3">{{requestObject.address}}</p>
                    </div>
                    <div class="check_block ">
                        <div class="row-between2">
                            <p class="text">Associated Location</p>
                            <p class="text">:</p>
                        </div>
                        <p class="h3">{{requestObject.information}}</p>
                    </div>
                </div>
                <div>
                    <div class="check_block ">
                        <div class="row-between2">
                            <p class="text">Destination</p>
                            <p class="text">:</p>
                        </div>
                        <p class="h3">{{requestObject.destination}}</p>
                    </div>
                    <div class="check_block ">
                        <div class="row-between2">
                            <p class="text">Goods Value</p>
                            <p class="text">:</p>
                        </div>
                        <p class="h3">&#8364;{{Number(requestObject.valueOfGoods).toLocaleString('en-EN')}} EUR</p>
                    </div>
                    <div class="check_block ">
                        <div class="row-between2">
                            <p class="text">Your Email</p>
                            <p class="text">:</p>
                        </div>
                        <p class="h3">{{requestObject.customerEmail}}</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="main__description-gray-block padding-both-vertical">
        <div class="grid">
            <div class="check__cards">
                <div v-for="(value, index) of requestObject.products" class="check-product-card">
                    <p class="h2-smaller">Product #{{(index + 1)}}</p>
                    <p class="text">1) No. of Cartons </p>
                    <p class="h3">{{value.numCartons}}</p>

                    <div v-if="value.singleCartonDimensions.singleDimension">
                        <p class="text">2) Single Carton Dimension </p>
                        <p class="h3"> <span>{{value.singleCartonDimensions.size1}}cm</span>  <span>{{value.singleCartonDimensions.size2}}cm</span> <span>{{value.singleCartonDimensions.size3}}cm</span></p>
                    </div>
                    <div v-else>
                        <p class="text">2) Total volume </p>
                        <p class="h3"> <span>{{value.totalVolume}}m<sup>3</sup></span></p>
                    </div>

                    <div v-if="value.weightCheck == 'cartonWeight'">
                        <p class="text">3) Carton Weight</p>
                        <p class="h3">{{value.cartonWeight}}kg</p>
                    </div>
                    <div v-else>
                        <p class="text">3) Total Weight</p>
                        <p class="h3">{{value.totalWeight}}t</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <section class="main__description-white-block padding-both-vertical">
            <div class="grid">
                <div class="price-block-check2">
                    <div class="price-inner-block-check2 border-red">
                        <p class="h2">Price for your delivery</p>
                        <p v-if="requestObject.transport.toLowerCase() != 'any'" class="h3-dark">{{requestObject.transport}}: &#8364;{{Number(5000).toLocaleString('en-EN')}} EUR, 10D - </p>
                    </div>
                    <div class="price-inner-block-check2 border-gray">
                        <p class="strong-text">Price Component</p>
                        <p class="strong-text">&#8364; EUR</p>
                    </div>
                    <div class="price-inner-block-check2 border-gray">
                        <p class="text">EXW Charges</p>
                        <p class="text">200</p>
                    </div>
                    <div class="price-inner-block-check2 border-gray">
                        <p class="text">AirFreight</p>
                        <p class="text">100</p>
                    </div>
                    <div class="price-inner-block-check2 border-gray">
                        <p class="text">Local Chargers GE</p>
                        <p class="text">50</p>
                    </div>
                    <div class="price-inner-block-check2 border-gray">
                        <p class="text">Custom Clearance Including HS-Code</p>
                        <p class="text">200</p>
                    </div>
                    <div class="price-inner-block-check2 border-red">
                        <p class="text">Total</p>
                        <p class="text">5000</p>
                    </div>
                </div>
                <div v-if="requestObject.transport.toLowerCase() == 'any' && requestObject.incoterm.toLowerCase() != 'exw'" class="price-block-check2-2column">
                    <div v-for="item in requestObject.transportsArr.slice(0, -1)">
                    <div></div>
                    <div class="price-inner-block-check2-column border-gray">
                        <p class="h3-dark">{{item}}</p>
                        <p class="h3-dark">&#8364;{{Number(5000).toLocaleString('en-EN')}} EUR</p>
                        <p class="h3-dark">10 D</p>
                    </div>
                    </div>
                </div>
            <div class="left-right margin-top">
                <span class="arrow-left" @click="backToStart">Make another Request</span>
                <span class="arrow-right" @click="acceptOffer">Accept Offer</span>
            </div>
        </div>
    </section>
    </section>
</template>

<script>
    export default {
        props: ['requestObject'],
        computed: {
            clicked(){
                return this.$store.state.clicked
            },
            accept() {
                return this.$store.state.accept
            }
        },
        methods: {
            backToStart(){
                this.$store.state.clicked = false
                this.$store.state.checkPage = !this.$store.state.checkPage
            },
            acceptOffer(){
                this.$store.state.accept = true
            }
        }
    }
</script>
