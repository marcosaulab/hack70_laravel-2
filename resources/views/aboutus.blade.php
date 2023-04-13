<x-layout>
    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1>Chi siamo</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row my-5">
               @foreach ($staff as $element)
                    <div class="col-12 col-md-4 my-2">
                        <x-cardstaff 
                            staffName="{{ $element['name'] }}"
                            staffSurname="{{ $element['surname'] }}"
                            staffRole="{{ $element['role'] }}"
                        />
                    </div>
               @endforeach
        </div>
    </div>
</x-layout>
