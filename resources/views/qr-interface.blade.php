<x-layout>
  <div class="main-container">
    <form action="">
      @csrf
      <div class="qr">
          <div class="qr-section">
              <div class="">
                <div class="qr-code" style="height:inherit">
                    {!! QrCode::size(300)->generate("https://www.youtube.com/watch?v=yzEuC8TWimA") !!}
                </div>
              </div>
          </div>
        <div class="buttons">
          <div class="activate">
              <button class="btn btn-activate">
                ACTIVATE
              </button>
            </div>
            <div class="deactivate">
              <button class="btn btn-deactivate" >
                DEACTIVATE
              </button>
            </div>
            <div class="add-student">
              <button class="btn btn-student" >
                <a href="/attendance">
                  ADD STUDENT
                </a>
              </button>
            </div>
        </div>
        </div>
      </form>
    </div>

  </div>

</x-layout>
