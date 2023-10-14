<x-filament-panels::page>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <x-filament::button onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
        طباعة
    </x-filament::button>

    <div class="flex items-center content justify-center">
        <div class="print:w-full w-2/3  border-4 border-zinc-800">
            <table class="w-full table-fixed  border border-zinc-800">
                <tbody>
                    <tr>
                        <th class="border py-2 border-zinc-800">م</th>
                        <th class="border py-2 border-zinc-800">{{$data->id}}</th>
                        {{-- <th class="border py-2 border-zinc-800">&Sacute;</th>
                        <th class="border py-2 border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th class="border py-2 border-zinc-800">تاريخ الحدث</th>
                        <th class="border py-2 border-zinc-800">{{$data->date}}</th>
                        {{-- <th class="border py-2 border-zinc-800">&Sacute;</th>
                        <th class="border py-2 border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th class="border py-2 border-zinc-800">القسم الدراسي</th>
                        <th class="border py-2 border-zinc-800">{{$data->section->section_name}}</th>
                        {{-- <th class="border py-2 border-zinc-800">&Sacute;</th>
                        <th class="border py-2 border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th class="border py-2 border-zinc-800">نوع ورقم الطائرة</th>
                        <th class="border py-2 border-zinc-800">{{$data->aircraft_type.'-'.$data->aircraft_number}}</th>
                        {{-- <th class="border py-2 border-zinc-800">&Sacute;</th>
                        <th class="border py-2 border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th rowspan="4" class="border border-zinc-800 w-16">
                            <div class="flex">
                                <div class="w-16 border-l-2 border-zinc-800">
                                    ساعات الطيران قبل المخالفه / الحادث
                                </div>
                                <div class="w-12 border-l-2 border-zinc-800">
                                    <div class="w-full py-2 "
                                        style="writing-mode: vertical-rl; direction: rtl;rotate:180deg">
                                        علي الطراز
                                    </div>
                                </div>

                                <div class="w-full">
                                    <div class="w-full border-b border-zinc-800" style="height: 2.25rem">
                                        منفرد
                                    </div>

                                    <div class="w-full border-b border-zinc-800" style="height: 2.3rem">
                                        مزدوج
                                    </div>

                                    <div class="w-full border-b border-zinc-800" style="height: 2.3rem">
                                        اجمالي
                                    </div>

                                    <div class="w-full">
                                        كلي
                                    </div>
                                </div>


                            </div>

                        </th>
                        <th class="border border-zinc-800">&Sacute;</th>
                        {{-- <th class="border border-zinc-800">&Sacute;</th>
                        <th class="border border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th class="border border-zinc-800">&Sacute;</th>
                        {{-- <th class="border border-zinc-800">&Sacute;</th>
                        <th class="border border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th class="border border-zinc-800">&Sacute;</th>
                        {{-- <th class="border border-zinc-800">&Sacute;</th>
                        <th class="border border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th class="border border-zinc-800">&Sacute;</th>
                        {{-- <th class="border border-zinc-800">&Sacute;</th>
                        <th class="border border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th class="border py-2 border-zinc-800">وصف المخالفه / الحادث / سببه</th>
                        <th class="border py-2 border-zinc-800">{{$data->description_of_the_violation}}</th>
                        {{-- <th class="border py-2 border-zinc-800">&Sacute;</th>
                        <th class="border py-2 border-zinc-800">&Sacute;</th> --}}
                    </tr>

                    <tr>
                        <th class="border py-2 border-zinc-800">الجزاء الموقع</th>
                        <th class="border py-2 border-zinc-800">{{$data->penalty}}</th>
                        {{-- <th class="border py-2 border-zinc-800">&Sacute;</th>
                        <th class="border py-2 border-zinc-800">&Sacute;</th> --}}
                    </tr>

                </tbody>
        </div>
    </div>
</x-filament-panels::page>
