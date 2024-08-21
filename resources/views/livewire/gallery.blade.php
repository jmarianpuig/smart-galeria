<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <style>
        .range_container {
            display: flex;
            flex-direction: column;
            width: 20%;
            margin: 20px;
        }

        .sliders_control {
            position: relative;
            min-height: 20px;
        }

        .form_control {
            position: relative;
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            color: #635a5a;
        }

        input[type="range"]::-webkit-slider-thumb {
            -webkit-appearance: none;
            pointer-events: all;
            width: 14px;
            height: 14px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 1px #c6c6c6;
            cursor: pointer;
        }

        input[type="range"]::-moz-range-thumb {
            -webkit-appearance: none;
            pointer-events: all;
            width: 14px;
            height: 14px;
            background-color: #fff;
            border-radius: 50%;
            box-shadow: 0 0 0 1px #c6c6c6;
            cursor: pointer;
        }

        input[type="range"]::-webkit-slider-thumb:hover {
            background: #f7f7f7;
        }

        input[type="range"]::-webkit-slider-thumb:active {
            box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
            -webkit-box-shadow: inset 0 0 3px #387bbe, 0 0 9px #387bbe;
        }

        input[type="number"] {
            color: #000;
            width: 50px;
            height: 30px;
            font-size: 14px;
            border: none;
            padding-right: 0;
            padding-left: 0.5rem;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            opacity: 1;
        }

        input[type="range"] {
            -webkit-appearance: none;
            appearance: none;
            height: 2px;
            width: 100%;
            position: absolute;
            background-color: #c6c6c6;
            pointer-events: none;
        }

        #fromSlider {
            height: 0;
            z-index: 1;
        }
    </style>    
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
        <div class="flex flex-wrap items-center space-x-4">
            <div class="py-2">
                <span class="font-bold w-32 dark:text-white min-w-[125px] flex-grow-1 flex-shrink-1">Categoría:</span>
                <select wire:model.live="category" class="w-full py-0 h-6 text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent">
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="">Todas</option>
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="App\Models\Actor">Actores</option>
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="App\Models\Xtra">Extras</option>
                </select>
            </div>
            <div class="py-2">
                <span class="font-bold w-32 dark:text-white min-w-[125px] flex-grow-1 flex-shrink-1">Genero:</span>
                <select wire:model.live="gender" class="w-full py-0 h-6 text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent">
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="">Todos</option>
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="Hombre">Hombre</option>
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="Mujer">Mujer</option>
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="No Binario">No binario</option>
                </select>
            </div>
            <div class="flex py-2">
                <span class="font-bold w-32 dark:text-white min-w-[125px] flex-grow-1 flex-shrink-1">Pelo:</span>
                <select wire:model.live="hair" class="w-full py-0 h-6 text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent">
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="">Todos</option>
                    @php
                        $colors = \App\Models\HairColor::all();
                        @endphp
                    @foreach ($colors as $color)
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="{{ $color->id }}">{{ $color->color }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex py-2">
                <span class="font-bold w-32 dark:text-white min-w-[125px] flex-grow-1 flex-shrink-1">Ojos:</span>
                <select wire:model.live="eyes" class="w-full py-0 h-6 text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent">
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="">Todos</option>
                    @php
                        $colors = \App\Models\EyeColor::all();
                        @endphp
                    @foreach ($colors as $color)
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="{{ $color->id }}">{{ $color->color }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="flex py-2">
                <span class="font-bold w-32 dark:text-white min-w-[125px] flex-grow-1 flex-shrink-1">Raza:</span>
                <select wire:model.live="race"  class="w-full py-0 h-6 text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent">
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="">Todas</option>
                    @php
                        $races = \App\Models\Race::all();
                    @endphp
                    @foreach ($races as $race)
                        <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="{{ $race->id }}">{{ $race->race }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex py-2">
                <span class="font-bold w-32 dark:text-white min-w-[125px] flex-grow-1 flex-shrink-1">Provincia:</span>
                <select wire:model.live="provincia"  class="w-full py-0 h-6 text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent">
                    <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="">Todas</option>
                    @php
                        $provincias = \App\Models\Provincia::all();
                    @endphp
                    @foreach ($provincias as $provincia)
                        <option class="text-gray-700 dark:text-gray-300 dark:bg-gray-700 focus:ring-transparent" value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex py-2">
                <span class="font-bold w-32 dark:text-white min-w-[125px] flex-grow-1 flex-shrink-1">Edad:</span>
                <div class="range_container">
                    <div class="sliders_control">
                        <input id="fromSlider" type="range" min="0" max="100" value="{{ $minAge }}" oninput="handleFromSlider(this.value)" />
                        <input id="toSlider" type="range" min="0" max="100" value="{{ $maxAge }}" oninput="handleToSlider(this.value)" />
                    </div>
                    <div class="form_control">
                        <div class="form_control_container">
                            <input wire:model.live="minAge" class="form_control_container__time__input" type="number" id="fromInput" min="0" max="100" value="{{ $minAge }}" oninput="handleFromInput(this.value)" />
                        </div>
                        <div class="form_control_container">
                            <input wire:model.live="maxAge" class="form_control_container__time__input" type="number" id="toInput" min="0" max="100" value="{{ $maxAge }}" oninput="handleToInput(this.value)" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex py-2">
                <span class="font-bold w-32 dark:text-white min-w-[125px] flex-grow-1 flex-shrink-1">Altura:</span>
                <div class="range_container">
                    <div class="sliders_control">
                        <input id="fromSliderHeight" type="range" min="50" max="230" value="{{ $minHeight }}" oninput="handleFromSliderHeight(this.value)" />
                        <input id="toSliderHeight" type="range" min="50" max="230" value="{{ $maxHeight }}" oninput="handleToSliderHeight(this.value)" />
                    </div>
                    <div class="form_control">
                        <div class="form_control_container">
                            <input wire:model.live="minHeight" class="form_control_container__time__input" type="number" id="fromInputHeight" min="50" max="230" value="{{ $minHeight }}" oninput="handleFromInputHeight(this.value)" />
                        </div>
                        <div class="form_control_container">
                            <input wire:model.live="maxHeight" class="form_control_container__time__input" type="number" id="toInputHeight" min="50" max="230" value="{{ $maxHeight }}" oninput="handleToInputHeight(this.value)" />
                        </div>
                    </div>
                </div>
            </div>
            
            <script>
                function handleFromSlider(value) {
                    console.log(value);
                    let fromSlider = document.getElementById('fromSlider');
                    let toSlider = document.getElementById('toSlider');
                    let fromInput = document.getElementById('fromInput');
                    let toInput = document.getElementById('toInput');
                    if (parseInt(value) > parseInt(toSlider.value)) {
                        fromSlider.value = toSlider.value;
                        fromInput.value = toSlider.value;
                        @this.set('minAge', toSlider.value);
                    } else {
                        fromInput.value = value;
                        @this.set('minAge', value);
                    }
                }

                function handleToSlider(value) {
                    let fromSlider = document.getElementById('fromSlider');
                    let toSlider = document.getElementById('toSlider');
                    let fromInput = document.getElementById('fromInput');
                    let toInput = document.getElementById('toInput');
                    if (parseInt(value) < parseInt(fromSlider.value)) {
                        toSlider.value = fromSlider.value;
                        toInput.value = fromSlider.value;
                        @this.set('maxAge', fromSlider.value);
                    } else {
                        toInput.value = value;
                        @this.set('maxAge', value);
                    }
                }

                function handleFromInput(value) {
                    let fromSlider = document.getElementById('fromSlider');
                    let toSlider = document.getElementById('toSlider');
                    let fromInput = document.getElementById('fromInput');
                    let toInput = document.getElementById('toInput');
                    if (parseInt(value) > parseInt(toSlider.value)) {
                        fromSlider.value = toSlider.value;
                        fromInput.value = toSlider.value;
                        @this.set('minAge', toSlider.value);
                    } else {
                        fromSlider.value = value;
                        @this.set('minAge', value);
                    }
                }

                function handleToInput(value) {
                    let fromSlider = document.getElementById('fromSlider');
                    let toSlider = document.getElementById('toSlider');
                    let fromInput = document.getElementById('fromInput');
                    let toInput = document.getElementById('toInput');
                    if (parseInt(value) < parseInt(fromSlider.value)) {
                        toSlider.value = fromSlider.value;
                        toInput.value = fromSlider.value;
                        @this.set('maxAge', fromSlider.value);
                    } else {
                        toSlider.value = value;
                        @this.set('maxAge', value);
                    }
                }

                function handleFromSliderHeight(value) {
                    console.log(value);
                    let fromSlider = document.getElementById('fromSliderHeight');
                    let toSlider = document.getElementById('toSliderHeight');
                    let fromInput = document.getElementById('fromInputHeight');
                    let toInput = document.getElementById('toInputHeight');
                    if (parseInt(value) > parseInt(toSlider.value)) {
                        fromSlider.value = toSlider.value;
                        fromInput.value = toSlider.value;
                        @this.set('minHeight', toSlider.value);
                    } else {
                        fromInput.value = value;
                        @this.set('minHeight', value);
                    }
                }

                function handleToSliderHeight(value) {
                    let fromSlider = document.getElementById('fromSliderHeight');
                    let toSlider = document.getElementById('toSliderHeight');
                    let fromInput = document.getElementById('fromInputHeight');
                    let toInput = document.getElementById('toInputHeight');
                    if (parseInt(value) < parseInt(fromSlider.value)) {
                        toSlider.value = fromSlider.value;
                        toInput.value = fromSlider.value;
                        @this.set('maxHeight', fromSlider.value);
                    } else {
                        toInput.value = value;
                        @this.set('maxHeight', value);
                    }
                }

                function handleFromInputHeight(value) {
                    let fromSlider = document.getElementById('fromSliderHeight');
                    let toSlider = document.getElementById('toSliderHeight');
                    let fromInput = document.getElementById('fromInputHeight');
                    let toInput = document.getElementById('toInputHeight');
                    if (parseInt(value) > parseInt(toSlider.value)) {
                        fromSlider.value = toSlider.value;
                        fromInput.value = toSlider.value;
                        @this.set('minHeight', toSlider.value);
                    } else {
                        fromSlider.value = value;
                        @this.set('minHeight', value);
                    }
                }

                function handleToInputHeight(value) {
                    let fromSlider = document.getElementById('fromSliderHeight');
                    let toSlider = document.getElementById('toSliderHeight');
                    let fromInput = document.getElementById('fromInputHeight');
                    let toInput = document.getElementById('toInputHeight');
                    if (parseInt(value) < parseInt(fromSlider.value)) {
                        toSlider.value = fromSlider.value;
                        toInput.value = fromSlider.value;
                        @this.set('maxHeight', fromSlider.value);
                    } else {
                        toSlider.value = value;
                        @this.set('maxHeight', value);
                    }
                }
            </script>


        </div>
        
        
        <div class="columns-1 md:columns-2 xl:columns-3 gap-7">
            @foreach ($images as $image)
                @php
                    $model = $image->imageable;
                    $path = '';
                    $edad = Carbon\Carbon::parse($model->birthdate)->age;
                    if ($model instanceOf(App\Models\Xtra::class)) {
                        $pathImages = 'extras';
                        if ($edad >= 16) {
                            $path = 'extras';
                        } else {
                            $path = 'youngers/extras';
                        }
                    } elseif ($model instanceOf(App\Models\Actor::class)) {
                        $pathImages = 'actors';
                        if ($edad >= 16) {
                            $path = 'actors';
                        } else {
                            $path = 'youngers/actors';
                        }  
                    } elseif ($model instanceOf(App\Models\Coordinator::class)) {
                        $path = 'coordinators';
                    }
                @endphp
                <div class="break-inside-avoid mb-8">
                    <a href="http://adm.smartfiguracion.es/{{ $path }}/{{ $model->slug }}" target="_blank" rel="noopener noreferrer">
                        <img class="w-full h-auto rounded-lg"
                        src="https://smartfiguracion.es/public/images/{{ $pathImages }}/{{ $image->url }}" alt="Gallery image" />
                    </a>
                </div>
            @endforeach
        </div>

        <div class="mt-4">
            {{ $images->links() }}
        </div>
    </div>
</div>
