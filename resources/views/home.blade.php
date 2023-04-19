<div class="offer">Free shipping on orders $99 & over. <a href="#">Learn More.</a> </div>
@include('nav')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">



    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <section class="hero">
        <div class="hero-text">

            <p>Discover our collection of high-quality products.</p>
            <button><a href="/shop">Shop now</a> </button>

        </div>
        <div class="hero-image">
            <img src="https://images.squarespace-cdn.com/content/v1/580c12cab3db2b29f4fa06dc/1539201111496-MUKLHZD40JYOXWLQ0TPO/_73I3461.jpg" alt="Hero Image">
        </div>
    </section>

    <div class="container">
        <div class="image-grid">
            <div class="top-row">
            <a href="{{ route('shop.index', ['gender' => 'men']) }}" class="grid-item">

                    
                    <img src="{{ asset('uploads/men-shoes.jpg') }}" alt="My Image">

                    <div class="caption">MEN</div>
                </a >
                <a href="{{ route('shop.index', ['gender' => 'women']) }}" class="grid-item">

                    <img src="{{ asset('uploads/women.jpg') }}" alt="My Image">

                    <div class="caption">WOMEN</div>
                </a>
            </div>
            <div class="middle-row">
                <a href="#" class="grid-item">
                    <img src="{{ asset('uploads/cold.jpg') }}" alt="My Image">

                    <div class="caption">COLD WEATHER GEAR</div>
                </a >
                <a href="#" class="grid-item">
                    <img src="{{ asset('uploads/gym.jpg') }}" alt="My Image">

                    <div class="caption">TRAINING ESSENTIALS</div>
                </a >
                <a href="#" class="grid-item">
                    <img src="{{ asset('uploads/img_6486_jpg1 (1).jpg') }}" alt="My Image">
                    <div class="caption">BAGS & ACCESORIES</div>
                </a>
            </div>
            <div class="bottom-row">
                <a href="#" class="grid-item">
                    <img src="{{ asset('uploads/sale.jpg') }}" alt="My Image">

                    <div class="caption">SALE</div>
                </a>
                <a href="#" class="grid-item">
                    <img src="{{ asset('uploads/display.jpg') }}" alt="My Image">

                    <div class="caption">MARKDOWNS</div>
                </a >
            </div>
        </div>

    </div>

    <div class="ambassador-container">
        <h1>Our Ambassadors</h1>
        <div class="section-4">

            <div class="top-left">
                <img src="{{ asset('uploads/women-trainer.jpg') }}" alt="My Image">


            </div>
            <div class="top-right">
                <h2>Sarah Johnson</h2>
                <p>Sarah is a fashion influencer with a passion for sustainable fashion. Her commitment to ethical fashion and her fashion-forward sense of style make her the perfect brand ambassador for our clothing line. With her extensive social media following and her keen eye for fashion, Sarah is sure to make a lasting impact on our brand.</p>
            </div>
            <div class="bottom-left">
                <h2>David Rodriguez</h2>
                <p>David is a fitness enthusiast and a social media influencer. He's known for his dedication to fitness and his inspiring transformation story. David's commitment to a healthy lifestyle and his positive attitude make him the ideal brand ambassador for our fitness supplements. With his large social media following and his authentic voice, David is sure to connect with our target audience and help spread the word about our products.p>
            </div>
            <div class="bottom-right">
                <img src="{{ asset('uploads/men-trainer.jpg') }}" alt="My Image">

            </div>
        </div>
    </div>

    <section class="company-description">
        <div class="section three-words">
            <h2>WHO </br> ARE WE?</h2>
            <h2>WHATS OUR </br> MISSION?</h2>
        </div>
        <div class="section">
            <h2>About Us</h2>
            <p>We are a company dedicated to providing the best possible products and services to our customers. With years of experience in the industry, we know what it takes to deliver quality and value.</p>
        </div>
        <div class="section">

            <h2>Our Mission</h2>
            <p>Our mission is to be the best in our field, providing exceptional products and services while building long-lasting relationships with our customers. We are committed to integrity, honesty, and ethical business practices.</p>
        </div>
        <div class="section">

            <h2>Our Team</h2>
            <p>Our team is made up of passionate individuals who are dedicated to making a difference. With a wealth of knowledge and experience, we work tirelessly to ensure that our customers receive the best possible service and support.</p>
        </div>
    </section>



    <section class="community">
        <div class="image-wrapper">
            <img src="{{ asset('uploads/volunteers.jpg') }}" alt="My Image">

        </div>
        <div class="text-wrapper">
            <p class="hashtag">#hullintong</p>
            <h2>Our Community</h2>
            <p>Team HULLINTONG is a community of people who work hard and don't believe in excuses. It is made up of employees, customers, ambassadors, first responders, teachers, military, medical professionals, hard working people from nearly every field and athletes of all skill levels from all over the globe.</p>
            <button>Learn More</button>
        </div>
    </section>


    <section class="here-for-you">
        <div class="text-container">
            <p class="small-text">HERE FOR YOU</p>
            <h2 class="big-text">SHOPPING FOR THE RIGHT TRAINING GEAR<br>SHOULDN'T BE AS HARD AS YOUR WORKOUTS.</h2>
            <button class="faq-btn">CHECK OUT OUR FAQS</button>
        </div>
    </section>


    <footer>
        <div class="footer-wrapper">
            <div class="footer-left">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Locations</a></li>
                </ul>
            </div>
            <div class="footer-center">
                <h3>Newsletter</h3>
                <form action="#">
                    <input type="email" placeholder="Enter your email" required>
                    <button type="submit">Subscribe</button>
                </form>
            </div>
            <div class="footer-right">
                <h3>Connect With Us</h3>
                <ul class="social-icons">
                    <li><a href="https://www.instagram.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                        </svg> Instagram</a></li>
                    <li><a href="https://twitter.com/?lang=en" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg> Twitter</a></li>
                    <li><a href="https://www.facebook.com/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg> Facebook</a></li>
                </ul>
            </div>
        </div>
    </footer>


</body>

</html>