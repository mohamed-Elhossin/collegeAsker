<x-filament-panels::page>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <x-filament::button  onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
        طباعة
    </x-filament::button>

    <div class="flex items-center content justify-center">
        <div class="print:w-full w-2/3  border-4 border-zinc-800">
            <table class="w-full table-fixed  border border-zinc-800">
                <thead>
                    <tr>
                      <th class="w-32 important border border-zinc-800 print:bg-gray-200 bg-gray-200">

                        <span>
                            <h4 class="w-auto text-xs text-left">شهور</h4>
                        </span>
                        <div class="border-b border-zinc-800" style="rotate: -15deg">
                            <!-- Content goes here -->
                        </div>
                        <span>
                            <h4 class="w-auto text-xs text-right">اسباب التخلف</h4>
                        </span>
                      </th>
                      @foreach (range(1 , 11) as $month)
                        <th class="text-center border border-zinc-800">{{$month}}</th>
                      @endforeach
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      <td class="text-center border border-zinc-800">{{$data->name}}</td>

                        @foreach (range(1 , 11) as $month)
                            @if (\Carbon\Carbon::parse($data->date)->format('m') == $month)
                                <td class="text-center border border-zinc-800">{{$data->comment}}</td>
                                @else
                                <td class="text-center border border-zinc-800"></td>
                            @endif
                        @endforeach

                    </tr>

                    <tr class="print:bg-gray-200 bg-gray-200">
                        <td class="text-center border border-zinc-800">المجموع</td>
                        @foreach (range(1 , 11) as $month)
                            <th class="text-center border border-zinc-800"></th>
                        @endforeach
                    </tr>

                    <tr class="print:bg-gray-200 bg-gray-200">
                        <td class="text-center border border-zinc-800">توقيع المدرس</td>
                        @foreach (range(1 , 11) as $month)
                            <th class="text-center border border-zinc-800"></th>
                        @endforeach
                    </tr>

                    <tr class="print:bg-gray-200 bg-gray-200">
                        <td class="border border-zinc-800">توقيع قائد السرب</td>
                        @foreach (range(1 , 11) as $month)
                            <th class="text-center border border-zinc-800"></th>
                        @endforeach
                    </tr>


                </tbody>

            </table>
        </div>
    </div>

</x-filament-panels::page>
