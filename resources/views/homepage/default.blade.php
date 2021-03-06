<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{$meta['blogDesc']}}">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <link rel="icon" href="../../../../favicon.ico"> -->
        <title>{{ $meta['blogName'] }}</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
        
        <style>
            .bg-color-primary {
                background-color: {{ $meta['bg-color-primary'] }} !important;
            }
        </style>

        <style>
            .blog-header-logo,h1,h2,h3,h4,h5,h6{font-family:"Playfair Display",Georgia,"Times New Roman",serif}.blog-header,.border-bottom{border-bottom:1px solid #e5e5e5}.blog-header{line-height:1}.blog-header-logo{font-size:2.25rem}.blog-header-logo:hover{text-decoration:none}.display-4{font-size:2.5rem}@media (min-width:768px){.display-4{font-size:3rem}}.nav-scroller{position:relative;z-index:2;height:2.75rem;overflow-y:hidden}.nav-scroller .nav{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:nowrap;flex-wrap:nowrap;padding-bottom:1rem;margin-top:-1px;overflow-x:auto;text-align:center;white-space:nowrap;-webkit-overflow-scrolling:touch}.nav-scroller .nav-link{padding-top:.75rem;padding-bottom:.75rem;font-size:.875rem}.card-img-right{height:100%;border-radius:0 3px 3px 0}.flex-auto{-ms-flex:0 0 auto;-webkit-box-flex:0;flex:0 0 auto}.h-250{height:250px}@media (min-width:768px){.h-md-250{height:250px}}.border-top{border-top:1px solid #e5e5e5}.box-shadow{box-shadow:0 .25rem .75rem rgba(0,0,0,.05)}.blog-title{margin-bottom:0;font-size:2rem;font-weight:400}.blog-pagination,.blog-post{margin-bottom:4rem}.blog-description{font-size:1.1rem;color:#999}@media (min-width:40em){.blog-title{font-size:3.5rem}}.blog-pagination>.btn{border-radius:2rem}.blog-post-title{margin-bottom:.25rem;font-size:2.5rem}.blog-post-meta{margin-bottom:1.25rem;color:#999}.blog-footer{padding:2.5rem 0;color:#999;text-align:center;background-color:#f9f9f9;border-top:.05rem solid #e5e5e5}.blog-footer p:last-child{margin-bottom:0}img.pp-r{border-radius:50%;border:2px solid #cdcdcd;margin-left:5px}img.pp-sm{width:44px;height:44px}img.pp-xs{width:30px;height:30px}
        </style>


        <style>

            .btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social>:first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}
            
            .btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:focus,.btn-facebook.focus{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}
            .btn-facebook:hover{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}
            .btn-facebook:active,.btn-facebook.active,.open>.dropdown-toggle.btn-facebook{color:#fff;background-color:#2d4373;border-color:rgba(0,0,0,0.2)}.btn-facebook:active:hover,.btn-facebook.active:hover,.open>.dropdown-toggle.btn-facebook:hover,.btn-facebook:active:focus,.btn-facebook.active:focus,.open>.dropdown-toggle.btn-facebook:focus,.btn-facebook:active.focus,.btn-facebook.active.focus,.open>.dropdown-toggle.btn-facebook.focus{color:#fff;background-color:#23345a;border-color:rgba(0,0,0,0.2)}
            .btn-facebook:active,.btn-facebook.active,.open>.dropdown-toggle.btn-facebook{background-image:none}
            .btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled.focus,.btn-facebook[disabled].focus,fieldset[disabled] .btn-facebook.focus{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}
            .btn-facebook .badge{color:#3b5998;background-color:#fff}

            .btn-google{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-google:focus,.btn-google.focus{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}
            .btn-google:hover{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}
            .btn-google:active,.btn-google.active,.open>.dropdown-toggle.btn-google{color:#fff;background-color:#c23321;border-color:rgba(0,0,0,0.2)}.btn-google:active:hover,.btn-google.active:hover,.open>.dropdown-toggle.btn-google:hover,.btn-google:active:focus,.btn-google.active:focus,.open>.dropdown-toggle.btn-google:focus,.btn-google:active.focus,.btn-google.active.focus,.open>.dropdown-toggle.btn-google.focus{color:#fff;background-color:#a32b1c;border-color:rgba(0,0,0,0.2)}
            .btn-google:active,.btn-google.active,.open>.dropdown-toggle.btn-google{background-image:none}
            .btn-google.disabled:hover,.btn-google[disabled]:hover,fieldset[disabled] .btn-google:hover,.btn-google.disabled:focus,.btn-google[disabled]:focus,fieldset[disabled] .btn-google:focus,.btn-google.disabled.focus,.btn-google[disabled].focus,fieldset[disabled] .btn-google.focus{background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}
            .btn-google .badge{color:#dd4b39;background-color:#fff}

            .btn-twitter{color:#fff;background-color:#55acee;border-color:rgba(0,0,0,0.2)}.btn-twitter:focus,.btn-twitter.focus{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}
            .btn-twitter:hover{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}
            .btn-twitter:active,.btn-twitter.active,.open>.dropdown-toggle.btn-twitter{color:#fff;background-color:#2795e9;border-color:rgba(0,0,0,0.2)}.btn-twitter:active:hover,.btn-twitter.active:hover,.open>.dropdown-toggle.btn-twitter:hover,.btn-twitter:active:focus,.btn-twitter.active:focus,.open>.dropdown-toggle.btn-twitter:focus,.btn-twitter:active.focus,.btn-twitter.active.focus,.open>.dropdown-toggle.btn-twitter.focus{color:#fff;background-color:#1583d7;border-color:rgba(0,0,0,0.2)}
            .btn-twitter:active,.btn-twitter.active,.open>.dropdown-toggle.btn-twitter{background-image:none}
            .btn-twitter.disabled:hover,.btn-twitter[disabled]:hover,fieldset[disabled] .btn-twitter:hover,.btn-twitter.disabled:focus,.btn-twitter[disabled]:focus,fieldset[disabled] .btn-twitter:focus,.btn-twitter.disabled.focus,.btn-twitter[disabled].focus,fieldset[disabled] .btn-twitter.focus{background-color:#55acee;border-color:rgba(0,0,0,0.2)}
            .btn-twitter .badge{color:#55acee;background-color:#fff}

        </style>
        

    </head>
    <body class="bg-color-primary">
        <div class="container">
            <header class="blog-header py-3">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-6 pt-1">
                        <a class="blog-header-logo text-dark" href="/">{{ $meta['blogName'] }}</a>
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        @include('partials.userbar')
                    </div>
                </div>
            </header>
        
            <div class="nav-scroller py-1 mb-2">
                @include('partials.menu')
            </div>

        @if(count($featured) > 0)
            <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">{{ $featured[0]->title }}</h1>
                <p class="lead my-3">
                    {{ $featured[0]->intro }}
                </p>
                <p class="lead mb-0"><a href="{{ $featured[0]->url }}" class="text-white font-weight-bold">Continue reading...</a></p>
                </div>
            </div>
            
            
            <!-- Featured section -->
            <h3 class="my-3">Featured</h3>
            <div class="row mb-2">
            @foreach($featured as $feature)
                @if($loop->index > 0) 
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 box-shadow h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                                <strong class="d-inline-block mb-2 text-success">{{ $feature->category->name }}</strong>
                                <h4 class="mb-0">
                                    <a class="text-dark" href="{{ $feature->url }}">{{ $feature->title }}</a>
                                </h4>
                                
                                <p class="card-text mb-auto">
                                    {{ $feature->intro }} <a class="card-link py-2" href="{{ $feature->url }}">Continue reading...</a>
                                </p>
                                
                            </div>
                            <!-- img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap" -->
                        </div>
                    </div>
                @endif
            @endforeach
            </div>
        @endif
        </div>

        <!-- Latest Articles Section -->
        <div class="bg-light border py-3 my-2 hp-light-strip">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center border-bottom pb-3 my-3">From the Firehose</h3>
                    </div>
                     @foreach($latest as $page)
                    <div class="col-md-4">
                        <span class="text-danger">{{ isset($page->category_id)? $page->category->name : 'Uncategorized' }}</span>
                        <h5>
                            <a href="{{ $page->url }}" class="text-dark">{{$page->title}}</a>
                        </h5>
                        <p>
                            {{ $page->intro }}
                        </p>
                        <p class="small text-muted">
                            Posted {{ \Carbon\Carbon::parse($page->created_at)->diffForHumans() }}
                        </p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        @if(isset($meta["bottom-modules"]))
        <div class="container">
            <div class="row">
            @foreach($meta["bottom-modules"] as $module)
                {!! App\RenderModule::getModuleHTML($module) !!}
            @endforeach
            </div>
        </div>
        @endif
      
        <footer class="blog-footer  bg-dark text-white">
            
            <p>
                <a class="px-2 text-muted" href="/sitemap">Sitemap</a>
                @if($meta['enable-privacy'] === '1')
                <a class="px-2 text-muted" href="/privacy-policy">Privacy</a>
                @endif
                @if($meta['enable-terms'] === '1')
                <a class="px-2 text-muted" href="/terms-of-use">Terms</a>
                @endif
            </p>

            <p class="small text-muted">
                &copy; {{ date('Y') }} All Rights Reserved. Made with 
                <a href="https://platonics.io" class="text-secondary">Platonics</a>.
            </p>
        </footer>

         @include('partials.loginbox2')

        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="{{ asset('js/app.js') }}"></script>
        @yield('page.script')

    </body>
</html>

