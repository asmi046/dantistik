    <section class="about-company" id="about-company">
        <div class="container">
            <div class="about-company__inner">
                <div class="about-company__left">
                    <h2>{!! $about['main_2']->title !!}</h2>

                    <div class="text_styles about-company__text">
                        {!! $about['main_2']->value !!}
                    </div>
                </div>

                <div class="about-company__right">
                    <div class="about-company__stats">
                        <div class="about-company__stat">
                            <div class="about-company__stat-number">{!! $numbers['main_3']->title !!}</div>
                            <div class="about-company__stat-text">{!! $numbers['main_3']->value !!}</div>
                        </div>
                        <div class="about-company__stat">
                            <div class="about-company__stat-number">{!! $numbers['main_4']->title !!}</div>
                            <div class="about-company__stat-text">{!! $numbers['main_4']->value !!}</div>
                        </div>
                        <div class="about-company__stat">
                            <div class="about-company__stat-number">{!! $numbers['main_5']->title !!}</div>
                            <div class="about-company__stat-text">{!! $numbers['main_5']->value !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
