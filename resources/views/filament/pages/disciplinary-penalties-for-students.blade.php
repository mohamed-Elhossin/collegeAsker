<x-filament-panels::page>

@vite(['resources/css/app.css', 'resources/js/app.js'])

    <x-filament::button  onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
        طباعة
    </x-filament::button>

    <div class="flex items-center content justify-center">
        <div class="print:w-full w-2/3  border-4 border-zinc-800">
            <table class="w-full table-auto  border border-zinc-800">
                <thead>
                    <tr>
                      <th class="border border-zinc-800">م</th>
                      <th class="border border-zinc-800">تاريخ المخالفه</th>
                      <th class="border border-zinc-800">طبيعه المخالفه</th>
                      <th class="border border-zinc-800">الجزاء الموقع</th>
                      <th class="border border-zinc-800">ملاحظات</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                      <td class="border border-zinc-800">{{$data->id}}</td>
                      <td class="border border-zinc-800">{{$data->Date_of_violation}}</td>
                      <td class="border border-zinc-800">{{$data->The_nature_of_the_violation}}</td>
                      <td class="border border-zinc-800">{{$data->penalty}}</td>
                      <td class="border border-zinc-800">{{$data->comment}}</td>
                    </tr>

                </tbody>

            </table>
        </div>
    </div>

</x-filament-panels::page>
