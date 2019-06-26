<div class='row'>
    <div class='col m6 s12 modalImage'>
        <img src='/img/banner-1.jpg' class='responsive-img'>
    </div>
    <div class='col m6 s12 center'>
        <h1>Lorem ipsum dolor</h1>
    </div>
    <div class='col s12'>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nam quos reprehenderit corrupti voluptatibus in optio tempora, dolore, ipsam, delectus deserunt aspernatur! Magnam aperiam, beatae ducimus culpa nemo rem temporibus?
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut nam quos reprehenderit corrupti voluptatibus in optio tempora, dolore, ipsam, delectus deserunt aspernatur! Magnam aperiam, beatae ducimus culpa nemo rem temporibus?
        </p>

        <div class="video-container margin-top-g">
            <iframe width="853" height="480" src="https://www.youtube.com/embed/i9-XM4PiMb4" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="carousel" id='carouselModal'>
                <a class="carousel-item">
                    <img src="https://cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-grapefruit.jpg?0" class='responsive-img'>
                </a>
                <a class="carousel-item">
                    <img src="https://cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-sun.jpg?0" class='responsive-img'>
                </a>
                <a class="carousel-item">
                    <img src="https://cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-maze.jpg?0" class='responsive-img'>
                </a>
                <a class="carousel-item">
                    <img src="https://cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-ice.jpg?0" class='responsive-img'>
                </a>
                <a class="carousel-item">
                    <img src="https://cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?0" class='responsive-img'>
                </a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#carouselModal').carousel({
            numVisible: 3
        });
    });
</script>