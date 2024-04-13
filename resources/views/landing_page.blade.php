@extends('components.template')

@section('container')

@include('components.navbar')

{{-- HERO SECTION --}}
<section class="hero font" id="home">
    <main class="content">
        <h1>Mari Nikmati Secangkir <span>Kopi</span></h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, aut.</p>
        <a href="#" class="cta">Beli Sekarang</a>
    </main>
</section>

{{-- ABOUT SECTION --}}
<section class="about font" id="about">
    <h2><span>Tentang</span> Kami</h2>

    <div class="row">
        <div class="about-img">
            <img src="{{ asset('img/tentangKami.jpg') }}" alt="Tentang Kami">
        </div>
        <div class="content">
            <h3>Kenapa kenangansenja?</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt aliquid et eaque, alias sequi rerum!</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem necessitatibus soluta deleniti libero esse recusandae cum nam ut nostrum cupiditate!</p>
        </div>
    </div>
</section>

{{-- MENU SECTION --}}
<section class="menu font" id="menu">
    <h2><span>Menu</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sequi quaerat esse distinctio, cupiditate maiores.</p>

    <div class="row">
        <div class="menu-card">
            <img src="{{ asset('img/menu/menu1.jpg') }}" class="menu-card-ima" alt="Expresso">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('img/menu/menu1.jpg') }}" class="menu-card-ima" alt="Expresso">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('img/menu/menu1.jpg') }}" class="menu-card-ima" alt="Expresso">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('img/menu/menu1.jpg') }}" class="menu-card-ima" alt="Expresso">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('img/menu/menu1.jpg') }}" class="menu-card-ima" alt="Expresso">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
        <div class="menu-card">
            <img src="{{ asset('img/menu/menu1.jpg') }}" class="menu-card-ima" alt="Expresso">
            <h3 class="menu-card-title">- Espresso -</h3>
            <p class="menu-card-price">IDR 15K</p>
        </div>
    </div>
</section>


{{-- PRODUCTS SECTION --}}
<section class="products" id="products">
    <h2><span>Produk Unggulan </span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia fugit nisi nulla. Adipisci, ducimus.</p>

    <div class="row">
        <div class="product-card">
            <div class="product-icon">
                <a href="#"><i data-feather="shopping-cart"></i></a>
                <a href="#"><i data-feather="eye"></i></a>
            </div>
            <div class="product-img">
                <img src="{{ asset('img/product/product1.jpg') }}" alt="Biji Kopi">
            </div>
            <div class="product-content">
                <h3>Coffee Beans Americano</h3>
                <div class="product-star">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">IDR 30K <span>IDR 55K</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icon">
                <a href="#"><i data-feather="shopping-cart"></i></a>
                <a href="#"><i data-feather="eye"></i></a>
            </div>
            <div class="product-img">
                <img src="{{ asset('img/product/product1.jpg') }}" alt="Biji Kopi">
            </div>
            <div class="product-content">
                <h3>Coffee Beans Americano</h3>
                <div class="product-star">
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">IDR 30K <span>IDR 55K</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icon">
                <a href="#"><i data-feather="shopping-cart"></i></a>
                <a href="#"><i data-feather="eye"></i></a>
            </div>
            <div class="product-img">
                <img src="{{ asset('img/product/product1.jpg') }}" alt="Biji Kopi">
            </div>
            <div class="product-content">
                <h3>Coffee Beans Americano</h3>
                <div class="product-star">
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">IDR 30K <span>IDR 55K</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icon">
                <a href="#"><i data-feather="shopping-cart"></i></a>
                <a href="#"><i data-feather="eye"></i></a>
            </div>
            <div class="product-img">
                <img src="{{ asset('img/product/product1.jpg') }}" alt="Biji Kopi">
            </div>
            <div class="product-content">
                <h3>Coffee Beans Americano</h3>
                <div class="product-star">
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star" class="star"></i>
                    <i data-feather="star" class="star"></i>
                </div>
                <div class="product-price">IDR 30K <span>IDR 55K</span></div>
            </div>
        </div>
        <div class="product-card">
            <div class="product-icon">
                <a href="#"><i data-feather="shopping-cart"></i></a>
                <a href="#"><i data-feather="eye"></i></a>
            </div>
            <div class="product-img">
                <img src="{{ asset('img/product/product1.jpg') }}" alt="Biji Kopi">
            </div>
            <div class="product-content">
                <h3>Coffee Beans Americano</h3>
                <div class="product-star">
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                    <i data-feather="star"></i>
                </div>
                <div class="product-price">IDR 30K <span>IDR 55K</span></div>
            </div>
        </div>
    </div>
</section>


{{-- CONTACT SECTIOJN --}}
<section class="contact font" id="contact">
    <h2><span>Kontak</span> Kami</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, repudiandae!</p>

    <div class="row">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7919.562353021007!2d110.42071032495866!3d-7.034985841721443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b8ac003b057%3A0x9e5c489a30ca1b0!2sJl.%20Jangli%20Perbalan%20Sel.%20III%20No.10%2C%20Jatingaleh%2C%20Kec.%20Banyumanik%2C%20Kota%20Semarang%2C%20Jawa%20Tengah%2050261!5e0!3m2!1sen!2sid!4v1708267069166!5m2!1sen!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <form action="">
            <div class="input-group">
                <i data-feather="user"></i>
                <input type="text" name="" id="" placeholder="nama">
            </div>
            <div class="input-group">
                <i data-feather="mail"></i>
                <input type="text" name="" id="" placeholder="email">
            </div>
            <div class="input-group">
                <i data-feather="phone"></i>
                <input type="text" name="" id="" placeholder="nomor hp">
            </div>
            <button type="submit" class="btn">Kirim Pesan</button>
        </form>
    </div>
</section>

{{-- Footer --}}
<footer>
    <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
        <p>Created by <a href="" >Ririn Indah Cahyani</a>. | &copy; 2023.</p>
    </div>
</footer>
@endsection
