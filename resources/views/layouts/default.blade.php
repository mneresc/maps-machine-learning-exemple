<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Map Access Point</title>

    <!-- Bootstrap core CSS -->
    <link href="{{  asset('css/bootstrap/bootstrap.css') }}" rel="stylesheet">
    <link href="{{  asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{  asset('css/ol.css') }}" rel="stylesheet">
  <style type="text/css">
@font-face {
  font-weight: 400;
  font-style:  normal;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Regular.woff2') format('woff2');
}
@font-face {
  font-weight: 400;
  font-style:  italic;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Italic.woff2') format('woff2');
}

@font-face {
  font-weight: 500;
  font-style:  normal;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Medium.woff2') format('woff2');
}
@font-face {
  font-weight: 500;
  font-style:  italic;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-MediumItalic.woff2') format('woff2');
}

@font-face {
  font-weight: 700;
  font-style:  normal;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Bold.woff2') format('woff2');
}
@font-face {
  font-weight: 700;
  font-style:  italic;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BoldItalic.woff2') format('woff2');
}

@font-face {
  font-weight: 900;
  font-style:  normal;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-Black.woff2') format('woff2');
}
@font-face {
  font-weight: 900;
  font-style:  italic;
  font-family: 'Inter-Loom';

  src: url('https://cdn.loom.com/assets/fonts/inter/Inter-UI-BlackItalic.woff2') format('woff2');
}</style></head>

  <body cz-shortcut-listen="true">
    <main role="main">
          <div class="row">
            @yield('content')
            <div id="accordion" class="col-12">
                    <div class="card" style="width:100%">
                      <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                          <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Code snippet
                          </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                                @yield('code')
                        </div>
                      </div>
                    </div>
                  </div>
    </main>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/ol.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap/bootstrap.js') }}" defer></script>
    @yield('js')
<svg xmlns="http://www.w3.org/2000/svg" width="348" height="225" viewBox="0 0 348 225" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs><style type="text/css"></style></defs><text x="0" y="17" style="font-weight:bold;font-size:17pt;font-family:Arial, Helvetica, Open Sans, sans-serif">Thumbnail</text></svg><div id="shadowMeasureIt"></div><div id="divCoordMeasureIt"></div><div id="divRectangleMeasureIt"><div id="divRectangleBGMeasureIt"></div></div></body>
<loom-container id="lo-engage-ext-container"><loom-shadow classname="resolved"></loom-shadow></loom-container></html>
