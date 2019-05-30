@if (!Auth::guest())
    {{--Site--}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Site  <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            {{--BANNERS--}}
            @can('view-banners')
                <li>
                    <a href='{{route('banners.index')}}' alt='Banners' title='Banners'>
                        <i class="fa fa-picture-o" aria-hidden="true"></i> Banners
                    </a>
                </li>
            @endcan
            {{--PORTFOLIO--}}
            {{--@can('view-portfolios')
                <li>
                    <a href='{{url('/portfolios')}}' alt='Portifólios' title='Portifólios'>
                        <i class="fa fa-camera" aria-hidden="true"></i> Portifólios
                    </a>
                </li>
            @endcan--}}
            {{--SERVICES--}}
            @can('view-services')
                <li>
                    <a href='{{route('services.index')}}' alt='Serviços' title='Serviços'>
                        <i class="fa fa-wrench" aria-hidden="true"></i> Serviços
                    </a>
                </li>
            @endcan
            @can('view-subservices')
                <li>
                    <a href='{{route('subservices.index')}}' alt='Serviços Específicos' title='Serviços Específicos'>
                        <i class="fa fa-wrench" aria-hidden="true"></i> Serviços Específicos
                    </a>
                </li>
            @endcan
            {{--SOCIAL MEDIA--}}
            @can('view-socialmedias')
                <li>
                    <a href='{{route('socialmedias.index')}}' alt='Mídias Socials' title='Mídias Socials'>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i> Mídias Socials
                    </a>
                </li>
            @endcan
            {{--TELEPHONE--}}
            @can('view-telephones')
                <li>
                    <a href='{{route('telephones.index')}}' alt='Telefones' title='Telefones'>
                        <i class="fa fa-phone" aria-hidden="true"></i> Telefones
                    </a>
                </li>
            @endcan
            {{--CLIENTS--}}
            @can('view-services')
                <li>
                    <a href='{{route('clients.index')}}' alt='Clientes' title='Clientes'>
                        <i class="fa fa-users" aria-hidden="true"></i> Clientes
                    </a>
                </li>
            @endcan
            {{--Users--}}
            @can('view-users')
                <li>
                    <a href='{{route('users.index')}}' alt='Usuários' title='Usuários'>
                        <i class="fa fa-user" aria-hidden="true"></i> Usuários
                    </a>
                </li>
            @endcan
            {{--Users--}}
            <li>
                <a href='{{url('/users/'.Auth::user()->id.'/edit')}}' alt='Meus dados' title='Meus dados'>
                    <i class="fa fa-user" aria-hidden="true"></i> Meus dados
                </a>
            </li>
        </ul>
    </li>

    {{--BLOG--}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Blog  <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            {{--POST_CATEGORIES--}}
            @can('view-post_categories')
                <li>
                    <a href='{{route('post_categories.index')}}' alt='Categorias Post' title='Categorias Post'>
                        <i class="fa fa-list" aria-hidden="true"></i> Categorias Post
                    </a>
                </li>
            @endcan
            {{--POSTS--}}
            @can('view-posts')
                <li>
                    <a href='{{url('/posts')}}' title='Posts' alt='Posts' title='Posts'>
                        <i class="fa fa-file-text"></i> Posts
                    </a>
                </li>
            @endcan
        </ul>
    </li>

    {{--Landing Pages--}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Landing Pages  <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            {{--Landing Pages--}}
            @can('view-landing_pages')
                <li>
                    <a href='{{route('landing_pages.index')}}' alt='Landing Pages' title='Landing Pages'>
                        <i class="fa fa-file-text" aria-hidden="true"></i> Landing Pages
                    </a>
                </li>
            @endcan
        </ul>
    </li>

    {{--E-books--}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            E-books  <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            {{--E-books--}}
            @can('view-ebooks')
                <li>
                    <a href='{{route('ebooks.index')}}' alt='E-books' title='E-books'>
                        <i class="fa fa-file-text" aria-hidden="true"></i> E-books
                    </a>
                </li>
            @endcan
        </ul>
    </li>

    {{--Usuário--}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </li>
@endif