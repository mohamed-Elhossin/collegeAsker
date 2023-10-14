<x-filament-panels::page>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <x-filament::button onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
        طباعة
    </x-filament::button>

    <div class="flex items-center content justify-center">
        <div class="print:w-full w-2/3  border-4 border-zinc-800">
            <div class="flex items-center  w-full border-b-2 border-zinc-600">
                <div class="w-full text-center">
                    التاريخ
                </div>

                <div class="w-full text-center border-x-4 border-double border-zinc-800">
                    <div class="w-full  border-b-2 border-zinc-600">
                        الزمن
                    </div>
                    <div class="flex">
                        <div class="w-full border-l-2 border-zinc-600">
                            ق
                        </div>

                        <div class="w-full">
                            س
                        </div>
                    </div>
                </div>

                <div class="w-full  text-center">
                    المدرس
                </div>
            </div>

            <div class="flex h-12  items-center border-b-2 border-zinc-600">
                <div class="w-full text-center">
                    {{$data->date}}
                </div>
                <div class="w-full text-center h-full border-x-4 border-double border-zinc-800">
                    <div class="flex h-full">
                        <div class="w-full border-l-2 border-zinc-800">
                            {{$data->min}}
                        </div>
                        <div class="w-full h-full border-l-2 border-zinc-800">
                            {{$data->min}}
                        </div>

                        <div class="w-full h-full  border-l-2 border-zinc-800">
                            {{$data->hours}}
                        </div>

                        <div class="w-full h-full">
                            {{$data->hours}}
                        </div>
                    </div>

                </div>
                <div class="w-full text-center">
                    {{$data->teacher}}
                </div>
            </div>


        </div>
    </div>
</x-filament-panels::page>
