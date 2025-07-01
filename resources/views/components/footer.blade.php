<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <a class="footer__logo">
                <x-logo />
            </a>
            <div class="footer__top-links">
                <h3>{{ __('Sections') }}</h3>
                <ul>
                    <li><a href="/">{{ __('Index') }}</a></li>
                    <li><a data-scroll="about">{{ __('About me') }}</a></li>
                    <li><a data-scroll="projects">{{ __('Projects') }}</a></li>
                    <li><a data-scroll="services">{{ __('Services') }}</a></li>
                    {{-- <li><a href="#">{{ __('Blog') }}</a></li> --}}
                </ul>
            </div>
            <div class="footer__top-social">
                <h3>{{ __('Follow me') }}</h3>
                <ul>
                    <li><a target="_blank" href="https://github.com/Immoral07"><i class="icon github-icon"></i>
                            github</a></li>
                    <li><a target="_blank" href="https://www.youtube.com/@immoraldev"><i class="icon youtube-icon"></i>
                            youtube</a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/immoraldev"><i
                                class="icon linkedin-icon"></i> linkedin</a></li>
                    <li><a target="_blank" href="https://www.instagram.com/immoral.dev/"><i
                                class="icon instagram-icon"></i> instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <a data-scroll="contact">
                <i class="icon contact-icon"></i>
                {{ __('Contact me') }}
            </a>
            <p>©2025 <strong>Giovanni</strong>, {{ __('All Rights Reserved') }}</p>
        </div>
    </div>
</footer>
