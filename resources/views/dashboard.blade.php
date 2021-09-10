<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mis reservaciones') }}
        </h2>
    </x-slot>

    <div class="md:px-32 py-8 w-full">
        <div class="shadow overflow-hidden rounded border-b border-gray-200">
          <table class="w-full bg-white">
            <thead class="bg-gray-800 text-white">
              <tr>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Fecha de reserva</th>
                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Sucursal</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Sala/Cuarto</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Mesa</td>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Cliente</td>
              </tr>
            </thead>
          <tbody class="text-gray-700">
              @foreach ($reservations as $reservation)
              <tr>
                <td class="w-1/3 text-left py-3 px-4">{{ $reservation->reservation_time }}</td>
                <td class="w-1/3 text-left py-3 px-4">{{ $reservation->business_center->name }}</td>
                <td class="text-left py-3 px-4">{{ $reservation->room->name }}</td>
                <td class="text-left py-3 px-4">{{ $reservation->table->number }}</td>
                <td class="text-left py-3 px-4">{{ $reservation->user->name_complete }}</td>
              </tr>
              @endforeach
          </tbody>
          </table>
        </div>
      </div>
    
</x-app-layout>
