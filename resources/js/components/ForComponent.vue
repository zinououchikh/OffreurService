<template>
    <div class="row">
        <h1 class="text-center mb-2 col-12 text-primary">Formations</h1>
        <div id="accordion" style="width: 100%">
        <div class="card">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0 row">
                <button class="btn btn-link text-left col" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                2016 - 2018 
                </button>
                <div class="col text-right">
                    Université M'hamed Bougeura Boumerdes
                </div>
            </h5>
            </div>

            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body lead">
                Master en informatique spécialité Systèmes d’Informations Répartis
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
            <h5 class="mb-0 row">
                <button class="btn btn-link text-left col-6 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                2013 - 2016
                </button>
                <div class="col text-right">
                    Université M'hamed Bougeura Boumerdes
                </div>
            </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body lead">
                Licence en Informatique Spécialité technologies des applications web
            </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
            <h5 class="mb-0 row">
                <button class="btn btn-link text-left col-6 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                2013
                </button>
                <div class="col text-right">
                    Lycée Zaoual Amar Birkhadem
                </div>
            </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body lead">
                Baccalauréat Sciences Expérimentales
            </div>
            </div>
        </div>
        </div>
    </div>
</template>