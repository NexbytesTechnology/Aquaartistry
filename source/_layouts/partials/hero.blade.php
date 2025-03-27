<div class="relative h-screen overflow-hidden">
  <!-- Background Image Section -->
  <div class="absolute inset-0 bg-cover bg-center bg-[url('/assets/images/hero.jpeg')] ">
    <div class="absolute inset-0 bg-gradient-to-t from-aqua-900/80 via-aqua-900/50 to-aqua-900/30"></div>
  </div>

  <!-- Content Section -->
  <div class="relative max-w-7xl mx-auto px-6 md:px-12 z-10 h-full  lg:px-8 flex flex-col-reverse md:flex-row  justify-center items-center text-center md:text-left">
    <!-- Left Text Section -->
    <div class="flex flex-col items-center md:items-start justify-center w-full md:w-1/2 mb-10 md:mb-0">
      <!-- Tagline -->
      <div class="inline-block px-4 py-1.5 mb-4 rounded-full bg-white/10 backdrop-blur-sm border border-white/20">
        <p class="text-white/90 text-sm font-medium">Redefining Hydration</p>
      </div>
      
      <!-- Headline -->
      <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4">
        Pure Hydration, <span class="text-gradient">Perfect Design</span>
      </h1>
      
      <!-- Description Text -->
      <p class="text-white/80 text-base sm:text-lg md:text-xl mb-6 max-w-xl">
        Experience the perfect blend of elegance and functionality with our premium water bottles designed for the modern lifestyle.
      </p>

      <!-- Button -->
      <button class="bg-white/10 text-white border border-white/20 hover:bg-white/20 font-medium py-2 px-4 md:px-6 rounded-lg text-base md:text-lg">
        Know More
      </button>
    </div>

    <!-- Right Image Section -->
    <div class="w-full md:w-1/2 flex justify-center  ">
      <img src="{{ $page->baseUrl }}/assets/images/hero-2.png" alt="Packaging products" class="w-full h-auto mt-[5rem] transform rotate-45">
    </div>
  </div>
</div>
