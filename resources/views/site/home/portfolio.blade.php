<section id="portfolio" class="section scrollspy primary">
    <div class='container'>
        <h1 class='center border-secondary white-text'>Portfolio</h1>

        <div class='row'>
            @foreach ($portfolios as $portfolio)
                <div class='col m4 s12 animated portfolioContainer'>
                    <a class='modal-trigger loadModal' href="#modal" data-url='/portfolio/{{$portfolio->id}}'>
                        <img src='{{$portfolio->firstImage()}}' class='responsive-img portfolioImage'>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>