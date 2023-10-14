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
                        <th class="border border-zinc-800">م</th>
                        <th class="border border-zinc-800">الدرس</th>
                        <th class="border border-zinc-800">تاريخ بدء التمرين</th>
                        <th class="border border-zinc-800">توقيع المدرس</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($data as $data)
                        <tr>
                            <td class="border border-zinc-800">{{ $data->id }}</td>
                            <td class="border border-zinc-800">{{ $data->lesson_name }}</td>
                            <td class="border border-zinc-800">{{ $data->date }}</td>
                            <td class="border border-zinc-800">{{ $data->teacher_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-filament-panels::page>
