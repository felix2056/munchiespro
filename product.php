<?php include_once("includes/header.php"); ?>

<?php if ( isset($_GET['id'])) : ?>

<?php
  $product_id = (int) $_GET['id'];

  $sql = "SELECT products.*, categories.* FROM products LEFT JOIN categories ON categories.id = products.category_id WHERE products.id = '$product_id'";
  $result = mysqli_query($link, $sql);
?>

<?php while($single = mysqli_fetch_array($result)) : ?>
    <div id="app" data-server-rendered="true">
        <div city="washington-dc" businesstype="marijuana-delivery" business="munchies-dc" <?= $single['name'] ?>tion="recreational" productid="235200952" class="flex flex-col w-full min-h-screen">
            <div class="sticky top-0 z-30 w-full bg-white border border-b">
                <div class="flex flex-wrap items-center justify-between px-3 py-1 mx-auto min-h-14 lg:flex-nowrap lg:py-0 max-w-6xl">
                    <div>
                        <a href="index_1.html" class="my-1.5 lg:my-0 router-link-active"><img src="fonts/logo-full.a39565678ef661d9865a9843f0f0a087.svg" alt="Where's Weed" width="180" height="30" /></a>
                    </div>
                    <div class="flex flex-wrap order-3 w-full lg:mt-0 lg:flex-nowrap lg:order-none lg:max-w-2xl">
                        <label for="main-search" class="w-full lg:mx-2">
                            <div id="main-search" class="relative w-full relative my-1 min-w-global-search">
                                <div class="absolute mt-2.5 text-gray-500 ml-2.5">
                                    <div class="w-5 h-5 p-0.5">
                                        <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.33331 9.33331L12.6666 12.6666M10.6666 5.99998C10.6666 8.57731 8.57731 10.6666 5.99998 10.6666C3.42265 10.6666 1.33331 8.57731 1.33331 5.99998C1.33331 3.42265 3.42265 1.33331 5.99998 1.33331C8.57731 1.33331 10.6666 3.42265 10.6666 5.99998Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div>
                                <label title="Find dispensaries, products, strains and more." for="global-search"><input id="global-search" placeholder="" type="search" autocomplete="off" autocorrect="off" value="" class="block w-full text-gray-500 bg-gray-200 border-none rounded-full pl-9 focus:ring focus:ring-green-300 focus:border-none" /></label>
                                <!---->
                                <!---->
                            </div>
                        </label>
                        <!---->
                    </div>
                    <div class="flex items-center flex-nowrap">
                        <a href="cart.html" class="hidden p-1 mr-2 border-2 border-gray-300 border-solid rounded-full shadow-sm md:block">
                            <img src="/fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Go to cart" />
                        </a>
                        <button class="border border-gray-300 bg-white text-xs lg:w-16 py-2 text-black rounded shadow-md mr-2.5 font-bold lg:text-sm w-14">
                            Login
                        </button>
                        <button active="" class="py-2 text-xs font-bold text-white bg-green-500 border border-green-500 rounded shadow-md lg:w-16 lg:text-sm w-14">
                            Join
                        </button>
                    </div>
                </div>
                <!---->
            </div>
            <div>
                <!---->
                <!---->
                <div class="max-w-6xl px-3 mx-auto text-left">
                    <div city="washington-dc" businesstype="marijuana-delivery" business="munchies-dc" <?= $single['name'] ?>tion="recreational" productid="235200952" class="flex flex-col w-full py-2 m-auto">
                        <nav aria-label="breadcrumb" class="py-1 h-8 text-sm">
                            <div class="sr-only">
                                <a href="index_1.html" class="flex items-center text-black router-link-active"><img src="fonts/back.f077cc83bc3d019b43148625a0813170.svg" alt="back icon" />
                                    <div class="mx-2">Home</div>
                                </a>
                            </div>
                            <div>
                                <a href="/" class="flex items-center text-black"><img src="fonts/back.f077cc83bc3d019b43148625a0813170.svg" alt="back icon" />
                                    <div class="mx-2">Back to Munchies</div>
                                </a>
                            </div>
                        </nav>
                        <div class="md:flex md:justify-between md:-mx-4">
                            <div class="w-full my-2 md:w-1/4 md:mx-4">
                                <script type="text/javascript" style="display: none">
                                    //<![CDATA[
                                    window.__mirage2 = {
                                        petok: "a959fa7a2e75f15e70cd099cecfdbeb9a7625981-1649838101-1800",
                                    };
                                    //]]>
                                </script>
                                <script type="text/javascript" src="js/mirage2.min.js"></script>
                                <img data-cfsrc="<?= $single['featured_image'] ?>" alt="<?= $single['title'] ?>" width="400" height="400" class="w-full shadow-sm rounded-xl" style="display: none; visibility: hidden" /><noscript><img src="<?= $single['featured_image'] ?>" alt="<?= $single['title'] ?>" width="400" height="400" class="w-full shadow-sm rounded-xl" /></noscript>
                            </div>
                            <div class="w-full md:w-3/4 md:mx-4">
                                <div class="py-2 text-xl font-bold">
                                    <?= $single['title'] ?>
                                </div>

                                <div class="text-sm"><?= $single['name'] ?></div>

                                <div class="relative my-auto">
                                    <div class="flex w-full py-2 -mx-1 overflow-x-auto hide-horizontal-scrollbar">
                                        <button class="relative flex flex-col p-2 px-3 mx-1 text-black rounded border-dashed border-2 border-gray-300 cursor-default">
                                            <div class="font-bold"><?= $single['price'] ?></div>
                                            <div class="text-sm">1/8 oz</div>
                                        </button><button class="relative flex flex-col p-2 px-3 mx-1 text-black rounded border-dashed border-2 border-gray-300 cursor-default">
                                            <div class="font-bold">$50</div>
                                            <div class="text-sm">1/4 oz</div>
                                        </button><button class="relative flex flex-col p-2 px-3 mx-1 text-black rounded border-dashed border-2 border-gray-300 cursor-default">
                                            <div class="font-bold">$60</div>
                                            <div class="text-sm">1/2 oz</div>
                                        </button><button class="relative flex flex-col p-2 px-3 mx-1 text-black rounded border-dashed border-2 border-gray-300 cursor-default">
                                            <div class="font-bold">$120</div>
                                            <div class="text-sm">oz</div>
                                        </button>
                                        <div class="filler-element-min-width"></div>
                                        <div class="absolute right-0 w-16 h-full pointer-events-none faded-edge-right"></div>
                                    </div>
                                </div>

                                <div class="flex flex-wrap">
                                    <div class="my-2 text-sm font-bold text-gray-500 uppercase">
                                        Quantity
                                    </div>
                                    <div class="flex flex-wrap w-full text-gray-3">
                                        <div class="flex items-center justify-between h-10 border border-gray-300 rounded shadow-sm">
                                            <button class="text-green-500 rounded-l text-xl px-2.5 h-full font-bold hover:bg-green-500 hover:text-white">
                                                -
                                            </button>
                                            <span class="px-3 text-xl font-bold text-center">
                                                1
                                            </span>
                                            <button class="text-green-500 rounded-r text-xl px-2.5 h-full font-bold hover:bg-green-500 hover:text-white">
                                                +
                                            </button>
                                        </div>
                                        <div class="w-full">
                                            <button class="w-full md:w-1/2 bg-green-500 px-4 py-2.5 my-3 font-bold uppercase text-white rounded">
                                                Add to Cart
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="w-full my-2 text-sm font-bold uppercase">
                                        description
                                    </div>
                                    <div>
                                        <?= $single['body'] ?>
                                    </div>
                                </div>

                                <div class="my-4">
                                    <button type="button" class="h-10 px-2 bg-white border border-gray-300 shadow-sm rounded-xl">
                                        <span class="flex items-center w-full"><img src="fonts/share-alternate.3d34d63e4777a5a3dbf7e06810aa5441.svg" alt="social share" height="25" width="25" class="mx-1" />
                                            <span class="w-full mx-1 text-sm font-bold text-black uppercase">
                                                Share
                                            </span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---->
            <div class="h-full">
                <!---->
            </div>

            <script type="application/ld+json">
                {
                    "@context": "http://schema.org",
                    "@type": "LocalBusiness",
                    "@id": "https://munchiespro.com",
                    "url": "https://munchiespro.com",
                    "name": "Munchies",
                    "telephone": "2026509809",
                    "image": "https://wheresweed.com/listing_images/full/10bf683b05fb34bb34540ab0ccebac6d.jpg",
                    "logo": "https://wheresweed.com/listing_images/full/10bf683b05fb34bb34540ab0ccebac6d.jpg",
                    "description": "<p>QUALITY IN A BUDGET</p>",
                    "openingHoursSpecification": [{
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "sunday",
                            "opens": "9:0",
                            "closes": "22:0"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "monday",
                            "opens": "9:0",
                            "closes": "22:0"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "tuesday",
                            "opens": "9:0",
                            "closes": "22:0"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "wednesday",
                            "opens": "9:0",
                            "closes": "22:0"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "thursday",
                            "opens": "9:0",
                            "closes": "22:0"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "friday",
                            "opens": "9:0",
                            "closes": "22:0"
                        },
                        {
                            "@type": "OpeningHoursSpecification",
                            "dayOfWeek": "saturday",
                            "opens": "9:0",
                            "closes": "22:0"
                        }
                    ],
                    "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "4.665",
                        "ratingCount": "3163"
                    },
                    "alternateName": "|102.91.4.215|102.91.4.215"
                }
            </script>
        </div>
        <!---->
        <div aria-live="assertive" class="fixed inset-0 z-50 flex items-end px-4 pt-16 mb-12 pointer-events-none sm:items-start md:mb-0">
            <div class="flex flex-col items-center w-full sm:items-end"></div>
        </div>
    </div>
<?php endwhile; ?>

<?php endif; ?>

<?php include("includes/footer.php"); ?>