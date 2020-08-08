<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="my-2 col-12 col-sm-12 col-md-4 btn btn-outline-success mx-2" data-toggle="modal" :data-target="'#id'+this.$props.offreur.id">
            Contacter
        </button>

        <!-- Button2 trigger modal -->
        <button type="button" class="my-2 col-12 col-sm-12 col-md-4 btn btn-outline-primary mx-2" data-toggle="modal" :data-target="'#id2'+this.$props.offreur.id">
            Détails
        </button>

        <!-- Modal -->
        <div  class="modal fade" :id="'id'+this.$props.offreur.id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div  class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">{{this.$props.offreur.name}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Email : {{this.$props.offreur.email}}</h4>
                <h4>Téléphone : {{this.$props.offreur.tel}}</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- Modal2 -->
        <div class="modal fade" :id="'id2'+this.$props.offreur.id" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel2">{{this.$props.offreur.name}}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Biography :</h5>
                <p>
                     {{this.$props.offreur.biographgy}}
                </p>
                <h4>Email : {{this.$props.offreur.email}}</h4>
                <h4>Téléphone : {{this.$props.offreur.tel}}</h4>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>
<style lang="css">
    .modal-content{
        border-radius: 25px;
    }
</style>

<script>
export default {
    props: ['offreur'],
}
</script>