<x-layout>
    <x-slot name="title">Store - CoffeeShop</x-slot>
    <style>
        /*=============== STORE SPECIFIC STYLES ===============*/
        .store {
            padding: 2rem 0;
            padding-top: 8rem;
        }

        .store__container {
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        .store__search {
            margin-bottom: 2rem;
        }

        .search__input {
            width: 100%;
            padding: 1rem 1.5rem;
            font-size: var(--normal-font-size);
            font-family: var(--body-font);
            border: 2px solid var(--text-color-light);
            border-radius: 2rem;
            background-color: var(--white-color);
            color: var(--text-color);
            transition: border-color 0.3s ease;
        }

        .search__input:focus {
            outline: none;
            border-color: var(--first-color);
        }

        .search__input::placeholder {
            color: var(--text-color-light);
        }

        .store__content {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 2rem;
            align-items: start;
        }

        /*=============== FILTER SECTION ===============*/
        .filter {
            background-color: var(--white-color);
            border: 1px solid var(--text-color-light);
            border-radius: 1rem;
            padding: 1.5rem;
            position: sticky;
            top: 2rem;
        }

        .filter__title {
            color: var(--title-color);
            font-size: var(--h2-font-size);
            font-weight: var(--font-semi-bold);
            margin-bottom: 1rem;
        }

        .filter__price {
            margin-bottom: 1.5rem;
        }

        .filter__price-title {
            color: var(--title-color);
            font-size: var(--h3-font-size);
            font-weight: var(--font-medium);
            margin-bottom: 0.75rem;
        }

        .price__range {
            margin-bottom: 1rem;
        }

        .price__slider {
            width: 100%;
            height: 6px;
            border-radius: 3px;
            background: var(--text-color-light);
            outline: none;
            -webkit-appearance: none;
            margin-bottom: 0.5rem;
        }

        .price__slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--first-color);
            cursor: pointer;
        }

        .price__slider::-moz-range-thumb {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--first-color);
            cursor: pointer;
            border: none;
        }

        .price__values {
            display: flex;
            justify-content: space-between;
            font-size: var(--small-font-size);
            color: var(--text-color-light);
        }

        .filter__categories {
            margin-bottom: 1.5rem;
        }

        .filter__category-title {
            color: var(--title-color);
            font-size: var(--h3-font-size);
            font-weight: var(--font-medium);
            margin-bottom: 0.75rem;
        }

        .category__list {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .category__item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
            padding: 0.25rem 0;
            transition: color 0.3s ease;
        }

        .category__item:hover {
            color: var(--first-color);
        }

        .category__checkbox {
            width: 16px;
            height: 16px;
            accent-color: var(--first-color);
        }

        /*=============== PRODUCTS SECTION ===============*/
        .products__shop {
            flex: 1;
        }

        .products__grid {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .products__card {
            background-color: var(--white-color);
            border: 1px solid var(--text-color-light);
            border-radius: 1rem;
            padding: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: grid;
            grid-template-columns: 150px 1fr auto;
            align-items: center;
            gap: 1.5rem;
        }

        .products__card:hover {
            transform: translateX(5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .products__image {
            width: 150px;
            height: 120px;
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: var(--h1-font-size);
            color: var(--white-color);
            flex-shrink: 0;
            overflow: hidden;
        }

        .products__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 0.75rem;
        }

        .products__content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .products__title {
            color: var(--title-color);
            font-size: var(--h3-font-size);
            font-weight: var(--font-semi-bold);
            margin: 0;
        }

        .products__description {
            color: var(--text-color-light);
            font-size: var(--small-font-size);
            line-height: 1.5;
            margin: 0;
        }

        .products__price {
            color: var(--first-color);
            font-size: var(--h2-font-size);
            font-weight: var(--font-semi-bold);
            margin: 0;
        }

        .products__actions {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 0.5rem;
        }

        .products__button {
            padding: 0.75rem 1.5rem;
            background-color: var(--first-color);
            color: var(--white-color);
            font-size: var(--normal-font-size);
            font-weight: var(--font-medium);
            border: none;
            border-radius: 2rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            white-space: nowrap;
        }

        .products__button:hover {
            background-color: var(--first-color-alt);
            transform: scale(1.02);
        }

        .products__button:active {
            transform: scale(0.98);
        }

        /*=============== RESPONSIVE DESIGN ===============*/
        @media screen and (max-width: 768px) {
            .store__content {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .filter {
                position: static;
            }

            .products__card {
                grid-template-columns: 120px 1fr;
                gap: 1rem;
                padding: 1rem;
            }

            .products__image {
                width: 120px;
                height: 100px;
            }

            .products__image img {
                width: 100%;
                height: 100%;
                object-fit: cover
            }

            .products__actions {
                grid-column: 1 / -1;
                align-items: stretch;
                margin-top: 1rem;
            }

            .products__button {
                width: 100%;
            }
        }

        @media screen and (max-width: 480px) {
            .store__container {
                padding: 0 1rem;
            }

            .products__card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .products__image {
                width: 100%;
                height: 120px;
                margin: 0 auto;
            }

            .products__image img {
                width: 100px;
                height: 100%;
                object-fit: cover;
            }

            .products__actions {
                align-items: center;
            }

            .search__input {
                padding: 0.75rem 1.25rem;
            }
        }
    </style>
    <main class="main__">
        <section class="store section__">
            <div class="store__container">
                <h1 class="section__title">Our Coffee Store</h1>

                <!-- Search Bar -->
                <div class="store__search">
                    <input type="text" class="search__input" placeholder="Search for coffee, beans, equipment..."
                        id="searchInput">
                </div>

                <!-- Store Content -->
                <div class="store__content">
                    <!-- Filter Section -->
                    <div class="filter">
                        <h3 class="filter__title">Filters</h3>

                        <!-- Price Filter -->
                        <!-- Price Filter -->
                        <div class="filter__price">
                            <h4 class="filter__price-title">Price Range</h4>
                            <div class="price__range">
                                <input type="range" class="price__slider" min="1000" max="100000" value="50000"
                                    step="1000" id="priceRange">
                                <div class="price__values">
                                    <span>Rp 1K</span>
                                    <span id="currentPrice">Rp 50K</span>
                                    <span>Rp 100k</span>
                                </div>
                            </div>
                        </div>

                        <!-- Category Filter -->
                        <div class="filter__categories">
                            <h4 class="filter__category-title">Categories</h4>
                            <div class="category__list">
                                <label class="category__item">
                                    <input type="checkbox" class="category__checkbox" value="1">
                                    <span>Hot Drinks</span>
                                </label>
                                <label class="category__item">
                                    <input type="checkbox" class="category__checkbox" value="2">
                                    <span>Cold Drinks</span>
                                </label>
                                <label class="category__item">
                                    <input type="checkbox" class="category__checkbox" value="3">
                                    <span>Juices</span>
                                </label>
                                <label class="category__item">
                                    <input type="checkbox" class="category__checkbox" value="4">
                                    <span>Food</span>
                                </label>
                                <label class="category__item">
                                    <input type="checkbox" class="category__checkbox" value="5">
                                    <span>Dessert</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Products Section -->
                    <div class="products__shop">
                        <div class="products__grid" id="productsGrid">
                            @foreach ($products as $product)
                                <div class="products__card" data-category="{{ $product->Category }}"
                                    data-price="{{ $product->Price }}">
                                    <div class="products__image">
                                        <img src="{{ asset('assets/images/product/' . ($product->Image1 ?: 'placeholder.png')) }}"
                                            alt="{{ $product->ProductName }}">
                                    </div>
                                    <div class="products__content">
                                        <h3 class="products__title">{{ $product->ProductName }}</h3>
                                        <p class="products__description">{{ $product->Description }}</p>
                                    </div>
                                    <div class="products__actions">
                                        <div class="products__price">
                                            {{ 'RP.' . number_format($product->Price, 0, ',', '.') }}</div>
                                        <button class="products__button">Add to Order</button>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Product 1 -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        // Price range functionality
        const priceSlider = document.getElementById('priceRange');
        const currentPriceDisplay = document.getElementById('currentPrice');
        const productsGrid = document.getElementById('productsGrid');
        const searchInput = document.getElementById('searchInput');

        // Function to format price in Rupiah
        function formatRupiah(amount) {
            if (amount >= 1000000) {
                return `Rp ${(amount / 1000000).toFixed(1)}M`;
            } else if (amount >= 1000) {
                return `Rp ${(amount / 1000).toFixed(0)}K`;
            } else {
                return `Rp ${amount.toLocaleString('id-ID')}`;
            }
        }

        // Function to format full price display
        function formatFullPrice(amount) {
            return `Rp ${amount.toLocaleString('id-ID')}`;
        }

        // Update price display
        priceSlider.addEventListener('input', function() {
            currentPriceDisplay.textContent = formatRupiah(parseInt(this.value));
            filterProducts();
        });

        // Search functionality
        searchInput.addEventListener('input', filterProducts);

        // Category filter functionality
        const categoryCheckboxes = document.querySelectorAll('.category__checkbox');
        categoryCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', filterProducts);
        });

        // Filter products function
        function filterProducts() {
            const searchTerm = searchInput.value.toLowerCase();
            const maxPrice = parseInt(priceSlider.value);
            const selectedCategories = Array.from(categoryCheckboxes)
                .filter(cb => cb.checked)
                .map(cb => cb.value);

            const productCards = document.querySelectorAll('.products__card');

            productCards.forEach(card => {
                const title = card.querySelector('.products__title').textContent.toLowerCase();
                const description = card.querySelector('.products__description').textContent.toLowerCase();
                const price = parseInt(card.dataset.price);
                const category = card.dataset.category.toString();

                const matchesSearch = title.includes(searchTerm) || description.includes(searchTerm);
                const matchesPrice = price <= maxPrice;
                const matchesCategory = selectedCategories.length === 0 || selectedCategories.includes(category);

                if (matchesSearch && matchesPrice && matchesCategory) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        }
    </script>
</x-layout>
