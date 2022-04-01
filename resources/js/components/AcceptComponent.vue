<template>
    <section v-if="accept" class="main__people-blocks padding-both-vertical">
        <div class="grid">
            <div class="accept__block_2_column">
                <div class="accept-block">
                    <img class="accept-img" src="/img/main/accept.png" srcset="/img/main/accept@2x.png" >
                </div>
                <div>
                    <p class="h2">Your Requested <span class="red">#{{reqNumber}}</span></p>
                    <p class="h2">Was Successfully Accepted</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scio enim esse quosdam,
                        qui quavis lingua philosophari possint; Duo Reges: constructio interrete. Quos quidem tibi
                        studiose et diligenter tractandos magnopere censeo. At, si voluptas esset bonum,
                        desideraret.
                    </p><p class="text">
                    Iam id ipsum absurdum, maximum malum neglegi. Quae cum dixisset paulumque institisset, Quid
                    est? An hoc usque quaque, aliter in vita?</p>
                </div>

            </div>

        </div>
    </section>
</template>

<script>
    export default {
        props: ['reqNumber'],
        computed: {
            accept(){
                return this.$store.state.accept
            }
        }
    }
</script>
