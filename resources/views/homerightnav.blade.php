<style>
  .hov:hover h6{
    text-decoration: underline;
    color: #007bff;
  }
  .hov:hover{
    background-color: rgb(199, 199, 199);
    border-radius: 10px;
  }
  .hov {
    padding: 10px;
  }
</style>
  <div class="position-sticky" style="top: 2rem;">

    <div class="p-4 mb-3 archives rounded-app">
      <h3 class="fst-italic">Posts</h3>


      <h5 class="text-success">1st Quarter</h5>
      @if($first->count())
        @foreach($first as $firsts)
          <tr>
              <a href="/computer/{{$firsts->computer_id}}" class="nounderline">
                <div class="hov">
                      <h6>{{$firsts->computer_location}}</h6> 
                      <span class="text-muted" style="font-size: .7rem;">Posted {{$firsts->created_at->diffForHumans()}}</span><br><br>
                      <span>{{$firsts->computer_pcname}}</span><br>
                      <span>{{$firsts->computer_ipadd}}</span>
                </div>
              </a>
          </tr>
          <hr>
        @endforeach 
      @else
        <tr>
          <h6 class="text-danger">No Preventive found</h6>
        </tr>
      @endif



      <h5 class="text-success">2nd Quarter</h5>
      @if($second->count())
        @foreach($second as $seconds)
          <tr>
              <a href="/computer/{{$seconds->computer_id}}" class="nounderline">
                <div class="hov">
                      <h6>{{$seconds->computer_location}}</h6>
                      <span class="text-muted" style="font-size: .7rem;">Posted {{$seconds->created_at->diffForHumans()}}</span><br><br>
                      <span>{{$seconds->computer_pcname}}</span><br>
                      <span>{{$seconds->computer_ipadd}}</span>
                </div>
              </a>
          </tr>
          <hr>
        @endforeach 
      @else
        <tr>
          <h6 class="text-danger">No Preventive found</h6>
        </tr>
      @endif



      <h5 class="text-success">3rd Quarter</h5>
      @if($third->count())
        @foreach($third->take(2) as $thirds)
          <tr>
              <a href="/computer/{{$thirds->computer_id}}" class="nounderline">
                <div class="hov">
                      <h6>{{$thirds->computer_location}}</h6>
                      <span class="text-muted" style="font-size: .7rem;">Posted {{$thirds->created_at->diffForHumans()}}</span><br><br>
                      <span>{{$thirds->computer_pcname}}</span><br>
                      <span>{{$thirds->computer_ipadd}}</span>
                </div>
              </a>
          </tr>
          <hr>
        @endforeach 
      @else
        <tr>
          <h6 class="text-danger">No Preventive found</h6>
        </tr>
      @endif



        <h5 class="text-success">4th Quarter</h5>
        @if($forth->count())
            @foreach($forth->take(2) as $forths)
                <tr>
                    <a href="/computer/{{$forths->computer_id}}" class="nounderline">
                      <div class="hov">
                            <h6>{{$forths->computer_location}}</h6>
                            <span class="text-muted" style="font-size: .7rem;">Posted {{$forths->created_at->diffForHumans()}}</span><br><br>
                            <span>{{$forths->computer_pcname}}</span><br>
                            <span>{{$forths->computer_ipadd}}</span>
                      </div>
                    </a>
                </tr>
                <hr>
              @endforeach
        @else
            <tr>
              <h6 class="text-danger">No Preventive found</h6>
            </tr>
        @endif

    </div>

    <div class="p-4 archives rounded-app">
      <h4 class="fst-italic">Contact IT</h4>
      <label>IT Office</label><br>
      <span>Telephone: 266-1357</span><br>
      <span>Tablet Smart: 0998-5893494</span><br>
      <span>Smart: 0949-8865866</span><br>
      {{-- <span>Rex: 09235532689</span><br>
      <span>Rhandel: 09266998413</span><br>
      <span>Hart: 09438457147</span><br>
      <span>Reymar: 09218072629</span><br>
      <span>Mark C: 09399153370/09914986916</span><br>
      <span>Allen: 09202961622</span><br>
      <span>Mark O: 09218155172</span><br>
      <span>Asnaui: 09995249718</span><br>
      <span>Fred: 09433541469</span><br>
      <span>Arcel: 09667985004</span><br>
      <span>Ken: 09333335092</span><br>
      <span>Ramil: 09430879847</span><br>
      <span>Noemi: 09565993563</span><br>
      <span>Allan: 09176006099</span><br>
      <span>Mel: </span><br> --}}
      
    </div>

    <div class="p-4 archives mt-3 rounded-app">
      <h4 class="fst-italic">Pages</h4>
      <ol class="list-unstyled">
        <li><a href="https://vsmmc.doh.gov.ph/" target="_blank">VSMMC Website</a></li>
        <li><a href="https://www.facebook.com/OfficialVSMMC/" target="_blank">VSMMC Facebook Page</a></li>
      </ol>
    </div>
  </div>