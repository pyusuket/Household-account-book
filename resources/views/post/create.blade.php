@php
    // 収入
    $Income_mains = [
        '利子'  => '利子',
        '配当'  => '配当',
        '不動産'  => '不動産',
        '事業' => '事業',
        '給与' => '給与',
        '退職' => '退職',
        '山林' => '山林',
        '譲渡' => '譲渡',
        '一時' => '一時',
        '雑' => '雑',
    ];
    $Interest_rates = [
        '国内'  => '国内', '米国'  => '米国', '新興国'  => '新興国', 'その他' => 'その他',
    ];
    $dividends = [
        '国内'  => '国内', '米国'  => '米国', '新興国'  => '新興国', 'その他' => 'その他',
    ];
    $real_estates = [
        '国内'  => '国内', '米国'  => '米国', '新興国'  => '新興国', 'その他' => 'その他',
    ];
    $businesses = [
        '国内'  => '国内', '米国'  => '米国', '新興国'  => '新興国', 'その他' => 'その他',
    ];
    $salaries = [
        '給与①'  => '給与①', '給与②'  => '給与②', '給与③'  => '給与③', '給与④' => '給与④',
    ];
    $retirements = [
        '退職'  => '退職',
    ];
    $forest = [
        '山林'  => '山林',
    ];
    $assignments = [
        '国内'  => '国内', '米国'  => '米国', '新興国'  => '新興国', 'その他' => 'その他',

    ];
    $temporarise = [
        '一時①'  => '一時①', '一時②'  => '一時②', '一時③'  => '一時③', '一時④' => '一時④',
    ];
    $miscellanies = [
        '雑①'  => '雑①', '雑②'  => '雑②', '雑③'  => '雑③', '雑④' => '雑④',
    ];

    // 支出
    $expenditure_mains = [
        '食費'  => '食費',
        '日用品'=> '日用品',
        '趣味・娯楽'  => '趣味・娯楽',
        '交際費' => '交際費',
        '衣服・美容' => '衣服・美容',
        '健康・医療' => '健康・医療',
        '自動車' => '自動車',
        '自己投資' => '自己投資',
        '教育・養育' => '教育・養育',
        'その他変動費' => 'その他変動費',
        '住居費' => '住居費',
        '水道・光熱費' => '水道・光熱費',
        '通信費' => '通信費',
        '税' => '税',
        '社会保障費' => '社会保障費',
        '保険' => '保険',
        'サブスク' => 'サブスク',
        'その他固定費' => 'その他固定費',
    ];

    $food_costs = [
        '食費'  => '食費', '外食費'  => '外食費', 'その他食費' => 'その他食費',
    ];
    $daily_use_items = [
        '日用品'  => '日用品', '子育て日用品'  => '子育て日用品', 'その他日用品'  => 'その他日用品',
    ];
    $hobbies_amusements = [
        '趣味①'  => '趣味①', '趣味②'  => '趣味②', '旅行費'  => '旅行費', 'その他趣味・娯楽費' => 'その他趣味・娯楽費',
    ];
    $entertainment_expenses = [
        '交際費'  => '交際費', '飲み会'  => '飲み会', '冠婚葬祭'  => '冠婚葬祭', 'その他交際費' => 'その他交際費',
    ];
    $clothing_beauty = [
        '衣服'  => '衣服', 'その他衣服'  => 'その他衣服', '美容'  => '美容', 'その他美容' => 'その他美容',
    ];
    $health_medical = [
        '健康'  => '健康', 'その他健康'  => 'その他健康', '医療'  => '医療', 'その他医療' => 'その他医療',
    ];
    $automobile = [
        'ガソリン'  => 'ガソリン', '車検'  => '車検', '駐車場'  => '駐車場', 'その他自動車' => 'その他自動車',
    ];
    $self_investments = [
        '書籍・参考書'  => '書籍・参考書', '資格取得費'  => '資格取得費', 'その他自己投資' => 'その他自己投資',
    ];
    $education = [
        '教育費'  => '教育費', 'その他教育費'  => 'その他教育費', '養育費'  => '養育費', 'その他養育費' => 'その他養育費',
    ];
    $variable_costs = [
        'その他変動費'  => 'その他変動費',
    ];
    $residence = [
        '家賃'  => '家賃', 'その他住居費'  => 'その他住居費',
    ];
    $water_utilities = [
        '水道'  => '水道', '電気'  => '電気', 'ガス'  => 'ガス', 'その他水道・光熱費' => 'その他水道・光熱費',
    ];
    $communication_cost = [
        '携帯'  => '携帯', '回線・Wi-Fi'  => '回線・Wi-Fi', '切手・配送料'  => '切手・配送料', 'その他通信費' => 'その他通信費',
    ];
    $taxes = [
        '住民税'  => '住民税', '所得税'  => '所得税', '配当金・分配金による税'  => '配当金・分配金による税', '譲渡益税' => '譲渡益税', 'その他税' => 'その他税',
    ];
    $social_security = [
        '医療保険（健康保険・国民健康保険）'  => '医療保険（健康保険・国民健康保険）', '年金保険（国民・厚生）'  => '年金保険（国民・厚生）', '介護保険'  => '介護保険', 'その他社会保障費' => 'その他社会保障費',
    ];
    $insurance = [
        '雇用保険'  => '雇用保険', '生命保険'  => '生命保険', '火災保険'  => '火災保険', 'その他保険' => 'その他保険',
    ];
    $subscription = [
        'サブスク①'  => 'サブスク①', 'サブスク②'  => 'サブスク②', 'サブスク③'  => 'サブスク③', 'サブスク④' => 'サブスク④',
    ];
    $fixed_cost = [
        'その他固定費'  => 'その他固定費',
    ];
