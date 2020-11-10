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
        axios.get('http://job_project.test/api/offser?api_token=fJFmphzE8P67WIOHF1uadySjic8eTgoMTYlxbBqEN5bamKW0ukZsjeSdK2wRGLDivorRQ39KjpyTjxnx1J1sVC97sBMrgvct1xrY')
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