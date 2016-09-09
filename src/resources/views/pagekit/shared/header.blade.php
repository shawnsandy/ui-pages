<header class="{{ $class_name or "main" }} bg-5" data-aos="fade-up">
    <section class="cover">
        <div class="layout-table">
            <div class="layout-row">
                <div class="logo">

                    @if(config('pakgekit.branding') && config('pakgekit.brand.logo'))
                        <img src="/img/{{ config('pagekit.brand.logo' )}}"
                             title="{{ config('pagekit.company_name') }}"/>
                    @endif

                    <h1>{{ config('pagekit.company_name', 'Laravel.PageKit' ) }}</h1>

                    <p class="lead"> {{ config('pagekit.title_slug', 'Quick start pages for Laravel.' )}} </p>

                </div>
            </div>
        </div>
    </section>
</header>
