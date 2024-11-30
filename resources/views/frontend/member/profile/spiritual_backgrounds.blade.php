<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Social Background')}}</h5>
    </div>
    <div class="card-body">
      <form action="{{ route('spiritual_backgrounds.update', $member->id) }}" method="POST">
          <input name="_method" type="hidden" value="PATCH">
          @csrf
          <input type="hidden" name="address_type" value="present">
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="member_religion_id">{{translate('Religion')}}</label>
                  <select class="form-control aiz-selectpicker" name="member_religion_id" id="member_religion_id" data-live-search="true" >
                      <option value="">{{translate('Select One')}}</option>
                      @foreach ($religions as $religion)
                          <option value="{{$religion->id}}" @if($religion->id == $member_religion_id) selected @endif> {{ $religion->name }} </option>
                      @endforeach
                  </select>
                  @error('member_religion_id')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <div class="col-md-6">
                  <label for="community">{{translate('Community')}}</label>
                  <select class="form-control aiz-selectpicker" name="community" id="community" data-live-search="true" >
                        <option value="">{{translate('Select One')}}</option>
                        <option value="Jounsari"
                        @if(!empty($member->spiritual_backgrounds->community) && $member->spiritual_backgrounds->community == "Jaunsari")
                            selected
                        @endif
                        >Jaunsari</option>
                        <option value="Bawar"
                        @if(!empty($member->spiritual_backgrounds->community) && $member->spiritual_backgrounds->community == "Bawar")
                            selected
                        @endif
                        >Bawar</option>
                        <option value="Jonpuri"
                        @if(!empty($member->spiritual_backgrounds->community) && $member->spiritual_backgrounds->community == "Jonpuri")
                            selected
                        @endif
                        >Jonpuri</option>
                        <option value="Himachali"
                        @if(!empty($member->spiritual_backgrounds->community) && $member->spiritual_backgrounds->community == "Himachali")
                            selected
                        @endif
                        >Himachali</option>
                        <option value="Garhwali"
                        @if(!empty($member->spiritual_backgrounds->community) && $member->spiritual_backgrounds->community == "Garhwali")
                            selected
                        @endif
                        >Garhwali</option>
                        <option value="kumoani"
                        @if(!empty($member->spiritual_backgrounds->community) && $member->spiritual_backgrounds->community == "kumoani")
                            selected
                        @endif
                        >kumoani</option>
                        <option value="Other"
                        @if(!empty($member->spiritual_backgrounds->community) && $member->spiritual_backgrounds->community == "Other")
                            selected
                        @endif
                        >Other</option>
                  </select>
                  @error('community')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="block">{{translate('block')}}</label>
                  <select class="form-control aiz-selectpicker" name="block" id="block" data-live-search="true">
                    <option value="">
                        {{translate('Select One')}}
                    </option>
                    <option value="Kalsi"
                    @if(!empty($member->spiritual_backgrounds->block) && $member->spiritual_backgrounds->block == "Kalsi")
                        selected
                    @endif
                    >Kalsi</option>
                    <option value="Chakrata"
                    @if(!empty($member->spiritual_backgrounds->block) && $member->spiritual_backgrounds->block == "Chakrata")
                        selected
                    @endif
                    >Chakrata</option>
                    <option value="Other"
                    @if(!empty($member->spiritual_backgrounds->block) && $member->spiritual_backgrounds->block == "Other")
                        selected
                    @endif
                    >Other</option>
                  </select>
              </div>
              <div class="col-md-6">
                <label for="Patti">{{translate('Patti')}}</label>
                <select class="form-control aiz-selectpicker" name="patti" id="patti" data-live-search="true">
                  <option value="">
                      {{translate('Select One')}}
                  </option>
                  @php
                    $patti = ['Koru', 'Seli', 'Samalta', 'Bamtad', 'Maletha', 'Athgaon', 'Bantad', 'Bamtad',
                            'Silgaon', 'Vishail', 'Pashgaon', 'Chandau', 'Udpalta', 'Siligothan', 'Bheladh', 'Lakhwad',
                            'Siligothan', 'Fartad', 'Bharam', 'Magthadh', 'Ghanau', 'Mohana', 'Kaili', 'Bondar', 'Chhultad',
                            'Bhondar', 'Taplad', 'Bislad', 'Dwar', 'Babar', 'Babar', 'Devdhar', 'Silgaon Babar', 'Other'];
                  @endphp
                    @foreach ($patti as $patti)
                        <option value="{{$patti}}"
                        @if(!empty($member->spiritual_backgrounds->patti) && $member->spiritual_backgrounds->patti == $patti)
                            selected
                        @endif
                        >{{$patti}}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="form-group row">
              <div class="col-md-6">
                  <label for="Your Gaon">{{translate('Your Gaon')}}</label>
                  <input type="text" name="gaon" value="{{!empty($member->spiritual_backgrounds->gaon) ? $member->spiritual_backgrounds->gaon : "" }}" class="form-control" placeholder="{{translate('gaon')}}">
                  @error('gaon')
                      <small class="form-text text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <div class="col-md-6">
                <label for="Khandan/Parivaar">{{translate('Khandan/Parivaar Name')}}</label>
                <input type="text" name="khandan" value="{{!empty($member->spiritual_backgrounds->khandan) ? $member->spiritual_backgrounds->khandan : "" }}" class="form-control" placeholder="{{translate('khandan')}}">
                @error('khandan')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-md-6" style="margin-top: 15px">
                <label for="Khandan/Parivaar">{{translate('Sub-Community')}}</label>
                <input type="text" name="sub_community" value="{{!empty($member->spiritual_backgrounds->sub_community) ? $member->spiritual_backgrounds->sub_community : "" }}" class="form-control" placeholder="{{translate('sub_community')}}">
                @error('sub_community')
                    <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
          </div>
          <div class="text-right">
              <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
          </div>
      </form>
    </div>
</div>
