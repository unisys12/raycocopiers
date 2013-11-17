<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>@yield('title')</title>
    <link href='//fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css'/>
    <link href="{{ asset(theme_path('css/style.css')) }}" rel="stylesheet" media="screen">
  </head>
  <body>
    <div class="container">
      <header>
        <h1><a href="{{ wardrobe_url('/') }}">{{ site_title() }}</a></h1>
        <nav>
          <ul>
            <li><a href="{{ wardrobe_url('/archive') }}">Posts</a></li>
            <li><a href="{{ wardrobe_url('/rss') }}">RSS</a></li>
          </ul>
        </nav>
      </header>
      <div class="content">
        @yield('content')
      </div>
      <footer>
      <p>Powered by <a href="http://wardrobecms.com">Wardrobe</a></p>
      </footer>
    </div>
      <script type="text/javascript">
        var _gaq = _gaq || [];
        var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
        _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
        _gaq.push(['_setAccount', 'UA-36848345-1']);
        _gaq.push(['_setDomainName', 'raycocopiers.com']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      </script>
  </body>
</html>
