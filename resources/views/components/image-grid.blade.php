<!--Start - Image grid-->
<div class="flex flex-col justify-center max-w-md mx-auto mb-4 lg:max-w-none lg:flex-row">
    <div class="flex flex-col gap-2 select-none md:flex-row">
        <div class="flex flex-col flex-1">
            <a data-fancybox="gallery" class="flex flex-col flex-1 w-full " {{-- data-caption="<h6>View from
                Herzogstand over Lake Walchen, Bavaria</h6>" --}}
                href="{{ asset('storage/' . $main) }}" alt="{{ $main }}" draggable="false">
                <img alt="" class="object-cover object-center w-full shadow-lg h-96"
                    class="object-cover object-center w-full h-96" src="{{ asset('storage/' . $main) }}"
                    alt="{{ $main }}">

            </a>
        </div>
        <div class="flex flex-1">
            <div class="grid grid-cols-2 gap-2">
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
    {{-- <div class="hidden">
        <div class="grid grid-cols-12 gap-0.5">
            <a data-fancybox="gallery" class="flex flex-col flex-1 w-full"
                data-caption="<h6>View from
                Herzogstand over Lake Walchen, Bavaria</h6>"
                href="https://images.unsplash.com/photo-1493585552824-131927c85da2?ixlib=rb-4.0.3" draggable="false">
                <img alt="View from Herzogstand over Lake Walchen, Bavaria"
                    class="object-cover object-center w-full h-96"
                    src="https://images.unsplash.com/photo-1493585552824-131927c85da2?ixlib=rb-4.0.3">

            </a>
            <a data-fancybox="gallery" class="flex flex-col flex-1 w-full"
                data-caption="<h6>View from
                Herzogstand over Lake Walchen, Bavaria</h6>"
                href="https://images.unsplash.com/photo-1493585552824-131927c85da2?ixlib=rb-4.0.3" draggable="false">
                <img alt="View from Herzogstand over Lake Walchen, Bavaria"
                    class="object-cover object-center w-full h-96"
                    src="https://images.unsplash.com/photo-1493585552824-131927c85da2?ixlib=rb-4.0.3">

            </a>
        </div>
    </div> --}}
</div>
<!--End - Image grid-->
