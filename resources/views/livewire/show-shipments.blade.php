<div class="container relative mx-auto items-center overflow-x-auto mt-5">

    <table class="w-full text-sm text-left mb-5">
        <thead class="text-xs text-gray-200 uppercase bg-gray-700">
            <tr>
                <th scope="col" class="mx-auto px-6 py-3">
                    Dirección
                </th>
                <th scope="col" class="mx-auto px-6 py-3">
                    Seller
                </th>
                <th scope="col" class="mx-auto px-6 py-3">
                    Detalle
                </th>
                <th scope="col" class="mx-auto px-6 py-3">
                    Estado
                </th>
            </tr>
            
        </thead>
        
        <tbody>
        @foreach ($shipments as $shipment)
            <tr class="bg-white border-b text-gray-700">
           
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $shipment->address}}
                </th>
                <td class="px-6 py-4">
                    {{ $shipment->seller}}
                </td>

                <td class="px-8 py-4 inline-flex items-center justify-center">
                <a href="{{ route('detail-shipment', $shipment) }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-small rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                <svg class="w-6 h-6 ml-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path>
                </svg>    
                <span class="w-full">Ver envío</span></a>
                </td>

                <td class="px-6 py-4">
                <p class="{{ $shipment->status->classes}}">{{ $shipment->status->name}}</p>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

</div>
</div>