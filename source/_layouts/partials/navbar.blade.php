<nav id="navbar" class="bg-transparent fixed w-full z-20 ">
    <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-3">
      <a href="{{$page->baseUrl}}" class="flex items-center space-x-3 rtl:space-x-reverse">
        {{-- <img src="{{$page->baseUrl}}/assets/images/logo.png" class="h-14 " alt="aquaartistry Logo"> --}}
        <h1 class="text-xl md:text-2xl font-bold transition-colors duration-300 text-white">
          <span class="text-gradient">Aqua</span>artistry
        </h1>
      </a>
      <div class="flex flex-1 md:flex-none md:order-2 justify-end space-x-3 rtl:space-x-reverse">
        <a href="{{$page->baseUrl}}/contact">
        <button type="button" class="text-white hover:bg-[#0d9be7e0]  bg-[#0d9be7]  font-medium rounded-full text-sm px-4 py-2 hidden  md:flex">CONTACT US</button>
        </a>
        <button id="navbar-toggle" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
          </svg>
        </button>
      </div>
      <div class="items-center justify-between w-full hidden  overflow-hidden lg:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium bg-gray-500 md:bg-transparent border rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0">
       
              <li class="border-b md:border-0 border-gray-400">
                <a href="{{ $page->baseUrl}}" class="block py-2 px-3 text-white  rounded md:hover:bg-transparent font-semibold text-md md:hover:text-[#0d9be7] md:p-0">Home</a>
              </li>
              <li class="border-b md:border-0 border-gray-400">
                <a href="{{ $page->baseUrl}}/about" class="block py-2 px-3 text-white  rounded md:hover:bg-transparent font-semibold text-md md:hover:text-[#0d9be7] md:p-0">About</a>
              </li>
              <li class="border-b md:border-0 border-gray-400">
                <a href="{{ $page->baseUrl}}/product" class="block py-2 px-3 text-white  rounded md:hover:bg-transparent font-semibold text-md md:hover:text-[#0d9be7] md:p-0">Product</a>
              </li>
              <li class="border-b md:border-0 border-gray-400">
                <a href="{{ $page->baseUrl}}/gallery" class="block py-2 px-3 text-white  rounded md:hover:bg-transparent font-semibold text-md md:hover:text-[#0d9be7] md:p-0">Gallery</a>
              </li>
              <li class="border-b md:border-0 md:hidden border-gray-400">
                <a href="{{ $page->baseUrl}}/contact" class="block py-2 px-3 text-white  rounded md:hover:bg-transparent font-semibold text-md md:hover:text-[#0d9be7] md:p-0">Contact</a>
              </li>
          
        
        </ul>
      </div>
    </div>
  </nav>
  
  <script>
    
    document.getElementById("navbar-toggle").addEventListener("click", function () {
      const navbarMenu = document.getElementById("navbar-sticky");
      navbarMenu.classList.toggle("hidden");
    });


    document.addEventListener('DOMContentLoaded', function () {
      const menuToggle = document.getElementById('menu-toggle');
      const menu = document.getElementById('menu');
    const navbar = document.getElementById('navbar');
    const navLinks = document.querySelectorAll('#navbar a'); 
    
   
    const handleScroll = () => {
      if (window.scrollY > 60) {
        navbar.classList.add('bg-[#eceff1]', 'bg-opacity-80', 'backdrop-blur-md');
        navbar.classList.remove('bg-transparent');

       
        navLinks.forEach(link => {
          link.classList.remove('text-white'); 
          link.classList.add('text-black');
        });
      } else {
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('bg-[#eceff1]', 'bg-opacity-80', 'backdrop-blur-md');
        
       
        navLinks.forEach(link => {
          link.classList.remove('text-black'); 
          link.classList.add('text-white');
        });
      }
    };

   
    window.addEventListener('scroll', handleScroll);
  });

  </script>