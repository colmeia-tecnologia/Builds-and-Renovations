<div class='busca'>
    <div class='row margin-top-g'>
        <form class='form' method='POST' action='{{route('blog.search')}}'>
            <input type='hidden' name='_token' value='{{csrf_token()}}'>
            <div class="input-field col s12">
                <input placeholder="Search" id="search" type="text" name='search' class="validate">
                <label for="Search">Search</label>
            </div>
            <div class="input-field col s12 center-align">
                <button type='submit' class='btn waves-effect waves-light primary white-color'>
                    <i class="fa fa-search" aria-hidden="true"></i> &nbsp;Search
                </button>
            </div>
        </form>
    </div>
</div>

<div class='arquivo'>
    <div>
       <h1>Categorias</h1>
    </div>

    <ul class='sidebarList'>
        @foreach ($blogCategories as $category)
            @php
                $categoryLink = App\Http\Controllers\Util\UrlController::friendlyUrl($category->title);
            @endphp
            <li>
                <a href='{{route('blog.category', ['category' => $categoryLink, 'id' => $category->id])}}'>
                    {{$category->title}}
                </a>
            </li>
        @endforeach
    </ul>
</div>

<div class='arquivo'>
    <div>
       <h1>Arquivo</h1>
    </div>

    <ul class='sidebarList'>
        @foreach ($blogArchives as $blogArchive) 
            @php
                $mes = App\Http\Controllers\Util\DateController::mesPorExtenso($blogArchive->month);
            @endphp

            <li>
                <a href='{{route('blog.archive', ['year' => $blogArchive->year, 'month' => $blogArchive->month])}}'>
                    {{$mes}} de {{$blogArchive->year}}
                </a>
            </li>
        @endforeach
    </ul>
</div>