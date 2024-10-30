<x-layouts.base>
@auth

@include('components.layouts.navbars.sidebar')
@include('components.layouts.navbars.topbar')
{{ $slot }}

@include('components.layouts.footers.footer')
@include('components.layouts.navbars.right-sidebar')
@endauth

@guest
      
        @if (!auth()->check() && in_array(request()->route()->getName(),['login'],))
           
            {{ $slot }}
       
        @endif
    @endguest



</x-layouts.base>