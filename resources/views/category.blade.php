 @extends('layouts.main')

 @section('main-section')
     <style>
         .sidebar {
             position: fixed;
             top: 50px;
             left: 0;
             height: 100%;
             width: 200px;
             /* Adjust the width as needed */
             background-color: #3a1a1a;
             /* Example background color */
             padding: 20px;
             /* Example padding */
         }
     </style>


     <div>
         <div class="sidebar">
             <div
                 class="   align-items-center align-items-sm-start border px-2 px-sm-3 py-2  ">
                 <a href="/"
                     class="d-flex align-items-center pb-sm-3 mb-md-0 me-md-auto text-white text-decoration-none">
                     <span class="fs-5">B<span class="d-none d-sm-inline">ccc</span></span>
                 </a>
                 <ul class="nav nav-pills flex-column flex-nowrap flex-shrink-1 flex-sm-grow-0 flex-grow-1 mb-sm-auto mb-0 justify-content-center align-items-center align-items-sm-start"
                     id="menu">
                     <li class="nav-item">
                         <a href="#" class="nav-link px-sm-0 px-2">
                             <i class="fs-5 bi-house"></i><span class="ms-1 d-none d-sm-inline">Home</span>
                         </a>
                     </li>
                     <li>
                         <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-sm-0 px-2">
                             <i class="fs-5 bi-speedometer2"></i><span class="ms-1 d-none d-sm-inline">Dashboard</span>
                         </a>
                     </li>
                     <li>
                         <a href="#" class="nav-link px-sm-0 px-2">
                             <i class="fs-5 bi-table"></i><span class="ms-1 d-none d-sm-inline">Orders</span></a>
                     </li>
                     <li>
                         <a href="#" class="nav-link px-sm-0 px-2">
                             <i class="fs-5 bi-grid"></i><span class="ms-1 d-none d-sm-inline">Products</span></a>
                     </li>
                     <li>
                         <a href="#" class="nav-link px-sm-0 px-2 text-truncate">
                             <i class="fs-5 bi-people"></i><span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                     </li>
                     <li class="nav-item">
                         <a href="#submenu1" class="nav-link px-sm-0 px-2" data-bs-toggle="collapse"
                             data-bs-target="#submenu1">
                             <i class="fs-5 bi-star-fill"></i><span class="ms-1 d-none d-sm-inline">Expand <span
                                     class="bi-caret-down"></span></span>
                         </a>
                     </li>
                 </ul>
             </div>
         </div>
         <div class="container">
             @include('type.l-shape')
         </div>
     </div>



     {{-- <div class="col overflow-auto ">
         <div class="row ">
             <div class="col pt-3">
                 <div class="row justify-content-center">
                     <div class="card row border-0 m-2" style="width: 50rem;">
                         <img src="{{ Storage::url('photos/cph1.jpg') }}" class="card-img-top">
                         <div class="card-tittle"><b>L-Shaped Modular Kitchen Layout</b></div>
                         <div class="card-body">
                             <p class="card-text">L-Shaped Modular Kitchen Layout is regarded as one of the best
                                 modular
                                 kitchen design solutions and is the ideal answer for busy Indian households.
                                 These
                                 kitchens are safer, more practical, and time-effective in terms of utilizing the
                                 cooking
                                 space because of their U-shaped form. Given how obsessed we Indians are with
                                 food, every
                                 household in the nation places a high priority on functionality. The greatest
                                 modular
                                 kitchen designs make sure that the resident chef has access to all the tools and
                                 supplies they need. It should always be within easy reach and not need much
                                 movement.
                             </p>
                         </div>
                     </div>
                     <div class="card row m-2" style="width: 50rem;">
                         <img src="{{ Storage::url('photos/cph2.jpg') }}" class="card-img-top" alt="...">
                         <div class="card-tittle"><b>U-Shaped Modular Kitchen Layout</b></div>
                         <div class="card-body">
                             <p class="card-text">A u-Shaped Modular Kitchen Layout is one of the best solutions
                                 for
                                 modular kitchen design and is the ideal answer for busy Indian households. These
                                 kitchens are safer, more time-effective, and more practical in how they employ
                                 the
                                 cooking space due to their U-shaped form. In any Indian household, functioning
                                 is of the
                                 utmost importance given how enthusiastic we are about food. Making sure that the
                                 head
                                 chef of our houses has access to all the required supplies and equipment is a
                                 sign of
                                 the greatest modular kitchen design. It shouldn't need much movement and should
                                 always
                                 be within reach.</p>
                         </div>
                     </div>
                     <div class="card row m-2" style="width: 50rem;">
                         <img src="{{ Storage::url('photos/cph4.jpg') }}" class="card-img-top" alt="...">
                         <div class="card-tittle"><b>Straight Modular Kitchen</b></div>
                         <div class="card-body">
                             <p class="card-text">A "single-line kitchen" is another name for a Straight Modular
                                 Kitchen.
                                 These straight Modular kitchens, which are created on a single wall, are a
                                 popular
                                 Indian-style small modular kitchen design. Most of the time, these designs put
                                 all the
                                 cabinets, appliances, cooktop, and sink within easy reach. It is often regarded
                                 as the
                                 ideal modular kitchen plan for studio apartments and other small homes. Due to
                                 the
                                 proximity of all the work zones, this modular kitchen straight design maintains
                                 a fluid
                                 workflow.</p>
                         </div>
                     </div>

                     <div class="card row m-2" style="width: 50rem;">
                         <img src="{{ Storage::url('photos/cph5.jpg') }}" class="card-img-top" alt="...">
                         <div class="card-tittle"><b> Parallel Shaped Kitchen Layout</b></div>
                         <div class="card-body">
                             <p class="card-text">Parallel Shaped Kitchen Layout sometimes referred to as galley
                                 kitchens, are made to fit between two walls. Two counters run parallel to one
                                 another in
                                 an alley-like kitchen. Due to the substantial room provided for all necessary
                                 appliances
                                 and goods within easy reach, these parallel kitchens are unintentionally the
                                 best
                                 modular kitchen. The parallel-shaped kitchen layout provides the most storage
                                 space
                                 possible. Because one person often spends most of their time in the kitchen,
                                 this layout
                                 is especially the greatest option for a modular kitchen.</p>
                         </div>
                     </div>

                     <div class="card row  m-2" style="width: 50rem;">
                         <img src="{{ Storage::url('photos/cph6.jpg') }}" class="card-img-top" alt="...">
                         <div class="card-tittle"><b>Island Modular Kitchen Layout</b></div>
                         <div class="card-body">
                             <p class="card-text">One of the best modular kitchens is the island kitchen, which
                                 has more
                                 work space in the center. Depending on the size of the available area, these
                                 island
                                 counters can be matched with a straight, U-shaped, or L-shaped kitchen. A
                                 freestanding
                                 counter of any size put to supplement an existing kitchen layout is referred to
                                 as an
                                 island in the modular kitchen design. Depending on the needs, the Island Modular
                                 Kitchen
                                 Layout additionally has a cooktop or sink or even double as a breakfast table.
                             </p>
                         </div>
                     </div>

                     <div class="card row m-2" style="width: 50rem;">
                         <img src="{{ Storage::url('photos/cph8.jpg') }}" class="card-img-top" alt="...">
                         <div class="card-tittle"><b>Open Modular Kitchen Layout</b></div>
                         <div class="card-body">
                             <p class="card-text">An open modular kitchen combines modular cabinets, counters,
                                 and
                                 appliances to produce an open and roomy cooking space. The modular pieces offer
                                 flexibility and customization possibilities by allowing for a wide range of
                                 configurations to meet different needs and tastes. The open design of the
                                 kitchen
                                 encourages social interaction and discussion while allowing for simple movement
                                 and
                                 access to all of its components. For individuals who enjoy hosting parties or
                                 have large
                                 families, it is the perfect option. An open modular kitchen arrangement also
                                 makes the
                                 most of storage space and produces a tidy, functional workspace.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div> --}}
 @endsection
