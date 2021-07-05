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
      <div class="col-lg-8 col-md-4 col-xs-4 ">
         <p class="text border-bottom">HYPE the looks you like, and +FAN the people you like to personalize your
            feed.
         </p>
         <p class="text-dark font-weight-bold">Hot looks, by diversity</p>
         <div class="row filters">
            <div class="col-12">
               filters here
            </div>
         </div>
         {{-- FEED POST 1 --}}
         <div style="margin-top:10px " class="container">
            <div class="row">
               <div class="row col-2"> 
                  <img style="border-radius: 50%; height: 50px;" src="{{asset('/image.jpg')}}" alt="profile picture">
               </div>
               <div class="col">
                  <div class="row"><a href="/"> NAME</a> 
                  <button style="margin-left:10px"data-view="NewFanButton" class="button  pre-reg" href="/">
                     <span class="unfan"><i class="fa fa-check"></i> Fanned</span>
                     <span class="fan"><i class="fa fa-plus"></i> Fan</span>
                     </button>
                  </div>
                  <div class="row">from where</div>
               </div>
            </div>
            <div class="row ">POST TITLE</div>
            <div class="row ">
               0
               <i class="fa fa-comment-o"></i>
               <span class="sep">·</span>
               12 hours ago
            </div>
            <div class="row ">
               <img style="width:80%; height:80%" src="{{asset('/image.jpg')}}" alt="BIG PICTURE">
               <ul>
                  <li>
                     <a href="/">
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
            <div style="margin-top: 10px"class="row">
               <div class="col-2">
                  <button class="button">HYPE</button>
               </div>
               <div class="col-2">
                  <b>20</b>
               </div>
               <div class="col-2">
                  <button class="button" >SAVE</button>
               </div>
               <div class="col-6">
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
            <div class="row">
               #TAGS HERE
            </div>
            <p class="border-bottom"></p>
         </div>

         {{-- FEED POST 2 --}}
         <div style="margin-top:10px" class="container">
            <div class="row">
               <div class="row col-2"> 
                  <img style="border-radius: 50%; height: 50px;" src="{{asset('/image.jpg')}}" alt="profile picture">
               </div>
               <div class="col">
                  <div class="row"><a href="/"> NAME</a> 
                  <button style="margin-left:10px"data-view="NewFanButton" class="fan-button  pre-reg" href="/">
                     <span class="unfan"><i class="fa fa-check"></i> Fanned</span>
                     <span class="fan"><i class="fa fa-plus"></i> Fan</span>
                     </button>
                  </div>
                  <div class="row">from where</div>
               </div>
            </div>
            <div class="row ">POST TITLE</div>
            <div class="row ">
               0
               <i class="fa fa-comment-o"></i>
               <span class="sep">·</span>
               12 hours ago
            </div>
            <div class="row ">
               <img style="width:80%; height:80%" src="{{asset('/image.jpg')}}" alt="BIG PICTURE">
               <ul>
                  <li>
                     <a href="/">
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
            <div style="margin-top: 10px"class="row">
               <div class="col-2">
                  <button >HYPE</button>
               </div>
               <div class="col-2">
                  <b>20</b>
               </div>
               <div class="col-2">
                  <button >SAVE</button>
               </div>
               <div class="col-6">
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
            <div class="row">
               #TAGS HERE
            </div>
            <p class="border-bottom"></p>
         </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-xs-4">
         <h4>Spotlight<h4>
         <div class="row">
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}"width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
         
            <p class="border-bottom"></p>
         </div>
         
         <h4>Trending<h4>
         <div class="row">
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}"width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <p class="border-bottom"></p>
         </div>
         
         <h4>Style<h4>
         <div class="row">
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}"width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <p class="border-bottom"></p>
         </div>
         
         <h4>Occasion<h4>
         <div class="row">
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <div style="margin-bottom:20px" class="row">
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}"width="100%" height="100%"></a>
               </div>
               <div class="col-6">
                  <a href="/">
                  <img  alt="side small picture" src="{{asset('/image.jpg')}}" width="100%" height="100%"></a>
               </div>
            </div>
            <p class="border-bottom"></p>
         </div>

         <h4>People you may like</h4>
         <div style="margin-bottom:20px"class="row">
            <div class="row">
               <div class="col"><img style="border-radius: 50%; height: 50px;" src="{{asset('/image.jpg')}}" alt="profile picture"></div>
               <div class="col">
                  <div class="row">NAME</div>
                  <div class="row">description</div>
                  <div class="row"><button class="fan-button" href="/">
                     <span class="fan"><i class="fa fa-plus"></i> Fan</span>
                     </button></div>
               </div>
            </div>
         </div>
         <div style="margin-bottom:20px" class="row">
            <div class="row">
               <div class="col"><img style="border-radius: 50%; height: 50px;" src="{{asset('/image.jpg')}}" alt="profile picture"></div>
               <div class="col">
                  <div class="row">NAME</div>
                  <div class="row">description</div>
                  <div class="row"><button class="fan-button" href="/">
                     <span class="fan"><i class="fa fa-plus"></i> Fan</span>
                     </button></div>
               </div>
            </div>
         </div>

         <h4>Featured Collection</h4>
         <div style="margin-bottom:20px" class="row">
            <div class="row">
               <div class="col"><img style="height: 50px;" src="{{asset('/image.jpg')}}" alt="profile picture"></div>
               <div class="col">
                  <div class="row">NAME</div>
                  <div class="row">description</div>
               </div>
            </div>
         </div>
         <div style="margin-bottom:20px" class="row">
            <div class="row">
               <div class="col"><img style="height: 50px;" src="{{asset('/image.jpg')}}" alt="profile picture"></div>
               <div class="col">
                  <div class="row">NAME</div>
                  <div class="row">description</div>
               </div>
            </div>
         </div>

         <h4>Styles</h4>
         <ul>
            <li>
            <a href="/">Style 1</a>
            </li>
            <li>
            <a href="/">Style 2</a>
            </li>
         </ul>
         <h4>Countries</h4>
         <ul>
            <li>
            <a href="/">Country 1</a>
            </li>
            <li>
            <a href="/">COuntry 2</a>
            </li>
         </ul>
         <h4>Category</h4>
         <ul>
            <li>
            <a href="/">Category 1</a>
            </li>
            <li>
            <a href="/">Category 2</a>
            </li>
         </ul>

         <div class="container">
         FOOTER</div>
      </div>
   </div>
</div>
</div>
@endsection