@extends('plantilla')

@section('seccion')

<br>

<!-- slides here -->
<div id="carouselMagos" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselMagos" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselMagos" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselMagos" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://i0.wp.com/wipy.tv/wp-content/uploads/2019/01/magos-de-Hogwarts.jpg?fit=1000%2C600&ssl=1"
                class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://cdn.noticiasenlamira.com/2021/04/Helen-McCrory-1000x600.jpg" class="d-block w-100"
                alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://droidjournal.com/wp-content/uploads/2020/04/Voldemort-Harry-Potter-and-the-Deathly-Hallows-Wallpaper-1-1000x600.jpg"
                class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMagos"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselMagos"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<br>
<!-- end slides -->


<!-- quote here -->
<figure class="text-end">
    <blockquote class="blockquote text-white">
        <p>«Los magos representan todo lo que más temen los verdaderos 'muggles': son claramente marginados y se sienten
            cómodos al serlo. ¡No hay nada más desconcertante para los verdaderamente convencional que el inadaptado sin
            vergüenza!».</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        Harry Potter <cite title="Source Title">J.K. Rowling</cite>
    </figcaption>
</figure>
<!-- end quote -->


<section class="columns">
    <div class="container">
        <div class="row align-items-center">
            <div class=" col-sm-6 col-md-6 text-white">
                <h4 class="fw-bold">Magos y Brujas</h4>
                <h5 class="fw-light">
                    Los magos y brujas son seres humanos que nacen con la habilidad de hacer magia. La habilidad de usar
                    magia es un rasgo hereditario en una familia. Los magos y brujas nacidos muggles desarrollan poderes
                    mágicos debido a que son descendientes de un/una squib casado con un muggle, y el gen se pone en
                    manifiesto generaciones mas tarde.
                    <br>
                    En su infancia, magos y brujas pueden exhibir "destellos de magia", llamada magia accidental, los
                    cuales se controlan al paso de los años y al ir a la escuela. Para ejecutar magia, casi todos los
                    magos o brujas necesitan usar una varita, aunque la habilidad de magia no verbal puede ser manaejada
                    por ancianos o con habilidades desarrolladas.
                    <br>
                    En su infancia, magos y brujas pueden exhibir "destellos de magia", llamada magia accidental, los
                    cuales se controlan al paso de los años y al ir a la escuela. Para ejecutar magia, casi todos los
                    magos o brujas necesitan usar una varita, aunque la habilidad de magia no verbal puede ser manaejada
                    por ancianos o con habilidades desarrolladas.
                </h5>
                <br>
            </div>
            <div class=" col-sm-6 col-md-6 ">
                th
                <img src="https://depor.com/resizer/dE41vAAzVXul85qURF_1sPeyxMU=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/G4MURTIT7ZDD5CQJYDHXBU5KLA.jpg"
                    alt="" class=" img-fluid ">
            </div>
        </div>
</section>
<br>
<div class="container">
<h3 class="fw-bold text-white ">SubEspecies</h3>
</div>

<br>

<div class="container text-white">
    <h4 class="fw-bold">Videntes</h4>
    <h5 class="fw-light"> Muchos magos nacen con habilidades no propias de su edad. Los videntes por ejemplo, tienen la habilidad de ver sucesos del futuro. Ellos pueden interpretar sueños, visiones o leer objetos físicos como tazas de té, cartas de Tarot o la bola de cristal.Un vidente es un mago o bruja dotado/a con la capacidad de ver hacia el futuro con su ojo interior. Los videntes dictan las profecías, que luego son grabadas y almacenadas en el Salón de las Profecías en el Departamento de Misterios. </h5>
    <br>
    <img src="https://s-media-cache-ak0.pinimg.com/originals/78/a0/b4/78a0b4edf2d999b3b201920b648030d3.jpg"
                    alt="" class=" img-fluid ">

</div>

</div>

@endsection