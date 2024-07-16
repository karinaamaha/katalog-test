<!DOCTYPE html>
<html>
<head>
    <title>PT SAP Enterprise</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <a href="#" class="logo">PT SAP Enterprise</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
                <div class="search-bar">
                    <input type="text" placeholder="Search...">
                </div>
            </div>
        </nav>
    </header>

    <main>
        @yield('content') 
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="about-us">
                    <h3>About Us</h3>
                    <p>PT Setia Alfa Persada is a company engaged in ...</p>
                </div>
                <div class="contact">
                    <h3>Contact</h3>
                    <p>Jl. Merak Jingga No. A97</p>
                    <p>Phone: +62812 6414 9833</p>
                    <p>Email: info@ptsap.co.id</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 PT Setia Alfa Persada Enterprises</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>