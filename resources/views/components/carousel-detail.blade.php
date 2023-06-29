<div class="md:flex-1 px-4">
    <div x-data="{ image: 1 }" x-cloak>
      <div class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4">
  
       @forelse ( $images as $key => $image )
        <div x-show="image === {{$key + 1}}" class="h-64 md:h-80 rounded-lg bg-gray-100 mb-4 flex items-center justify-center">
            <img src="{{Storage::url($image)}}" alt="">
        </div>
       @empty
           
       @endforelse
    

        
      </div>

      <div class="flex -mx-2 mb-4">
       
      @forelse ( $images as $key => $image )

        <div class="flex-1 px-2">
            <button x-on:click="image = {{$key + 1 }}" :class="{ 'ring-2 ring-indigo-300 ring-inset': image === {{ $key + 1 }} }" class="focus:outline-none w-full rounded-lg h-24 md:h-32 bg-gray-100 flex items-center justify-center">
                {{ $key + 1 }} 
            </button>
        </div>

       @empty
           
       @endforelse

          
        
      </div>
    </div>
  </div>