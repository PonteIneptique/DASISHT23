<dl class="tabs">
    @foreach ($dataSources as $dataSource)
        @include("admin.tools.data_sources._data_source", compact("dataSource"))
    @endforeach
</dl>
<!-- /tabs -->
