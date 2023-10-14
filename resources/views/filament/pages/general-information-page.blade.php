<x-filament-panels::page>
    @vite(['resources/css/app.css', 'resources/js/app.js'])




    <x-filament::button  onclick="window.print()" style="width: 8rem !important" color="gray" class="print">
        طباعة
    </x-filament::button>


    <div class="flex items-center content justify-center">
        <div class="print:w-full w-2/3  border-4 border-zinc-800">
               <div class="flex  border-b-4 border-zinc-800">
                    <div class="border-double border-l-4 border-zinc-600 w-full text-start p-2">

                        <div class="py-2">
                        <div>
                            <div class="w-full">
                                <span><strong>الرتبة</strong></span> : <span
                                    class="border-b-4 border-dotted border-zinc-600">{{$data->rank}}</span>
                            </div>
                        </div>
                        </div>
                        <div class="py-2">
                        <div class="w-full">
                            <span><strong>الاسم</strong></span> : <span
                                class="border-b-4 border-dotted border-zinc-600">{{$data->name}}</span>
                        </div>
                        </div>

                        <div class="py-2">
                        <div>
                            <div class="w-full">
                                <span><strong>القسم</strong></span> : <span
                                    class="border-b-4 border-dotted border-zinc-600">{{$data->section->section_name}}</span>
                            </div>
                        </div>
                        </div>
                        <div class="py-2">
                        <div>
                            <div class="w-full">
                                <span><strong>تاريخ بدء المرحلة الدراسية </strong></span> : <span
                                    class="border-b-4 border-dotted border-zinc-600">{{$data->started_at}}</span>
                            </div>
                        </div>
                        </div>
                        <div class="py-2">
                        <div>
                            <div class="w-full">
                                <span><strong>تاريخ انتهاء المرحلة الدراسية </strong></span> : <span
                                    class="border-b-4 border-dotted border-zinc-600">{{$data->ended_at}}</span>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="w-1/2 flex items-center">
                         <div class="w-full">
                         <img src="{{Storage::disk('public')->url($data->img)}}" alt=""
                              class="border border-zinc-800 rounded-lg p-3 m-auto w-2/3 max-h-44">
                         </div>
                    </div>
               </div>

               <div class="flex items-center  border-b-4 border-zinc-800">
                    <div class="w-full text-center">
                        ملاحظات
                    </div>
                    <div class="w-full text-center border-x-4 border-double border-zinc-600">
                         <div class="w-full border-b-2 border-zinc-600">
                           نوع الطائرة
                         </div>
                         <div class="flex border-b-2 border-zinc-600">
                         <div class="w-full border-l-2 border-zinc-600">
                              مزدوج
                         </div>
                         <div class="w-full">
                              منفرد
                         </div>
                         </div>

                         <div class="flex">
                            <div class="w-full border-l-2 border-zinc-600">
                                س
                            </div>
                            <div class="w-full border-l-2 border-zinc-600">
                                ق
                            </div>
                            <div class="w-full w-full border-l-2 border-zinc-600">
                                س
                            </div>
                            <div class="w-full">
                                ق
                            </div>
                         </div>
                    </div>
                    <div class="w-full text-center">
                        ملاحظات
                    </div>

               </div>

               <div class="flex h-12  items-center border-b-2 border-zinc-600">
                    <div class="w-full text-center">
                        {{$data->aircraft_type}}
                    </div>
                    <div class="w-full text-center h-full border-x-4 border-double border-zinc-800">
                         <div class="flex h-full">
                         <div class="w-full border-l-2 border-zinc-600">
                              300
                         </div>
                         <div class="w-full h-full border-l-2 border-zinc-800">
                              600
                         </div>

                         <div class="w-full h-full  border-l-2 border-zinc-800">
                              100
                         </div>

                         <div class="w-full h-full">
                              300
                         </div>
                         </div>

                    </div>
                    <div class="w-full text-center">
                        {{$data->comments}}
                    </div>
               </div>

               <div class="flex h-12  items-center border-b-2 border-zinc-600">
                    <div class="w-full text-center">
                        {{$data->aircraft_type}}
                    </div>
                    <div class="w-full text-center h-full border-x-4 border-double border-zinc-800">
                         <div class="h-full flex items-center">
                         <div class="w-full h-full border-l-2 border-zinc-600">
                              300
                         </div>
                         <div class="w-full h-full border-l-2 border-zinc-800">
                              300
                         </div>

                         <div class="w-full h-full border-l-2 border-zinc-800">
                              300
                         </div>

                         <div class="w-full h-full">
                              300
                         </div>
                         </div>

                    </div>
                    <div class="w-full text-center">
                        {{$data->comments}}
                    </div>
               </div>

               <div class="flex h-12  items-center border-b-4 border-zinc-800">
                    <div class="w-full text-center">
                         &empty;
                    </div>
                    <div class="w-full text-center h-full border-x-4 border-double border-zinc-800">
                         <div class="h-full flex items-center">
                         <div class="w-full h-full border-l-2 border-zinc-600">
                              &empty;
                         </div>
                         <div class="w-full h-full border-l-2 border-zinc-800">
                              &empty;
                         </div>

                         <div class="w-full h-full border-l-2 border-zinc-800">
                              &empty;
                         </div>

                         <div class="w-full h-full">
                              &empty;
                         </div>
                         </div>

                    </div>
                    <div class="w-full text-center">
                         المجموع
                    </div>
               </div>

               <div class="w-full flex items-center   text-start h-12 border-b-4  border-zinc-800">
                    <div class="w-full p-2">
                         <strong>
                            المدرسون الذين قامو بالتدريس للطالب :
                         </strong>
                    </div>
               </div>
               <div class="flex items-center  w-full border-b-2 border-zinc-600">
                    <div class="w-full text-center">
                        الاسم
                    </div>

                    <div class="w-full text-center border-x-4 border-double border-zinc-800">
                         <div class="w-full  border-b-2 border-zinc-600">
                         التاريخ
                         </div>
                         <div class="flex">
                         <div class="w-full border-l-2 border-zinc-600">
                              الي
                         </div>

                         <div class="w-full">
                              من
                         </div>
                         </div>
                    </div>

                    <div class="w-full  text-center">
                        ملاحظات
                    </div>
               </div>


               <div class="flex h-12  items-center border-b-2 border-zinc-600">
                    <div class="w-full text-center">
                        {{$data->teachers_name}}
                    </div>
                    <div class="w-full text-center h-full border-x-4 border-double border-zinc-800">
                         <div class="flex h-full">
                         <div class="w-full border-l-2 border-zinc-800">
                              300
                         </div>
                         <div class="w-full h-full border-l-2 border-zinc-800">
                              600
                         </div>

                         <div class="w-full h-full  border-l-2 border-zinc-800">
                              100
                         </div>

                         <div class="w-full h-full">
                              300
                         </div>
                         </div>

                    </div>
                    <div class="w-full text-center">
                        {{$data->teachers_comment}}
                    </div>
               </div>

               <div class="flex h-12  items-center border-b-2 border-zinc-600">
                    <div class="w-full text-center">
                        {{$data->teachers_name}}
                    </div>
                    <div class="w-full text-center h-full border-x-4 border-double border-zinc-800">
                         <div class="flex h-full">
                         <div class="w-full border-l-2 border-zinc-800">
                              300
                         </div>
                         <div class="w-full h-full border-l-2 border-zinc-800">
                              600
                         </div>

                         <div class="w-full h-full  border-l-2 border-zinc-800">
                              100
                         </div>

                         <div class="w-full h-full">
                              300
                         </div>
                         </div>

                    </div>
                    <div class="w-full text-center">
                        {{$data->teachers_comment}}
                    </div>
               </div>


               <div class="flex h-12  items-center border-b-2 border-zinc-600">
                    <div class="w-full text-center">
                        {{$data->teachers_name}}
                    </div>
                    <div class="w-full text-center h-full border-x-4 border-double border-zinc-800">
                         <div class="flex h-full">
                         <div class="w-full border-l-2 border-zinc-800">
                              300
                         </div>
                         <div class="w-full h-full border-l-2 border-zinc-800">
                              600
                         </div>

                         <div class="w-full h-full  border-l-2 border-zinc-800">
                              100
                         </div>

                         <div class="w-full h-full">
                              300
                         </div>
                         </div>

                    </div>
                    <div class="w-full text-center">
                        {{$data->teachers_comment}}
                    </div>
               </div>

               <div class="flex h-12  items-center border-b-2 border-zinc-600">
                    <div class="w-full text-center">
                        {{$data->teachers_name}}
                    </div>
                    <div class="w-full text-center h-full border-x-4 border-double border-zinc-800">
                         <div class="flex h-full">
                         <div class="w-full border-l-2 border-zinc-800">
                              300
                         </div>
                         <div class="w-full h-full border-l-2 border-zinc-800">
                              600
                         </div>

                         <div class="w-full h-full  border-l-2 border-zinc-800">
                              100
                         </div>

                         <div class="w-full h-full">
                              300
                         </div>
                         </div>

                    </div>
                    <div class="w-full text-center">
                        {{$data->teachers_comment}}
                    </div>
               </div>

        </div>

    </div>


    <div style="page-break-after: always;"></div>

    {{-- <div class="flex items-center justify-center">
        <div class="print:w-full w-2/3 border-4 border-zinc-800 text-right px-3">
            <div class="w-full">
                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>الرقم العسكري</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">1241241241231</span>
                    </div>


                    <div class="w-full">
                        <span><strong>الاسم</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">احمد محمد سعيد</span>
                    </div>


                    <div class="w-1/2">
                        <span><strong>الدفعة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">3</span>
                    </div>

                    <div class="w-3/5">
                        <span><strong>اللياقة الطبية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">(10)</span>
                    </div>


                </div>


                <div class="flex items-center py-3">
                    <div class="w-full">
                        <span><strong>تاريخ الالتحاق بالكلية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                    <div class="w-full">
                        <span><strong>تاريخ بدء الطيران</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                </div>


                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>تاريخ الميلاد</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                    <div class="w-full">
                        <span><strong>جهة الميلاد</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>



                    <div class="w-full">
                        <span><strong>المحافظة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اسم ولي الامر</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                    <div class="w-full">
                        <span><strong>وظيفتة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اسم الوالدة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                    <div class="w-full">
                        <span><strong>وظيفتها</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                </div>


                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>عنوان ولي الامر</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>


                    <div class="w-full">
                        <span><strong>التليفون</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>


                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اسم اقرب الاقارب</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>


                    <div class="w-full">
                        <span><strong>وظيفتة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                    <div class="w-full">
                        <span><strong>التليفون</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2000</span>
                    </div>

                </div>

                <div class="flex items-center py-3">


                    <div class="w-1/2">
                        <span><strong>عدد افراد الاسرة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">5</span>
                    </div>

                    <div class="w-full">
                        <span><strong>عدد الاشقاء و الترتيب بينهم</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600"> 1/3 </span>
                    </div>


                    <div class="w-1/2">
                        <span><strong>ذكور</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">2</span>
                    </div>

                    <div class="w-1/2">
                        <span><strong>اناث</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">3</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>وظيفة الاشقاء</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">محمد مهندس ميكترونكس</span>
                    </div>
                </div>


                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>هل الوالدين منفصلين؟</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">(نعم , لا)</span>
                    </div>

                    <div class="w-full">
                        <span><strong>تاريخ الانفصال</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2001</span>
                    </div>

                </div>

                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>دخل الاسرة الشهري</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">7000</span>
                    </div>

                    <div class="w-full">
                        <span><strong>يذكر مصادر الدخل</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">البنك</span>
                    </div>


                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اخر مؤهل دراسي حاصل علية الطالب قبل الالتحاق بالكلية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">سباك</span>
                    </div>

                </div>

                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>تاريخ الحصول علي اخر مؤهل دراسي</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">27/3/2001</span>
                    </div>

                    <div class="w-full">
                        <span><strong>الشعبة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">علمي رياضة</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>المدرسة او الجهة التي حصل منها علي الشهادة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">الجامعة الكندية</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>النسبة المؤية الحاصل عليها في الثانوية العامة</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">96.4</span>
                    </div>

                </div>


                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>اللغة الاجنبية الاولي</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">(الانجليزية , الفرنسية)</span>
                    </div>

                    <div class="w-full">
                        <span><strong>الدرجة الحاصل عليها</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">39</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>عدد سنوات الدراسة الثانوية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">3</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>البطولات الرياضية</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">سباحة</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>الهوايات</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">سباحة</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>رغبة الطالب في الطيران</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">(مقاتلات , هليكوبتر , مواصلات , جوي)</span>
                    </div>

                </div>

                <div class="flex items-center py-3">

                    <div class="w-full">
                        <span><strong>نوع الطراز</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">مقاتلات</span>
                    </div>

                </div>

                <div class="flex items-center py-3">


                    <div class="w-full">
                        <span><strong>توقيع الطالب</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">احمد سعيد</span>
                    </div>


                    <div class="w-full">
                        <span><strong>توقيع المدرس</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">احمد سعيد</span>
                    </div>

                    <div class="w-full">
                        <span><strong>توقيع قائد السرب</strong></span> : <span
                        class="border-b-2 border-dashed border-zinc-600">احمد سعيد</span>
                    </div>

                </div>
            </div>



        </div>
    </div> --}}



</x-filament-panels::page>

