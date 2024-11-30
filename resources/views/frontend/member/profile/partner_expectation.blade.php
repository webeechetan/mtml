<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Partner Expectation')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('partner_expectations.update', $member->id) }}" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="general">{{translate('General Requirement')}}</label>
                    <input type="text" name="general" value="{{ !empty($member->partner_expectations->general) ? $member->partner_expectations->general : "" }}" class="form-control" placeholder="{{translate('General')}}" required>
                </div>
                <div class="col-md-6">
                    <label for="age">Age</label>
                    <input type="text" name="age" value="{{ !empty($member->partner_expectations->age) ? $member->partner_expectations->age : "" }}" class="form-control" placeholder="{{translate('Age')}}" required>
                </div>
                {{-- <div class="col-md-6">
                    <label for="residence_country_id">{{translate('Residence Country')}}</label>
                    @php $partner_residence_country = !empty($member->partner_expectations->residence_country_id) ? $member->partner_expectations->residence_country_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="residence_country_id" data-live-search="true" required>
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if($country->id == $partner_residence_country) selected @endif >{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('residence_country_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div> --}}
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_height">{{translate('Min Height')}}  ({{ translate('In Feet') }})</label>
                    <input type="number" name="partner_height" value="{{ !empty($member->partner_expectations->height) ? $member->partner_expectations->height : "" }}" step="any"  placeholder="{{ translate('Height') }}" class="form-control" required>
                    @error('partner_height')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_weight">{{translate('Max Weight')}}  ({{ translate('In Kg') }})</label>
                    <input type="number" name="partner_weight" value="{{ !empty($member->partner_expectations->weight) ? $member->partner_expectations->weight : "" }}" step="any" class="form-control" placeholder="{{translate('Weight')}}" required>
                    @error('partner_weight')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_marital_status">{{translate('Marital-Status')}}</label>
                    @php $partner_marital_status_id = !empty($member->partner_expectations->marital_status_id) ? $member->partner_expectations->marital_status_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_marital_status" data-live-search="true" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        @foreach ($marital_statuses as $marital_status)
                        <option value="{{$marital_status->id}}" @if($partner_marital_status_id == $marital_status->id) selected @endif>{{$marital_status->name}}</option>
                        @endforeach
                    </select>
                    @error('partner_marital_status')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="partner_children_acceptable">{{translate('Children Acceptable')}}</label>
                    @php $children_acceptable = !empty($member->partner_expectations->children_acceptable) ? $member->partner_expectations->children_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_children_acceptable" required>
                        <option value="">{{ translate('Choose One') }}</option>
                        <option value="yes" @if($children_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($children_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($children_acceptable ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('partner_children_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_religion_id">{{translate('Religion')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_religion_id" id="partner_religion_id" data-live-search="true" required>
                        <option value="">{{translate('Select One')}}</option>
                        @foreach ($religions as $religion)
                            <option value="{{$religion->id}}" @if($religion->id == $partner_religion_id) selected @endif> {{ $religion->name }} </option>
                        @endforeach
                    </select>
                    @error('partner_religion_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_body_type">{{translate('Body Type')}}</label>
                    <input type="text" name="partner_body_type" value="{{ !empty($member->partner_expectations->body_type) ? $member->partner_expectations->body_type : "" }}" class="form-control" placeholder="{{translate('Body Type')}}">
                    @error('partner_body_type')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="community">{{translate('Community')}}</label>
                    <select class="form-control aiz-selectpicker" name="community" id="community" data-live-search="true" >
                          <option value="">{{translate('Select One')}}</option>
                          <option value="Jounsari"
                          @if(!empty($member->partner_expectations->community) && $member->partner_expectations->community == "Jaunsari")
                              selected
                          @endif
                          >Jaunsari</option>
                          <option value="Bawar"
                          @if(!empty($member->partner_expectations->community) && $member->partner_expectations->community == "Bawar")
                              selected
                          @endif
                          >Bawar</option>
                          <option value="Jonpuri"
                          @if(!empty($member->partner_expectations->community) && $member->partner_expectations->community == "Jonpuri")
                              selected
                          @endif
                          >Jonpuri</option>
                          <option value="Himachali"
                          @if(!empty($member->partner_expectations->community) && $member->partner_expectations->community == "Himachali")
                              selected
                          @endif
                          >Himachali</option>
                          <option value="Garhwali"
                          @if(!empty($member->partner_expectations->community) && $member->partner_expectations->community == "Garhwali")
                              selected
                          @endif
                          >Garhwali</option>
                          <option value="kumoani"
                          @if(!empty($member->partner_expectations->community) && $member->partner_expectations->community == "kumoani")
                              selected
                          @endif
                          >kumoani</option>
                          <option value="Other"
                          @if(!empty($member->partner_expectations->community) && $member->partner_expectations->community == "Other")
                              selected
                          @endif
                          >Other</option>
                    </select>
                    @error('community')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="block">{{translate('block')}}</label>
                    <select class="form-control aiz-selectpicker" name="block" id="block" data-live-search="true">
                      <option value="">
                          {{translate('Select One')}}
                      </option>
                      <option value="Kalsi"
                      @if(!empty($member->partner_expectations->block) && $member->partner_expectations->block == "Kalsi")
                          selected
                      @endif
                      >Kalsi</option>
                      <option value="Chakrata"
                      @if(!empty($member->partner_expectations->block) && $member->partner_expectations->block == "Chakrata")
                          selected
                      @endif
                      >Chakrata</option>
                      <option value="Other"
                      @if(!empty($member->partner_expectations->block) && $member->partner_expectations->block == "Other")
                          selected
                      @endif
                      >Other</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="Patti">{{translate('Khat/Patti')}}</label>
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
                            @if(!empty($member->partner_expectations->patti) && $member->partner_expectations->patti == $patti)
                                selected
                            @endif
                            >{{$patti}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="Your Gaon">{{translate('Gaon')}}</label>
                    <input type="text" name="gaon" value="{{!empty($member->partner_expectations->gaon) ? $member->partner_expectations->gaon : "" }}" class="form-control" placeholder="{{translate('Gaon')}}">
                    @error('gaon')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                
                <div class="col-md-6">
                    <label for="language_id">{{translate('Language')}}</label>
                    @php $partner_language = !empty($member->partner_expectations->language_id) ? $member->partner_expectations->language_id : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="language_id" data-live-search="true" required>
                        <option value="">{{translate('Select One')}}</option>
                        @foreach ($languages as $language)
                            <option value="{{$language->id}}" @if($language->id == $partner_language) selected @endif> {{ $language->name }} </option>
                        @endforeach
                    </select>
                    @error('language_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    {{-- <label for="pertner_complexion">{{translate('Complexion')}}</label>
                    <input type="text" name="pertner_complexion" value="{{ !empty($member->partner_expectations->complexion) ? $member->partner_expectations->complexion : "" }}" class="form-control" placeholder="{{translate('Complexion')}}" required>
                    @error('pertner_complexion')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror --}}

                    <label for="partner_diet">{{translate('Diet')}}</label>
                    @php $user_partner_diet = !empty($member->partner_expectations->diet) ? $member->partner_expectations->diet : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_diet" data-live-search="true" required>
                        <option value="Veg" @if($user_partner_diet ==  'Veg') selected @endif >{{translate('Veg')}}</option>
                        <option value="Non-Veg" @if($user_partner_diet ==  'Non-Veg') selected @endif >{{translate('Non-Veg')}}</option>
                        @error('partner_diet')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="pertner_education">{{translate('Qualification')}}</label>
                    <input type="text" name="pertner_education" value="{{ !empty($member->partner_expectations->education) ? $member->partner_expectations->education : "" }}" class="form-control" placeholder="{{translate('Education')}}">
                    @error('pertner_education')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="partner_profession">{{translate('Profession')}}</label>
                    {{-- <input type="text" name="partner_profession" value="{{ !empty($member->partner_expectations->profession) ? $member->partner_expectations->profession : "" }}"> --}}
                    @php $user_profession = !empty($member->partner_expectations->profession) ? $member->partner_expectations->profession : ""; @endphp
                    <select name="partner_profession" id="partner_profession"  class="form-control aiz-selectpicker" placeholder="{{translate('Profession')}}">
                        <option value="Private Company" @if($user_profession ==  'Private Company') selected @endif >{{translate('Private Company')}}</option>
                        <option value="Govt/Public Sector" @if($user_profession ==  'Govt/Public Sector') selected @endif >{{translate('Govt/Public Sector')}}</option>
                        <option value="Defence/Civil Servent" @if($user_profession ==  'Defence/Civil Servent') selected @endif >{{translate('Defence/Civil Servent')}}</option>
                        <option value="Business/Self Employes" @if($user_profession ==  'Business/Self Employes') selected @endif >{{translate('Business/Self Employes')}}</option>
                        <option value="Not Working" @if($user_profession ==  'Not Working') selected @endif >{{translate('Not Working')}}</option>
                        @error('partner_profession')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>

                    
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    

                    <label for="smoking_acceptable">{{translate('Smoking Acceptable')}}</label>
                    @php $partner_smoking_acceptable = !empty($member->partner_expectations->smoking_acceptable) ? $member->partner_expectations->smoking_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="smoking_acceptable" required>
                        <option value="yes" @if($partner_smoking_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_smoking_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="Occasionally" @if($partner_smoking_acceptable ==  'Occasionally') selected @endif >{{translate('Occasionally')}}</option>
                    </select>
                    @error('smoking_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="drinking_acceptable">{{translate('Drinking Acceptable')}}</label>
                    @php $partner_drinking_acceptable = !empty($member->partner_expectations->drinking_acceptable) ? $member->partner_expectations->drinking_acceptable : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="drinking_acceptable" required>
                        <option value="yes" @if($partner_drinking_acceptable ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_drinking_acceptable ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="Occasionally" @if($partner_drinking_acceptable ==  'Occasionally') selected @endif >{{translate('Occasionally')}}</option>
                    </select>
                    @error('drinking_acceptable')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_personal_value">{{translate('Personal Value')}}</label>
                    <input type="text" name="partner_personal_value" value="{{ !empty($member->partner_expectations->personal_value) ? $member->partner_expectations->personal_value : "" }}" class="form-control" placeholder="{{translate('Personal Value')}}">
                    @error('partner_personal_value')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_manglik">{{translate('Manglik')}}</label>
                    @php $partner_manglik = !empty($member->partner_expectations->manglik) ? $member->partner_expectations->manglik : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="partner_manglik" required>
                        <option value="yes" @if($partner_manglik ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($partner_manglik ==  'no') selected @endif >{{translate('No')}}</option>
                        <option value="dose_not_matter" @if($partner_manglik ==  'dose_not_matter') selected @endif >{{translate('Dose not matter')}}</option>
                    </select>
                    @error('partner_manglik')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="partner_country_id">{{translate('Preferred Country')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_country_id" id="partner_country_id" data-live-search="true" required>
                        <option value="">{{translate('Select One')}}</option>
                        @foreach ($countries as $country)
                            <option value="{{$country->id}}" @if($country->id == $partner_country_id) selected @endif>{{$country->name}}</option>
                        @endforeach
                    </select>
                    @error('partner_country_id')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="partner_state_id">{{translate('Preferred State')}}</label>
                    <select class="form-control aiz-selectpicker" name="partner_state_id" id="partner_state_id" data-live-search="true">

                    </select>
                    @error('partner_state_id')
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
