<?php
    $breadcrumb = [
        ['label' => 'Tienda', 'url' => null],
    ];

    include "./components/breadcrump.php";
?>

<section class="container-shop spacer-top spacer-bottom">
    <div class="filter-sidebar">
        <h2>Filtrar por</h2>
        <div class="filter-group category-filter">
            <div class="accordion" id="categoriesAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCategories">
                        <button class="accordion-button collapsed"type="button"data-bs-toggle="collapse"data-bs-target="#collapseCategories"aria-expanded="false"aria-controls="collapseCategories">
                            Categorías
                        </button>
                    </h2>
                    <div id="collapseCategories" class="accordion-collapse collapse" aria-labelledby="headingCategories" data-bs-parent="#categoriesAccordion">
                        <div class="accordion-body p-0">
                            <ul class="list-unstyled m-0">
                                <li><a href="#" class="d-block px-3 py-2">Sachets</a></li>
                                <li><a href="#" class="d-block px-3 py-2">Jarabes</a></li>
                                <li><a href="#" class="d-block px-3 py-2">Cápsulas</a></li>
                                <li><a href="#" class="d-block px-3 py-2">Gotas</a></li>
                                <li><a href="#" class="d-block px-3 py-2">Tabletas</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-group filter-brand">
            <div class="accordion" id="brandsAccordion">
                <div class="accordion-item border-0">
                    <h2 class="accordion-header" id="headingBrands">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBrands" aria-expanded="false" aria-controls="collapseBrands">
                        Marcas
                        </button>
                    </h2>
                    <div id="collapseBrands" class="accordion-collapse collapse" aria-labelledby="headingBrands" data-bs-parent="#brandsAccordion">
                        <div class="accordion-body pt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="brand1">
                                <label class="form-check-label" for="brand1">
                                Nature's Way
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="brand2">
                                <label class="form-check-label" for="brand2">
                                Now Foods
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="brand3">
                                <label class="form-check-label" for="brand3">
                                Solgar
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="brand4">
                                <label class="form-check-label" for="brand4">
                                Garden of Life
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="brand5">
                                <label class="form-check-label" for="brand5">
                                Jarrow Formulas
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter-group price-filter">
            <h3>Precio</h3>
            <div class="range-values">
                <span id="priceMin">$100</span>
                <span id="priceMax">$900</span>
            </div>
            <input type="range" id="minRange" min="0" max="1000" value="100" step="10">
            <input type="range" id="maxRange" min="0" max="1000" value="900" step="10">
        </div>
    </div>
    <div class="cards-products">
        <ul>
            <?php
                for($i=1; $i<=4; $i++){
                    ?>
                    <li>
                        <article class="card product">
                            <figure>
                                <a href="#">
                                    <img src="assets/img/Mieltertos-noche-sachet-15g.webp" class="card-img-top" alt="Salud" width="258" height="258">
                                    <figcaption>Mieltertos Noche sachet 15 g</figcaption>
                                </a>
                            </figure>
                            <div class="card-body description">
                                <h2 class="title-product">Mieltertos Noche sachet 15 g</h2>
                                <span class="category-product">Sachets</span>
                                <div class="price-product">
                                    <span class="price-before">$2.600</span>
                                    <span class="price-after">$2.300</span>
                                </div>
                                <button type="button" class="btn btn-dark quick-view" data-bs-toggle="modal" data-bs-target="#quickView">Vista Rapida</button>
                                <button class="btn btn-primary cart">
                                    Añadir al Carrito
                                    <i class="bi bi-cart4"></i>
                                </button>
                            </div>
                        </article>
                    </li>
                    <?php
                }
            ?>
        </ul>
        <?php include "./components/quick-view.html"?>
    </div>
</section>