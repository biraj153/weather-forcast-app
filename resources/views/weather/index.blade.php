<x-layout>
    <div class="card mb-3 mx-5 bg-sky-600">
        <div class="card-header border-none text-center ">
            <h3>Weather</h3>
        </div>
        <div class="card-body container-fluid border-none px-5 ">
            <div class="row justify-content-between">
                <div class="col-8 text-left">
                    <h5 class="card-title">{{ $weather['location']['name'] }}, {{ $weather['location']['country'] }}</h5>
                    <p class="card-text">Current Temperature: {{ $weather['current']['temp_c'] }}&deg;C |
                        {{ $weather['current']['temp_f'] }}&deg;F</p>
                </div>
                <div class="col-4">
                    <div class="text-end">
                        <img src="{{ $weather['current']['condition']['icon'] }}">
                        {{ $weather['current']['condition']['text'] }}
                    </div>
                    <div class="text-end">Humidity: {{ $weather['current']['humidity'] }}</div>
                </div>
            </div>
        </div>
    </div>
    <form method="GET" action="{{ route('weather.index') }}" class="align-center mx-5">
        <div class="row">
            <div class="col-10">
                <select class="form-select" aria-label="Default select example" name="location">
                    <option value="1" selected>Select Location</option>
                    <option value="Baglung">Baglung</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                    <option value="Biratnagar">Biratnagar</option>
                    <option value="Birgunj">Birgunj</option>
                    <option value="Butwal">Butwal</option>
                    <option value="Dhangadhi">Dhangadhi</option>
                    <option value="Ghorahi">Ghorahi</option>
                    <option value="Hetauda">Hetauda</option>
                    <option value="Itahari">Itahari</option>
                    <option value="Janakpur">Janakpur</option>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Lahan">Lahan</option>
                    <option value="Pokhara">Pokhara</option>
                    <option value="Rajbiraj">Rajbiraj</option>
                    <option value="Siddharthanagar">Siddharthanagar</option>
                    <option value="Tulsipur">Tulsipur</option>
                </select>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Get Weather</button>
            </div>
        </div>
    </form>

    </form>
</x-layout>