@endphp


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            家計簿入力
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font relative ">
    <div class="container px-5 py-12 mx-auto">
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:p-6 bg-white border-b border-gray-200">
                    <x-flash-message status="session('status')"/>
                    <x-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('post.store') }}">
                    @csrf
                    <div class="flex flex-col -m-2">
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">■日付：</label>
                                <input type="date" id="date" name="day" value="<?php echo date('Y-m-d'); ?>" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">■収支：</label>
                                <select id="SEL1" name="selection" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option value="" disabled selected style=display:none;>選択してください</option>
                                    <option value="収入">収入</option>
                                    <option value="支出">支出</option>
                                </select>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">■大項目：</label>
                                <select id="SEL2" name="main" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <optgroup label="収入" >
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                                    @php
                                                        foreach ( $Income_mains as $key => $Income_mains ) {
                                                                echo '<option value="' . $key . '">' . $Income_mains . '</option>';
                                                            }
                                                    @endphp
                                    </optgroup>
                                    <optgroup label="支出">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                                    @php
                                                        foreach ( $expenditure_mains as $key => $expenditure_mains ) {
                                                                echo '<option value="' . $key . '">' . $expenditure_mains . '</option>';
                                                            }
                                                    @endphp
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600 ">■中項目：</label>
                                <select id="SEL3" name="sub" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    {{-- 収入 --}}
                                    <optgroup label="利子">
                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $Interest_rates as $key => $Interest_rates ) {
                                                            echo '<option value="' . $key . '">' . $Interest_rates . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="配当">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $dividends as $key => $dividends ) {
                                                            echo '<option value="' . $key . '">' . $dividends . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="不動産">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $real_estates as $key => $real_estates ) {
                                                            echo '<option value="' . $key . '">' . $real_estates . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="事業">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $businesses as $key => $businesses ) {
                                                            echo '<option value="' . $key . '">' . $businesses . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="給与">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $salaries as $key => $salaries ) {
                                                            echo '<option value="' . $key . '">' . $salaries . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="退職">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $retirements as $key => $retirements ) {
                                                            echo '<option value="' . $key . '">' . $retirements . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="山林">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $forest as $key => $forest ) {
                                                            echo '<option value="' . $key . '">' . $forest . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="譲渡">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $assignments as $key => $assignments ) {
                                                            echo '<option value="' . $key . '">' . $assignments . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="一時">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $temporarise as $key => $temporarise ) {
                                                            echo '<option value="' . $key . '">' . $temporarise . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="雑">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $miscellanies as $key => $miscellanies ) {
                                                            echo '<option value="' . $key . '">' . $miscellanies . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>

                                    {{-- 支出 --}}
                                    <optgroup label="食費">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $food_costs as $key => $food_costs ) {
                                                            echo '<option value="' . $key . '">' . $food_costs . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="日用品">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $daily_use_items as $key => $daily_use_items ) {
                                                            echo '<option value="' . $key . '">' . $daily_use_items . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="趣味・娯楽">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $hobbies_amusements as $key => $hobbies_amusements ) {
                                                            echo '<option value="' . $key . '">' . $hobbies_amusements . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="交際費">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $entertainment_expenses as $key => $entertainment_expenses ) {
                                                            echo '<option value="' . $key . '">' . $entertainment_expenses . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="衣服・美容">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $clothing_beauty as $key => $clothing_beauty ) {
                                                            echo '<option value="' . $key . '">' . $clothing_beauty . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="健康・医療">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $health_medical as $key => $health_medical ) {
                                                            echo '<option value="' . $key . '">' . $health_medical . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="自動車">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $automobile as $key => $automobile ) {
                                                            echo '<option value="' . $key . '">' . $automobile . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="自己投資">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $self_investments as $key => $self_investments ) {
                                                            echo '<option value="' . $key . '">' . $self_investments . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="教育・養育">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $education as $key => $education ) {
                                                            echo '<option value="' . $key . '">' . $education . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="その他変動費">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $variable_costs as $key => $variable_costs) {
                                                            echo '<option value="' . $key . '">' . $variable_costs . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="住居費">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $residence as $key => $residence ) {
                                                            echo '<option value="' . $key . '">' . $residence . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="水道・光熱費">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $water_utilities as $key => $water_utilities ) {
                                                            echo '<option value="' . $key . '">' . $water_utilities . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="通信費">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $communication_cost as $key => $communication_cost ) {
                                                            echo '<option value="' . $key . '">' . $communication_cost . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="税">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $taxes as $key => $taxes ) {
                                                            echo '<option value="' . $key . '">' . $taxes . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="社会保障費">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $social_security as $key => $social_security ) {
                                                            echo '<option value="' . $key . '">' . $social_security . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="保険">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $insurance as $key => $insurance ) {
                                                            echo '<option value="' . $key . '">' . $insurance . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="サブスク">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $subscription as $key => $subscription ) {
                                                            echo '<option value="' . $key . '">' . $subscription . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                    <optgroup label="その他固定費">
                                        <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                    foreach ( $fixed_cost as $key => $fixed_cost ) {
                                                            echo '<option value="' . $key . '">' . $fixed_cost . '</option>';
                                                        }
                                            @endphp
                                    </optgroup>
                                </select>
                                </div>
                            </div>
                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">■金額：</label>
                                <input type="number" id="amount" name="amount" value="{{ old('amount') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="message" class="leading-7 text-sm text-gray-600">■コメント：</label>
                                    <textarea id="message" name="comment" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('comment') }}</textarea>
                                </div>
                        </div>
                    </div>
                            <div class="p-2 w-full">
                                <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">送信</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script type="text/javascript">
        ConnectedSelect(['SEL1','SEL2','SEL3']);
                function ConnectedSelect(selIdList){
                    for(var i=0;selIdList[i];i++) {
                        var CS = new Object();
                        var obj = document.getElementById(selIdList[i]);
                        if(i){
                            CS.node=document.createElement('select');
                            var GR = obj.getElementsByTagName('optgroup');
                            while(GR[0]) {
                                CS.node.appendChild(GR[0].cloneNode(true));
                                obj.removeChild(GR[0]);
                            }
                            obj.disabled = true;
                        }
                        if(selIdList[i+1]) {
                            CS.nextSelect = document.getElementById(selIdList[i+1]);
                            obj.onchange = function(){ConnectedSelectEnabledSelect(this)};
                        } else {
                            CS.nextSelect = false;
                        }
                        obj.ConnectedSelect = CS;
                    }
                }

        function ConnectedSelectEnabledSelect(oSel){
            var oVal = oSel.options[oSel.selectedIndex].value;
            if(oVal) {
                while(oSel.ConnectedSelect.nextSelect.options[1])oSel.ConnectedSelect.nextSelect.remove(1);
                var eF = false;
                for(var OG=oSel.ConnectedSelect.nextSelect.ConnectedSelect.node.firstChild;OG;OG=OG.nextSibling) {
                    if(OG.label == oVal) {
                        eF = true;
                        for(var OP=OG.firstChild;OP;OP=OP.nextSibling)
                            oSel.ConnectedSelect.nextSelect.appendChild(OP.cloneNode(true));
                        break;
                    }
                }
                oSel.ConnectedSelect.nextSelect.disabled = !eF;
            } else {
                oSel.ConnectedSelect.nextSelect.selectedIndex = 0;
                oSel.ConnectedSelect.nextSelect.disabled = true;
            }
            if(oSel.ConnectedSelect.nextSelect.onchange)oSel.ConnectedSelect.nextSelect.onchange();
        }
    </script>

</x-app-layout>
