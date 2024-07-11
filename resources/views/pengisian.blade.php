@extends('layouts.user')
@section('style')
<style>
    /* Not Responsive */
    
    .tabAnim {
      z-index: -9;
    }

    #option0:checked ~ div {
      --tw-translate-x: 0%;
    }

    #option1:checked ~ div {
      --tw-translate-x: 100%;
    }

    #option2:checked ~ div {
      --tw-translate-x: 200%;
    }

    #option3:checked ~ div {
      --tw-translate-x: 300%;
    }

    #option4:checked ~ div {
      --tw-translate-x: 400%;
    }

    </style>
@endsection
@section('content')
@php
// $tipe = App\Models\JenisKepribadian::orderBy('id', 'asc')->get();
// $tipe = App\Models\JenisKepribadian::orderBy('id', 'asc')->get();
@endphp
<div class="section">
    <div class="container">
        <div class="row">
            <div class="flex w-full relative">
                <input type="radio" id="option0" name="tabs" class="appearance-none" />
                <label for="option0" class="cursor-pointer w-1/6 flex items-center justify-center truncate uppercase select-none font-semibold text-lg rounded-full py-2">OPTION 0</label>

                <input type="radio" id="option1" name="tabs" class="appearance-none" />
                <label for="option1" class="cursor-pointer w-1/6 flex items-center justify-center truncate uppercase select-none font-semibold text-lg rounded-full py-2">OPTION 1</label>

                <input type="radio" id="option2" name="tabs" class="appearance-none" />
                <label for="option2" class="cursor-pointer w-1/6 flex items-center justify-center truncate uppercase select-none font-semibold text-lg rounded-full py-2">OPTION 2</label>

                <input type="radio" id="option3" name="tabs" class="appearance-none" />
                <label for="option3" class="cursor-pointer w-1/6 flex items-center justify-center truncate uppercase select-none font-semibold text-lg rounded-full py-2">OPTION 3</label>

                <input type="radio" id="option4" name="tabs" class="appearance-none" />
                <label for="option4" class="cursor-pointer w-1/6 flex items-center justify-center truncate uppercase select-none font-semibold text-lg rounded-full py-2">OPTION 4</label>

                <div class="w-1/6 flex items-center justify-center truncate uppercase select-none font-semibold text-lg rounded-full p-0 h-full bg-indigo-600 absolute transform transition-transform tabAnim"></div>
              </div>
        </div>
    </div>
</div>
@endsection
