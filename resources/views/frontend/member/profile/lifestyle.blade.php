<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Lifestyle')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('lifestyles.update', $member->id) }}" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="diet">{{translate('Diet')}}</label>
                    @php $user_diet = !empty($member->lifestyles->diet) ? $member->lifestyles->diet : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="diet" required>
                        <option value="Veg" @if($user_diet ==  'Veg') selected @endif >{{translate('Veg')}}</option>
                        <option value="Non-Veg" @if($user_diet ==  'Non-Veg') selected @endif >{{translate('Non-Veg')}}</option>
                        <option value="Eggetarian" @if($user_diet ==  'Eggetarian') selected @endif >{{translate('Eggetarian')}}</option>
                        {{-- jain --}}
                        <option value="Jain" @if($user_diet ==  'Jain') selected @endif >{{translate('Jain')}}</option>
                        {{-- vegan --}}
                        <option value="Vegan" @if($user_diet ==  'Vegan') selected @endif >{{translate('Vegan')}}</option>
                        {{-- ocassionally non-veg --}}
                        <option value="Ocassionally Non-Veg" @if($user_diet ==  'Ocassionally Non-Veg') selected @endif >{{translate('Ocassionally Non-Veg')}}</option>
                        @error('diet')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="drink">{{translate('Drink')}}</label>
                    @php $user_drink = !empty($member->lifestyles->drink) ? $member->lifestyles->drink : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="drink" required>
                        <option value="Yes" @if($user_drink ==  'Yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="No" @if($user_drink ==  'No') selected @endif >{{translate('No')}}</option>
                        <option value="Ocassionally" @if($user_drink ==  'Ocassionally') selected @endif >{{translate('Ocassionally')}}</option>
                        @error('drink')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="smoke">{{translate('Smoke')}}</label>
                    @php $user_smoke = !empty($member->lifestyles->smoke) ? $member->lifestyles->smoke : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="smoke" required>
                        <option value="Yes" @if($user_smoke ==  'Yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="No" @if($user_smoke ==  'No') selected @endif >{{translate('No')}}</option>
                        <option value="Ocassionally" @if($user_smoke ==  'Ocassionally') selected @endif >{{translate('Ocassionally')}}</option>
                        @error('smoke')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
            
                
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
            </div>
        </form>
    </div>
</div>
