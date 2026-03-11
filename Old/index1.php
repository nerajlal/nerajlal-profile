<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Neraj Lal S</title>

  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body class="bg-slate-900 text-slate-200">

  <main class="m-6 md:mx-auto max-w-6xl">
  <!-- NAVBAR START -->

  <div class="container mx-auto mb-7 h-8">
    <nav class="hidden md:flex justify-end space-x-5">
     <a href="#about"><span class="text-xl font-bold hover:opacity-75 hover:border-b-2 border-slate-200">About</span>
     <a href="#contact"><span class="text-xl font-bold hover:opacity-75 hover:border-b-2 border-slate-200">Contact</span>
    </nav>

    <!-- Mobile Menu -->
    <nav class="flex md:hidden justify-end">
      <button id="menuOpen" class="text-xl font-bold">Menu</button>
    </nav>
    <div id="mobileMenu"
      class="fixed top-0 left-0 w-screen flex h-screen justify-end items-center z-50 hidden">
      <div class="text-xl items-center font-bold p-10 py-32 w-3/4 h-full bg-slate-900/70 backdrop-blur-sm rounded-l-3xl">
        <button id="menuClose" class="absolute right-10 top-6 text-xl font-bold hidden">Close</button>
        <a href="index.html"><p class="my-5">Home</p></a>
        
        <a href="#about"><p class="my-5">About</p></a>
        <p class="my-5">Contact</p>
      </div>
    </div>
  </div>
  <!-- NAVBAR END -->

  <!-- HERO START -->
  <div class="relative container mx-auto p-7 pt-36 md:pt-44 bg-[url('../img/bg.jpg')] rounded-2xl">
    <h4 class="text-lg font-semibold text-zinc-50" align="right">MERN Stack Developer</h4>
    <!-- <img src="./assets/img/neraj.png" alt="Profile Pic" height="40%" width="40%" style="float: left;"> -->
    
    <h1 class="text-6xl font-bold mt-5 text-zinc-50" align="right">Neraj <br>Lal S</h1>
    <div class="absolute top-0 right-0 flex space-x-5 p-8">
      
      <a href="https://wa.link/0pf0zh"><img class="w-7" src="assets/img/social/whatsapp.svg" alt="whatsapp" srcset=""></a>
      <a href="https://www.instagram.com/_t_h_e_dream_maker_/"><img class="w-7" src="assets/img/social/instagram.svg" alt="instagram" srcset=""></a>
      <a href="https://www.linkedin.com/in/nerajlal"><img class="w-7" src="assets/img/social/linkedin.svg" alt="linkedin" srcset=""></a>
      <a href="https://github.com/nerajlal"><img class="w-7" src="assets/img/social/github.svg" alt="github" srcset=""></a>      
      <a href="mailto:nerajnerajlal@gmail.com"><img class="w-7" src="assets/img/social/gmail.svg" alt="gmail" srcset=""></a>
      <a href="https://nerajlal.blogspot.com/"><img class="w-8" src="assets/img/social/blogger.svg" alt="Blogger" srcset=""></a>
    </div>
  </div>
  <!-- HERO END -->

  <!-- Technology Marquee -->
  <div class="container mx-auto my-10">
    <div class="slide ease-linear flex space-x-6">
      <img class="w-12 h-12" src="assets/img/tech/bootstrap.svg" alt="Bootstrap" />
      <img class="w-12 h-12" src="assets/img/tech/css3.svg" alt="CSS3" />
      <img class="w-12 h-12" src="assets/img/tech/html5.svg" alt="HTML5" />
      <img class="w-12 h-12" src="assets/img/tech/javascript.svg" alt="JavaScript" />  
      <img class="w-12 h-12" src="assets/img/tech/c.svg" alt="C" />
      <img class="w-12 h-12" src="assets/img/tech/cplusplus.svg" alt="C++" />
      <img class="w-12 h-12" src="assets/img/tech/mysql.svg" alt="SQL" />
      <img class="w-12 h-12" src="assets/img/tech/php.svg" alt="PHP" />
      <img class="w-12 h-12" src="assets/img/tech/python.svg" alt="Python" />
      <img class="w-12 h-12" src="assets/img/tech/sql.svg" alt="Sqlite" />
      <img class="w-12 h-12" src="assets/img/tech/excel.svg" alt="Excel" />
      <img class="w-12 h-12" src="assets/img/tech/powerpoint.svg" alt="PowerPoint" />
      <img class="w-12 h-12" src="assets/img/tech/word.svg" alt="Word" />
      <img class="w-12 h-12" src="assets/img/tech/visualstudiocode.svg" alt="Visual Studio Code" />
      <img class="w-12 h-12" src="assets/img/tech/window.svg" alt="Windows" />
      <img class="w-12 h-12" src="assets/img/tech/linux.svg" alt="Linux" />

    </div>
  </div>
  <!-- Technology Marquee End -->

  <!-- About -->

  <div class="container mx-auto my-14 md:my-20">

    <h2 id="about" class="text-3xl font-bold mb-5">A Little About Me</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-10" name="about">
      <div>
        <p class="leading-relaxed"> To achieve my professional excellence in the rapidly growing world of technology and utilise my
        entire knowledge, skills, passion and attitude towards the growth of organisation.</p>
        <br>
        <h2 class="text-3xl font-bold mb-5">MERN Stack Developer</h1>
          <p class="leading-relaxed">I can create components and features on the server side and client side, accessed by a user through
          a frontend application or system. I can create, maintain, test and debug the entire website.</p>
      </div>
      <div id="contact" class="flex justify-center md:justify-end items-center">
        <div class="grid grid-cols-2 gap-5 text-center font-semibold w-full md:w-max">
          <a href="resume.pdf" class="block col-span-2 border-2 rounded border-blue-500 py-3 px-5 hover:bg-blue-500">Resume</a> 
          <a href="https://wa.link/0pf0zh" class="block border-2 rounded border-blue-500 py-3 px-5 hover:bg-blue-500">Whatsapp</a>
          <a href="mailto:nerajnerajlal@gmail.com" class="block border-2 rounded border-blue-500 py-3 px-5 hover:bg-blue-500">Email</a>
          <a href="experiance.png" class="block col-span-2 border-2 rounded border-blue-500 py-3 px-5 hover:bg-blue-500">Experiance</a>
        </div>
      </div>
    </div>

  </div>

  <!-- About End -->

  <!-- Cards -->
  <div class="container mx-auto my-16">
    <h2 class="text-3xl font-bold mb-7" id="new">My Projects</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/anonymous.webp" alt="Anonymous"><center>MISSING PERSON FINDING</center>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/missing-person-finding-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/farming.webp" alt="Farming Assistant"><center>FARMING ASSISTANT</center>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/farming-assistant-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/carseller.webp" alt="Carseller"><center>ONLINE CARSELLER</center>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/carseller-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/gas.webp" alt="GAS Agency"><center>GAS AGENCY</center>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/gas-agency-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/dps.webp" alt="Decease Prediction System"><center>DECEASE PREDICTION </center>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/decease-prediction-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/ksrtc.webp" alt="KSRTC"><center>KSRTC MANAGEMENT</center>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/ksrtc-management-system-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
        </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/fish.webp" alt="Fish Store"><CENTER>ONLINE FISH STORE</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/online-fish-store-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/gdrive.webp" alt="Google drive Clone"><CENTER>GOOGLE DRIVE CLONE</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/google-drive-clone-in-html-and-css.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/ksrtcsir.webp" alt="KSRTC"><CENTER>KSRTC CONCESSION SYSTEM</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/kstrc-consession-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/personalprofile.webp" alt="Personal Profile"><CENTER>PERSONAL PROFILE</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/nerajlal-profile.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
        <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
          <img class="rounded-xl" src="assets/img/works/gst.webp" alt="GST"><CENTER>GST MANAGEMENT SYSTEM</CENTER>
          <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
            <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
          </div>
        </div>
        <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
          <img class="rounded-xl" src="assets/img/works/tms.webp" alt="Time Table Management System"><CENTER>TIMETABLE MANAGEMENT SYSTEM</CENTER>
          <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
            <a href="https://github.com/nerajlal/timetable-management-system-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
          </div>
        </div>
        <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
          <img class="rounded-xl" src="assets/img/works/wedme.webp" alt="Matrimony Site"><CENTER>MATRIMONY SITE</CENTER>
          <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
            <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
          </div>
        </div>
        <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
          <img class="rounded-xl" src="assets/img/works/farm.webp" alt="Farm"><CENTER>ONLINE FARM</CENTER>
          <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
            <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
          </div>
        </div>
       <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/baby.webp" alt="Baby Sitter"><CENTER>DAYCARE SYSTEM</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/child-care-in-php.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/carrent.webp" alt="Car Rent"><CENTER>CARRENTING SYSTEM</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/shop.webp" alt="Shop"><CENTER>ONLINE IT SHOP</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/career.webp" alt="Career Plus"><CENTER>ONLINE EDUCATION SITE</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      
      
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/panchayat.webp" alt="Digital Panchayath"><CENTER>DIGITAL PANCHAYATH</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/placement.webp" alt="Placement System"><CENTER>ONLINE PLACEMENT SYSTEM</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/price.webp" alt="Price Comparison"><CENTER>ONLINE PRICE COMPARISON</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/resume.webp" alt="resume Builder"><CENTER>RESUME BUILDER</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/smartcity.webp" alt="Smart City"><CENTER>SAMRT CITY</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <img class="rounded-xl" src="assets/img/works/hotstar.webp" alt="Hotstar Clone"><CENTER>HOTSTAR CLONE</CENTER>
        <div class="hidden w-full h-full group-hover:flex justify-center items-center absolute top-0 left-0 backdrop-blur-sm bg-blue-500/50">
          <a href="https://github.com/nerajlal/hotstar-clone-.git" target="_blank" class="border-2 rounded py-3 px-5 font-bold hover:bg-blue-500/50">View Project</a>
        </div>
      </div>
      
      <center>
        <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
          
          <button></button>
          
        </div>
      </center>

<center>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        <a href="index.php#new ">
        <button> VIEW LESS</button>
        </a>
      </div>
    </center>

    <center>
      <div class="relative p-1 bg-blue-400 rounded-2xl transition overflow-hidden group">
        
        <button></button>
        
      </div>
    </center>

  </div>
  </main>

  <div class="container max-w-6xl mx-auto flex mt-20 py-5 justify-center bg-blue-600 bg-[url('../img/bg.jpg')] rounded-t-3xl">
    <span class="text-center text-sm font-semibold text-white">Made By <a>Neraj Lal</a></span>
  </div>

  <script src="./assets/js/bundle.js"></script>
</body>

</html>