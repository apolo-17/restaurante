<div>
    <div class="">
        <form wire:submit.prevent="submit">
            <div class="flex flex-col">
                <div class="flex flex-col mb-6">
                    <label for="business_center" class="font-semibold text-gray-600 py-2">Sucursal:</label>
                    <select name="Sucursales" wire:model="business_center_id" class="block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 ">
                        <option value="">SELECCIONES UNA SUCURSAL</option>
                        @foreach ($business_centers as $business_center)   
                            <option value="{{ $business_center->id }}">{{ $business_center->name }}</option>
                        @endforeach
                    </select>
                    @error('business_center_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col mb-6">

                    <label for="room_id">Cuarto</label>
                        <select name="room_id" wire:model="room_id" class="block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 ">
                            <option value="">Seleccione Cuarto</option>
                            @foreach ($rooms as $room)
                                <option value="{{ $room->id }}">{{$room->name}}</option>
                            @endforeach
                        </select>
                        @error('room_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col mb-6">
                    <label for="table_id">Mesa</label>
                    <select name="room_id" wire:model="table_id" class="block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 ">
                        <option value="">Seleccione Mesa</option>
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}">{{$table->number}}</option>
                        @endforeach
                    </select>
                    @error('table_id') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex flex-col mb-6">
                    <label for="reservation_time">Fecha de reserva</label>
                    <input type="datetime-local" wire:model="reservation_time" class="block bg-grey-lighter text-grey-darker border border-grey-lighter rounded-lg h-10 px-4 ">
                    @error('reservation_time') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
    
            <button class="bg-red-600 font-semibold text-white p-2 w-32 rounded-full hover:bg-red-700 focus:outline-none focus:ring shadow-lg hover:shadow-none transition-all duration-300 m-2" type="submit">Save Reservation</button>
        </form>
    </div>
    
</div>