<?php include_once("includes/header.php"); ?>

<div id="app" data-server-rendered="true">
  <div city="washington-dc" businesstype="marijuana-delivery" business="munchies-dc" class="flex flex-col w-full min-h-screen">
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
          <a href="/cart.php" class="hidden p-1 mr-2 border-2 border-gray-300 border-solid rounded-full shadow-sm md:block">
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
      <div class="max-w-6xl px-3 py-1 mx-auto text-left">
        <nav aria-label="breadcrumb" class="py-1 h-8 py-2 text-sm">
          <div class="sr-only">
            <a href="index_1.html" class="flex items-center text-black router-link-active"><img src="fonts/back.f077cc83bc3d019b43148625a0813170.svg" alt="back icon" />
              <div class="mx-2">Home</div>
            </a>
          </div>
          <div class="sr-only">
            <a href="washington-dc.html" class="flex items-center text-black router-link-active"><img src="fonts/back.f077cc83bc3d019b43148625a0813170.svg" alt="back icon" />
              <div class="mx-2">Washington DC</div>
            </a>
          </div>
          <div class="sr-only">
            <a href="washington-dc.html" class="flex items-center text-black router-link-active"><img src="fonts/back.f077cc83bc3d019b43148625a0813170.svg" alt="back icon" />
              <div class="mx-2">Washington DC</div>
            </a>
          </div>
          <div>
            <a href="marijuana-delivery.html" class="flex items-center text-black router-link-active"><img src="fonts/back.f077cc83bc3d019b43148625a0813170.svg" alt="back icon" />
              <div class="mx-2">Marijuana Delivery Services</div>
            </a>
          </div>
          <div class="sr-only">
            <a href="/" aria-current="page" class="flex items-center text-black router-link-exact-active router-link-active"><img src="fonts/back.f077cc83bc3d019b43148625a0813170.svg" alt="back icon" />
              <div class="mx-2">Munchies</div>
            </a>
          </div>
        </nav>
        <!---->
        <div class="flex relative mb-2 py-2 md:flex-row-reverse">
          <div class="flex-1">
            <h1 tabindex="0" class="text-lg font-bold mb-0 pr-28">
              Munchies
            </h1>
            <div class="flex items-center pb-2">
              <!---->
              <div tabindex="0" class="mt-0.5 flex items-center font-bold text-gray-500">
                (<span class="pt-0.5"> 3163 </span>)
              </div>
            </div>
            <div class="items-center text-sm md:flex">
              <div tabindex="0" class="pb-2 flex items-center md:mr-6">
                <img src="fonts/delivery.43fd77541f3495780b4f7976e1c3624e.svg" width="16" height="16" alt="Business Type" class="mr-2" />
                <span class="capitalize"> delivery </span>
              </div>
              <div class="flex items-center pb-2">
                <a href="tel:2026509809" target="_blank" class="flex items-center text-black"><img src="fonts/phone.bfd813275244211d01186ca740a60600.svg" width="16" height="16" alt="Phone" class="mr-2" />
                  <?= $site_phone ?>
                </a>
              </div>
            </div>
            <div tabindex="0" class="pb-2 text-sm">
              <span class="flex items-baseline text-black"><img src="fonts/pin.2ef59570af5c1ea659a93cf665ef083d.svg" width="16" height="16" alt="Address" class="mr-2" />
                <span class="truncate"> <?= $site_address ?> </span></span>
            </div>
            <div class="relative text-sm" data-v-1e95f4d4="">
              <div tabindex="0" role="text" aria-label="Hours Dropdown Closed 9:00 am - 10:00 pm" class="flex items-center cursor-pointer" data-v-1e95f4d4="">
                <div class="flex px-2 py-1 mr-2 rounded text-center text-white bg-gray-300" data-v-1e95f4d4="">
                  Open
                </div>
                9:00 am - 10:00 pm
                <span class="ml-2" data-v-1e95f4d4=""><svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg" data-v-1e95f4d4="">
                    <path d="M3.86603 4.5C3.48112 5.16667 2.51887 5.16667 2.13397 4.5L0.401924 1.5C0.0170235 0.833332 0.498149 -5.6841e-07 1.26795 -5.01112e-07L4.73205 -1.9827e-07C5.50185 -1.30972e-07 5.98298 0.833333 5.59808 1.5L3.86603 4.5Z" fill="#303D4E" data-v-1e95f4d4=""></path>
                  </svg></span>
              </div>
              <!---->
            </div>
          </div>
          <div class="absolute right-0 shadow-sm text-center rounded self-start md:mt-0 md:relative md:mr-6">
            <span>
              <picture width="100" height="100">
                <!---->
                <source srcset="
                        images/10bf683b05fb34bb34540ab0ccebac6d_1.jpg 1x,
                        images/10bf683b05fb34bb34540ab0ccebac6d.jpg   2x
                      " />
                <script type="text/javascript" style="display: none">
                  //<![CDATA[
                  window.__mirage2 = {
                    petok: "7f6d864eddbf03759f6d07b796d6a340e71a0854-1649838096-1800",
                  };
                  //]]>
                </script>
                <script type="text/javascript" src="js/mirage2.min.js"></script>
                <img data-cfsrc="/listing_images/100x100/10bf683b05fb34bb34540ab0ccebac6d.jpg" alt="Munchies Thumbnail Image" width="100" height="100" class="overflow-hidden rounded-lg border md:max-h-36 md:w-36 h-28 md:min-h-36 w-28 w-full h-auto" style="display: none; visibility: hidden" /><noscript><img src="/listing_images/100x100/10bf683b05fb34bb34540ab0ccebac6d.jpg" alt="Munchies Thumbnail Image" width="100" height="100" class="overflow-hidden rounded-lg border md:max-h-36 md:w-36 h-28 md:min-h-36 w-28 w-full h-auto" /></noscript>
              </picture>
            </span>
          </div>
        </div>
        <ul class="flex justify-between p-0 mb-1 overflow-hidden list-none border-b md:justify-start">
          <li>
            <a href="/" aria-current="page" class="block py-2 text-left text-gray-500 md:mr-6 router-link-exact-active router-link-active text-black font-bold border-b-2 border-green-500">
              Overview
            </a>
          </li>
          <li>
            <a href="/#all" class="block py-2 text-left text-gray-500 md:mr-6">
              Menu
            </a>
          </li>
          <li>
            <a href="/about.php" class="block py-2 text-left text-gray-500 md:mr-6">
              Details
            </a>
          </li>
          <li>
            <a href="/deals.php" class="block py-2 text-left text-gray-500 md:mr-6">
              Deals
            </a>
          </li>
          <li>
            <a href="/reviews.php" class="block py-2 text-left text-gray-500 md:mr-6">
              Reviews
            </a>
          </li>
          <li>
            <a href="/gallery.php" class="block py-2 text-left text-gray-500 md:mr-6">
              Photos
            </a>
          </li>
        </ul>
        <!---->
      </div>
      <div class="-mt-1 border-gray-100 md:mb-4 border-t-1"></div>
      <div class="max-w-6xl px-3 mx-auto text-left">
        <div id="business-index" city="washington-dc" businesstype="marijuana-delivery" business="munchies-dc">
          <div class="pb-8">
          <?php
            $categoriesSql = "SELECT * FROM categories ORDER BY created_at ASC";
            $categoriesResult = mysqli_query($link, $categoriesSql);
          ?>
            <div>
              <?php if ($categoriesResult && mysqli_num_rows($categoriesResult) > 0) : ?>
              <div class="grid w-full grid-cols-1 divide-y divide-gray-300">
                <?php while($category = mysqli_fetch_array($categoriesResult)) : ?>
                  <div id="<?= $category['name'] ?>" class="relative w-full pt-4">
                    <div class="flex items-center w-full pb-2 space-x-2 flex-nowrap">
                      <span class="font-bold text-left uppercase truncate">
                      <?= $category['name'] ?>
                      </span>
                      <span class="pl-1 mb-1 text-xl text-gray-300"> | </span>
                      <button class="flex w-auto font-bold text-green-500 uppercase flex-nowrap hover:text-purple-500">
                        <span class="w-20 flex-nowrap"> View All </span>
                      </button>
                    </div>

                    <?php
                      $productsSql = "SELECT * FROM products WHERE category_id =  $category[id] ORDER BY created_at DESC";
                      $productsResult = mysqli_query($link, $productsSql);
                    ?>

                    <?php if($productsResult && mysqli_num_rows($productsResult) > 6) : ?>
                      <div class="absolute left-0 z-20 transform -translate-x-1/2 -translate-y-1/2 top-1/2 hidden xl:block" style="display: none">
                        <button class="bg-green-500 border-0 border-none rounded-full hover:bg-purple-500 focus:ring focus:ring-green-300 focus:border-green-300">
                          <div class="flex content-center justify-center w-12 h-12 text-4xl font-bold text-center text-white align-middle">
                            <img src="/fonts/arrow-right.9ce6af2b5061c752d3816cb9d5bbab83.svg" height="12" width="12" alt="Previous Arrow" class="transform rotate-180" />
                          </div>
                        </button>
                      </div>
                      <div class="absolute z-20 transform -translate-x-1/2 -translate-y-1/2 top-1/2 -right-12 hidden xl:block">
                        <button class="bg-green-500 border-0 border-none rounded-full hover:bg-purple-500 focus:ring focus:ring-green-300 focus:border-green-300">
                          <div class="flex content-center justify-center w-12 h-12 text-4xl font-bold text-center text-white align-middle">
                            <img src="/fonts/arrow-right.9ce6af2b5061c752d3816cb9d5bbab83.svg" height="12" width="12" alt="Next Arrow" />
                          </div>
                        </button>
                      </div>
                    <?php endif; ?>

                    <div class="flex w-full">
                      <?php if ($productsResult && mysqli_num_rows($productsResult) > 0) : ?>
                        <div class="w-full flex pb-2 overflow-x-auto flex-nowrap justify-start space-x-6 pb-8 xl:hide-horizontal-scrollbar">
                          <?php while($product = mysqli_fetch_array($productsResult)) : ?>
                            <div class="flex-none border border-gray-300 shadow-lg cursor-pointer card-dimensions rounded-xl hover:shadow-xl">
                              <a href="/product.php/?id=<?= $product['id']?>" class="hover:text-black">
                                <div class="bg-white border-b border-gray-300 h-3/5 rounded-t-xl">
                                  <span>
                                    <picture width="220" height="220">
                                      <source srcset="<?= $product['featured_image']?>" />
                                      <img data-cfsrc="<?= $product['featured_image']?>" alt="<?= $product['title']?>" width="220" height="220" class="rounded-t-xl object-cover w-full h-full" style="display: none;visibility: hidden;" />
                                      <noscript>
                                        <img src="<?= $product['featured_image']?>" alt="<?= $product['title']?>" width="220" height="220" class="rounded-t-xl object-cover w-full h-full" />
                                      </noscript>
                                    </picture>
                                  </span>
                                </div>
                                <div class="grid grid-cols-1 px-3 py-4 h-2/5 place-content-between">
                                  <div class="flex font-bold text-md line-clamp-1">
                                    <?= $product['title']?>
                                  </div>
                                  
                                  <div class="flex text-sm capitalize">
                                    <?= $product['category_name']?>
                                  </div>
                                  
                                  <div class="flex text-sm">
                                    <span class="mr-1 font-bold text-green-500">
                                      $<?= $product['price']?>
                                    </span>
                                    1/2 oz <span class="ml-1"> + </span>
                                  </div>
                                </div>
                              </a>
                            </div>
                          <?php endwhile; ?>
                        </div>
                      <?php endif; ?>
                    </div>

                    <?php if($productsResult && mysqli_num_rows($productsResult) > 6) : ?>
                      <div class="flex justify-center w-full pb-6 space-x-3 hidden xl:flex">
                        <button class="flex justify-center border-none rounded-full flex-nowrap focus:ring-green-300 focus:ring focus:rounded-full focus:border-gray-300">
                          <span class="bg-green-500 w-4 h-4 border-none rounded-full hover:bg-purple-500"></span>
                        </button>
                        <button class="flex justify-center border-none rounded-full flex-nowrap focus:ring-green-300 focus:ring focus:rounded-full focus:border-gray-300">
                          <span class="bg-gray-300 w-4 h-4 border-none rounded-full hover:bg-purple-500"></span>
                        </button>
                      </div>
                      <?php endif; ?>
                  </div>
                <?php endwhile; ?>
              </div>
              <?php endif; ?>
              
              <a href="/cart.php" class="fixed bottom-0 w-full md:relative z-20 w-full text-sm font-bold">
                <div class="fixed bottom-0 left-0 flex items-center justify-between w-full p-2 text-white bg-green-500 md:hidden">
                  <div class="px-2 border border-white rounded">0</div>
                  <div class="text-lg font-bold">Your Cart</div>
                  <div>$0</div>
                </div>
              </a>
            </div>
            
            <div class="flex flex-wrap items-start md:flex-nowrap" style="display: none">
              <div class="sticky z-20 w-full py-2 mb-2 bg-white top-23 md:w-64 menu-controls">
                <!---->
              </div>
              <div class="flex-1">
                <!---->
                <div class="relative product-card-list md:pl-3 product-card-transition">
                  <div id="house favorites!" class="absolute top-0 -mt-44 md:-mt-16"></div>
                  <h3 class="mb-2 text-sm font-bold uppercase">
                    House favorites!
                  </h3>
                  <a href="371209295.html" class="hover:text-black product-card" style="--index: 0">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow disabled">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium Shakes
                          </h4>
                          <!---->
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="245699872.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium Girl Scout Cookies
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="245706265.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium GREEN CRACK
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="245714782.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium OG Kush
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="245723761.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium Sour Diesel (Sativa)
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="410889662.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Indoor White widow
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="417089798.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Indoor lava cake
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="421552169.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Indoor London cookies
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="2040017236.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Indoor Peanut Butter Breath
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="2994329639.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            EXOTIC Strawberry Cookies
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a>
                </div>
                <div class="relative product-card-list md:pl-3 product-card-transition">
                  <div id="indica" class="absolute top-0 -mt-44 md:-mt-16"></div>
                  <h3 class="mb-2 text-sm font-bold uppercase">Indica</h3>
                  <a href="235200952.html" class="hover:text-black product-card" style="--index: 0">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium Northern Lights
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="235202599.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium LA CONFINDENTIAL
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a>
                </div>
                <div class="relative product-card-list md:pl-3 product-card-transition">
                  <div id="sativa" class="absolute top-0 -mt-44 md:-mt-16"></div>
                  <h3 class="mb-2 text-sm font-bold uppercase">Sativa</h3>
                  <a href="235214143.html" class="hover:text-black product-card" style="--index: 0">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium LAUGHING BUDDHA
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="2054072910.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Strawberry Cough
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a>
                </div>
                <div class="relative product-card-list md:pl-3 product-card-transition">
                  <div id="hybrid" class="absolute top-0 -mt-44 md:-mt-16"></div>
                  <h3 class="mb-2 text-sm font-bold uppercase">Hybrid</h3>
                  <a href="235220473.html" class="hover:text-black product-card" style="--index: 0">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium WEDDING CAKE
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="235233091.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Premium OBAMA KUSH
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a>
                </div>
                <div class="relative product-card-list md:pl-3 product-card-transition">
                  <div id="edibles" class="absolute top-0 -mt-44 md:-mt-16"></div>
                  <h3 class="mb-2 text-sm font-bold uppercase">Edibles</h3>
                  <a href="2092630650.html" class="hover:text-black product-card" style="--index: 0">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            MA DUKES Brownies
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="2092644285.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Ma Dukes Fruity Pebbles
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="2126796921.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Baked Goods (Call For Full Menu)
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="3270540789.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Gummies/ Call or Text
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a>
                </div>
                <div class="relative product-card-list md:pl-3 product-card-transition">
                  <div id="concentrates" class="absolute top-0 -mt-44 md:-mt-16"></div>
                  <h3 class="mb-2 text-sm font-bold uppercase">
                    Concentrates
                  </h3>
                  <a href="2529472306.html" class="hover:text-black product-card" style="--index: 0">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Shatter
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="2974458769.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Please Text or Call for Cart list!
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="3191061663.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Crumble
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="4170755132.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Diamond Sauce
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a>
                </div>
                <div class="relative product-card-list md:pl-3 product-card-transition">
                  <div id="prerolls" class="absolute top-0 -mt-44 md:-mt-16"></div>
                  <h3 class="mb-2 text-sm font-bold uppercase">Prerolls</h3>
                  <a href="245728051.html" class="hover:text-black product-card" style="--index: 0">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            PREMIUM PreRolls
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a>
                </div>
                <div class="relative product-card-list md:pl-3 product-card-transition">
                  <div id="merchandise" class="absolute top-0 -mt-44 md:-mt-16"></div>
                  <h3 class="mb-2 text-sm font-bold uppercase">
                    Merchandise
                  </h3>
                  <a href="3321926224.html" class="hover:text-black product-card" style="--index: 0">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Infused oil
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a><a href="3780567627.html" class="hover:text-black product-card">
                    <div class="flex w-full mb-3 border border-gray-300 rounded shadow-sm min-card-width hover:shadow">
                      <div class="w-1/4 px-0 border-r min-w-116 max-w-130">
                        <span>
                          <picture width="129" height="129">
                            <!---->
                            <source srcset="images/temp-bud2.jpg" />
                            <img data-cfsrc="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" style="
                                    display: none;
                                    visibility: hidden;
                                  " /><noscript><img src="/img/temp-bud2.jpg" alt="Where's Weed" width="129" height="129" class="rounded-l object-cover w-full h-full" /></noscript>
                          </picture>
                        </span>
                      </div>
                      <div class="grid w-3/4 px-0 py-2">
                        <div class="relative flex items-center w-full px-3 align-center min-pricing-width">
                          <h4 class="m-0 mr-3 text-lg text-black line-clamp-2">
                            Battery/Pen
                          </h4>
                          <img src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg" alt="Order" class="w-4 h-4" />
                        </div>
                        <!---->
                        <!---->
                      </div>
                    </div>
                  </a>
                </div>
                <!---->
              </div>
              <!---->
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

<?php include("includes/footer.php"); ?>