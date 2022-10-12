@php
    // 収入
    $Income_mains = [
        'x0'  => '利子',
        'x1'  => '配当',
        'x2'  => '不動産',
        'x3' => '事業',
        'x4' => '給与',
        'x5' => '退職',
        'x6' => '山林',
        'x7' => '譲渡',
        'x8' => '一時',
        'x9' => '雑',
    ];
    $Interest_rates = [
        '0'  => '国内', '1'  => '米国', '2'  => '新興国', '3' => 'その他',
    ];
    $dividends = [
        '0'  => '国内', '1'  => '米国', '2'  => '新興国', '3' => 'その他',
    ];
    $real_estates = [
        '0'  => '国内', '1'  => '米国', '2'  => '新興国', '3' => 'その他',
    ];
    $businesses = [
        '0'  => '事業①', '1'  => '事業②', '2'  => '事業③', '3' => '事業④',
    ];
    $salaries = [
        '0'  => '給与①', '1'  => '給与②', '2'  => '給与③', '3' => '給与④',
    ];
    $retirements = [
        '0'  => '退職',
    ];
    $forest = [
        '0'  => '山林',
    ];
    $assignments = [
        '0'  => '国内', '1'  => '米国', '2'  => '新興国', '3' => 'その他',
    ];
    $temporarise = [
        '0'  => '一時①', '1'  => '一時②', '2'  => '一時③', '3' => '一時④',
    ];
    $miscellanies = [
        '0'  => '雑①', '1'  => '雑②', '2'  => '雑③', '3' => '雑④',
    ];

    // 支出
    $expenditure_mains = [
        'y0'  => '食費',
        'y1'  => '日用品',
        'y2'  => '趣味・娯楽',
        'y3' => '交際費',
        'y4' => '衣服・美容',
        'y5' => '健康・医療',
        'y6' => '自動車',
        'y7' => '自己投資',
        'y8' => '教育・養育',
        'y9' => 'その他変動費',
        'y10' => '住居費',
        'y11' => '水道・光熱費',
        'y12' => '通信費',
        'y13' => '税',
        'y14' => '社会保障費',
        'y15' => '保険',
        'y16' => 'サブスク',
        'y17' => 'その他固定費',
    ];

    $food_costs = [
        '0'  => '食費', '1'  => '外食費', '2' => 'その他食費',
    ];
    $daily_use_items = [
        '0'  => '日用品', '1'  => '子育て日用品', '2'  => 'その他日用品',
    ];
    $hobbies_amusements = [
        '0'  => '趣味①', '1'  => '趣味②', '2'  => '旅行費', '3' => 'その他趣味・娯楽費',
    ];
    $entertainment_expenses = [
        '0'  => '交際費', '1'  => '飲み会', '2'  => '冠婚葬祭', '3' => 'その他交際費',
    ];
    $clothing_beauty = [
        '0'  => '衣服', '1'  => 'その他衣服', '2'  => '美容', '3' => 'その他美容',
    ];
    $health_medical = [
        '0'  => '健康', '1'  => 'その他健康', '2'  => '医療', '3' => 'その他医療',
    ];
    $automobile = [
        '0'  => 'ガソリン', '1'  => '車検', '2'  => '駐車場', '3' => 'その他自動車',
    ];
    $self_investments = [
        '0'  => '書籍・参考書', '1'  => '資格取得費', '2' => 'その他自己投資',
    ];
    $education = [
        '0'  => '教育費', '1'  => 'その他教育費', '2'  => '養育費', '3' => 'その他養育費',
    ];
    $variable_costs = [
        '0'  => 'その他変動費',
    ];
    $residence = [
        '0'  => '家賃', '1'  => '更新費', '2'  => 'その他住居費',
    ];
    $water_utilities = [
        '0'  => '水道', '1'  => '電気', '2'  => 'ガス', '3' => 'その他水道・光熱費',
    ];
    $communication_cost = [
        '0'  => '携帯', '1'  => '回線・Wi-Fi', '2'  => '切手・配送料', '3' => 'その他通信費',
    ];
    $taxes = [
        '0'  => '住民税', '1'  => '所得税', '2'  => '配当金・分配金による税', '3' => '譲渡益税', '4' => 'その他税',
    ];
    $social_security = [
        '0'  => '医療保険（健康保険・国民健康保険）', '1'  => '年金保険（国民・厚生）', '2'  => '介護保険', '3' => 'その他社会保障費',
    ];
    $insurance = [
        '0'  => '雇用保険', '1'  => '生命保険', '2'  => '火災保険', '3' => 'その他保険',
    ];
    $subscription = [
        '0'  => 'サブスク①', '1'  => 'サブスク②', '2'  => 'サブスク③', '3' => 'サブスク④',
    ];
    $fixed_cost = [
        '0'  => 'その他固定費',
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
        <div class="flex flex-col text-center w-full mb-2">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">入力フォーム</h1>
        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
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
                            <option value="1">収入</option>
                            <option value="2">支出</option>
                        </select>
                    </div>
                </div>
                <div class="p-2 w-full">
                    <div class="relative">
                        <label for="name" class="leading-7 text-sm text-gray-600">■大項目：</label>
                        <select id="SEL2" name="main" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            <optgroup label="1" >
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                            @php
                                                foreach ( $Income_mains as $key => $Income_mains ) {
                                                        echo '<option value="' . $key . '">' . $Income_mains . '</option>';
                                                    }
                                            @endphp
                            </optgroup>
                            <optgroup label="2">
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
                            <optgroup label="x0">
                            <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $Interest_rates as $key => $Interest_rates ) {
                                                    echo '<option value="' . $key . '">' . $Interest_rates . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x1">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $dividends as $key => $dividends ) {
                                                    echo '<option value="' . $key . '">' . $dividends . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x2">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $real_estates as $key => $real_estates ) {
                                                    echo '<option value="' . $key . '">' . $real_estates . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x3">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $businesses as $key => $businesses ) {
                                                    echo '<option value="' . $key . '">' . $businesses . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x4">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $salaries as $key => $salaries ) {
                                                    echo '<option value="' . $key . '">' . $salaries . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x5">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $retirements as $key => $retirements ) {
                                                    echo '<option value="' . $key . '">' . $retirements . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x6">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $forest as $key => $forest ) {
                                                    echo '<option value="' . $key . '">' . $forest . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x7">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $assignments as $key => $assignments ) {
                                                    echo '<option value="' . $key . '">' . $assignments . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x8">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $temporarise as $key => $temporarise ) {
                                                    echo '<option value="' . $key . '">' . $temporarise . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="x9">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $miscellanies as $key => $miscellanies ) {
                                                    echo '<option value="' . $key . '">' . $miscellanies . '</option>';
                                                }
                                    @endphp
                            </optgroup>

                            {{-- 支出 --}}
                            <optgroup label="y0">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $food_costs as $key => $food_costs ) {
                                                    echo '<option value="' . $key . '">' . $food_costs . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y1">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $daily_use_items as $key => $daily_use_items ) {
                                                    echo '<option value="' . $key . '">' . $daily_use_items . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y2">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $hobbies_amusements as $key => $hobbies_amusements ) {
                                                    echo '<option value="' . $key . '">' . $hobbies_amusements . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y3">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $entertainment_expenses as $key => $entertainment_expenses ) {
                                                    echo '<option value="' . $key . '">' . $entertainment_expenses . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y4">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $clothing_beauty as $key => $clothing_beauty ) {
                                                    echo '<option value="' . $key . '">' . $clothing_beauty . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y5">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $health_medical as $key => $health_medical ) {
                                                    echo '<option value="' . $key . '">' . $health_medical . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y6">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $automobile as $key => $automobile ) {
                                                    echo '<option value="' . $key . '">' . $automobile . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y7">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $self_investments as $key => $self_investments ) {
                                                    echo '<option value="' . $key . '">' . $self_investments . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y8">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $education as $key => $education ) {
                                                    echo '<option value="' . $key . '">' . $education . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y9">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $variable_costs as $key => $variable_costs) {
                                                    echo '<option value="' . $key . '">' . $variable_costs . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y10">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $residence as $key => $residence ) {
                                                    echo '<option value="' . $key . '">' . $residence . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y11">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $water_utilities as $key => $water_utilities ) {
                                                    echo '<option value="' . $key . '">' . $water_utilities . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y12">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $communication_cost as $key => $communication_cost ) {
                                                    echo '<option value="' . $key . '">' . $communication_cost . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y13">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $taxes as $key => $taxes ) {
                                                    echo '<option value="' . $key . '">' . $taxes . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y14">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $social_security as $key => $social_security ) {
                                                    echo '<option value="' . $key . '">' . $social_security . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y15">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $insurance as $key => $insurance ) {
                                                    echo '<option value="' . $key . '">' . $insurance . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y16">
                                <option value="" disabled selected style="display:none;">選択してください</option>
                                    @php
                                            foreach ( $subscription as $key => $subscription ) {
                                                    echo '<option value="' . $key . '">' . $subscription . '</option>';
                                                }
                                    @endphp
                            </optgroup>
                            <optgroup label="y17">
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
