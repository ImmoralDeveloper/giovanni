<x-app-layout>
    <x-slot name="hero">
        <div class="hero">
            <div class="hero__left">
                <span>Hey!,</span>
                <p>
                    {!! sprintf(
                    __('I am Giovanni, a web developer with 3+ years of experience creating efficient and innovative %sdigital solutions.%s'),
                    '<strong>',
                        '</strong>',
                    ) !!}<i class="arrow-top-left"></i>
                </p>
                <button type="button" data-scroll="projects">
                    {{ __('See projects') }}
                </button>
            </div>
            <div class="hero__center">
                <img loading="lazy" src="{{ asset('img/logo.png') }}" alt="">
                <div>
                    <i class="icon code-icon"></i>
                    <p>3+ {{ __('Years of Experience') }}</p>
                </div>
                <span class="hero__blob"></span>
            </div>
            <div class="hero__right">
                <h2>Giovanni</h2>
                <p>{{ __('Full-Stack Developer') }}</p>
                <div class="hero__social">
                    <a target="_blank" href="https://github.com/Immoral07"><i class="icon github-icon"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/immoraldev"><i class="icon linkedin-icon"></i></a>
                    <a target="_blank" href="https://www.instagram.com/immoral.dev/"><i class="icon instagram-icon"></i></a>
                    <a target="_blank" href="https://www.youtube.com/@immoraldev"><i class="icon youtube-icon"></i></a>
                </div>
            </div>
        </div>
    </x-slot>
    <x-slot name="content"><!-- Contenedor externo para ocultar el overflow -->
        <div class="technologies-carousel">
            <div class="technologies-carousel__wrapper">
                @php
                $technologies = ['HTML', 'PHP', 'JavaScript', 'VS Code', 'Laravel', 'Wordpress', 'SQL', 'Tailwind'];
                @endphp
                <!-- Duplicamos los elementos para efecto infinito -->
                @foreach (array_merge($technologies, $technologies) as $technology)
                <i class="technologies-icon"></i><span class="tech-item">{{ $technology }}</span>
                @endforeach
            </div>
        </div>
        <div>
            <section id="about">
                <i class="icon laptop-icon"></i>
                <h3>{{ __('About Me') }}
                    {{-- <a href="#">↗</a> --}}
                </h3>
                <p>{{ __('I am Giovanni, a web programmer with more than 3 years of experience. I specialize in transforming designs into functional, efficient interfaces focused on the user experience.') }}
                </p>
                <img loading="lazy" src="{{ asset('img/signature.png') }}" alt="">
                <i class="icon icon-spiral"></i>
            </section>
        </div>
        <!-- <section id="experience">
            <div class="experience-container">
                <div>
                    <span><i class="icon worker-icon"></i></span>
                    <div>
                        <p>{{ __('My work experience') }}</p>
                        <h2>{{ __('Work History') }}</h2>
                    </div>
                </div>
                <div class="experience-slider">
                    <div class="experience-wrapper">
                        <div class="experience-card">
                            <span><i class="icon"></i></span>
                            <div>
                                <span>2013 - {{ __('Present') }}</span>
                                <h3>Senior UI Designer</h3>
                                <p>We are helping client to create UI websites.</p>
                            </div>
                        </div>
                        <div class="experience-card">
                            <span><i class="icon"></i></span>
                            <div>
                                <span>2008- 2010</span>
                                <h3>Senior UI Designer</h3>
                                <p>We are helping client to create UI websites.</p>
                            </div>
                        </div>
                    </div>
                    <button><span>&#8594;</span></button>
                </div>
            </div>
            <div class="experience-container">
                <div>
                    <span><i class="icon student-icon"></i></span>
                    <div>
                        <p>{{ __('My educational Experience') }}</p>
                        <h2>{{ __('Education History') }}</h2>
                    </div>
                </div>
                <div class="experience-slider">
                    <div class="experience-wrapper">
                        <div class="experience-card">
                            <span><i class="icon"></i></span>
                            <div>
                                <span>2013 - {{ __('Present') }}</span>
                                <h3>Programming Course</h3>
                                <p>New York University</p>
                            </div>
                        </div>
                        <div class="experience-card">
                            <span><i class="icon"></i></span>
                            <div>
                                <span>2008- 2010</span>
                                <h3>University Of Design</h3>
                                <p>Kingston, United States</p>
                            </div>
                        </div>
                    </div>
                    <button><span>&#8594;</span></button>
                </div>
            </div>
        </section>
        <div class="brands">
            <p>{{ __('My satisfied clients') }}</p>
            <div class="brands-carousel">
                <ul class="brands-carousel__wrapper">
                    @php
                    $brands = ['brand1', 'brand2', 'brand3', 'brand4', 'brand5'];
                    @endphp
                    @foreach (array_merge($brands, $brands) as $brand)
                    <li>
                        <img loading="lazy" src="{{ asset("img/$brand.png") }}" alt="">
                    </li>
                    @endforeach
                </ul>
            </div>
        </div> -->
        <section id="projects">
            <p>{{ __('Recent Work') }}</p>
            <h2>{{ __('I am fully dedicated to creating authentic digital solutions.') }}</h2>
            <div class="projects-container">
                <div class="project">
                    <div class="project__img">
                        <img loading="lazy" src="{{ asset('img/project1.png') }}" alt="">
                    </div>
                    <div class="project__info">
                        <div>
                            <span>{{__("Front-end")}}</span>
                            <h3>Eswap - Online Store</h3>
                            <p>{{__("Developing an online fashion store based on the Eswap UI design. I'm coding it from scratch using Laravel, turning the visual concept into a fully functional platform.")}}</p>
                            <div>
                                <a target="_blank" href="https://github.com/immoral07/eswap">
                                    <i class="icon github-icon"></i>
                                </a>
                                <a href="https://eswap.giovanni.bio/" target="_blank">
                                    {{ __('See demo') }}
                                    <span>↗</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project">
                    <div class="project__img">
                        <img loading="lazy" src="{{ asset('img/wedding-theme.webp') }}" alt="">
                    </div>
                    <div class="project__info">
                        <div>
                            <span>{{__("Wordpress")}}</span>
                            <h3>Wedding Landing Page</h3>
                            <p>{{__("A landing page for invitation for a wedding event. It's developed using Wordpress.")}}</p>
                            <div>
                                <a href="https://wp.giovanni.bio/wedding" target="_blank">
                                    {{ __('See demo') }}
                                    <span>↗</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a href="#">Ver Todos</a> -->
        </section>
        <section id="services">
            <p>{{ __('Services I Offer') }}</p>
            <h2>{{ __('My services area') }}</h2>
            <ul>
                <li class="service">
                    <div class="service__left">
                        <i class="web-icon"></i>
                        <h3>{{ __('Web Development') }}</h3>
                    </div>
                    <div class="service__right">
                        <p>{{ __('Create your web applications with latest technologies.') }}</p>
                        <ul>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('Front-End') }}</span>
                            </li>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('Back-End') }}</span>
                            </li>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('Responsive') }}</span>
                            </li>
                        </ul>
                        <button class="service-btn" data-service="web-development" target="_blank" href="#"><i class="icon"></i></button>
                    </div>
                </li>
                <li class="service">
                    <div class="service__left">
                        <i class="api-icon"></i>
                        <h3>{{ __('API Development') }}</h3>
                    </div>
                    <div class="service__right">
                        <p>{{ __('Secure and efficient APIs for your applications.') }}</p>
                        <ul>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('RESTful APIs') }}</span>
                            </li>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('GraphQL APIs') }}</span>
                            </li>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('SOAP APIs') }}</span>
                            </li>
                        </ul>
                        <button class="service-btn" data-service="api-development" target="_blank" href="#"><i class="icon"></i></button>
                    </div>
                </li>
                <li class="service">
                    <div class="service__left">
                        <i class="ecommerce-icon"></i>
                        <h3>{{ __('E-Commerce Apps') }}</h3>
                    </div>
                    <div class="service__right">
                        <p>{{ __('Create your online store with the best platforms.') }}</p>
                        <ul>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('Shopify') }}</span>
                            </li>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('WooCommerce') }}</span>
                            </li>
                            <li>
                                <i class="icon"></i>
                                <span>{{ __('Magento') }}</span>
                            </li>
                        </ul>
                        <button class="service-btn" data-service="e-commerce-apps" target="_blank" href="#"><i class="icon"></i></button>
                    </div>
                </li>
            </ul>
        </section>
        <section id="skills">
            <p>{{ __('My Skills') }}</p>
            <h2>{{ __('Professional Skills') }}</h2>
            <ul>
                {{-- <li>
                    <span><i class="figma-icon"></i></span>
                    <div>
                        <h3>Figma</h3>
                        <span>{{ __('Basic') }}</span>
                </div>
                </li>
                <li>
                    <span><i class="wordpress-icon"></i></span>
                    <div>
                        <h3>Wordpress</h3>
                        <span>{{ __('Advanced') }}</span>
                    </div>
                </li>
                <li>
                    <span><i class="php-icon"></i></span>
                    <div>
                        <h3>PHP</h3>
                        <span>{{ __('Advanced') }}</span>
                    </div>
                </li>
                <li>
                    <span><i class="laravel-icon"></i></span>
                    <div>
                        <h3>Laravel</h3>
                        <span>{{ __('Advanced') }}</span>
                    </div>
                </li>
                <li>
                    <span><i class="sql-icon"></i></span>
                    <div>
                        <h3>SQL</h3>
                        <span>{{ __('Intermediate') }}</span>
                    </div>
                </li>
                <li>
                    <span><i class="javascript-icon"></i></span>
                    <div>
                        <h3>JavaScript</h3>
                        <span>{{ __('Intermediate') }}</span>
                    </div>
                </li>
                <li>
                    <span><i class="html-icon"></i></span>
                    <div>
                        <h3>HTML</h3>
                        <span>{{ __('Advanced') }}</span>
                    </div>
                </li>
                <li>
                    <span><i class="css-icon"></i></span>
                    <div>
                        <h3>CSS</h3>
                        <span>{{ __('Advanced') }}</span>
                    </div>
                </li>
                <li>
                    <span><i class="tailwind-icon"></i></span>
                    <div>
                        <h3>Tailwind</h3>
                        <span>{{ __('Advanced') }}</span>
                    </div>
                </li>
                <li>
                    <span><i class="vscode-icon"></i></span>
                    <div>
                        <h3>VS Code</h3>
                        <span>{{ __('Advanced') }}</span>
                    </div>
                </li> --}}
                @php
                $skills = [
                ['slug' => 'figma', 'name' => 'Figma', 'level' => 'basic'],
                ['slug' => 'wordpress', 'name' => 'Wordpress', 'level' => 'advanced'],
                ['slug' => 'php', 'name' => 'PHP', 'level' => 'advanced'],
                ['slug' => 'laravel', 'name' => 'Laravel', 'level' => 'advanced'],
                ['slug' => 'mysql', 'name' => 'MySQL', 'level' => 'intermediate'],
                ['slug' => 'javascript', 'name' => 'JavaScript', 'level' => 'intermediate'],
                ['slug' => 'html', 'name' => 'HTML', 'level' => 'advanced'],
                ['slug' => 'css', 'name' => 'CSS', 'level' => 'advanced'],
                ['slug' => 'tailwind', 'name' => 'Tailwind', 'level' => 'advanced'],
                ['slug' => 'vscode', 'name' => 'VS Code', 'level' => 'advanced'],
                ];
                @endphp
                @foreach ($skills as $skill)
                <li data-level="{{ $skill['level'] }}">
                    <span><i class="icon {{ $skill['slug'] }}-icon"></i></span>
                    <div>
                        <h3>{{ $skill['name'] }}</h3>
                        <span>{{ __(ucfirst($skill['level']) ?? 'Basic') }}</span>
                    </div>
                </li>
                @endforeach
            </ul>
        </section>
        <section id="contact">
            <div class="contact-info">
                <h2>{{ __("Let's Talk!") }}</h2>
                <p>{{ __("I am available for freelance work. Connect with me via:") }}</p>
                <ul>
                    <li>
                        <a target="_blank" href="https://wa.me/51998177826">
                            <i class="whatsapp-icon icon"></i>
                        </a>
                        <div>
                            <p>WhatsApp</p>
                            <a target="_blank" href="tel:+51998177826">+51 998177826</a>
                        </div>
                    </li>
                    <li>
                        <a target="_blank" href="https://t.me/immoraldeveloper">
                            <i class="telegram-icon icon"></i>
                        </a>
                        <div>
                            <p>Telegram</p>
                            <a target="_blank" href="https://t.me/immoraldeveloper">@immoraldeveloper</a>
                        </div>
                    </li>
                    <li>
                        <a target="_blank" href="mailto:contacto@giovanni.bio">
                            <i class="email-icon icon"></i>
                        </a>
                        <div>
                            <p>Email</p>
                            <a target="_blank" href="mailto:contacto@giovanni.bio">contacto@giovanni.bio</a>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- <form action="{{ route('messages.store') }}" method="POST" class="contact-form" id="contactForm">
            @csrf
            <div class="form-group">
                <input type="text" name="name" placeholder="{{ __('Full Name') }}">
                <input type="tel" name="phone" placeholder="{{ __('Phone No.') }}">
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="{{ __('Email') }}">
                <div>
                    <select name="service" id="service">
                        <option disabled selected>{{ __('Select Service') }}</option>
                        <option value="Web Development">{{ __('Web Development') }}</option>
                        <option value="API Development">{{ __('API Development') }}</option>
                        <option value="E-Commerce Apps">{{ __('E-Commerce Apps') }}</option>
                        <option value="Other">{{ __('Other') }}</option>
                    </select>
                </div>
            </div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="{{ __('Message') }}"></textarea>
            <button type="submit">{{ __('Send') }}</button>
            </form> --}}

            <div x-data="contactForm()" class="contact-form-wrapper">
                <form @submit.prevent="submit" class="contact-form" x-ref="form"
                    action="{{ route('messages.store') }}" method="POST">
                    @csrf

                    <!-- Campos del formulario (igual que antes) -->
                    <div class="form-group">
                        <input type="text" name="name" placeholder="{{ __('Full Name') }}"
                            x-bind:disabled="loading" @input="errors.name = null"
                            x-bind:class="{ 'input-error': errors.name }">
                        <input type="tel" name="phone" placeholder="{{ __('Phone No.') }}"
                            x-bind:disabled="loading">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="{{ __('Email') }}"
                            x-bind:disabled="loading" @input="errors.email = null"
                            x-bind:class="{ 'input-error': errors.email }">
                        <div class="input-container">
                            <select name="service" id="service" x-bind:disabled="loading">
                                <option disabled selected>{{ __('Select Service') }}</option>
                                <option value="web-development">{{ __('Web Development') }}</option>
                                <option value="api-development">{{ __('API Development') }}</option>
                                <option value="e-commerce-apps">{{ __('E-Commerce Apps') }}</option>
                                <option value="other">{{ __('Other') }}</option>
                            </select>
                        </div>
                    </div>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="{{ __('Your message') }}"
                        @input="errors.message = null" x-bind:disabled="loading" x-bind:class="{ 'input-error': errors.message }"></textarea>

                    <!-- Mensajes de estado -->
                    <div>
                        <div x-show="successMessage" x-text="successMessage" class="success-message"></div>

                        <div x-show="errorMessage" x-text="errorMessage" class="error-message"></div>

                        <button type="submit" x-bind:disabled="loading">
                            <span x-text="loading ? '{{ __('Sending...') }}' : '{{ __('Send') }}'"></span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </x-slot>
</x-app-layout>