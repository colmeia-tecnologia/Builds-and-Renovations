@if (!Auth::guest())
    {{--Site--}}
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Website  <span class="caret"></span>
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
            @can('view-portfolios')
                <li>
                    <a href='{{url('/portfolios')}}' alt='Portfolio' title='Portfolio'>
                        <i class="fa fa-camera" aria-hidden="true"></i> Portfolio
                    </a>
                </li>
            @endcan
            {{--SERVICES--}}
            @can('view-services')
                <li>
                    <a href='{{route('services.index')}}' alt='Services' title='Services'>
                        <i class="fa fa-wrench" aria-hidden="true"></i> Services
                    </a>
                </li>
            @endcan
            @can('view-subservices')
                <li>
                    <a href='{{route('subservices.index')}}' alt='Serviços Específicos' title='Serviços Específicos'>
                        <i class="fa fa-wrench" aria-hidden="true"></i> Specific Services
                    </a>
                </li>
            @endcan
            {{--SOCIAL MEDIA--}}
            @can('view-socialmedias')
                <li>
                    <a href='{{route('socialmedias.index')}}' alt='Social Medias' title='Social Medias'>
                        <i class="fa fa-facebook-square" aria-hidden="true"></i> Social Medias
                    </a>
                </li>
            @endcan
            {{--TELEPHONE--}}
            @can('view-telephones')
                <li>
                    <a href='{{route('telephones.index')}}' alt='Telephones' title='Telephones'>
                        <i class="fa fa-phone" aria-hidden="true"></i> Telephones
                    </a>
                </li>
            @endcan
            {{--EMAIL--}}
            @can('view-emails')
                <li>
                    <a href='{{route('emails.index')}}' alt='Emails' title='Emails'>
                        <i class="fa fa-at" aria-hidden="true"></i> Emails
                    </a>
                </li>
            @endcan
            {{--CLIENTS--}}
            @can('view-services')
                <li>
                    <a href='{{route('clients.index')}}' alt='Clients' title='Clients'>
                        <i class="fa fa-users" aria-hidden="true"></i> Clients
                    </a>
                </li>
            @endcan
            {{--VIDEOS--}}
                @can('view-videos')
                <li>
                    <a href='{{route('videos.index')}}' alt='Videos' title='Videos'>
                        <i class="fa fa-video-camera" aria-hidden="true"></i> Videos
                    </a>
                </li>
            @endcan
            {{--Users--}}
            @can('view-users')
                <li>
                    <a href='{{route('users.index')}}' alt='Users' title='Users'>
                        <i class="fa fa-user" aria-hidden="true"></i> Users
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
    {{--<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Blog  <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">--}}
            {{--POST_CATEGORIES--}}
            {{--@can('view-post_categories')
                <li>
                    <a href='{{route('post_categories.index')}}' alt='Post Categories' title='Post Categories'>
                        <i class="fa fa-list" aria-hidden="true"></i> Post Categories
                    </a>
                </li>
            @endcan--}}
            {{--POSTS--}}
            {{--@can('view-posts')
                <li>
                    <a href='{{url('/posts')}}' title='Posts' alt='Posts' title='Posts'>
                        <i class="fa fa-file-text"></i> Posts
                    </a>
                </li>
            @endcan
        </ul>
    </li>--}}

    {{--Landing Pages--}}
    {{--<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            Landing Pages  <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">--}}
            {{--Landing Pages--}}
            {{--@can('view-landing_pages')
                <li>
                    <a href='{{route('landing_pages.index')}}' alt='Landing Pages' title='Landing Pages'>
                        <i class="fa fa-file-text" aria-hidden="true"></i> Landing Pages
                    </a>
                </li>
            @endcan
        </ul>
    </li>--}}

    {{--E-books--}}
    {{--<li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            E-books  <span class="caret"></span>
        </a>

        <ul class="dropdown-menu" role="menu">--}}
            {{--E-books--}}
            {{--@can('view-ebooks')
                <li>
                    <a href='{{route('ebooks.index')}}' alt='E-books' title='E-books'>
                        <i class="fa fa-file-text" aria-hidden="true"></i> E-books
                    </a>
                </li>
            @endcan
        </ul>
    </li>--}}

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