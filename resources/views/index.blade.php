
@extends('layouts.app')

@section('content')


    <!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="  relative  px-4 sm:px-6 lg:px-8 flex flex-col justify-center sm:items-center mx-auto w-full h-full before:absolute before:top-0 before:start-1/2 before:bg-[url('https://preline.co/assets/svg/component/squared-bg-element-dark.svg')] before:bg-no-repeat before:bg-top before:w-full before:h-full before:-z-[1] before:transform before:-translate-x-1/2">
    <div class="text-center py-8 px-4 sm:px-6 lg:px-8 max-w-3xl">
      <svg class="w-20 sm:w-28 h-auto mx-auto mb-4 sm:mb-8" width="116" height="41" viewBox="0 0 116 41" fill="white" xmlns="https://svgsilh.com/svg/2025999.svg"> 
        {{-- <path d="M33.5696 34.3182V14.8182H37.4474V17.2003H37.6229C37.7952 16.8187 38.0445 16.4309 38.3707 16.0369C38.7031 15.6368 39.134 15.3045 39.6634 15.0398C40.1989 14.7689 40.8636 14.6335 41.6577 14.6335C42.6918 14.6335 43.6458 14.9044 44.5199 15.446C45.3939 15.9815 46.0926 16.791 46.6158 17.8743C47.139 18.9515 47.4006 20.3026 47.4006 21.9276C47.4006 23.5095 47.1451 24.8452 46.6342 25.9347C46.1295 27.018 45.4401 27.8397 44.5661 28.3999C43.6982 28.9538 42.7256 29.2308 41.6484 29.2308C40.8852 29.2308 40.2358 29.1046 39.7003 28.8523C39.1709 28.5999 38.737 28.2829 38.3984 27.9013C38.0599 27.5135 37.8014 27.1226 37.6229 26.7287H37.5028V34.3182H33.5696ZM37.4197 21.9091C37.4197 22.7524 37.5367 23.4879 37.7706 24.1158C38.0045 24.7436 38.343 25.233 38.7862 25.5838C39.2294 25.9285 39.768 26.1009 40.402 26.1009C41.0421 26.1009 41.5838 25.9254 42.027 25.5746C42.4702 25.2176 42.8056 24.7251 43.0334 24.0973C43.2673 23.4633 43.3842 22.7339 43.3842 21.9091C43.3842 21.0904 43.2704 20.3703 43.0426 19.7486C42.8149 19.1269 42.4794 18.6406 42.0362 18.2898C41.593 17.9389 41.0483 17.7635 40.402 17.7635C39.7618 17.7635 39.2202 17.9328 38.777 18.2713C38.34 18.6098 38.0045 19.09 37.7706 19.7116C37.5367 20.3333 37.4197 21.0658 37.4197 21.9091ZM49.2427 29V14.8182H53.0559V17.2926H53.2037C53.4622 16.4124 53.8961 15.7476 54.5055 15.2983C55.1149 14.8428 55.8166 14.6151 56.6106 14.6151C56.8076 14.6151 57.02 14.6274 57.2477 14.652C57.4754 14.6766 57.6755 14.7105 57.8478 14.7536V18.2436C57.6632 18.1882 57.4077 18.139 57.0815 18.0959C56.7553 18.0528 56.4567 18.0312 56.1859 18.0312C55.6073 18.0312 55.0903 18.1574 54.6348 18.4098C54.1854 18.656 53.8284 19.0007 53.5638 19.4439C53.3052 19.8871 53.176 20.398 53.176 20.9766V29H49.2427ZM64.9043 29.277C63.4455 29.277 62.1898 28.9815 61.1373 28.3906C60.0909 27.7936 59.2845 26.9503 58.7182 25.8608C58.1519 24.7652 57.8688 23.4695 57.8688 21.9737C57.8688 20.5149 58.1519 19.2346 58.7182 18.1328C59.2845 17.031 60.0816 16.1723 61.1096 15.5568C62.1437 14.9413 63.3563 14.6335 64.7474 14.6335C65.683 14.6335 66.5539 14.7843 67.3603 15.0859C68.1728 15.3814 68.8806 15.8277 69.4839 16.4247C70.0932 17.0218 70.5672 17.7727 70.9057 18.6776C71.2443 19.5762 71.4135 20.6288 71.4135 21.8352V22.9155H59.4384V20.478H67.7111C67.7111 19.9117 67.588 19.41 67.3418 18.973C67.0956 18.536 66.754 18.1944 66.317 17.9482C65.8861 17.6958 65.3844 17.5696 64.812 17.5696C64.2149 17.5696 63.6856 17.7081 63.2239 17.9851C62.7684 18.2559 62.4114 18.6222 62.1529 19.0838C61.8944 19.5393 61.762 20.0471 61.7559 20.6072V22.9247C61.7559 23.6264 61.8851 24.2327 62.1437 24.7436C62.4083 25.2545 62.7807 25.6484 63.2608 25.9254C63.741 26.2024 64.3103 26.3409 64.9689 26.3409C65.406 26.3409 65.8061 26.2794 66.1692 26.1562C66.5324 26.0331 66.8432 25.8485 67.1018 25.6023C67.3603 25.3561 67.5572 25.0545 67.6927 24.6974L71.3304 24.9375C71.1458 25.8116 70.7672 26.5748 70.1948 27.2273C69.6285 27.8736 68.896 28.3783 67.9974 28.7415C67.1048 29.0985 66.0738 29.277 64.9043 29.277ZM77.1335 10.0909V29H73.2003V10.0909H77.1335ZM79.5043 29V14.8182H83.4375V29H79.5043ZM81.4801 12.9901C80.8954 12.9901 80.3937 12.7962 79.9752 12.4084C79.5628 12.0144 79.3566 11.5436 79.3566 10.9957C79.3566 10.4541 79.5628 9.98935 79.9752 9.60156C80.3937 9.20762 80.8954 9.01065 81.4801 9.01065C82.0649 9.01065 82.5635 9.20762 82.9759 9.60156C83.3944 9.98935 83.6037 10.4541 83.6037 10.9957C83.6037 11.5436 83.3944 12.0144 82.9759 12.4084C82.5635 12.7962 82.0649 12.9901 81.4801 12.9901ZM89.7415 20.8011V29H85.8083V14.8182H89.5569V17.3203H89.723C90.037 16.4955 90.5632 15.843 91.3019 15.3629C92.0405 14.8767 92.9361 14.6335 93.9887 14.6335C94.9735 14.6335 95.8322 14.849 96.5647 15.2798C97.2971 15.7107 97.8665 16.3262 98.2728 17.1264C98.679 17.9205 98.8821 18.8684 98.8821 19.9702V29H94.9489V20.6719C94.9551 19.804 94.7335 19.1269 94.2841 18.6406C93.8348 18.1482 93.2162 17.902 92.4283 17.902C91.8989 17.902 91.4311 18.0159 91.0249 18.2436C90.6248 18.4714 90.3109 18.8037 90.0831 19.2408C89.8615 19.6716 89.7477 20.1918 89.7415 20.8011ZM107.665 29.277C106.206 29.277 104.951 28.9815 103.898 28.3906C102.852 27.7936 102.045 26.9503 101.479 25.8608C100.913 24.7652 100.63 23.4695 100.63 21.9737C100.63 20.5149 100.913 19.2346 101.479 18.1328C102.045 17.031 102.842 16.1723 103.87 15.5568C104.905 14.9413 106.117 14.6335 107.508 14.6335C108.444 14.6335 109.315 14.7843 110.121 15.0859C110.934 15.3814 111.641 15.8277 112.245 16.4247C112.854 17.0218 113.328 17.7727 113.667 18.6776C114.005 19.5762 114.174 20.6288 114.174 21.8352V22.9155H102.199V20.478H110.472C110.472 19.9117 110.349 19.41 110.103 18.973C109.856 18.536 109.515 18.1944 109.078 17.9482C108.647 17.6958 108.145 17.5696 107.573 17.5696C106.976 17.5696 106.446 17.7081 105.985 17.9851C105.529 18.2559 105.172 18.6222 104.914 19.0838C104.655 19.5393 104.523 20.0471 104.517 20.6072V22.9247C104.517 23.6264 104.646 24.2327 104.905 24.7436C105.169 25.2545 105.542 25.6484 106.022 25.9254C106.502 26.2024 107.071 26.3409 107.73 26.3409C108.167 26.3409 108.567 26.2794 108.93 26.1562C109.293 26.0331 109.604 25.8485 109.863 25.6023C110.121 25.3561 110.318 25.0545 110.454 24.6974L114.091 24.9375C113.907 25.8116 113.528 26.5748 112.956 27.2273C112.389 27.8736 111.657 28.3783 110.758 28.7415C109.866 29.0985 108.835 29.277 107.665 29.277Z" fill="white"/>
        <path d="M1 33V20C1 13.3726 6.37258 8 13 8C19.6274 8 25 13.3726 25 20C25 26.6274 19.6274 32 13 32H12" stroke="white" stroke-width="2"/>
        <path d="M5 33V20.16C5 15.6534 8.58172 12 13 12C17.4183 12 21 15.6534 21 20.16C21 24.6666 17.4183 28.32 13 28.32H12" stroke="white" stroke-width="2"/> --}}
        {{-- <circle cx="13" cy="20.0215" r="5" fill="white"/> --}}
      </svg>
      <h2 class="text-2xl text-slate-700 dark:text-white sm:text-4xl">
           Find your perfect furry friend and give them a forever home.
      </h2>
      <h1 class="mt-1 sm:mt-3 text-4xl font-bold text-black dark:text-white sm:text-6xl">  
         <span class="bg-clip-text bg-gradient-to-tr from-teal-950 to-teal-600 dark:from-blue-600 dark:to-purple-400  text-transparent">  
            Welcome to the Pet Adoptions Page! 
        </span>
      </h1>
    </div>
    <div class=" mt-24 space-y-9 pt-32">
        
        {{-- @section('carrusel-content')
            @foreach($pets as $pet)
                @include('components.card', ['pet' => $pet])
            @endforeach
        @endsection --}}
        @include('components.carrusel')

        <div class="mt-8 space-y-4">
          <!-- Clients -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Title -->
                <div class="sm:w-1/2 xl:w-1/3 mx-auto text-center mb-6 md:mb-12">
                    <h2 class="text-xl font-semibold md:text-2xl md:leading-tight text-gray-800 dark:text-gray-200">
                        ¡Patitas del Desierto, Brigada Animal, y mas organizaciones confían en Adoptame!
                    </h2>
                </div>
                <!-- End Title -->
            
                <!-- Grid -->
                <div class="grid grid-cols-2 sm:grid-cols-4 md:grid-cols-5 gap-3 lg:gap-6">
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class=" items-center py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://fundacionjulieta.cl/wp-content/uploads/2022/10/Logo-Final-Julieta.png"> </img>
                </div>
            
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://scontent.fiqq1-1.fna.fbcdn.net/v/t39.30808-1/359432903_298498272539000_2896235725078690006_n.jpg?stp=dst-jpg_p120x120&_nc_cat=110&ccb=1-7&_nc_sid=4da83f&_nc_ohc=ilARoOseQQAAX9zeJ6K&_nc_ht=scontent.fiqq1-1.fna&oh=00_AfCcCosUHMitfrj9PVt-NkUpCD_Xcs9PzHgbZ-bEk26M3g&oe=6591863F"> </img>
                </div>
            
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://scontent.fiqq1-1.fna.fbcdn.net/v/t39.30808-6/273031684_3227129624279241_2257517300012165191_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=rxEtYMYMepoAX-eFvwW&_nc_ht=scontent.fiqq1-1.fna&oh=00_AfBKbLjI0cKk78bduF11CTlxAsYAcCWpshiXVANlXF1how&oe=6592A402"> </img>
                </div>
            
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://scontent.fiqq1-1.fna.fbcdn.net/v/t39.30808-1/391729675_710206577823947_6576309199411947279_n.jpg?stp=dst-jpg_p120x120&_nc_cat=102&ccb=1-7&_nc_sid=4da83f&_nc_ohc=4jxjxoVct2oAX-nG9Wi&_nc_ht=scontent.fiqq1-1.fna&oh=00_AfD4KBYJI86DFTL7bPj775LCh0ZZF4KPGHZw1qiiywGvLg&oe=65921239"> </img>
                </div>
            
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://scontent.fiqq1-1.fna.fbcdn.net/v/t39.30808-1/337396020_1044475230274313_2911875716695258096_n.jpg?stp=dst-jpg_p120x120&_nc_cat=105&ccb=1-7&_nc_sid=4da83f&_nc_ohc=cNwbDx8_1JoAX9v70-G&_nc_ht=scontent.fiqq1-1.fna&oh=00_AfBcrqtoD7g0NqSypQywebSAiEk30gir7NRm9THfr9GZbQ&oe=65914D76"> </img>
                </div>
            
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://pbs.twimg.com/profile_images/1298745787111878656/DyyxQVRe_400x400.jpg"> </img>
                </div>
            
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://scontent.fiqq1-1.fna.fbcdn.net/v/t39.30808-6/308677880_418275287097768_4668480329430199278_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=37XC4iJZ654AX_EhakH&_nc_ht=scontent.fiqq1-1.fna&oh=00_AfC41gF4zWw8UW1IDwVGcJKbOorJoHELK_cMWMzk1y7ZGQ&oe=659226AF"> </img>
                </div>
            
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://fundacionarca.cl/wp-content/uploads/2020/05/Logo_eslogan_sinfondo.png"> </img>
                </div>
            
                <div class="items-center justify-center p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class=" items-center justify-center py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://lirp.cdn-website.com/4fe36726/dms3rep/multi/opt/2432388-logo_largo-d3d94-7bec5d0b-1920w.png"> </img>
                </div>
            
                <div class="p-4 md:p-7 bg-gray-100 rounded-lg dark:bg-slate-800">
                    <img class="py-3 lg:py-5 w-16 h-auto md:w-20 lg:w-24 mx-auto text-gray-800 dark:text-gray-200" enable-background="new 0 0 2499 614" viewBox="0 0 2499 614" src="https://scontent.fiqq1-1.fna.fbcdn.net/v/t39.30808-6/308677880_418275287097768_4668480329430199278_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=efb6e6&_nc_ohc=37XC4iJZ654AX_EhakH&_nc_ht=scontent.fiqq1-1.fna&oh=00_AfC41gF4zWw8UW1IDwVGcJKbOorJoHELK_cMWMzk1y7ZGQ&oe=659226AF"> </img>
                </div>
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Clients -->
        </div>
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
  
  <!-- ========== FOOTER ========== -->
  {{-- <footer class="absolute bottom-0 inset-x-0 text-center py-5">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
      <p class="text-sm text-white/50">© 2023 Preline. A product of <a class="text-white font-medium hover:text-white/80" href="../index.html">Htmlstream</a></p>
    </div>
  </footer> --}}
  <!-- ========== END FOOTER ========== -->
  <script src="./node_modules/preline/dist/preline.js"></script>

@endsection
