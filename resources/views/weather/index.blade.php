<x-layout>
    <div class="card">
        <div class="card-header border-none text-center">
            <h3>Weather</h3>
        </div>
        <div class="card-body container-fluid border-none px-5">
            <div class="row justify-content-between">
                <div class="col-8 text-left">
                    <h5 class="card-title">{{ $weather['location']['name'] }}, {{ $weather['location']['country'] }}</h5>
                    <p class="card-text">Current Temperature: {{ $weather['current']['temp_c'] }}&deg;C |
                        {{ $weather['current']['temp_f'] }}&deg;F</p>
                </div>
                <div class="col-4 ">
                    <div class="text-end">
                        <img src="{{ $weather['current']['condition']['icon'] }}">
                        {{ $weather['current']['condition']['text'] }}
                    </div>
                    <div class="text-end">Humidity: {{ $weather['current']['humidity'] }}</div>
                </div>
            </div>
        </div>
    </div>
    <select class="form-select" aria-label="Default select example">
        <option selected>Select Location</option>
        <option value="1">Baglung</option>
        <option value="2">Bharatpur</option>
        <option value="3">Bhaktapur</option>
        <option value="4">Biratnagar</option>
        <option value="5">Birendranagar</option>
        <option value="6">Birgunj</option>
        <option value="7">Butwal</option>
        <option value="8">Damak</option>
        <option value="9">Dhangadhi</option>
        <option value="10">Ghorahi</option>
        <option value="11">Hetauda</option>
        <option value="12">Itahari</option>
        <option value="13">Janakpur</option>
        <option value="14">Kathmandu</option>
        <option value="15">Lahan</option>
        <option value="16">Nepalgunj</option>
        <option value="17">Pokhara</option>
        <option value="18">Rajbiraj</option>
        <option value="19">Siddharthanagar</option>
        <option value="20">Tulsipur</option>
    </select>
</x-layout>
