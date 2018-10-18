<header>
    <div class="top-nav container">
        <div class="logo"><a href="/">Nice Shop</a></div>
        @if(!request()->is('checkout))
        <div class="logo">Laravel Ecommerce</div>
        <ul>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Cart</a></li>
        </ul>
        @endif
    </div> <!-- end top-nav -->
</header>
