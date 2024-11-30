<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Family Information')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('families.update', $member->id) }}" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="father">{{translate('Father')}}</label>
                    @php $user_father = !empty($member->families->father) ? $member->families->father : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="father" placeholder="{{translate('Father')}}" required>
                        <option value="Employed" @if($user_father ==  'Employed') selected @endif >{{translate('Employed')}}</option>
                        <option value="Bussiness-Man" @if($user_father ==  'Bussiness-Man') selected @endif >{{translate('Bussiness-Man')}}</option>
                        <option value="Retired" @if($user_father ==  'Retired') selected @endif >{{translate('Retired')}}</option>
                        <option value="Home-Maker" @if($user_father ==  'Home-Maker') selected @endif >{{translate('Home-Maker')}}</option>
                        <option value="Passed-Away" @if($user_father ==  'Passed-Away') selected @endif >{{translate('Passed-Away')}}</option>
                        @error('father')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>



                 
                    {{-- <input type="text" name="father" value="{{ !empty($member->families->father) ? $member->families->father : "" }}" class="form-control" placeholder="{{translate('Father')}}" required>
                    @error('father')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror --}}
                </div>
                <div class="col-md-6">
                    <label for="mother">{{translate('Mother')}}</label>
                    @php $user_father = !empty($member->families->mother) ? $member->families->mother : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="mother" placeholder="{{translate('mother')}}" required>
                        <option value="Employed" @if($user_father ==  'Employed') selected @endif >{{translate('Employed')}}</option>
                        <option value="Bussiness-Man" @if($user_father ==  'Bussiness-Man') selected @endif >{{translate('Bussiness-Man')}}</option>
                        <option value="Retired" @if($user_father ==  'Retired') selected @endif >{{translate('Retired')}}</option>
                        <option value="Home-Maker" @if($user_father ==  'Home-Maker') selected @endif >{{translate('Home-Maker')}}</option>
                        <option value="Passed-Away" @if($user_father ==  'Passed-Away') selected @endif >{{translate('Passed-Away')}}</option>
                        @error('mother')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>








                    {{-- <input type="text" name="mother" value="{{ !empty($member->families->mother) ? $member->families->mother : "" }}" placeholder="{{ translate('Mother') }}" class="form-control" required>
                    @error('mother')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror --}}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="sibling">{{translate('Sibling')}}</label>
                    <input type="text" name="sibling" value="{{ !empty($member->families->sibling) ? $member->families->sibling : "" }}" class="form-control" placeholder="{{translate('Sibling')}}" required>
                    @error('sibling')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="living_with">{{translate('Living With Parents')}}</label>
                    @php $user_living_with = !empty($member->families->living_with) ? $member->families->living_with : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="living_with" placeholder="{{ translate('Living With') }}" required>
                        <option value="Yes" @if($user_living_with ==  'Yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="No" @if($user_living_with ==  'No') selected @endif >{{translate('No')}}</option>
                        @error('living_with')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>




                    {{-- <input type="text" name="living_with" value="{{ !empty($member->lifestyles->living_with) ? $member->lifestyles->living_with : "" }}" placeholder="{{ translate('Living With') }}" class="form-control" required>
                    @error('living_with')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror --}}
                </div>
               
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
            </div>
        </form>
    </div>
</div>
