<?php

namespace App\Http\Livewire;

use App\Models\BusinessCenter as ModelsBusinessCenter;
use App\Models\Reservation;
use App\Models\Room;
use App\Models\Table;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationRequired;

class BusinessCenter extends Component
{

    public $rooms = [];
    public $room_id;
    public $tables = [];
    public $table_id;
    public $business_center_id;
    public $reservation_time;

    protected $rules = [
        'business_center_id' => 'required',
        'table_id' => 'required',
        'room_id' => 'required',
        'reservation_time' => 'required' | 'datetime'
    ];

    public function submit()
    {
        Reservation::create([
            'reservation_time' => $this->reservation_time,
            'room_id' => $this->room_id,
            'table_id' => $this->table_id,
            'business_center_id' => $this->business_center_id,
            'user_id' => auth()->user()->id,
            'folio' => $this->business_center_id . $this->room_id . $this->table_id . $this->reservation_time
        ]);
        return redirect()->to('/dashboard');
    }

    public function render()
    {
        if (!empty($this->business_center_id) || $this->business_center_id == "" || $this->business_center_id == null) {
            $this->rooms = Room::where('business_center_id', $this->business_center_id)->get();
        }

        if (!empty($this->room_id) || $this->room_id == "" || $this->room_id == null) {
            $this->tables = Table::where('room_id', $this->room_id)->get();
        }
        $business_center = ModelsBusinessCenter::all();

        return view('livewire.business-center', [
            'business_centers' => $business_center
        ]);
    }
}
