<?php

namespace App\Livewire;

use App\Models\Actor;
use App\Models\Coordinator;
use App\Models\Image;
use App\Models\Xtra;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Gallery extends Component
{
    use WithPagination;

    public $category;
    public $gender;
    public $hair;
    public $eyes;
    public $race;
    public $provincia;
    public $minAge = 0;
    public $maxAge = 100;

    protected $updatesQueryString = [
        'category' => ['except' => ''],
        'gender' => ['except' => ''],
        'hair' => ['except' => ''],
        'eyes' => ['except' => ''],
        'race' => ['except' => ''],
        'provincia' => ['except' => ''],
        'minAge' => ['except' => ''],
        'maxAge' => ['except' => ''],
    ];

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function updatingGender()
    {
        $this->resetPage();
    }

    public function updatingHair()
    {
        $this->resetPage();
    }

    public function updatingEyes()
    {
        $this->resetPage();
    }

    public function updatingRace()
    {
        $this->resetPage();
    }

    public function updatingProvincia()
    {
        $this->resetPage();
    }

    public function updatingMinAge()
    {
        $this->resetPage();
    }

    public function updatingMaxAge()
    {
        $this->resetPage();
    }

    public function render()
    {
        $query = Image::query();

        // filtro categorias
        if ($this->category) {
            $query->where([
                ['imageable_type', $this->category],
                ['is_avatar', 0]
                ])
                ->orderBy('imageable_id', 'asc');
            }
            
        // filtro genero
        if ($this->gender) {
            $query->whereHasMorph('imageable', [Actor::class, Xtra::class, Coordinator::class], function ($q, $type) {
                $q->where('gender', $this->gender);
            });
        }
        
        // filtro color d pelo
        if ($this->hair) {
            $query->whereHasMorph('imageable', [Actor::class, Xtra::class], function ($q, $type) {
                $q->where('hair_color_id', $this->hair);
            });
        }
        
        // filtro color d ojos
        if ($this->eyes) {
            $query->whereHasMorph('imageable', [Actor::class, Xtra::class], function ($q, $type) {
                $q->where('eye_color_id', $this->eyes);
            });
        }
        
        // filtro razas
        if ($this->race) {
            $query->whereHasMorph('imageable', [Actor::class, Xtra::class], function ($q, $type) {
                $q->where('race_id', $this->race);
            });
        }
        
        // filtro por provincias
        if ($this->provincia) {
            $query->whereHasMorph('imageable', [Actor::class, Xtra::class], function ($q, $type) {
                $q->whereHas('municipio', function ($q) {
                    $q->where('provincia_id', $this->provincia);
                });
            });
        }
        
        // filtro por edades
        if ($this->minAge !== null && $this->maxAge !== null) {
            $currentDate = Carbon::now();
            $minDate = $currentDate->copy()->subYears($this->maxAge)->format('Y-m-d');
            $maxDate = $currentDate->copy()->subYears($this->minAge)->format('Y-m-d');

            $query->whereHas('imageable', function($q) use ($minDate, $maxDate) {
                $q->whereBetween('birthdate', [$minDate, $maxDate]);
            });
        }

        $images = $query->with('imageable')->where('is_avatar', 0)->orderBy('imageable_id', 'asc')->paginate(100);
        return view('livewire.gallery', ['images' => $images]);
    }
}




