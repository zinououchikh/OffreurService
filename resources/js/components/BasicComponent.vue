<template>
    <div class="row">
        <h1 class="text-center text-primary mb-3 col-12">A propos de moi</h1>
        <hr>
        <div class="col-12 text-justify lead">
            Ouchikh Zineddine, 25 ans, diplômé en informatique spécialité 
            « Systèmes d’Information Répartis  » au sein de l’université M’hamed Bougera Boumerdes,
            et acctuelement un ingénieur avant-vente dans le domaine informatique. <br>
            La formation que j’ai reçue durant mes années d’études dans cette université m’a permis de concevoir
            et développer des applications informatiques et d'applications web
            et la mise en œuvre des bases de données. <br>
            Mon projet de fin d’études de Master m’a permis de concevoir une solution pour le monitoring
            de l’infrastructure informatique pour l’entreprise GLOBAL AXIS Alger,
            ce dernier m’a permis d’avoir des connaissances les notions des réseaux et la sécurité
            informatique. <br> 
            L’expérience passé a Emploitic SPA et SARL Intérimeo
            m’a permis de vivre de prés le processus de développement 
            software appliqué au sein de l’équipe technique qui est basé
            sur une méthodologie agile « Scrum », et il m’a permis d’acquérir
            divers compétences dans le domaine du développement web. <br>
            L'éxperience actuelle comme un ingénieur avant-vente informatique chez un intégrateur
            de solutions informatique "Media Technology" m'a permis d'aquérir des connaissances
            sur le materiel informatique et la résolution des problémes liées à ce dernier, l'utilisation
            de support, qualification des solutions, et la rédaction des documents techniques. <br> 
            Les ambitions professionnelles que je souhaiterais concrétiser 
            est d’exercer une carrière en tant qu‘un ingénieur en informatique,
            au sein d’une entreprise nationale ou internationale.

        </div>
    </div>
</template>

<script>
export default {
    name: 'basic',
    
    data() {
        return {
            basics: []
        }
    },
    mounted() {
        
            axios.get('http://localhost:8000/api/basics')
            .then((response) => {
                this.basics = response.data.basics
            })
        
    },
    methods: {
        delete(id){

        }
    }
}
</script>