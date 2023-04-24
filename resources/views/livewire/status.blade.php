<div class="container relative mx-auto items-center overflow-x-auto mt-5">
@foreach ($shipments as $shipment)
    <table class="w-full text-sm text-left mb-5">
        <thead class="text-xs text-gray-200 uppercase bg-gray-700">
            <tr>
                <th scope="col" class="mx-auto px-6 py-3">
                {{ $shipment->address}}
                </th>
               
                <th scope="col" class="mx-auto px-6 py-3">
                    Detalle
                </th>
            </tr>
            
        </thead>
        
        <tbody>
            <tr class="bg-white border-b text-gray-700">
                
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                ID
                </th>
                <td class="px-6 py-4">
                {{ $shipment->id}}
                </td>
                
            </tr>
            <tr class="bg-white border-b text-gray-700">
           
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Destinatario
                </th>
                <td class="px-6 py-4">
                {{ $shipment->receiver}}
                </td>
                
            </tr>
            
            <tr class="bg-white border-b text-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                CP
                </th>
                <td class="px-6 py-4">
                {{ $shipment->zipcode}}
                </td>
               
            </tr>

            <tr class="bg-white border-b text-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Phone
                </th>
                <td class="px-6 py-4">
                {{ $shipment->phone}}
                </td>
               
            </tr>
            
            <tr class="bg-white border-b text-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Referencia
                </th>
                <td class="px-6 py-4">
                {{ $shipment->reference}}
                </td>
               
            </tr>
            
            <tr class="bg-white border-b text-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Desde
                </th>
                <td class="px-6 py-4">
                {{ $shipment->seller}}
                </td>
               
            </tr>
            
            <tr class="bg-white border-b text-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Orden de envío
                </th>
                <td class="px-6 py-4">
                {{ $shipment->created_at}}
                </td>
               
            </tr>
            <tr class="bg-white border-b text-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Último movimiento
                </th>
                <td class="px-6 py-4">
                {{ $shipment->updated_at}}
                </td>
               
            </tr>
            <tr class="bg-white border-b text-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                Estado
                </th>
                <td class="px-6 py-4 {{ $shipment->status->classes}}">
                {{ $shipment->status->name}}
                </td>
               
            </tr>
        </tbody>
    </table>
    
    @endforeach