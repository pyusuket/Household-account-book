@php
    use App\Models\Post;
    // 収入
    $Income_mains = Post::$Income_mains;
    $Interest_rates = Post::$Interest_rates;
    $dividends = Post::$dividends;
    $real_estates = Post::$real_estates;
    $businesses = Post::$businesses;
    $salaries = Post::$salaries;
    $retirements = Post::$retirements;
    $forest = Post::$forest;
    $assignments = Post::$assignments;
    $temporarise = Post::$temporarise;
    $miscellanies = Post::$miscellanies;

    // 支出
    $expenditure_mains = Post::$expenditure_mains;
    $food_costs = Post::$food_costs;
    $daily_use_items = Post::$daily_use_items;
    $hobbies_amusements = Post::$hobbies_amusements;
    $entertainment_expenses = Post::$entertainment_expenses;
    $clothing_beauty = Post::$clothing_beauty;
    $health_medical = Post::$health_medical;
    $automobile = Post::$automobile;
    $self_investments = Post::$self_investments;
    $education = Post::$education;
    $variable_costs = Post::$variable_costs;
    $residence = Post::$residence;
    $water_utilities = Post::$water_utilities;
    $communication_cost = Post::$communication_cost;
    $taxes = Post::$taxes;
    $social_security = Post::$social_security;
    $insurance = Post::$insurance;
    $subscription = Post::$subscription;
    $fixed_cost = Post::$fixed_cost;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            投稿編集
        </h2>
    </x-slot>

    <section class="text-gray-600 body-font relative bg-gray-500">
    <div class="container px-5 py-12 mx-auto">
        <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="md:p-6 bg-white border-b border-gray-200">
                    <x-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('post.update', ['post' => $post->id])}}">
                    @method('PUT')
                    @csrf
                        <div class="flex flex-col -m-2">
                                <div class="p-2 w-full">
                                    <div class="relative">
                                        <label for="name" class="leading-7 text-sm text-gray-600">■日付：</label>
                                        <input type="date" id="date" name="day" value="{{ $post->day }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
                                                        @foreach ( $Income_mains as $key => $Income_mains )
                                                            <option value="{{$key}}"> {{$Income_mains}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="支出">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $expenditure_mains as $key => $expenditure_mains )
                                                            <option value="{{$key}}"> {{$expenditure_mains}} </option>
                                                        @endforeach
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
                                                        @foreach ( $Interest_rates as $key => $Interest_rates )
                                                            <option value="{{$key}}"> {{$Interest_rates}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="配当">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $dividends as $key => $dividends )
                                                            <option value="{{$key}}"> {{$dividends}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="不動産">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $real_estates as $key => $real_estates )
                                                            <option value="{{$key}}"> {{$real_estates}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="事業">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $businesses as $key => $businesses )
                                                            <option value="{{$key}}"> {{$businesses}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="給与">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $salaries as $key => $salaries )
                                                            <option value="{{$key}}"> {{$salaries}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="退職">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $retirements as $key => $retirements )
                                                            <option value="{{$key}}"> {{$retirements}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="山林">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $forest as $key => $forest )
                                                            <option value="{{$key}}"> {{$forest}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="譲渡">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $assignments as $key => $assignments )
                                                            <option value="{{$key}}"> {{$assignments}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="一時">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $temporarise as $key => $temporarise )
                                                            <option value="{{$key}}"> {{$temporarise}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="雑">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $miscellanies as $key => $miscellanies )
                                                            <option value="{{$key}}"> {{$miscellanies}} </option>
                                                        @endforeach
                                                </optgroup>

                                                {{-- 支出 --}}
                                                <optgroup label="食費">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $food_costs as $key => $food_costs )
                                                            <option value="{{$key}}"> {{$food_costs}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="日用品">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $daily_use_items as $key => $daily_use_items )
                                                            <option value="{{$key}}"> {{$daily_use_items}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="趣味・娯楽">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $hobbies_amusements as $key => $hobbies_amusements )
                                                            <option value="{{$key}}"> {{$hobbies_amusements}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="交際費">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $entertainment_expenses as $key => $entertainment_expenses )
                                                            <option value="{{$key}}"> {{$entertainment_expenses}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="衣服・美容">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $clothing_beauty as $key => $clothing_beauty )
                                                            <option value="{{$key}}"> {{$clothing_beauty}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="健康・医療">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $health_medical as $key => $health_medical )
                                                            <option value="{{$key}}"> {{$health_medical}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="自動車">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $automobile as $key => $automobile )
                                                            <option value="{{$key}}"> {{$automobile}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="自己投資">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $self_investments as $key => $self_investments )
                                                            <option value="{{$key}}"> {{$self_investments}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="教育・養育">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $education as $key => $education )
                                                            <option value="{{$key}}"> {{$education}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="その他変動費">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $variable_costs as $key => $variable_costs )
                                                            <option value="{{$key}}"> {{$variable_costs}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="住居費">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $residence as $key => $residence )
                                                            <option value="{{$key}}"> {{$residence}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="水道・光熱費">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $water_utilities as $key => $water_utilities )
                                                            <option value="{{$key}}"> {{$water_utilities}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="通信費">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $communication_cost as $key => $communication_cost )
                                                            <option value="{{$key}}"> {{$communication_cost}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="税">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $taxes as $key => $taxes )
                                                            <option value="{{$key}}"> {{$taxes}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="社会保障費">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $social_security as $key => $social_security )
                                                            <option value="{{$key}}"> {{$social_security}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="保険">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $insurance as $key => $insurance )
                                                            <option value="{{$key}}"> {{$insurance}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="サブスク">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $subscription as $key => $subscription )
                                                            <option value="{{$key}}"> {{$subscription}} </option>
                                                        @endforeach
                                                </optgroup>
                                                <optgroup label="その他固定費">
                                                    <option value="" disabled selected style="display:none;">選択してください</option>
                                                        @foreach ( $fixed_cost as $key => $fixed_cost )
                                                            <option value="{{$key}}"> {{$fixed_cost}} </option>
                                                        @endforeach
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
                            <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script type="text/javascript">
        window.onload = function() {
            selboxValue = document.getElementById( "SEL1" ).value;
            if (selboxValue === "収入") {
                document.getElementById('hidden1').style.display = "";
                document.getElementById('hidden2').style.display = "none";
            } else if (selboxValue === "支出") {
                document.getElementById("hidden2").style.display = "";
                document.getElementById("hidden1").style.display = "none";
            }
        }
    </script>

</x-app-layout>
