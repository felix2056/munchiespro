<?php
define("DB_HOST", 'localhost'); //localhost
define("DB_USER", 'u749386387_munchiesprouse'); //root
define("DB_PASS", 'Munchiespropa$$123'); //
define("DB_NAME", 'u749386387_munchiespro'); //root

// Open up a new MySQLi connection to the MySQL database
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); // Change these to your own DB credentials

if($link === false){
  die("ERROR: Could not connect. " . mysqli_connect_error());
}

$settingsSql = "SELECT * FROM settings WHERE id = 1";
$settingsResult = mysqli_query($link, $settingsSql);

// get the settings from the database
if(mysqli_num_rows($settingsResult) > 0){
  $row = mysqli_fetch_assoc($settingsResult);
  $site_name = $row['site_name'];
  $site_desc = $row['site_desc'];
  $site_email = $row['site_email'];
  $site_phone = $row['site_phone'];
  $site_address = $row['site_address'];
  $site_currency = $row['site_currency'];
  $site_keywords = $row['site_keywords'];
  $site_logo = $row['site_logo'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $site_name ?> | Marijuana Delivery near me in Washington DC</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="<?= $site_name ?>" />
    <meta name="email" content="<?= $site_email ?>" />
    <meta name="phone" content="<?= $site_phone ?>" />
    <meta name="address" content="<?= $site_address ?>" />
    <meta name="currency" content="<?= $site_currency ?>" />
    <meta name="description" content="<?= $site_desc ?>" />
    <meta name="keywords" content="<?= $site_keywords ?>" />

    <link rel="manifest" href="/manifest.json" />
    <link rel="preload" crossorigin="anonymous" href="/fonts/gilroy-regular-webfont.woff2" as="font" type="font/woff2" />
    <link rel="prefetch" crossorigin="anonymous" href="/fonts/gilroy-medium-webfont.woff2" as="font" type="font/woff2" />
    <link rel="prefetch" crossorigin="anonymous" href="/fonts/gilroy-semibold-webfont.woff2" as="font" type="font/woff2" />
    <link rel="prefetch" crossorigin="anonymous" href="/fonts/gilroy-bold-webfont.woff2" as="font" type="font/woff2" />
    <link rel="prefetch" crossorigin="anonymous" href="/fonts/gilroy-extrabold-webfont.woff2" as="font" type="font/woff2" />
    <link rel="prefetch" crossorigin="anonymous" href="/fonts/gilroy-black-webfont.woff2" as="font" type="font/woff2" />
    
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" href="images/android-chrome-192x192.png" sizes="192x192" />
    <link rel="icon" type="image/png" href="images/android-chrome-384x384.png" sizes="384x384" />
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
    
    <meta name="og:type" content="website" />
    <meta name="og:url" content="<?= $_SERVER['REQUEST_URI'] ?>" />
    <meta name="og:title" content="<?= $site_name ?> | Marijuana Delivery near me in Washington DC" />
    <meta name="og:description" content="<?= $site_desc ?>" />
    <meta name="og:image" content="<?= $site_logo ?>" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?= $_SERVER['REQUEST_URI'] ?>" />
    <meta name="twitter:title" content="<?= $site_name ?> | Marijuana Delivery near me in Washington DC" />
    <meta name="twitter:description" content="<?= $site_desc ?>" />
    <meta name="twitter:image" content="<?= $site_logo ?>" />
    
    <link rel="canonical" href="<?= $_SERVER['REQUEST_URI'] ?>" />

    <link rel="preload" href="/css/main.bba32540c29a15772215.css" as="style" />
    <link rel="preload" href="/js/main.e424293f4bf6592fbb9c.js" as="script" />
    <link rel="preload" href="/css/48.4fc109c8e47f2b59ddd6.css" as="style" />
    <link rel="preload" href="/js/48.57ff218627c9009b012c.js" as="script" />
    <link rel="preload" href="/css/26.3dead1be3a89e80567a8.css" as="style" />
    <link rel="preload" href="/js/business.d112a6244353002a991b.js" as="script" />
    <link rel="preload" href="/css/60.69d86b09e936333dfe4a.css" as="style" />
    <link rel="preload" href="/js/60.61659453140f9ed12c20.js" as="script" />
    <link rel="preload" href="/css/56.0616d5f85cfe20de33f0.css" as="style" />
    <link rel="preload" href="/js/56.e135e55cf95999dd6f06.js" as="script" />
    <link rel="preload" href="/css/70.99b5daa4d7556323bc35.css" as="style" />
    <link rel="preload" href="/js/70.c8befb544202cbf29a71.js" as="script" />
    <link rel="prefetch" href="/css/1.3fbe4db4b3072438fc6f.css" />
    <link rel="prefetch" href="/css/11.414b29ce092776086cc2.css" />
    <link rel="prefetch" href="/css/12.120f837b54a59f9955ed.css" />
    <link rel="prefetch" href="/css/13.8ae36f4d980d5321efd5.css" />
    <link rel="prefetch" href="/css/14.cc5d930885e713dee153.css" />
    <link rel="prefetch" href="/css/15.d72549491dc5ff1db39c.css" />
    <link rel="prefetch" href="/css/16.5a65bd2fa417c8765124.css" />
    <link rel="prefetch" href="/css/17.5a65bd2fa417c8765124.css" />
    <link rel="prefetch" href="/css/18.5a65bd2fa417c8765124.css" />
    <link rel="prefetch" href="/css/19.5a65bd2fa417c8765124.css" />
    <link rel="prefetch" href="/css/2.e147301759fe7c2ef406.css" />
    <link rel="prefetch" href="/css/20.5a65bd2fa417c8765124.css" />
    <link rel="prefetch" href="/css/21.8054a963a948ba6953d6.css" />
    <link rel="prefetch" href="/css/22.d8aa8f585dcb02f1bd5c.css" />
    <link rel="prefetch" href="/css/25.da09e461c5c87d172417.css" />
    <link rel="prefetch" href="/css/27.0b0d7a713b34288790a8.css" />
    <link rel="prefetch" href="/css/28.5c401dd0f4755b3e743e.css" />
    <link rel="prefetch" href="/css/29.88cb3807073e765017c0.css" />
    <link rel="prefetch" href="/css/30.1c382cf66c827431a516.css" />
    <link rel="prefetch" href="/css/31.7f0a8ddccf1976fea99d.css" />
    <link rel="prefetch" href="/css/32.ccaaadfceb078d10c564.css" />
    <link rel="prefetch" href="/css/34.3880f3f211202b4d3d30.css" />
    <link rel="prefetch" href="/css/37.31d195181f629d88f2e8.css" />
    <link rel="prefetch" href="/css/41.c5a0048e9ab3ae20bcc3.css" />
    <link rel="prefetch" href="/css/43.605f3e00242a87a990a0.css" />
    <link rel="prefetch" href="/css/44.212a3f7f3a450950dc47.css" />
    <link rel="prefetch" href="/css/45.2ceceec42968c272d031.css" />
    <link rel="prefetch" href="/css/47.895afe3d6a7fe9e9ff83.css" />
    <link rel="prefetch" href="/css/49.c5a0048e9ab3ae20bcc3.css" />
    <link rel="prefetch" href="/css/50.c5a0048e9ab3ae20bcc3.css" />
    <link rel="prefetch" href="/css/51.c5a0048e9ab3ae20bcc3.css" />
    <link rel="prefetch" href="/css/52.c5a0048e9ab3ae20bcc3.css" />
    <link rel="prefetch" href="/css/53.c5a0048e9ab3ae20bcc3.css" />
    <link rel="prefetch" href="/css/54.cc5d930885e713dee153.css" />
    <link rel="prefetch" href="/css/55.8b21f26adc12a7147664.css" />
    <link rel="prefetch" href="/css/57.f14ae739a6bbbab39bc3.css" />
    <link rel="prefetch" href="/css/58.0318fee15e903eac56b5.css" />
    <link rel="prefetch" href="/css/59.0ec4999f8c0e1bfd1519.css" />
    <link rel="prefetch" href="/css/61.932da4891cd5e003f162.css" />
    <link rel="prefetch" href="/css/65.9ce044937da87f97bad3.css" />
    <link rel="prefetch" href="/css/66.a6791eb6c99ca6a1b5ca.css" />
    <link rel="prefetch" href="/css/67.8cbe260891beeb86388e.css" />
    <link rel="prefetch" href="/css/68.e262b962a8ccde52304f.css" />
    <link rel="prefetch" href="/css/7.c5a0048e9ab3ae20bcc3.css" />
    <link rel="prefetch" href="/css/72.f14ae739a6bbbab39bc3.css" />
    <link rel="prefetch" href="/css/73.154ae7ffd3a1c994659f.css" />
    <link rel="prefetch" href="/css/74.99b5daa4d7556323bc35.css" />
    <link rel="prefetch" href="/css/75.13a01d8668a88b9b714a.css" />
    <link rel="prefetch" href="/css/76.611765cba7ad08c2eb90.css" />
    <link rel="prefetch" href="/css/77.d9fca9522998364444ad.css" />
    <link rel="prefetch" href="/css/9.c2cdef91f935eee7d708.css" />
    <link rel="prefetch" href="/js/0.d89a0c3380f3ddf2402a.js" />
    <link rel="prefetch" href="/js/1.9553e07ab58ac59b380a.js" />
    <link rel="prefetch" href="/js/10.2f606888aa2ada91d125.js" />
    <link rel="prefetch" href="/js/14.56de38d0b7491d0aa502.js" />
    <link rel="prefetch" href="/js/15.e9b5a42bfa43cfde5da8.js" />
    <link rel="prefetch" href="/js/16.f0d2e6342907dbc7f660.js" />
    <link rel="prefetch" href="/js/17.5faefbfbfd44d74e0c7b.js" />
    <link rel="prefetch" href="/js/18.60896b1028acf570d67b.js" />
    <link rel="prefetch" href="/js/19.a6690efc2000a33b637a.js" />
    <link rel="prefetch" href="/js/2.b7c6d068dc247754d301.js" />
    <link rel="prefetch" href="/js/20.3301974c0c16e7a7d0a6.js" />
    <link rel="prefetch" href="/js/21.4cd1844b7d81c706012f.js" />
    <link rel="prefetch" href="/js/22.181fec727a10f733fd24.js" />
    <link rel="prefetch" href="/js/23.585c1b2d5c61ca6aad4e.js" />
    <link rel="prefetch" href="/js/24.0ac99d07636c196e2e4d.js" />
    <link rel="prefetch" href="/js/3.264795dcefe8c0da79bd.js" />
    <link rel="prefetch" href="/js/4.f7b89fbafc3b428b2c0c.js" />
    <link rel="prefetch" href="/js/47.4cb7759262594c4bb457.js" />
    <link rel="prefetch" href="/js/49.97842a80bdf9d2e051fc.js" />
    <link rel="prefetch" href="/js/5.8fe638f31ec73b9c7c2a.js" />
    <link rel="prefetch" href="/js/50.39fac7f4ec012b2e9c11.js" />
    <link rel="prefetch" href="/js/51.d09aa83041d7cefb177d.js" />
    <link rel="prefetch" href="/js/52.91c579ccd1adbacb4473.js" />
    <link rel="prefetch" href="/js/53.cdc2dd32a0ef9a017c9e.js" />
    <link rel="prefetch" href="/js/54.fe8cd3d819204d8a4819.js" />
    <link rel="prefetch" href="/js/55.f485bc4e06c84ec7c4f6.js" />
    <link rel="prefetch" href="/js/57.1a8b9041f330a2dcabaf.js" />
    <link rel="prefetch" href="/js/58.c1c92254377a29cde5af.js" />
    <link rel="prefetch" href="/js/59.eb6468d56a252d0555a7.js" />
    <link rel="prefetch" href="/js/61.2ce53882b93460febe96.js" />
    <link rel="prefetch" href="/js/62.99c52bb69f6a341fbb8e.js" />
    <link rel="prefetch" href="/js/63.3ed33b39351998d4b02f.js" />
    <link rel="prefetch" href="/js/64.702a42fa2cfeb6398abc.js" />
    <link rel="prefetch" href="/js/65.6ecfa9ade920c313249f.js" />
    <link rel="prefetch" href="/js/66.c68e602fec64d734c321.js" />
    <link rel="prefetch" href="/js/67.7d5f7e78946c00191358.js" />
    <link rel="prefetch" href="/js/68.4bdb30f2daf2ab2899e1.js" />
    <link rel="prefetch" href="/js/69.366d557500018695ad4b.js" />
    <link rel="prefetch" href="/js/7.b6ee34e1599d20a0850d.js" />
    <link rel="prefetch" href="/js/71.910e556e2961406e7c9e.js" />
    <link rel="prefetch" href="/js/72.b13e2902c059f5a6a9f9.js" />
    <link rel="prefetch" href="/js/73.880176cee9edfca12082.js" />
    <link rel="prefetch" href="/js/74.ea789234ceac6af7f171.js" />
    <link rel="prefetch" href="/js/75.008ef5464fea6de6b6ed.js" />
    <link rel="prefetch" href="/js/76.af82f802bbc42ea5cd24.js" />
    <link rel="prefetch" href="/js/77.e0acc2afc982f0d367a4.js" />
    <link rel="prefetch" href="/js/78.bdc495c08fd5a81e69df.js" />
    <link rel="prefetch" href="/js/79.db92f6fb10e93e9fdb16.js" />
    <link rel="prefetch" href="/js/8.0721c4e281004da46437.js" />
    <link rel="prefetch" href="/js/80.d76e441f16f8b64153c7.js" />
    <link rel="prefetch" href="/js/81.614bfefc092dab8f09e1.js" />
    <link rel="prefetch" href="/js/82.dabf92162f4f18a53ca3.js" />
    <link rel="prefetch" href="/js/83.db4325e6e801aabd2507.js" />
    <link rel="prefetch" href="/js/84.d8cdcde228c48a8498c4.js" />
    <link rel="prefetch" href="/js/85.79898d7f84800e0ffed5.js" />
    <link rel="prefetch" href="/js/86.105ef74883cd6075de69.js" />
    <link rel="prefetch" href="/js/87.3a92ba2db08b3ec4a0a1.js" />
    <link rel="prefetch" href="/js/88.86bf873753cd65650fbc.js" />
    <link rel="prefetch" href="/js/89.320fc448bb00170e1871.js" />
    <link rel="prefetch" href="/js/9.c7a417be9ff2778455e6.js" />
    <link rel="prefetch" href="/js/90.bd730bf9a082963dfa9a.js" />
    <link rel="prefetch" href="/js/91.7149616821e0984dc831.js" />
    <link rel="prefetch" href="/js/92.88a9c666c7e56cf86cc8.js" />
    <link rel="prefetch" href="/js/blogs.2d2345819bce79c62647.js" />
    <link rel="prefetch" href="/js/businessCart.a7e51097fb04ae1d67ee.js" />
    <link rel="prefetch" href="/js/businessDeals.b0ebf50e05bd4a8af66a.js" />
    <link rel="prefetch" href="/js/businessReviews.eb181005f25e874381af.js" />
    <link rel="prefetch" href="/js/businessReviews~user.0c5084ff37ff09ddb406.js" />
    <link rel="prefetch" href="/js/city.daa30588fae96f643328.js" />
    <link rel="prefetch" href="/js/cityBusinesses.13f7e7c65c2e150bb243.js" />
    <link rel="prefetch" href="/js/cityBusinesses~cityShell.761a8c7b674f25282a0a.js" />
    <link rel="prefetch" href="/js/cityIndex.c138d64697f11002bb56.js" />
    <link rel="prefetch" href="/js/cityIndex~states.717285b3bb1b2e77e010.js" />
    <link rel="prefetch" href="/js/cityShell.3b47da3ab1ffd00f368f.js" />
    <link rel="prefetch" href="/js/content.98af3cdebc22782a4b75.js" />
    <link rel="prefetch" href="/js/error.b5857540b5629130389e.js" />
    <link rel="prefetch" href="/js/forgot.01c25f4078dc3d37863a.js" />
    <link rel="prefetch" href="/js/home.ab8d515858dd6ac76b24.js" />
    <link rel="prefetch" href="/js/login.ee0b6a94957506e25a1f.js" />
    <link rel="prefetch" href="/js/register.df6ac2343a48622bb3fd.js" />
    <link rel="prefetch" href="/js/search.029f984c8b4ee6602219.js" />
    <link rel="prefetch" href="/js/states.a0c1610795875056b8bc.js" />
    <link rel="prefetch" href="/js/strains.30260863d0d4a6283898.js" />
    <link rel="prefetch" href="/js/tour.884834d25341b851ca99.js" />
    <link rel="prefetch" href="/js/user.b734d3b35509464185d8.js" />
    <link rel="prefetch" href="/js/vendors~businessCart~businessDeals~content.04ea54c8507501d035b0.js" />
    <link rel="prefetch" href="/js/vendors~user.a72afb46d74a3ac414a3.js" />
    <link rel="prefetch" href="/serviceWorker.js" />
    <link rel="stylesheet" href="css/main.bba32540c29a15772215.css" />
    <link rel="stylesheet" href="css/48.4fc109c8e47f2b59ddd6.css" />
    <link rel="stylesheet" href="css/26.3dead1be3a89e80567a8.css" />
    <link rel="stylesheet" href="css/60.69d86b09e936333dfe4a.css" />
    <link rel="stylesheet" href="css/56.0616d5f85cfe20de33f0.css" />
    <link rel="stylesheet" href="css/70.99b5daa4d7556323bc35.css" />
</head>

<body>