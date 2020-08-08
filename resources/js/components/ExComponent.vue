<template>
    <div class="row w-100">
        <div v-for="offreur in offreurs" :key ="offreur.id" class="col-12 col-sm-6 col-md-4">
            <div class="card border-primary mb-3 mx-3" style="max-width: 20rem; border-radius: 50px 0px;">
                <div class="card-header text-center" style="border-radius: 50PX 0px 0px 0px;">{{offreur.name}}</div>
                <div class="card-body">
                    <p class="card-text">{{ offreur.biographgy.substr(0,40) }}...</p>
                    <div class="text-center"> 
                        <Contact :offreur = "offreur" :key='offreur.id'></Contact>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Contact from './ContactComponent.vue';
export default {
    components: {Contact},
    created(){
        axios.get('http://localhost:8000/api/offser?api_token=XrL9hHGNqP81og8mtixLQNX91WyVESEHXu138djEPxYUnhLLMnhfaMvtBhquMAUnEcNYKo4k1bJ1DKcTQBZ1puBWd1NrOVvNLbmG')
        .then((res)=>this.offreurs = res.data)
        
    },
    mounted(){
       
    },
    data(){
        return{
            offreurs : [],
        }
    },
    methods: {

    }
}
</script>