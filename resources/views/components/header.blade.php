<header class="header">
    <nav class="header-nav">
        <a href="{{ route('home') }}" class="logo">
            <x-logo />
        </a>
        <ul>
            <li>
                <a href="{{ route('home') }}">
                    {{ __('Index') }}
                </a>
            </li>
            <li>
                <a data-scroll="about">
                    {{ __('About me') }}
                </a>
            </li>
            <li>
                <a data-scroll="projects">
                    {{ __('Projects') }}
                </a>
            </li>
            <li>
                <a data-scroll="services">
                    {{ __('Services') }}
                </a>
            </li>
            {{-- <li>
                <a data-scroll="blog">
                    {{ __('Blog') }}
                </a>
            </li> --}}
            <li>
                <a data-scroll="contact">
                    {{ __('Contact') }}
                </a>
            </li>
        </ul>
        {{-- <button type="submit" id="dark-mode">
            @include('icons.dark-mode')
        </button> --}}
        <button id="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>
</header>
