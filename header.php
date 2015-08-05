<!doctype html>
<html lang="<?php bloginfo('language'); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/assets/dist/css/styles.min.css">
  <script defer src="<?php bloginfo('template_url'); ?>/assets/dist/js/global.min.js"></script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <svg aria-hidden="true" style="position: absolute; width: 0; height: 0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <symbol role="img" id="icon-logo-quai10" viewBox="0 0 2048 1024">
        <title id="title-logo-quai10">Logo Quai Numéro 10</title>
        <path role="presentation" class="path1 fill-color1" d="M283.534 371.826c-31.63 0-60.53 12.971-80.555 33.906-20.48 20.935-32.54 48.697-32.54 79.872s12.060 59.392 32.54 79.872c20.025 20.48 48.924 33.906 80.555 33.906 30.265 0 59.164-13.198 78.734-33.906 20.48-20.48 33.223-48.697 33.223-79.872s-12.743-59.164-33.223-79.872c-19.342-20.935-48.469-33.906-78.734-33.906zM330.638 535.438c-12.516 12.971-29.127 20.708-47.104 20.708-19.115 0-35.726-7.737-48.242-20.708-12.516-12.288-20.252-30.265-20.252-49.835s7.737-37.547 20.252-50.062c12.516-12.971 29.127-20.252 48.242-20.252 17.977 0 34.588 7.509 47.104 20.252 12.288 12.516 20.252 30.72 20.252 50.062 0 19.57-7.964 37.547-20.252 49.835zM292.636 625.778l-1.365-1.365c-3.641-3.641-8.192-5.461-12.971-5.461h-0.455c-4.779 0-9.557 1.82-12.971 5.461-0.683 0.683-1.365 1.365-1.82 2.276l-13.653 13.653c-3.641 3.641-5.689 8.42-5.689 13.198s2.048 9.33 5.461 12.971c3.413 3.413 8.192 5.461 12.971 5.461s9.557-2.048 13.198-5.689l2.731-2.731 29.355 29.355c3.641 3.641 8.42 5.689 13.198 5.689s9.33-2.048 12.971-5.461c7.509-7.509 7.282-18.66-0.228-26.169l-40.732-41.188zM622.364 373.191c-13.426 0-23.893 10.695-23.893 24.121v103.31c0 34.816-18.432 52.565-47.787 52.565s-47.787-18.432-47.787-54.158v-101.717c0-13.426-9.33-24.121-22.756-24.121s-22.756 10.695-22.756 24.121v102.855c0 64.398 35.044 97.394 93.753 97.394 58.937 0 95.118-32.54 95.118-98.987v-101.49c0-13.198-10.468-23.893-23.893-23.893zM846.962 390.485c-5.234-11.833-14.791-19.57-27.762-19.57h-2.731c-13.198 0-22.756 7.509-28.217 19.57l-76.459 172.715c-1.593 3.413-2.731 7.054-2.731 10.468 0 12.516 9.785 22.528 22.3 22.528 10.012 0 18.204-6.144 22.3-15.474l15.246-36.636h96.484l14.791 35.044c4.324 10.012 11.833 16.839 23.211 16.839 12.743 0 22.756-10.24 22.756-22.983 0-3.186-0.91-6.372-2.503-9.785l-76.686-172.715zM786.432 500.622l30.265-72.363 30.265 72.363h-60.53zM1018.311 373.191c-13.426 0-23.893 10.695-23.893 24.121v174.535c0 13.426 10.468 24.121 23.893 24.121s23.893-10.695 23.893-24.121v-174.535c0-13.426-10.468-24.121-23.893-24.121zM1723.506 444.644c-16.156 0-28.217 16.839-28.217 40.96v0.455c0 24.348 12.288 41.415 28.672 41.415s28.217-16.384 28.217-40.96v-0.455c0-24.121-12.516-41.415-28.672-41.415zM1877.333 352.028c0-14.564-11.833-26.624-26.624-26.624h-670.379c-14.564 0-26.624 11.833-26.624 26.624v272.384c0 14.564 11.833 26.624 26.624 26.624h670.606c14.564 0 26.624-11.833 26.624-26.624v-272.384zM1383.538 543.858c0 10.695-6.144 20.48-16.839 20.48h-1.138c-9.557 0-15.474-5.689-19.797-11.15l-60.075-78.734v70.087c0 10.468-8.875 18.887-19.342 18.887s-19.342-8.42-19.342-18.887v-116.736c0-10.695 10.923-20.48 21.618-20.48h3.413c9.557 0 14.336 5.916 18.66 11.378l56.661 75.776v-67.129c0-10.468 7.737-18.887 18.204-18.887s18.204 8.42 18.204 18.887v116.508zM1495.040 559.787h-42.098c-8.192 0-14.564-6.599-14.564-14.791 0-7.964 6.599-14.791 14.564-14.791h42.098c8.42 0 14.791 6.599 14.791 14.791s-6.372 14.791-14.791 14.791zM1515.52 456.932c0 23.211-19.342 41.415-43.236 41.415-24.121 0-43.236-17.749-43.236-41.188v-0.228c0-23.211 19.342-41.415 43.236-41.415 24.348 0 43.236 17.749 43.236 41.415zM1620.196 541.355c0 9.785-8.42 17.977-18.204 17.977s-18.204-7.964-18.204-17.977v-92.388l-6.827 1.82c-0.91 0.228-3.413 0.91-5.916 0.91-8.647 0-16.156-7.282-16.156-15.929 0-7.509 4.779-13.653 12.288-15.929l19.57-5.689c6.144-1.82 10.695-2.503 15.019-2.503h0.455c9.785 0 17.749 7.737 17.749 17.749v111.957zM1788.587 485.831c0 43.236-26.396 74.638-63.943 74.638-18.432 0-35.954-7.737-47.559-21.618-11.378-13.426-18.204-32.085-18.204-52.565v-0.455c0-43.236 27.534-74.638 65.081-74.638 37.319 0 64.626 31.175 64.626 74.183v0.455zM1472.284 442.596c-7.737 0-13.653 6.144-13.653 14.336v0.228c0 8.192 5.916 14.564 13.653 14.564s13.653-6.144 13.653-14.336v-0.228c0-8.42-5.916-14.564-13.653-14.564z"></path>
      </symbol>
      <symbol role="img" id="icon-icone-quai10" viewBox="0 0 708 1024">
        <title>icone-quai10</title>
        <path role="presentation" class="path1 fill-color1" d="M354.157 0c-99.049 0-189.55 40.619-252.258 106.177-64.133 65.558-101.899 152.495-101.899 250.119s37.766 185.986 101.899 250.119c62.708 64.133 153.205 106.177 252.258 106.177 94.775 0 185.272-41.33 246.555-106.177 64.133-64.133 104.038-152.495 104.038-250.119s-39.905-185.272-104.038-250.119c-60.569-65.558-151.781-106.177-246.555-106.177v0zM501.663 512.351c-39.194 40.619-91.211 64.847-147.506 64.847-59.859 0-111.876-24.228-151.070-64.847-39.194-38.48-63.419-94.775-63.419-156.058s24.228-117.578 63.419-156.769c39.194-40.619 91.211-63.419 151.070-63.419 56.295 0 108.312 23.514 147.506 63.419 38.48 39.194 63.419 96.2 63.419 156.769 0 61.283-24.939 117.578-63.419 156.058z"></path>
        <path role="presentation" class="path2 fill-color1" d="M382.66 795.25l-4.274-4.274c-11.402-11.402-25.653-17.101-40.619-17.101h-1.425c-14.965 0-29.928 5.699-40.619 17.101-2.139 2.139-4.274 4.274-5.699 7.127l-42.754 42.754c-11.402 11.402-17.815 26.367-17.815 41.33s6.413 29.217 17.101 40.619c10.688 10.688 25.653 17.101 40.619 17.101s29.928-6.413 41.33-17.815l8.552-8.552 91.925 91.925c11.402 11.402 26.367 17.815 41.33 17.815s29.217-6.413 40.619-17.101c23.514-23.514 22.804-58.434-0.714-81.948l-127.555-128.98z"></path>
      </symbol>
    </defs>
  </svg>
