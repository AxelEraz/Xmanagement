<div class="grid grid-cols-1 md:grid-cols-2 items-center">
    <div class="mx-auto mt-5 px-5 bg-blue-900 rounded-lg">
        @livewire('create-shipment')
    </div>
    
    <div class="mx-auto mt-5 px-5 bg-white rounded-lg">
    <h5 class="mb-2 mt-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">CREAR CLIENTE</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400, mb-5 ">Registra un cliente para tu logistica</p>        
                
    
        @livewire('create-cl')
    
    </div>

    <div class="mx-auto mt-5 px-5 bg-white rounded-lg">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BUSCAR ENVIO</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Busca un envío particular segun su:</p>
        <form action="" method="post">
         <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ID</label>
           <div class="flex">
              <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-r-0 border-gray-300 rounded-l-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
                ID
             </span>
              <input type="text" id="website-admin" class="rounded-none rounded-r-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="12345678">
            </div>
        </form>
    </div>
        <a href="{{ route('show-shipments') }}" class="block max-w-sm p-6 mt-5 text-gray-50 bg-gray-700 border border-gray-200 rounded-lg shadow hover:bg-gray-100 hover:text-gray-700 mx-5">
        <h1>
            Asignados
        </h1>
        

        <h2>
            Asigna tus envios con el scanner!
        </h2>
        
        <h2>
            Todos los envios fueron asignados!
        </h2>
        
        <h2>
            (100%)
        </h2>
        
        <div class="w-full h-4 mb-4 bg-gray-200 rounded-full dark:bg-gray-700 mt-5">
            <div class="h-4 bg-blue-600 rounded-full dark:bg-blue-500" style="width: 100%"></div>
        </div>
    </a>
    

</div>