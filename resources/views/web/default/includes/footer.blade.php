<footer class="footer bg-secondary position-relative user-select-none">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-subscribe d-block d-md-flex align-items-center justify-content-between">
                    <div class="flex-grow-1">
                        <strong>Rejoignez-nous aujourd'hui</strong>
                        <span class="d-block mt-5 text-white">Inscrivez-vous à notre newsletter pour recevoir les dernières nouvelles et mises à jour</span>
                    </div>
                    <div class="subscribe-input bg-white p-10 flex-grow-1 mt-30 mt-md-0">
                        <form action="/newsletters" method="post">
                            <input type="hidden" name="_token" value="CSRF_TOKEN">

                            <div class="form-group d-flex align-items-center m-0">
                                <div class="w-100">
                                    <input type="text" name="newsletter_email" class="form-control border-0" placeholder="Entrez votre adresse e-mail ici"/>
                                </div>
                                <button type="submit" class="btn btn-primary rounded-pill">Rejoindre</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Première colonne -->
            <div class="col-6 col-md-3">
                <span class="header d-block text-white font-weight-bold">À propos d'Algorithmics</span>
                <div class="mt-20">
                    <p class="text-white">Algorithmics est un centre de formation spécialisé dans l'enseignement de la programmation pour les enfants. Nous aidons les jeunes à développer leurs compétences numériques et à se préparer pour l'avenir.</p>
                </div>
            </div>

            <!-- Deuxième colonne -->
            <div class="col-6 col-md-3">
                <span class="header d-block text-white font-weight-bold">Nos programmes</span>
                <div class="mt-20">
                    <ul class="footer-menu">
                        <li><a href="/programmes/scratch">Scratch pour débutants</a></li>
                        <li><a href="/programmes/python">Python Junior</a></li>
                        <li><a href="/programmes/web">Développement Web</a></li>
                        <li><a href="/programmes/robotique">Robotique</a></li>
                    </ul>
                </div>
            </div>

            <!-- Troisième colonne -->
            <div class="col-6 col-md-3">
                <span class="header d-block text-white font-weight-bold">Infos pratiques</span>
                <div class="mt-20">
                    <ul class="footer-menu">
                        <li><a href="/horaires">Horaires des cours</a></li>
                        <li><a href="/tarifs">Tarifs</a></li>
                        <li><a href="/faq">FAQ</a></li>
                        <li><a href="/contact">Nous contacter</a></li>
                    </ul>
                </div>
            </div>

            <!-- Quatrième colonne -->
            <div class="col-6 col-md-3">
                <span class="header d-block text-white font-weight-bold">Événements</span>
                <div class="mt-20">
                    <ul class="footer-menu">
                        <li><a href="/ateliers">Ateliers découverte</a></li>
                        <li><a href="/camps">Camps de vacances</a></li>
                        <li><a href="/competitions">Compétitions</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-40 border-blue py-25 d-flex align-items-center justify-content-between">
        <div class="footer-logo">
                <a href="/">
                    @if(!empty($generalSettings['footer_logo']))
                        <img src="{{ $generalSettings['footer_logo'] }}" class="img-cover" alt="footer logo">
                    @endif
                </a>
            </div>

            <div class="footer-social">
                @if(!empty($socials) and count($socials))
                    @foreach($socials as $social)
                        <a href="{{ $social['link'] }}" target="_blank">
                            <img src="{{ $social['image'] }}" alt="{{ $social['title'] }}" class="mr-15">
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    @if(getOthersPersonalizationSettings('platform_phone_and_email_position') == 'footer')
        <div class="footer-copyright-card">
            <div class="container d-flex align-items-center justify-content-between py-15">
                <div class="font-14 text-white">{{ trans('update.platform_copyright_hint') }}</div>

                <div class="d-flex align-items-center justify-content-center">
                    @if(!empty($generalSettings['site_phone']))
                        <div class="d-flex align-items-center text-white font-14">
                            <i data-feather="phone" width="20" height="20" class="mr-10"></i>
                            {{ $generalSettings['site_phone'] }}
                        </div>
                    @endif

                    @if(!empty($generalSettings['site_email']))
                        <div class="border-left mx-5 mx-lg-15 h-100"></div>

                        <div class="d-flex align-items-center text-white font-14">
                            <i data-feather="mail" width="20" height="20" class="mr-10"></i>
                            {{ $generalSettings['site_email'] }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endif
</footer>
