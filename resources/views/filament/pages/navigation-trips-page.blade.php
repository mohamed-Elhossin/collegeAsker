<x-filament-panels::page>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <x-filament::button onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
        طباعة
    </x-filament::button>

    <div class="flex items-center content justify-center">
        <div class="print:w-full w-2/3  border-4 border-zinc-800">
            <table class="w-full table-auto  border border-zinc-800">
            <thead>
                <tr>
                    <th class="border border-zinc-800">رقم الطلعه</th>
                    <th class="border border-zinc-800">تاريخ</th>
                    <th class="border border-zinc-800">خط السير</th>
                    <th class="border border-zinc-800">ارتفاع</th>
                    <th class="border border-zinc-800">مسافه</th>
                    <th class="border border-zinc-800">زمن</th>
                    <th class="border border-zinc-800">نهاري او ليلي</th>
                    <th class="border border-zinc-800">مزدوج</th>
                    <th class="border border-zinc-800">منفرد</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td class="border py-2 border-zinc-800">{{$data->flight_number}}</td>
                    <td class="border py-2 border-zinc-800">{{$data->date}}</td>
                    <td class="border py-2 border-zinc-800">{{$data->itinerary}}</td>
                    <td class="border py-2 border-zinc-800">{{$data->height}}</td>
                    <td class="border py-2 border-zinc-800">{{$data->distance}}</td>
                    <td class="border py-2 border-zinc-800">{{$data->time}}</td>
                    <td class="border py-2 border-zinc-800">{{$data->morning_or_night == 0 ? 'نهاري' : 'ليلي'}}</td>
                    <td class="border py-2 border-zinc-800">{{$data->double}}</td>
                    <td class="border py-2 border-zinc-800">{{$data->single}}</td>
                </tr>

            </tbody>
        </table>
        </div>
    </div>

</x-filament-panels::page>

