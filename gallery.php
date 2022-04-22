<?php include_once("includes/header.php"); ?>

<div id="app" data-server-rendered="true">
  <div
    city="washington-dc"
    businesstype="marijuana-delivery"
    business="munchies-dc"
    class="flex flex-col w-full min-h-screen"
  >
    <div class="sticky top-0 z-30 w-full bg-white border border-b">
      <div
        class="flex flex-wrap items-center justify-between px-3 py-1 mx-auto min-h-14 lg:flex-nowrap lg:py-0 max-w-6xl"
      >
        <div>
          <a href="index_1.html" class="my-1.5 lg:my-0 router-link-active"
            ><img
              src="fonts/logo-full.a39565678ef661d9865a9843f0f0a087.svg"
              alt="Where's Weed"
              width="180"
              height="30"
          /></a>
        </div>
        <div
          class="flex flex-wrap order-3 w-full lg:mt-0 lg:flex-nowrap lg:order-none lg:max-w-2xl"
        >
          <label for="main-search" class="w-full lg:mx-2"
            ><div
              id="main-search"
              class="relative w-full relative my-1 min-w-global-search"
            >
              <div class="absolute mt-2.5 text-gray-500 ml-2.5">
                <div class="w-5 h-5 p-0.5">
                  <svg
                    viewBox="0 0 14 14"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M9.33331 9.33331L12.6666 12.6666M10.6666 5.99998C10.6666 8.57731 8.57731 10.6666 5.99998 10.6666C3.42265 10.6666 1.33331 8.57731 1.33331 5.99998C1.33331 3.42265 3.42265 1.33331 5.99998 1.33331C8.57731 1.33331 10.6666 3.42265 10.6666 5.99998Z"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </div>
              </div>
              <label
                title="Find dispensaries, products, strains and more."
                for="global-search"
                ><input
                  id="global-search"
                  placeholder=""
                  type="search"
                  autocomplete="off"
                  autocorrect="off"
                  value=""
                  class="block w-full text-gray-500 bg-gray-200 border-none rounded-full pl-9 focus:ring focus:ring-green-300 focus:border-none"
              /></label>
              <!---->
              <!---->
            </div></label
          >
          <!---->
        </div>
        <div class="flex items-center flex-nowrap">
          <a
            href="/cart.php"
            class="hidden p-1 mr-2 border-2 border-gray-300 border-solid rounded-full shadow-sm md:block"
            ><img
              src="fonts/cart.ef6c6f0f2caa3db67c8819a81a3db8c7.svg"
              alt="Go to cart"
          /></a>
          <button
            class="border border-gray-300 bg-white text-xs lg:w-16 py-2 text-black rounded shadow-md mr-2.5 font-bold lg:text-sm w-14"
          >
            Login
          </button>
          <button
            active=""
            class="py-2 text-xs font-bold text-white bg-green-500 border border-green-500 rounded shadow-md lg:w-16 lg:text-sm w-14"
          >
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
            <a
              href="index_1.html"
              class="flex items-center text-black router-link-active"
              ><img
                src="fonts/back.f077cc83bc3d019b43148625a0813170.svg"
                alt="back icon"
              />
              <div class="mx-2">Home</div></a
            >
          </div>
          <div class="sr-only">
            <a
              href="washington-dc.html"
              class="flex items-center text-black router-link-active"
              ><img
                src="fonts/back.f077cc83bc3d019b43148625a0813170.svg"
                alt="back icon"
              />
              <div class="mx-2">Washington DC</div></a
            >
          </div>
          <div class="sr-only">
            <a
              href="washington-dc.html"
              class="flex items-center text-black router-link-active"
              ><img
                src="fonts/back.f077cc83bc3d019b43148625a0813170.svg"
                alt="back icon"
              />
              <div class="mx-2">Washington DC</div></a
            >
          </div>
          <div>
            <a
              href="marijuana-delivery.html"
              class="flex items-center text-black router-link-active"
              ><img
                src="fonts/back.f077cc83bc3d019b43148625a0813170.svg"
                alt="back icon"
              />
              <div class="mx-2">Marijuana Delivery Services</div></a
            >
          </div>
          <div class="sr-only">
            <a
              href="index.html"
              class="flex items-center text-black router-link-active"
              ><img
                src="fonts/back.f077cc83bc3d019b43148625a0813170.svg"
                alt="back icon"
              />
              <div class="mx-2">Munchies</div></a
            >
          </div>
        </nav>
        <!---->
        <div class="flex relative mb-2 py-2 md:flex-row-reverse">
          <div class="flex-1">
            <h1 tabindex="0" class="text-lg font-bold mb-0 pr-28">Munchies</h1>
            <div class="flex items-center pb-2">
              <!---->
              <div
                tabindex="0"
                class="mt-0.5 flex items-center font-bold text-gray-500"
              >
                (<span class="pt-0.5"> 3163 </span>)
              </div>
            </div>
            <div class="items-center text-sm md:flex">
              <div tabindex="0" class="pb-2 flex items-center md:mr-6">
                <img
                  src="fonts/delivery.43fd77541f3495780b4f7976e1c3624e.svg"
                  width="16"
                  height="16"
                  alt="Business Type"
                  class="mr-2"
                />
                <span class="capitalize"> delivery </span>
              </div>
              <div class="flex items-center pb-2">
                <a
                  href="tel:2026509809"
                  target="_blank"
                  class="flex items-center text-black"
                  ><img
                    src="fonts/phone.bfd813275244211d01186ca740a60600.svg"
                    width="16"
                    height="16"
                    alt="Phone"
                    class="mr-2"
                  />
                  (202) 650-9809
                </a>
              </div>
            </div>
            <div tabindex="0" class="pb-2 text-sm">
              <span class="flex items-baseline text-black"
                ><img
                  src="fonts/pin.2ef59570af5c1ea659a93cf665ef083d.svg"
                  width="16"
                  height="16"
                  alt="Address"
                  class="mr-2"
                />
                <span class="truncate">
                  <?= $site_address ?>
                </span></span
              >
            </div>
            <div class="relative text-sm" data-v-1e95f4d4="">
              <div
                tabindex="0"
                role="text"
                aria-label="Hours Dropdown Closed 9:00 am - 10:00 pm"
                class="flex items-center cursor-pointer"
                data-v-1e95f4d4=""
              >
                <div
                  class="flex px-2 py-1 mr-2 rounded text-center text-white bg-gray-300"
                  data-v-1e95f4d4=""
                >
                  Closed
                </div>
                9:00 am - 10:00 pm
                <span class="ml-2" data-v-1e95f4d4=""
                  ><svg
                    width="6"
                    height="5"
                    viewBox="0 0 6 5"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                    data-v-1e95f4d4=""
                  >
                    <path
                      d="M3.86603 4.5C3.48112 5.16667 2.51887 5.16667 2.13397 4.5L0.401924 1.5C0.0170235 0.833332 0.498149 -5.6841e-07 1.26795 -5.01112e-07L4.73205 -1.9827e-07C5.50185 -1.30972e-07 5.98298 0.833333 5.59808 1.5L3.86603 4.5Z"
                      fill="#303D4E"
                      data-v-1e95f4d4=""
                    ></path></svg
                ></span>
              </div>
              <!---->
            </div>
          </div>
          <div
            class="absolute right-0 shadow-sm text-center rounded self-start md:mt-0 md:relative md:mr-6"
          >
            <span
              ><picture width="100" height="100"
                ><!---->
                <source
                  srcset="
                    images/10bf683b05fb34bb34540ab0ccebac6d_1.jpg 1x,
                    images/10bf683b05fb34bb34540ab0ccebac6d.jpg   2x
                  " />
                <script type="text/javascript" style="display: none">
                  //<![CDATA[
                  window.__mirage2 = {
                    petok:
                      "a959fa7a2e75f15e70cd099cecfdbeb9a7625981-1649838101-1800",
                  };
                  //]]>
                </script>
                <script type="text/javascript" src="js/mirage2.min.js"></script>
                <img
                  data-cfsrc="/listing_images/100x100/10bf683b05fb34bb34540ab0ccebac6d.jpg"
                  alt="Munchies Thumbnail Image"
                  width="100"
                  height="100"
                  class="overflow-hidden rounded-lg border md:max-h-36 md:w-36 h-28 md:min-h-36 w-28 w-full h-auto"
                  style="display: none; visibility: hidden" /><noscript
                  ><img
                    src="/listing_images/100x100/10bf683b05fb34bb34540ab0ccebac6d.jpg"
                    alt="Munchies Thumbnail Image"
                    width="100"
                    height="100"
                    class="overflow-hidden rounded-lg border md:max-h-36 md:w-36 h-28 md:min-h-36 w-28 w-full h-auto" /></noscript></picture
            ></span>
          </div>
        </div>
        <ul
          class="flex justify-between p-0 mb-1 overflow-hidden list-none border-b md:justify-start"
        >
          <li>
            <a
              href="index.html"
              class="block py-2 text-left text-gray-500 md:mr-6 router-link-active"
            >
              Overview
            </a>
          </li>
          <li>
            <a
              href="index.html#all"
              class="block py-2 text-left text-gray-500 md:mr-6"
            >
              Menu
            </a>
          </li>
          <li>
            <a
              href="/about.php"
              class="block py-2 text-left text-gray-500 md:mr-6"
            >
              Details
            </a>
          </li>
          <li>
            <a
              href="/deals.php"
              class="block py-2 text-left text-gray-500 md:mr-6"
            >
              Deals
            </a>
          </li>
          <li>
            <a
              href="/reviews.php"
              class="block py-2 text-left text-gray-500 md:mr-6"
            >
              Reviews
            </a>
          </li>
          <li>
            <a
              href="/gallery.php"
              aria-current="page"
              class="block py-2 text-left text-gray-500 md:mr-6 router-link-exact-active router-link-active text-black font-bold border-b-2 border-green-500"
            >
              Photos
            </a>
          </li>
        </ul>
        <!---->
      </div>
      <div class="-mt-1 border-gray-100 md:mb-4 border-t-1"></div>
      <div class="max-w-6xl px-3 mx-auto text-left">
        <div class="flex flex-wrap justify-center mx-auto my-4">
          <!---->
          <div active-slide="0" class="w-full text-white"><!----></div>
          <div class="flex flex-wrap justify-center w-full md:justify-start">
            <div class="cursor-pointer max-w-320 w-full md:w-1/3 lg:w-1/4">
              <div class="mx-2">
                <span class="block p-3 mb-2 border border-gray-300 rounded-xl"
                  ><picture width="250" height="250"
                    ><!---->
                    <source
                      srcset="images/10bf683b05fb34bb34540ab0ccebac6d_2.jpg" />
                    <img
                      data-cfsrc="/listing_images/25x25/10bf683b05fb34bb34540ab0ccebac6d.jpg"
                      alt="Where's Weed"
                      width="250"
                      height="250"
                      class="rounded-xl w-full h-auto"
                      style="display: none; visibility: hidden" /><noscript
                      ><img
                        src="/listing_images/25x25/10bf683b05fb34bb34540ab0ccebac6d.jpg"
                        alt="Where's Weed"
                        width="250"
                        height="250"
                        class="rounded-xl w-full h-auto" /></noscript></picture
                ></span>
              </div>
            </div>
            <div class="cursor-pointer max-w-320 w-full md:w-1/3 lg:w-1/4">
              <div class="mx-2">
                <span class="block p-3 mb-2 border border-gray-300 rounded-xl"
                  ><picture width="250" height="250"
                    ><!---->
                    <source
                      srcset="images/452cba4faf07e1d15a98310084b19762.jpg" />
                    <img
                      data-cfsrc="/listing_images/25x25/452cba4faf07e1d15a98310084b19762.jpg"
                      alt="Where's Weed"
                      width="250"
                      height="250"
                      class="rounded-xl w-full h-auto"
                      style="display: none; visibility: hidden" /><noscript
                      ><img
                        src="/listing_images/25x25/452cba4faf07e1d15a98310084b19762.jpg"
                        alt="Where's Weed"
                        width="250"
                        height="250"
                        class="rounded-xl w-full h-auto" /></noscript></picture
                ></span>
              </div>
            </div>
            <div class="cursor-pointer max-w-320 w-full md:w-1/3 lg:w-1/4">
              <div class="mx-2">
                <span class="block p-3 mb-2 border border-gray-300 rounded-xl"
                  ><picture width="250" height="250"
                    ><!---->
                    <source
                      srcset="images/4090e552cd969184cfc3b027296a32e7.jpg" />
                    <img
                      data-cfsrc="/listing_images/25x25/4090e552cd969184cfc3b027296a32e7.jpg"
                      alt="Where's Weed"
                      width="250"
                      height="250"
                      class="rounded-xl w-full h-auto"
                      style="display: none; visibility: hidden" /><noscript
                      ><img
                        src="/listing_images/25x25/4090e552cd969184cfc3b027296a32e7.jpg"
                        alt="Where's Weed"
                        width="250"
                        height="250"
                        class="rounded-xl w-full h-auto" /></noscript></picture
                ></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---->
    <div class="h-full"><!----></div>
    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "LocalBusiness",
        "@id": "https://wheresweed.com/washington-dc/marijuana-delivery/munchies-dc",
        "url": "https://wheresweed.com/washington-dc/marijuana-delivery/munchies-dc",
        "name": "Munchies",
        "telephone": "2026509809",
        "image": "https://wheresweed.com/listing_images/full/10bf683b05fb34bb34540ab0ccebac6d.jpg",
        "logo": "https://wheresweed.com/listing_images/full/10bf683b05fb34bb34540ab0ccebac6d.jpg",
        "description": "<p>QUALITY IN A BUDGET</p>",
        "openingHoursSpecification": [
          {
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
  <div
    aria-live="assertive"
    class="fixed inset-0 z-50 flex items-end px-4 pt-16 mb-12 pointer-events-none sm:items-start md:mb-0"
  >
    <div class="flex flex-col items-center w-full sm:items-end"></div>
  </div>
</div>

<?php include_once("includes/footer.php"); ?>