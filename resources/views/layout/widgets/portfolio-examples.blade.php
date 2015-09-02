<div class="container">
    <div class="headline-center-v2 headline-center-v2-dark margin-bottom-60">
        <h2>{{ Theme::setting('widgetsPortfolioTitle') }}</h2>
        <span class="bordered-icon"><i class="fa fa-th-large"></i></span>
        <p>{{ Theme::setting('widgetsPortfolioIntro') }}</p>
    </div><!--/Headline Center V2-->
</div><!--/container-->

<!--=== Portfolio Box V2 ===-->

<ul class="list-unstyled row portfolio-box-v2">

    @foreach($projects as $project)

    <li class="col-sm-3">
        <a class="fancybox" data-rel="gallery" title="Project Two" href="{{ asset($project->thumbnail()) }}">
            <img class="img-responsive" src="{{ asset($project->thumbnail()) }}" alt="">
                <span class="portfolio-box-v2-in">
                    <i class="rounded-x icon-magnifier-add"></i>
                </span>
        </a>
    </li>

    @endforeach

</ul>