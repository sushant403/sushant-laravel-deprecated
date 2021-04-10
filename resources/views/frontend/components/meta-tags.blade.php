    <meta name="title" content="{{ config('app.name') }}">
    <meta name="url" content="{{ $frontend->meta_url }}">
    <meta name="description" content="{{ $frontend->meta_description }}">
    <meta name="keywords" content="{{ $frontend->meta_keywords }}">
    <meta name="author" content="{{ $frontend->meta_author }}">
    <!-- Search Engine SEO-->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ $frontend->meta_url }}">
    <meta property="og:title" content="{{ config('app.name') }}">
    <meta property="og:description" content="{{ $frontend->meta_description }}">
    <meta property="og:image" content="{{ $frontend->meta_image_url }}">
    <!-- Twitter SEO -->
    <meta property="twitter:card" content="{{ $frontend->meta_author }}">
    <meta property="twitter:url" content="{{ $frontend->meta_url }}">
    <meta property="twitter:title" content="{{ config('app.name') }}">
    <meta property="twitter:description" content="{{ $frontend->meta_description }}">
    <meta property="twitter:image" content="{{ $frontend->meta_image_url }}">
    <!-- Webmanifest | Site Developed By Sushant Poudel -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">