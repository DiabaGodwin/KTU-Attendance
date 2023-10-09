<x-layout>
  <div class="main-container">
    <form action="">
      @csrf
      <div class="qr">
          <div class="qr-section">
              <div class="">
{{--                  <h1>Hell{{$user}}</h1>--}}
                  <div class="">{{$qrCode}}</div>
              </div>
          </div>
        </div>
      </form>
    </div>

  </div>

</x-layout>
