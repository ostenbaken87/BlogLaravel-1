<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
    <link rel="stylesheet" href="{{asset('assets/admin/src/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header_navbar wrapper_content">
            <div class="header_navbar_logo">
                <div class="header_navbar_logo_icon">
                    <i class="fas fa-hammer"></i>
                </div>
                <div class="header_navbar_logo_brand">
                    <a href="#">AdminPanel</a>
                </div>
            </div>
            <div class="header_navbar_links">
                <div class="header_navbar_links_link">
                    <a href="index.html">Home</a>
                </div>
                <div class="header_navbar_links_link">
                    <a href="show_categories.html">Categories</a>
                </div>
                <div class="header_navbar_links_link">
                    <a href="show_tags.html">Tags</a>
                </div>
                <div class="header_navbar_links_link">
                    <a href="show_posts.html">Posts</a>
                </div>
                <div class="header_navbar_links_link">
                    <a href="show_users.html">Users</a>
                </div>
                <div class="header_navbar_links_link">
                    <a href="">Statistics</a>
                </div>
                <div class="header_navbar_links_link">
                    <a href="">
                        <i class="fas fa-sign-in-alt"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <main class="main">
        @yield('content')
    </main>
    <footer class="footer">
        <div class="footer_content wrapper_content">
            <div class="footer_rights">
                Created by Soloviev NV in 2023, all rights reserved.
            </div>
        </div>
    </footer>
</div>
</body>
</html>
