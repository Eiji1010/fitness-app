<x-dashboard-layout>
    <div>
        <h2>Search Food</h2>
        <form method="GET" action="{{ route('dashboard.food') }}">
            <div>
                <label>Name</label>
                <input type="text" name="name" id="name" value="{{request('name')}}">
            </div>
            <div>
                <label>Food Type</label>
                <select name="food_type" id="food_type">
                    <option>All</option>
                    @foreach($foodTypes as $foodType)
                        <option>
                            {{ $foodType->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div>
                <label>Tags (Comma Separated)</label>
                <input type="text" name="tags" id="tags" value="{{ request('tags') }}">
            </div>
            <div>
                <button type="submit">Search</button>
            </div>

        </form>
    </div>
    <div>
        <x-dashboard.food-cards :food-paginator="$food">
        </x-dashboard.food-cards>

    </div>
</x-dashboard-layout>
