 




    <x-layout>
      <x-hero   />
      
    
     
      <x-blogs-section 
      :blogs="$blogs" 
      :categories="$categories"
                       {{-- "$currentCategory ? $currentCategory : null ; "   --}}
                       {{-- $currentCategory??null  ###shorthad --}}
      :currentCategory="$currentCategory ?? null"
       />
      
      
     
     
     
      <x-subscribe  />
      <!-- footer --> 
    </x-layout>
   