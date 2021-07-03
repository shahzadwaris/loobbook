@extends('layouts.app')
@section('content')
{{-- header  --}}
<div class="container-fluid p-0">
   <div class="jumbotron jumbotron-fluid">
      <div class="container">
         <div class="row mx-0">
            <div class="col-12 w-100 text-center">
               <p class="lead">Share your personal style. Stay inspired.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- feed --}}
<div class="container">
   <div class="row">
      {{-- feed-div --}}
      <div class="col-8 ">
         <p class="text border-bottom">HYPE the looks you like, and +FAN the people you like to personalize your
            feed.
         </p>
         <p class="text-dark font-weight-bold">Hot looks, by diversity</p>
         <div class="row filters">
            <div class="col-12">
               filters here
            </div>
         </div>
         {{-- Outfit Card 1 --}}
         <div style="margin-top:20px" class="row container">
            <div class="row" >
               <img style=" border-radius: 50%; height: 50px;" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" alt="Avatar">
               <div class="col" style="display:inline;">
                  <div class="row" style="margin-left:10px"><a href="/"> NAME</a> 
                     <button style="margin-left:10px"data-view="NewFanButton" class="fan-button  pre-reg" href="/">
                     <span class="unfan"><i class="fa fa-check"></i> Fanned</span>
                     <span class="fan"><i class="fa fa-plus"></i> Fan</span>
                     </button>
                  </div>
                  <div class="row" style="margin-left:10px"> <a href="/">  INFO</a></div>
               </div>
            </div>
            <div class="container">
               <a href="/">Blue is my hue</a>
               <div class="look-info">
                  0
                  <i class="fa fa-comment-o"></i>
                  <span class="sep">·</span>
                  12 hours ago
               </div>
            </div>
            <div class="row">
               <a href="/"><img src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" ></a>
               <ul>
                  <li>
                     <a href="javascript:">
                     <i class="fa fa-search-plus"></i>
                     <span class="link-text">Zoom</span>
                     </a>
                  </li>
                  <li>
                     <a href="/">
                     <i class="fa fa-code"></i>
                     <span class="link-text">Embed</span>
                     </a>
                  </li>
                  <li>
                     <a href="/">
                     <i class="fa fa-eye-slash"></i>
                     <span class="link-text">Hide</span>
                     </a>
                  </li>
                  <li>
                     <a href="">
                     <i class="fa fa-flag"></i>
                     <span class="link-text">Flag</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="container"style="margin-top:10px">
               <div class="row " style="float:left;">
                  <button >HYPE</button>
               </div>
               <div style="margin-left:30px; float:left">79</div>
               <div style="margin-left:50px;float:left;">
                  <button >
                  Save
                  </button>
               </div>
               <ul data-view="SocialButtons"  class="" style="float:left;">
                  <a href="/">
                  <i class="fa fa-facebook "></i>
                  </a>
                  <a href="/">
                  <i style="margin-left:10px;"class="fa fa-twitter"></i>
                  </a>
                  <a href="/">
                  <i style="margin-left:10px;" class="fa fa-tumblr"></i>
                  </a>
                  <a href="/">
                  <i style="margin-left:10px; margin-bottom:30px;" class="fa fa-pinterest"></i>
                  </a>
               </ul>
            </div>
         </div>
         {{-- Outfit Card 2 --}}
         <div class="row container ">
            <div class="row" >
               <img style="border-radius: 50%; height: 50px;" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" alt="Avatar">
               <div class="col" style="display:inline;">
                  <div class="row" style="margin-left:10px"><a href="/"> NAME</a> 
                     <button style="margin-left:10px"data-view="NewFanButton" class="fan-button  pre-reg" href="/">
                     <span class="unfan"><i class="fa fa-check"></i> Fanned</span>
                     <span class="fan"><i class="fa fa-plus"></i> Fan</span>
                     </button>
                  </div>
                  <div class="row" style="margin-left:10px"> <a href="/">  INFO</a></div>
               </div>
            </div>
            <div class="container">
               <a href="/">Blue is my hue</a>
               <div class="look-info">
                  0
                  <i class="fa fa-comment-o"></i>
                  <span class="sep">·</span>
                  12 hours ago
               </div>
            </div>
            <div class="row">
               <a href="/"><img src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" ></a>
               <ul>
                  <li>
                     <a href="javascript:">
                     <i class="fa fa-search-plus"></i>
                     <span class="link-text">Zoom</span>
                     </a>
                  </li>
                  <li>
                     <a href="/">
                     <i class="fa fa-code"></i>
                     <span class="link-text">Embed</span>
                     </a>
                  </li>
                  <li>
                     <a href="/">
                     <i class="fa fa-eye-slash"></i>
                     <span class="link-text">Hide</span>
                     </a>
                  </li>
                  <li>
                     <a href="">
                     <i class="fa fa-flag"></i>
                     <span class="link-text">Flag</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="container"style="margin-top:10px">
               <div class="row " style="float:left;">
                  <button >HYPE</button>
               </div>
               <div style="margin-left:30px; float:left">79</div>
               <div   style="margin-left:50px;float:left;">
                  <button >
                  Save
                  </button>
               </div>
               <ul data-view="SocialButtons"  class="" style="float:left;">
                  <a href="/">
                  <i style="margin-left:10px;" class="fa fa-facebook "></i>
                  </a>
                  <a href="/">
                  <i style="margin-left:10px;" class="fa fa-twitter"></i>
                  </a>
                  <a href="/">
                  <i style="margin-left:10px;" class="fa fa-tumblr"></i>
                  </a>
                  <a href="/">
                  <i style="margin-left:10px; margin-bottom:30px;" class="fa fa-pinterest"></i>
                  </a>
               </ul>
            </div>
         </div>
      </div>
      <div class="col-lg-4 col-md-4 col-xs-4">
         <b>Spotlight<b>
         <div class="row">
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
         </div>

         <b>Trending<b>
         <div class="row">
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
         </div>

         <b>Stlyes<b>
         <div class="row">
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
         </div>

         <b>Occasions<b>
         <div class="row">
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
            <div class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="W3Schools" src="//wasabi-files.lbstatic.nu/files/looks/medium/2021/06/30/5502368_Petite-Paulina-Blue-Zara-Dress-Trainers-44.jpg?1625035988" width="100%" height="100%"></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
@endsection