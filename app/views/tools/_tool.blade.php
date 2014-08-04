<article class="row" itemscope itemtype="http://schema.org/SoftwareApplication">
    <div class="col-sm-1">
        <a href="{{ URL::route("tools.show", $tool->slug) }}" class="symbol" title="{{{ $tool->name }}}">
            <abbr title="{{{ $tool->name }}}">{{{ $tool->getAbbreviation() }}}</abbr>
        </a>
        <!-- /symbol -->
    </div>
    <!-- /col-sm-1 -->

    <div class="col-sm-11">
        <h4 itemprop="name">{{ link_to_route("tools.show", e($tool->name), $tool->slug, array("title" => e($tool->name))) }}</h4>

        @if ($description = $tool->getDataValue("description"))
            <p>{{{ Str::words($description, 32) }}}</p>
        @endif
    </div>
    <!-- /col-sm-11 -->
</article>
<!-- /row -->