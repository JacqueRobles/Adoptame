<div
  id="carouselExampleIndicators"
  class="relative flex overflow-x-auto"
  data-te-carousel-init
  data-te-ride="carousel">
  <!--Carousel indicators-->
  <div
    class="absolute bottom-0 left-0 right-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
    data-te-carousel-indicators>
    <button
      type="button"
      data-te-target="#carouselExampleIndicators"
      data-te-slide-to="0"
      data-te-carousel-active
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-current="true"
      aria-label="Slide 1"></button>
    <button
      type="button"
      data-te-target="#carouselExampleIndicators"
      data-te-slide-to="1"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 2"></button>
    <button
      type="button"
      data-te-target="#carouselExampleIndicators"
      data-te-slide-to="2"
      class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-white bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
      aria-label="Slide 3"></button>
  </div>
<div class="flex overflow-x-auto">
    <!-- Carousel container -->
    <div class="flex space-x-4 p-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Card 1 -->
      @yield('carrusel-content')

  
      <!-- Card 2 -->
      <div class="flex-none w-64 bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Card Content -->
        <div class="p-4">
          <h3 class="font-semibold text-lg mb-2">Card 2</h3>
          <p class="text-gray-600">Card content goes here.</p>
        </div>
      </div> 
  
      <!-- Add more cards as needed -->
    </div>
  </div>
</div>
  