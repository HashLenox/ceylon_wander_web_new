 <!--Start - Image grid-->
 <div class="flex flex-col justify-center max-w-full my-8 mb-4 rounded-lg lg:max-w-none lg:flex-row">
     <div class="flex flex-col gap-2 select-none md:flex-row">
         <!-- Left side image -->
         <div class="relative flex-1">
             <a data-fancybox="gallery" class="block w-full h-full "
                 data-caption="<h6>View from Herzogstand over Lake Walchen, Bavaria</h6>"
                 href="{{ asset('storage/' . $main) }}" alt="{{ $main }}" draggable="false">
                 <img alt="View from Herzogstand over Lake Walchen, Bavaria"
                     class="object-cover object-center w-full h-full lg:rounded-l-lg md:rounded-l-lg "
                     src="{{ asset('storage/' . $main) }}" alt="{{ $main }}">
                 <div
                     class="absolute inset-0 bg-black lg:rounded-l-lg md:rounded-l-lg bg-opacity-20 hover:bg-opacity-0 sm:rounded-t-lg">
                 </div>
             </a>
         </div>


         <!-- Right side grid -->
         <div class="flex-1 ">
             <div class="relative grid w-full h-full grid-cols-2 gap-2 ">
                 @foreach ($images as $index => $image)
                     @if ($index < 4)
                         <a data-fancybox="gallery" class="flex flex-col flex-1 w-full" {{-- data-caption="<h6>View from Herzogstand over Lake Walchen, Bavaria</h6>" --}}
                             href="{{ asset('storage/' . $image) }}">
                             <img class="object-cover h-full shadow-lg" alt=""
                                 src="{{ asset('storage/' . $image) }}">
                         </a>
                     @endif
                 @endforeach
             </div>
         </div>

     </div>
     <div class="hidden">
         <div class="grid grid-cols-12 gap-0.5">
             @foreach ($images as $index => $image)
                 @if ($index >= 4)
                     <a data-fancybox="gallery" class="flex flex-col flex-1 w-full" {{-- data-caption="<h6>View from Herzogstand over Lake Walchen, Bavaria</h6>" --}}
                         href="{{ asset('storage/' . $image) }}">
                         <img class="object-cover h-full " alt="" src="{{ asset('storage/' . $image) }}">
                     </a>
                 @endif
             @endforeach

         </div>
     </div>
 </div>
 <!--End - Image grid-->
