<section class="pt-page pt-page-4" data-id="portfolio">
    <div class="section-title-block">
        <h2 class="section-title">{{ data.category.products}}</h2>
    </div>

    <!-- Portfolio Content -->
    <div class="portfolio-content">

        <!-- Portfolio Grid -->
        <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

            <!-- Portfolio Item 1 -->
            <figure class="item" ng-repeat="item in data.products">
                <a href="javascript:;" ng-click="showDetailProduct(item)">
                    <img ng-src="{{ 'assets/images/products/' + item.thumbnail }}" alt="">
                    <div>
                        <h5 class="name">{{ item.name}}</h5>
                        <p style="color: white">
                            Year: {{ item.year}}
                        </p>
                        <p style="color: white">
                            Position: {{ item.position}}
                        </p>
                        <p style="color: white">
                            Members: {{ item.member}}
                        </p>
                        <p style="color: white">
                            Technology Used: {{ item.technology_text}}
                        </p>
                        <!-- <small>Read more</small> -->
                    </div>
                </a>
                <p class="title">{{ item.name}}</p>
            </figure>
            <!-- /Portfolio Item 1 -->

        </div>
        <!-- /Portfolio Grid -->

    </div>
    <!-- /Portfolio Content -->

</section>