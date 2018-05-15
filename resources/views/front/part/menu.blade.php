<div class="col-md-3 top-left">
    <div class="logo">
        <a href="index.html"><img src="{{ asset('frontStyle/images/logo.png') }}" class="img-responsive" alt=""/></a>
    </div>
    <h4 class="menn">Categorías</h4>
    <label></label>
    <div class="head-nav">
        <span class="menu"> </span>
        <ul>
            <li><a href="{{ url('/') }}">Página Principal</a></li>
            @foreach($categories as $category)
                <li><a href="{{ url('categoria', $category->id) }}">{{ $category->category }}</a></li>
            @endforeach

            <div class="clearfix"></div>
        </ul>
        <!-- script-for-nav -->
        <script>
            $("span.menu").click(function () {
                $(".head-nav ul").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->
    </div>
    <div class="clearfix"></div>
</div>