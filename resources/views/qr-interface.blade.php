<x-layout>
  <div class="main-container">
    <form action="">
      @csrf
      <div class="qr">
          <div class="qr-section">
              <div class="">
                  <h1>Helloo{{$user}}</h1>
                <div class="qr-code" style="height:inherit">
                    {!! QrCode::size(500)->generate(
                    "https://www.youtube.com/watch?v=yzEuC8TWimA"

                    ) !!}
                </div>
              </div>
          </div>
        </div>
      </form>
    </div>

  </div>

</x-layout>
