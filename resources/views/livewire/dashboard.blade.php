<div class="mx auto text-center block max-w-sm p-6 mt-5 font-bold mx-auto">
    <h1>Bienvenido a tu panel de control {{ Auth::user()->name }}! </h1>        
</div>
<div class="grid grid-cols-1 lg:grid-cols-4 items-center">
    <a href="{{ route('show-shipments') }}" class="block max-w-sm p-6 mt-5 text-gray-50 bg-blue-900 border border-gray-200 rounded-lg shadow hover:bg-gray-100 hover:text-gray-700 mx-5">
        <h1>
            Colectar
        </h1>
        <h2>
            Ingresa para ver los envios que debes colectar *
        </h2>

        
        
        <h2>
            (0)
        </h2>
        
        <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700 mt-5">
            <div class="h-4 bg-blue-600 rounded-full dark:bg-blue-500" style="width: 2%"></div>
        </div>
        <svg class="w-12 h-12 dark:text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
        </svg>
    </a>
    
    <a href="{{ route('show-shipments') }}" class="block max-w-sm p-6 mt-5 text-gray-50 bg-blue-900 border border-gray-200 rounded-lg shadow hover:bg-gray-100 hover:text-gray-700 mx-5">
        <h1>
            Entregar
        </h1>
        
        
        <h2>
            Ingresa para registrar una entrega.
        </h2>
        
        
        
        
        <h2>
            (36/50)
        </h2>
        
        <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700 mt-5">
            <div class="h-4 bg-blue-600 rounded-full dark:bg-blue-500" style="width: 75%"></div>
        </div>
        <svg class="w-12 h-12 dark:text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"></path>
        </svg>
    </a>
    
    <a href="{{ route('show-shipments') }}" class="block max-w-sm p-6 mt-5 text-gray-50 bg-blue-900 border border-gray-200 rounded-lg shadow hover:bg-gray-100 hover:text-gray-700 mx-5">
        <h1>
            En planta
        </h1>
        
        <h2>
            Envios que actualmente se encuentran en el centro de distribución.
        </h2>
        
            
        
        <h2>
            (83/592)
        </h2>
        
        <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700 mt-5">
            <div class="h-4 bg-blue-600 rounded-full dark:bg-blue-500" style="width: 14%"></div>
        </div>
        <svg class="w-12 h-12 dark:text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21"></path>
            </svg>
    </a>
    
    <a href="{{ route('show-shipments') }}" class="block max-w-sm p-6 mt-5 text-gray-50 bg-blue-900 border border-gray-200 rounded-lg shadow hover:bg-gray-100 hover:text-gray-700 mx-5">
        <h1>
            Mis envios
        </h1>
        
        
        <h2>
            (Abrir el listado completo de tus envios)
        </h2>
        <svg class="w-12 h-12 dark:text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
        </svg>
       
    </a>
    

    
    <a href="{{ route('show-shipments') }}" class="block max-w-sm p-6 mt-5 text-gray-50 bg-blue-900 border border-gray-200 rounded-lg shadow hover:bg-gray-100 hover:text-gray-700 mx-5">
        <h1>
            Resumen
        </h1>
        
        
            <h2>
            En esta sección vas a encontrar los datos de periodo en curso y el anterior!
            </h2>
        
            <svg class="w-12 h-12 dark:text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"></path>
            </svg>

      
    </a>
    
    <a href="{{ route('show-shipments') }}" class="items-center block max-w-sm p-6 mt-5 text-gray-50 bg-blue-900 border border-gray-200 rounded-lg shadow hover:bg-gray-100 hover:text-gray-700 mx-5">
         <h1>
            Ayuda
        </h1>
            <h2>
            Solicita soporte en el caso de urgencia!
            </h2>
        
            <svg class="w-12 h-12 dark:text-white mx-auto" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path>
            </svg>
       

    </a>

                @auth
                    @if (auth()->user()->isputo())
                        <P>holaputo</P>
                    @endif
                @endauth
    
    
</div>